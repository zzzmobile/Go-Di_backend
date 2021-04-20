<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use DB;
use App;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $authServiceKey = 'K2bg98ka561gkqaotlb6';
    protected $perPage = 20;

    public function __construct(Request $request){
        if($request->has('language')){
            App::setLocale($request->language);
        }
    }
    protected function tz_list(){
        $zones_array = array();
        $timestamp = time();
        foreach(timezone_identifiers_list() as $key => $zone) {
            date_default_timezone_set($zone);
            $zones_array[$key]['zone'] = $zone;
            $zones_array[$key]['offset'] = (int) ((int) date('O', $timestamp))/100;
            $zones_array[$key]['diff_from_GMT'] = 'UTC/GMT ' . date('P', $timestamp);
        }
        return collect($zones_array)->unique('diff_from_GMT')->sortBy('diff_from_GMT');
    }

    //Generate random string
	protected function generateRandomString($length = 20, $numeric = 0){
		$characters = $numeric == 1?'0123456789':'0123456789abcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	protected function sendNotification(Array $fields) {
        //App API Key(This is google cloud messaging api key not web api key)
        $fcmApiKey = '';

        //Google URL
        $url = 'https://fcm.googleapis.com/fcm/send';
 
        $headers = array(
            'Authorization: key=' . $fcmApiKey,
            'Content-Type: application/json'
        );
 
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, $url );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            // return curl_error($ch);

            $result = curl_exec($ch);
            if ($result === FALSE) {
                return false;
            }
        }
        // Close connection
        curl_close($ch);
 
        return $result;
    }

    protected function uploadFile($targetDir, $request, $fileName){
		$file = $request->file($fileName);
		$ext = $file->getClientOriginalExtension();
		$newFileName = date('YmdHis') . strtotime("now") . $this->generateRandomString() . '.' . $ext;
		
		$path = $request->file($fileName)->storeAs(
			'public'.$targetDir, $newFileName
		);

		if ($path) {
			return ['errorMsg' => trans('file_uploaded'), 'errorCode' => 0, 'fileName' => $newFileName];
		} else {
			return ['errorMsg' => trans('file_uploading_error'), 'errorCode' => 1];
		}
	}

    protected function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2) {
        // Calculate the distance in degrees
        $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
     
        // Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
        switch($unit) {
            case 'km':
                $distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)
                break;
            case 'mi':
                $distance = $degrees * 69.05482; // 1 degree = 69.05482 miles, based on the average diameter of the Earth (7,913.1 miles)
                break;
            case 'nmi':
                $distance =  $degrees * 59.97662; // 1 degree = 59.97662 nautic miles, based on the average diameter of the Earth (6,876.3 nautical miles)
        }
        return round($distance, $decimals);
    }

 

protected function get_meters_between_points($latitude1, $longitude1, $latitude2, $longitude2) {
    if (($latitude1 == $latitude2) && ($longitude1 == $longitude2)) { return 0; } // distance is zero because they're the same point
    $p1 = deg2rad($latitude1);
    $p2 = deg2rad($latitude2);
    $dp = deg2rad($latitude2 - $latitude1);
    $dl = deg2rad($longitude2 - $longitude1);
    $a = (sin($dp/2) * sin($dp/2)) + (cos($p1) * cos($p2) * sin($dl/2) * sin($dl/2));
    $c = 2 * atan2(sqrt($a),sqrt(1-$a));
    $r = 6371008; // Earth's average radius, in meters
    $d = $r * $c;

    $kilometers = $d / 1000;
    $miles = $d / 1609.34;
    $yards = $d * 1760;
    $feet = $d * 5280;
   //return compact('miles','feet','yards','kilometers','meters');
    return $kilometers; // distance, in meters
}

    protected function uploadFilesWeb($targetDir, $request, $fileName, $index){
        $file = $request->file($fileName)[$index];
        $ext = $file->getClientOriginalExtension();
        $newFileName = date('YmdHis') . strtotime("now") . $this->generateRandomString() . '.' . $ext;
        
        $path = $file->storeAs(
            'public'.$targetDir, $newFileName
        );

        if ($path) {
            return ['errorMsg' => trans('file_uploaded'), 'errorCode' => 0, 'fileName' => $newFileName];
        } else {
            return ['errorMsg' => trans('file_uploading_error'), 'errorCode' => 1];
        }
    }


    public function front_category()
    { 
       
        //$category = Category::get();
        $category = DB::table('categories')->get();
        if(count($category) != '0'){
            foreach ($category as  $this_Category) {
               $this_Category->subcategory = DB::table('sub_categories')->where('category_id',$this_Category->id)->get();
            }

        }
        return($category);die;
       
    }

      public function getsubcat(Request $request)
    { 
       
        $subcategory = DB::table('sub_categories')->where('category_id',$request->cat_id)->get();
        return($subcategory);die;
       
    }

}
