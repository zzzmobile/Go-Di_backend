<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Exceptions\ApiException;
use App\User;
use Validator;
use DB;

class card extends Controller
{




	 public function user_share_card(Request $request)
    {  
    	$validator = Validator::make($request->all(),[   	
    		'userId'			=> 'required',	    		
	
		]);

		if ($validator->fails()) {
			return response()->json([
					'errorCode' => '1',
					'errorMsg' => $validator->errors()->first(),
					'data'	 => array_map(function($v){
										return (is_null($v)) ? "" : (is_array($v)) ? $v : (String)$v;
									},[
										'id' => ''
									])	
				]);
	    }

	    $current_date=date('Y-m-d');
	    $user_id=$request->userId;

	    DB::table('user_share_card')->insert(['user_id'=>$user_id,'date'=>$current_date]);

	    $user_share_card = DB::table('user_share_card')->where('user_id', $user_id)->where('date', $current_date)->count();


	    return response()->json([
					'errorCode' => '0',
					'errorMsg'  => 'share count',
					'data'		=>	[],
					'share_count'=>(string)$user_share_card
				]);	
	    print_r($user_share_card);die;
	   



}









	 public function user_purchase_app(Request $request)
    {  
    	$validator = Validator::make($request->all(),[   	
    		'transaction_id'			=> 'required',    		    		
    		'userId'			=> 'required',	    		
	
		]);

		if ($validator->fails()) {
			return response()->json([
					'errorCode' => '1',
					'errorMsg' => $validator->errors()->first(),
					'data'	 => array_map(function($v){
										return (is_null($v)) ? "" : (is_array($v)) ? $v : (String)$v;
									},[
										'id' => ''
									])	
				]);
	    }

	    $transaction_id=$request->transaction_id;
	    $user_id=$request->userId;

	    $users_check = DB::table('users')->where('paid_unpaid_transaction_id', $transaction_id)->first();
	   
	    //print_r($users_check);die;
	    if($users_check == ''){
	    	$date=$request->date;
	    	 $array=array(
	    		'paid_unpaid_transaction_id'=>$transaction_id,
	    		'paid_unpaid'=>'1',
	    		'paid_unpaid_date'=>$date
	    				);
	    	DB::table('users')->where('id',$user_id)->update($array);


$users_dt = DB::table('users')->where('id',$user_id)->first();

//print_r($users_dt);die;

// $to = $users_dt->email;
// $subject = "Startup Space!";
// $emailmessage = $users_dt->userName;
// $passmessage = "";
// $title  = "Startup Space";
// $message ="";
// $blade='mail.subscriber'; 
 
//   $mail=$this->mail_send($to,$subject,$title,$message,$blade,$emailmessage,$passmessage);








	    	return response()->json([
					'errorCode' => '0',
					'errorMsg'  => 'purchase succesffully',
					'data'		=>	[[
						'transaction_id'=>$transaction_id,
						'paid_unpaid'=>'1',
						'transaction_date'=>$date,
						'userId'=>$user_id,
						'left_days'=>'30'
					]]
				]);	

	    }else{

	    	return response()->json([
					'errorCode' => '1',
					'errorMsg'  => 'you already purchase from this account',
					'data'		=>	[]
				]);	
	    }



	} 


	 public function check_purchase_app_date(Request $request)
    { 
    	$validator = Validator::make($request->all(),[   	
    		'userId'			=> 'required',	    		
	
		]);

		if ($validator->fails()) {
			return response()->json([
					'errorCode' => '1',
					'errorMsg' => $validator->errors()->first(),
					'data'	 => array_map(function($v){
										return (is_null($v)) ? "" : (is_array($v)) ? $v : (String)$v;
									},[
										'id' => ''
									])	
				]);
	    }

	    $user_id=$request->userId;

	    $pro='0';
		$vip='0';
		$premiun='0';
		$current_date=date('Y-m-d');

		$user_share_card = DB::table('user_share_card')->where('user_id', $user_id)->where('date', $current_date)->count();

		$share_card_three_date='';
	    $user_invite_offer=DB::table('user_invite_offer')->where('user_id', $user_id)->first();
	    if($user_invite_offer != ''){
	    	$pro=$user_invite_offer->pro;
			$vip=$user_invite_offer->vip;
			$premiun=$user_invite_offer->premiun;
			$premiun_date=$user_invite_offer->premiun_date;
			$newdates = strtotime ( '90 day' , strtotime ( $premiun_date ) ) ;
			$share_card_three_date = date ( 'Y-m-d H:i:s' , $newdates );
			if(strtotime($share_card_three_date) < strtotime($current_date)){
				DB::table('user_invite_offer')->where('user_id', $user_id)
				->update(['premiun'=>'0']);
			}
		$user_invite_offer_final=DB::table('user_invite_offer')->where('user_id', $user_id)->first();
		$premiun=$user_invite_offer_final->premiun;
	    }

	    if($request->has('transaction_id')){
	    	$transaction_id=$request->transaction_id;
	    	$date=$request->date;
	    	$users_check_tan = DB::table('users')->where('id', '!=',$user_id)->where('paid_unpaid_transaction_id', $transaction_id)->first();
	    	if($users_check_tan == ''){
	    		$array=array(
	    		'paid_unpaid_transaction_id'=>$transaction_id,
	    		'paid_unpaid'=>'1',
	    		'paid_unpaid_date'=>$date
	    				);
	    			DB::table('users')->where('id',$user_id)->update($array);

	    	}else{
	    		$paid_unpad='0';
	    		if($premiun == '1'){
	    			$paid_unpad='1';
	    		}
	    		$array1=array(
	    		'expire_date'=>'',
	    		'paid_unpaid'=>$paid_unpad,
	    		'share_card_date'=>$share_card_three_date,
	    		'left_days'=>'',
	    		'isLocation'=>'',
	    		'pro'=>$pro,
	    		'vip'=>$vip,
	    		'share_count'=>(string)$user_share_card,
	    				);
	    		return response()->json([
					'errorCode' => '1',
					'errorMsg'  => 'you already purchase from this account.',
					'data'		=>	[$array1]
				]);	
	    	}
	    	//print_r($users_check_tan);die;

	    }

	    




	    $users_check = DB::table('users')->where('id', $user_id)->first();
	   

	   // $address=$users_check->address;
	   // $check_address='0';
	   // if($address != ''){
	   // 	$check_address='1';
	   // }
	    //print_r($users_check);die;
	    if($users_check->paid_unpaid == '1'){
	    	$user_date=$users_check->paid_unpaid_date;
	    	$newdate = strtotime ( '30 day' , strtotime ( $user_date ) ) ;
			$expire_date = date ( 'Y-m-d H:i:s' , $newdate );
			$cur=date('Y-m-d H:i:s');

			if(strtotime($expire_date) >= strtotime($cur)){
			$left_dats=round(abs(strtotime($expire_date)-strtotime($cur))/86400);
			$paid='1';
			}else{
				 $array=array(
	    		'paid_unpaid'=>'0'
	    				);
	    		DB::table('users')->where('id',$user_id)->update($array);
				$left_dats='-'.round(abs(strtotime($expire_date)-strtotime($cur))/86400);
			$paid='0';
			}
			
//print_r($a);die;


	    		if($premiun == '1'){
	    			$paid_unpad='1';
	    		}elseif($paid == '1'){
	    			$paid_unpad='1';
	    		}else{
	    			$paid_unpad='0';
	    		}

	    	 $array=array(
	    		'expire_date'=>$expire_date,
	    		'share_card_date'=>$share_card_three_date,
	    		'paid_unpaid'=>$paid_unpad,
	    		'left_days'=>(string)$left_dats,
	    		//'isLocation'=>$check_address,
	    		'pro'=>$pro,
	    		'vip'=>$vip,
	    		'share_count'=>(string)$user_share_card,
	    				);
	    	
	    	return response()->json([
					'errorCode' => '0',
					'errorMsg'  => 'purchase succesffully',
					'data'		=>	[$array]
				]);	

	    }elseif($users_check->paid_unpaid == '0'){


	    	$paid_unpad='0';
	    		if($premiun == '1'){
	    			$paid_unpad='1';
	    	}

	    	$array=array(
	    		'expire_date'=>'',
	    		'share_card_date'=>$share_card_three_date,
	    		'paid_unpaid'=>$paid_unpad,
	    		'left_days'=>'',
	    		//'isLocation'=>$check_address,
	    		'pro'=>$pro,
	    		'vip'=>$vip,
	    		'share_count'=>(string)$user_share_card,
	    				);
	    	return response()->json([
					'errorCode' => '0',
					'errorMsg'  => 'purchase succesffully',
					'data'		=>	[$array]
				]);	
	    }else{

	    	return response()->json([
					'errorCode' => '1',
					'errorMsg'  => 'you already purchase from this account',
					'data'		=>	[]
				]);	
	    }



	}





	

    public function cardFavUnfav(Request $request)
    {    

    	 
		 $validator = Validator::make($request->all(), [
                'user_id' => 'required',  
                'card_id' => 'required',  
                'is_fav' => 'required',  
            ]);


          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
          $user_id=$request->user_id;
          $card_id=$request->card_id;
          $is_fav=$request->is_fav;


          $users_fav = DB::table('users_fav')->where('user_id',$user_id)->where('card_id',$card_id)->first();
          if($is_fav == '1'){
          		if($users_fav == ''){
          			$insert_fav=array(
          						'user_id' =>$user_id,
          						'card_id' =>$card_id,
          						);
          			$users_fav = DB::table('users_fav')->insert($insert_fav);
          		}
       
 			}else{
 			$users_fav = DB::table('users_fav')->where('user_id',$user_id)->where('card_id',$card_id)->delete();
 			}
         // print_r($business);die;

           return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Card fav unfav succesfully',
				'data' => []
				]);	


    }




 public function myFavCard(Request $request)
    {    

    	 $validator = Validator::make($request->all(), [
                'user_id' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
        $user_id=$request->user_id;

    	$categories = DB::table('template_categories')->get();
		$category_detail=[];
		$business=[];  
		if(count($categories) != '0'){
			foreach ($categories as $value) {
				$category=array(
					'id'=>(string)$value->tempcat_id,
					'name'=>(string)$value->tempcat_name,
					'price'=>(string)$value->price,

				);
				$temp = DB::table('template')->where('cat_id',$value->tempcat_id)->get();
				
				if(count($temp) != '0'){
					//$businescard=[];
					$back_card=[];
					foreach ($temp as $value_temp) {
						$businescard=[];
						$card= json_decode($value_temp->canvas_json)->front;
						foreach ($card as  $value) {
							$businescard[]=$value;
							$value->font_size='';
							if($value->type == 'text'){
							$value->font_size=$value->height;

							}
							
						}

						if(isset(json_decode($value_temp->canvas_json)->back)){

						
						$card1= json_decode($value_temp->canvas_json)->back;
						foreach ($card1 as  $value) {

							$back_card[]=$value;
							$value->font_size='';
							if($value->type == 'text'){
							$value->font_size=$value->height;

							}
							
						}
						}


						$card_json=array(
							'front_card_json'=>$businescard,
							'back_card_json'=>$back_card,
							'front_card_back_color'=>$value_temp->back_background_color,
							'front_card_front_color'=>$value_temp->background_color,
						);
						$users_fav = DB::table('users_fav')->where('user_id',$user_id)->where('card_id',$value_temp->template_id)->first();
						$image='';
						if($value_temp->image != ''){
							$image=env('card_url').'tshirtecommerce/'.$value_temp->image;
						}
						$back_image='';
						if($value_temp->back_image != ''){
							$back_image=env('card_url').'tshirtecommerce/'.$value_temp->back_image;
						}

						$users_fav_check = DB::table('users_fav')->where('user_id',$user_id)->where('card_id',$value_temp->template_id)->first();
						$user_fav='0';
						if($users_fav_check != ''){
							$user_fav='1';
						}
						if($users_fav != ''){


						$business[]=array(
							'id'=>(string)$value_temp->template_id,
							'name'=>$value_temp->template_name,
							'background_color'=>$value_temp->background_color,
							'front_image'=>$image,
							'user_fav'=>$user_fav,
							'back_image'=> $back_image,
							'card_json'=> $card_json, 
							);
						}
						
					}
				}
				$category['business_card']=$business;

				$category_detail[]=$category;

			//print_r($category_detail);die;
			}
		}

		 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Fav card..',
				'data' => $business
				]);	


print_r($categories);die;

    }

    public function myFavCard_copy(Request $request)
    {    

    	 $validator = Validator::make($request->all(), [
                'user_id' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
        $user_id=$request->user_id;

    	$categories = DB::table('template_categories')->get();
		$category_detail=[];
		if(count($categories) != '0'){
			foreach ($categories as $value) {
				$category=array(
					'id'=>(string)$value->tempcat_id,
					'name'=>(string)$value->tempcat_name,
					'price'=>(string)$value->price,

				);
				$temp = DB::table('template')->where('cat_id',$value->tempcat_id)->get();
				$business=[]; 
				if(count($temp) != '0'){
					$businescard=[];
					$back_card=[];
					foreach ($temp as $value_temp) {
						$businescard=[];
						$card= json_decode($value_temp->canvas_json)->front;
						foreach ($card as  $value) {
							$businescard[]=$value;
							$value->font_size='';
							if($value->type == 'text'){
							$value->font_size=$value->height;

							}
							
						}

						if(isset(json_decode($value_temp->canvas_json)->back)){

						
						$card1= json_decode($value_temp->canvas_json)->back;
						foreach ($card1 as  $value) {

							$back_card[]=$value;
							$value->font_size='';
							if($value->type == 'text'){
							$value->font_size=$value->height;

							}
							
						}
						}


						$card_json=array(
							'front_card_json'=>$businescard,
							'back_card_json'=>$back_card,
							'front_card_back_color'=>$value_temp->back_background_color,
							'front_card_front_color'=>$value_temp->background_color,
						);
						$users_fav = DB::table('users_fav')->where('user_id',$user_id)->where('card_id',$value_temp->template_id)->first();
						$image='';
						if($value_temp->image != ''){
							$image=env('card_url').'tshirtecommerce/'.$value_temp->image;
						}
						if($users_fav != ''){


						$business[]=array(
							'id'=>(string)$value_temp->template_id,
							'name'=>$value_temp->template_name,
							'background_color'=>$value_temp->background_color,
							'front_image'=>$image,
							'back_image'=> '',
							'business_card_json'=> $card_json, 
							);
						}
						
					}
				}
				$category['business_card']=$business;

				$category_detail[]=$category;

			//print_r($category_detail);die;
			}
		}

		 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Fav card..',
				'data' => $category_detail
				]);	


print_r($categories);die;

    }








 public function mime2ext($mime){
    $all_mimes = '{"png":["image\/png","image\/x-png"],"bmp":["image\/bmp","image\/x-bmp",
    "image\/x-bitmap","image\/x-xbitmap","image\/x-win-bitmap","image\/x-windows-bmp",
    "image\/ms-bmp","image\/x-ms-bmp","application\/bmp","application\/x-bmp",
    "application\/x-win-bitmap"],"gif":["image\/gif"],"jpeg":["image\/jpeg",
    "image\/pjpeg"],"xspf":["application\/xspf+xml"],"vlc":["application\/videolan"],
    "wmv":["video\/x-ms-wmv","video\/x-ms-asf"],"au":["audio\/x-au"],
    "ac3":["audio\/ac3"],"flac":["audio\/x-flac"],"ogg":["audio\/ogg",
    "video\/ogg","application\/ogg"],"kmz":["application\/vnd.google-earth.kmz"],
    "kml":["application\/vnd.google-earth.kml+xml"],"rtx":["text\/richtext"],
    "rtf":["text\/rtf"],"jar":["application\/java-archive","application\/x-java-application",
    "application\/x-jar"],"zip":["application\/x-zip","application\/zip",
    "application\/x-zip-compressed","application\/s-compressed","multipart\/x-zip"],
    "7zip":["application\/x-compressed"],"xml":["application\/xml","text\/xml"],
    "svg":["image\/svg+xml"],"3g2":["video\/3gpp2"],"3gp":["video\/3gp","video\/3gpp"],
    "mp4":["video\/mp4"],"m4a":["audio\/x-m4a"],"f4v":["video\/x-f4v"],"flv":["video\/x-flv"],
    "webm":["video\/webm"],"aac":["audio\/x-acc"],"m4u":["application\/vnd.mpegurl"],
    "pdf":["application\/pdf","application\/octet-stream"],
    "pptx":["application\/vnd.openxmlformats-officedocument.presentationml.presentation"],
    "ppt":["application\/powerpoint","application\/vnd.ms-powerpoint","application\/vnd.ms-office",
    "application\/msword"],"docx":["application\/vnd.openxmlformats-officedocument.wordprocessingml.document"],
    "xlsx":["application\/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application\/vnd.ms-excel"],
    "xl":["application\/excel"],"xls":["application\/msexcel","application\/x-msexcel","application\/x-ms-excel",
    "application\/x-excel","application\/x-dos_ms_excel","application\/xls","application\/x-xls"],
    "xsl":["text\/xsl"],"mpeg":["video\/mpeg"],"mov":["video\/quicktime"],"avi":["video\/x-msvideo",
    "video\/msvideo","video\/avi","application\/x-troff-msvideo"],"movie":["video\/x-sgi-movie"],
    "log":["text\/x-log"],"txt":["text\/plain"],"css":["text\/css"],"html":["text\/html"],
    "wav":["audio\/x-wav","audio\/wave","audio\/wav"],"xhtml":["application\/xhtml+xml"],
    "tar":["application\/x-tar"],"tgz":["application\/x-gzip-compressed"],"psd":["application\/x-photoshop",
    "image\/vnd.adobe.photoshop"],"exe":["application\/x-msdownload"],"js":["application\/x-javascript"],
    "mp3":["audio\/mpeg","audio\/mpg","audio\/mpeg3","audio\/mp3"],"rar":["application\/x-rar","application\/rar",
    "application\/x-rar-compressed"],"gzip":["application\/x-gzip"],"hqx":["application\/mac-binhex40",
    "application\/mac-binhex","application\/x-binhex40","application\/x-mac-binhex40"],
    "cpt":["application\/mac-compactpro"],"bin":["application\/macbinary","application\/mac-binary",
    "application\/x-binary","application\/x-macbinary"],"oda":["application\/oda"],
    "ai":["application\/postscript"],"smil":["application\/smil"],"mif":["application\/vnd.mif"],
    "wbxml":["application\/wbxml"],"wmlc":["application\/wmlc"],"dcr":["application\/x-director"],
    "dvi":["application\/x-dvi"],"gtar":["application\/x-gtar"],"php":["application\/x-httpd-php",
    "application\/php","application\/x-php","text\/php","text\/x-php","application\/x-httpd-php-source"],
    "swf":["application\/x-shockwave-flash"],"sit":["application\/x-stuffit"],"z":["application\/x-compress"],
    "mid":["audio\/midi"],"aif":["audio\/x-aiff","audio\/aiff"],"ram":["audio\/x-pn-realaudio"],
    "rpm":["audio\/x-pn-realaudio-plugin"],"ra":["audio\/x-realaudio"],"rv":["video\/vnd.rn-realvideo"],
    "jp2":["image\/jp2","video\/mj2","image\/jpx","image\/jpm"],"tiff":["image\/tiff"],
    "eml":["message\/rfc822"],"pem":["application\/x-x509-user-cert","application\/x-pem-file"],
    "p10":["application\/x-pkcs10","application\/pkcs10"],"p12":["application\/x-pkcs12"],
    "p7a":["application\/x-pkcs7-signature"],"p7c":["application\/pkcs7-mime","application\/x-pkcs7-mime"],"p7r":["application\/x-pkcs7-certreqresp"],"p7s":["application\/pkcs7-signature"],"crt":["application\/x-x509-ca-cert","application\/pkix-cert"],"crl":["application\/pkix-crl","application\/pkcs-crl"],"pgp":["application\/pgp"],"gpg":["application\/gpg-keys"],"rsa":["application\/x-pkcs7"],"ics":["text\/calendar"],"zsh":["text\/x-scriptzsh"],"cdr":["application\/cdr","application\/coreldraw","application\/x-cdr","application\/x-coreldraw","image\/cdr","image\/x-cdr","zz-application\/zz-winassoc-cdr"],"wma":["audio\/x-ms-wma"],"vcf":["text\/x-vcard"],"srt":["text\/srt"],"vtt":["text\/vtt"],"ico":["image\/x-icon","image\/x-ico","image\/vnd.microsoft.icon"],"csv":["text\/x-comma-separated-values","text\/comma-separated-values","application\/vnd.msexcel"],"json":["application\/json","text\/json"]}';
    $all_mimes = json_decode($all_mimes,true);
    foreach ($all_mimes as $key => $value) {
        if(array_search($mime,$value) !== false) return $key;
    }
    return false;
}




 public function upload_file($encoded_string){
    $target_dir = 'card_image/'; // add the specific path to save the file
    $decoded_file = base64_decode($encoded_string); // decode the file
    $mime_type = finfo_buffer(finfo_open(), $decoded_file, FILEINFO_MIME_TYPE); // extract mime type
    $extension = $this->mime2ext($mime_type); // extract extension from mime type
    $file = uniqid() .'.'. $extension; // rename file as a unique name
    $file_dir = $target_dir . uniqid() .'.'. $extension;
    try {
       $as= file_put_contents($file_dir, $decoded_file); // save

return $file_dir;
        //database_saving($file);
      
    } catch (Exception $e) {
       
    }

}

public function string_to_multipart($image_data){

$final_string=$this->upload_file($image_data);
$file_name=$final_string;
$url_path=env('APP_URL').'public/'.$file_name;
$array = array('file_name' =>$file_name ,'url_path' =>$url_path);

return json_encode($array);
}


 public function saveCard(Request $request)
    {     

//print_r($request->all());die;

    	 // $validator = Validator::make($request->all(), [
      //           'user_id' => 'required',
      //           'category_id' => 'required',
      //           'front_image' => 'required',
      //           'back_image' => 'required',
      //           'card_json' => 'required'
      //       ]);

      //     if ($validator->fails()) {

      //      $data=array();

      //       return response()->json([
      //           'errorCode' => "1",
      //           'errorMsg' =>  $validator->errors()->first(),
      //           'data' => $data
      //       ]);

      //     }
        $user_id=$request->user_id;
        $category_id=$request->category_id;
        $card_json=$request->card_json;
        $template_id=$request->admin_card_id;
        $design_name=$request->design_name;
        $front_image='';
        $back_image='';


        $users_puchase_check = DB::table('users')->where('id',$user_id)->first();
        if($users_puchase_check->paid_unpaid == '0'){

        	$template_check = DB::table('template')->where('template_id',$template_id)->first();
        	$card_type=$template_check->card_type;
        	if($card_type == '1'){
        		$users_card_puchase_check = DB::table('users_card')->where('user_id',$user_id)->where('template_id',$template_id)->first();
        		if($users_card_puchase_check != ''){

        			return response()->json([
						'errorCode' => '1',
						'errorMsg' => 'You can save one FREE card at a time else get a premium account.',
						'data' => []
					]);
        		}
        	}elseif($card_type == '2'){

        		$user_invite_offer=DB::table('user_invite_offer')->where('user_id', $user_id)->first();

        		$user_purchase_check = DB::table('user_purchase')->where('card_id',$template_id)->where('user_id', $user_id)->first();
        			if($user_purchase_check == ''){

        				$user_invite_offer=DB::table('user_invite_offer')->where('user_id', $user_id)->first();

		        		


		        		if($user_invite_offer != ''){
        			$pro=$user_invite_offer->pro;

        			if($pro == '0'){
		        			return response()->json([
							'errorCode' => '1',
							'errorMsg' => 'Make Premiun user first ',
							'data' => []
							]);
		        		}else{

		        			$pro_update=$pro-1;
		        			DB::table('user_invite_offer')->where('user_id', $user_id)->update(['pro'=> $pro_update]);
		        			DB::table('user_purchase')->insert(['user_id'=> $user_id,'card_id'=> $template_id]);


		        		}



        		}else{
        			return response()->json([
							'errorCode' => '1',
							'errorMsg' => 'Make Premiun user first ',
							'data' => []
							]);
        		}



        			}

        		


        	}elseif($card_type == '3'){
        		$user_purchase_check = DB::table('user_purchase')->where('card_id',$template_id)->where('user_id', $user_id)->first();
        			if($user_purchase_check == ''){

        				$user_invite_offer=DB::table('user_invite_offer')->where('user_id', $user_id)->first();

		        		if($user_invite_offer != ''){
		        			$vip=$user_invite_offer->vip;

		        			if($vip == '0'){
				        			return response()->json([
									'errorCode' => '1',
									'errorMsg' => 'Firtly you need to purchase this card',
									'data' => []
									]);
				        		}else{

				        			$vip_update=$vip-1;
		        			DB::table('user_invite_offer')->where('user_id', $user_id)->update(['vip'=> $vip_update]);
		        			DB::table('user_purchase')->insert(['user_id'=> $user_id,'card_id'=> $template_id]);

				        		}
		        		}

        			}

        	}		

        }




        if($users_puchase_check->paid_unpaid == '1'){
        	$template_check = DB::table('template')->where('template_id',$template_id)->first();
        	$card_type=$template_check->card_type;
        	if($card_type == '3'){
        		$user_purchase_check = DB::table('user_purchase')->where('card_id',$template_id)->where('user_id', $user_id)->first();
        			if($user_purchase_check == ''){

        				$user_invite_offer=DB::table('user_invite_offer')->where('user_id', $user_id)->first();

		        		if($user_invite_offer != ''){
		        			$vip=$user_invite_offer->vip;

		        			if($vip == '0'){
				        			return response()->json([
									'errorCode' => '1',
									'errorMsg' => 'Firtly you need to purchase this card',
									'data' => []
									]);
				        		}else{

				        			$vip_update=$vip-1;
		        			DB::table('user_invite_offer')->where('user_id', $user_id)->update(['vip'=> $vip_update]);
		        			DB::table('user_purchase')->insert(['user_id'=> $user_id,'card_id'=> $template_id]);

				        		}
		        		}

        			}

        	}	


        }




        if($request->has('front_image'))
			{

//print_r($request->front_image);die;
				$string_to_multipart = json_decode($this->string_to_multipart($request->front_image));

			

				
				$front_image = $string_to_multipart->file_name;
			}
			//print_r($string_to_multipart->file_name);die;
			 if($request->has('back_image'))
			{

				$string_to_multipart = json_decode($this->string_to_multipart($request->back_image));
				
				$back_image = $string_to_multipart->file_name;
			}

$final_json=[];
$final_json['front_card_json']=[];
$final_json['back_card_json']=[];
			if($request->has('card_json'))
			{
			//print_r($request->card_json);die;

			if($request->has('deviceType') == 'android'){

foreach(json_decode($request->card_json) as  $key=> $this_json) {

					if($key == 'front_card_json'){
						foreach ($this_json as $front_card_json) {

							if($front_card_json->type == 'clipart'){


								if(substr($front_card_json->thumb,0,4) != 'http'){
								$string_to_multipart = json_decode($this->string_to_multipart($front_card_json->thumb));
							//	print_r($front_card_json);die;
								$front_card_json->thumb = $string_to_multipart->url_path;
								}else{
								$front_card_json->thumb =$front_card_json->thumb;
								}


								if($front_card_json->videoUrl != ''){
									if(substr($front_card_json->videoUrl,0,4) == 'http'){
										$front_card_json->videoUrl=$front_card_json->videoUrl;
									}else{
										$string_to_multipart1 = json_decode($this->string_to_multipart($front_card_json->videoUrl));
										$front_card_json->videoUrl = $string_to_multipart1->url_path;
									}
								}else{
									$front_card_json->videoUrl='';
								}
								

								$front_card_json->file_name=$string_to_multipart->file_name;
								$front_card_json->title=$string_to_multipart->file_name;
							}

							$final_json['front_card_json'][]=$front_card_json;

							}

					}
					

					if($key == 'back_card_json'){
						foreach ($this_json as $back_card_json) {



							if($back_card_json->type == 'clipart'){


								if(substr($back_card_json->thumb,0,4) != 'http'){
								$string_to_multipart = json_decode($this->string_to_multipart($back_card_json->thumb));
								
								$back_card_json->thumb = $string_to_multipart->url_path;
								}else{
								$back_card_json->thumb =$back_card_json->thumb;
								}


								if($back_card_json->videoUrl != ''){
									if(substr($back_card_json->videoUrl,0,4) == 'http'){
										$back_card_json->videoUrl=$back_card_json->videoUrl;
									}else{
										$string_to_multipart1 = json_decode($this->string_to_multipart($back_card_json->videoUrl));
										$back_card_json->videoUrl = $string_to_multipart1->url_path;
									}
								}else{
									$back_card_json->videoUrl='';
								}
								

								$back_card_json->file_name=$string_to_multipart->file_name;
								$back_card_json->title=$string_to_multipart->file_name;
							}


							// if($back_card_json['type'] == 'clipart'){
							// 	$string_to_multipart = json_decode($this->string_to_multipart($back_card_json['thumb']));
							// 	$back_card_json['thumb'] = $string_to_multipart->url_path;
							// 	$back_card_json['file_name']=$string_to_multipart->file_name;
							// 	$back_card_json['title']=$string_to_multipart->file_name;
							// }
							$final_json['back_card_json'][]=$back_card_json;
						}
					}

					if($key == 'front_card_front_color'){
						$final_json['front_card_front_color']=$this_json;
					}

					if($key == 'front_card_back_color'){
						$final_json['front_card_back_color']=$this_json;
					}





//print_r(12345);die;
					
						//$my_card['front_card_json']

					}

			}else{

				foreach($request->card_json as  $key=> $this_json) {

					if($key == 'front_card_json'){
						foreach ($this_json as $front_card_json) {
							if($front_card_json['type'] == 'clipart'){


								if(substr($front_card_json['thumb'],0,4) != 'http'){
								$string_to_multipart = json_decode($this->string_to_multipart($front_card_json['thumb']));
								
								$front_card_json['thumb'] = $string_to_multipart->url_path;
								}else{
								$front_card_json['thumb'] =$front_card_json['thumb'];
								}


								if($front_card_json['videoUrl'] != ''){
									if(substr($front_card_json['videoUrl'],0,4) == 'http'){
										$front_card_json['videoUrl']=$front_card_json['videoUrl'];
									}else{
										$string_to_multipart1 = json_decode($this->string_to_multipart($front_card_json['videoUrl']));
										$front_card_json['videoUrl'] = $string_to_multipart1->url_path;
									}
								}else{
									$front_card_json['videoUrl']='';
								}
								

								$front_card_json['file_name']=$string_to_multipart->file_name;
								$front_card_json['title']=$string_to_multipart->file_name;
							}

							$final_json['front_card_json'][]=$front_card_json;

							}

					}
					

					if($key == 'back_card_json'){
						foreach ($this_json as $back_card_json) {



							if($back_card_json['type'] == 'clipart'){


								if(substr($back_card_json['thumb'],0,4) != 'http'){
								$string_to_multipart = json_decode($this->string_to_multipart($back_card_json['thumb']));
								
								$back_card_json['thumb'] = $string_to_multipart->url_path;
								}else{
								$back_card_json['thumb'] =$back_card_json['thumb'];
								}


								if($back_card_json['videoUrl'] != ''){
									if(substr($back_card_json['videoUrl'],0,4) == 'http'){
										$back_card_json['videoUrl']=$back_card_json['videoUrl'];
									}else{
										$string_to_multipart1 = json_decode($this->string_to_multipart($back_card_json['videoUrl']));
										$back_card_json['videoUrl'] = $string_to_multipart1->url_path;
									}
								}else{
									$back_card_json['videoUrl']='';
								}
								

								$back_card_json['file_name']=$string_to_multipart->file_name;
								$back_card_json['title']=$string_to_multipart->file_name;
							}


							// if($back_card_json['type'] == 'clipart'){
							// 	$string_to_multipart = json_decode($this->string_to_multipart($back_card_json['thumb']));
							// 	$back_card_json['thumb'] = $string_to_multipart->url_path;
							// 	$back_card_json['file_name']=$string_to_multipart->file_name;
							// 	$back_card_json['title']=$string_to_multipart->file_name;
							// }
							$final_json['back_card_json'][]=$back_card_json;
						}
					}

					if($key == 'front_card_front_color'){
						$final_json['front_card_front_color']=$this_json;
					}

					if($key == 'front_card_back_color'){
						$final_json['front_card_back_color']=$this_json;
					}






					
						//$my_card['front_card_json']

					}



				}

				
				}
//echo '<pre>';print_r($final_json);die;

			




			$card_insert=array(
				'user_id'=>$user_id,
				'template_id'=>$template_id,
				'category_id'=>$category_id,
				'card_json'=>json_encode($final_json),
				'design_name'=>$design_name,
				'front_image'=>$front_image,
				'back_image'=>$back_image,
			);

			if($request->has('card_id')){
			$users_card = DB::table('users_card')->where('id',$request->card_id)->update($card_insert);
			}else{

			$users_card = DB::table('users_card')->insertGetid($card_insert);

			$codes='GoDi'.$users_card;


			$users_card = DB::table('users_card')->where('id',$users_card)->update(['code'=>$codes]);
			}

//print_r($users_card);die;
		return json_encode([
				'errorCode' => '0',
				'errorMsg' => 'card  succesfully..',
				'data' =>[$card_insert]
				]);
			  return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'card  succesfully..',
				'data' =>[]
				]);	


print_r($users_card);die;

}




 public function myCard(Request $request)
    {    

    	 $validator = Validator::make($request->all(), [
                'user_id' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
        $user_id=$request->user_id;


        $categories = DB::table('template_categories')->get();
		$category_detail=[];
		if(count($categories) != '0'){
			foreach ($categories as $value) {
				$category=array(
					'id'=>(string)$value->tempcat_id,
					'name'=>(string)$value->tempcat_name,
					'price'=>(string)$value->price,

				);
				$users_card = DB::table('users_card')->where('user_id',$user_id)->where('category_id',$value->tempcat_id)->get();

				 $data_array=[];
				if(count($users_card) != '0'){
				foreach ($users_card as $this_users_card) {
					$front_image='';
					$back_image='';
					if($this_users_card->front_image != ''){
					$front_image=url($this_users_card->front_image);	
					}
					if($this_users_card->back_image != ''){
					$back_image=url($this_users_card->back_image);	
					}
					
					$data_array[] =array(
								'id'=>(string)$this_users_card->id,
								'admin_card_id'=>(string)$this_users_card->template_id,
								'user_id'=>(string)$this_users_card->user_id,
								'design_name'=>$this_users_card->design_name,
								'category_id'=>(string)$this_users_card->category_id,
								'front_image'=>$front_image,
								'back_image'=>$back_image,
								'card_json'=>json_decode($this_users_card->card_json),
								);
					
				}

				}

				$category['business_card']=$data_array;

				$category_detail[]=$category;

			//print_r($category_detail);die;
			}
		}











		 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'my card',
				'data' => $category_detail
				]);	

print_r($data_array);die;

    }







 public function userCard(Request $request)
    {    

    	 $validator = Validator::make($request->all(), [
                'user_id' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
        $user_id=$request->user_id;


       
				$users_card = DB::table('users_card')->where('user_id',$user_id)->orderBy('id','Desc')->get();

				 $data_array=[];
				if(count($users_card) != '0'){
				foreach ($users_card as $this_users_card) {
					$front_image='';
					$back_image='';
					if($this_users_card->front_image != ''){
					$front_image=url($this_users_card->front_image);	
					}
					if($this_users_card->back_image != ''){
					$back_image=url($this_users_card->back_image);	
					}
					
					$data_array[] =array(
								'id'=>(string)$this_users_card->id,
								'user_id'=>(string)$this_users_card->user_id,
								'admin_card_id'=>(string)$this_users_card->template_id,
								'design_name'=>$this_users_card->design_name,
								'category_id'=>(string)$this_users_card->category_id,
								'front_image'=>$front_image,
								'back_image'=>$back_image,
								'card_json'=>json_decode($this_users_card->card_json),
								);
					
				}

				

				

}





		 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'my card',
				'data' => $data_array
				]);	

print_r($data_array);die;

    }


 public function deleteCard(Request $request)
    {    

    	 $validator = Validator::make($request->all(), [
    	 	'card_id' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
        $card_id=$request->card_id;
		$users_card = DB::table('users_card')->where('id',$card_id)->delete();
		
		 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'delete card',
				'data' => ''
				]);	

print_r($data_array);die;

    }

    public function deleteRolodexUser(Request $request)
    {    

    	 $validator = Validator::make($request->all(), [
    	 	'card_id' => 'required',  
    	 	'user_id' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
        $card_id=$request->card_id;
        $user_id=$request->user_id;
		$users_card = DB::table('users_rolodex')->where('user_id',$user_id)->where('card_id',$card_id)->delete();
		
		 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'delete Rolodex User',
				'data' => ''
				]);	

print_r($data_array);die;

    }

	public function getUserRolodex(Request $request)
    {  

 		$validator = Validator::make($request->all(), [
                'user_id' => 'required',  
                'alphabet' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
        $user_id=$request->user_id;
        $alphabet=$request->alphabet;

         $users_rolodex_check = DB::table('users_rolodex')->where('user_id',$user_id)->get();
        $data_array=[];

         if(count($users_rolodex_check) != '0'){
         	//$data_array=[];
         	foreach ($users_rolodex_check as $this_rolodex) {
         		
         		$users_card = DB::table('users_card')->where('id',$this_rolodex->card_id)->first();
				if($users_card != '')
				if($users_card->user_id != ''){
					$users_check = DB::table('users')->where('id',$users_card->user_id)->first();

					if($users_check->first_name != ''){
						if(strtolower(substr($users_check->first_name, 0, 1)) == strtolower($alphabet)){

							$front_image='';
							$back_image='';

							//print_r($this_rolodex);die;
							if($users_card->front_image != ''){
							$front_image=$users_card->front_image;	
							}
							if($users_card->back_image != ''){
							$back_image=$users_card->back_image;	
							}

							$user_name='';
							if($users_check->first_name != ''){
								$user_name=$users_check->first_name;
							}

							
							$data_array[] =array(
										'id'=>(string)$users_card->id,
										'user_id'=>(string)$users_card->user_id,
										'user_name'=>$user_name,
										'design_name'=>$users_card->design_name,
										'category_id'=>(string)$users_card->category_id,
										'front_image'=>$front_image,
										'back_image'=>$back_image,
										'card_json'=>json_decode($users_card->card_json),
										);

						}
						
					
					}


				}
}
			
					
					
				
         }

    
//print_r($data_array);die;
     return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'get rolodex',
				'data' => $data_array
				]);	
	print_r($data_array);die;

}



 public function addrolodex(Request $request)
    {    

    	 $validator = Validator::make($request->all(), [
                'user_id' => 'required',  
                'card_id' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
        $user_id=$request->user_id;
        $card_id=$request->card_id;

        $user_purchase_check = DB::table('users_rolodex')->where('user_id',$user_id)->where('card_id',$card_id)->first();
        if($user_purchase_check == ''){
        	$card_purchase=array(
				'user_id'=>$user_id,
				'card_id'=>$card_id
			);
			$user_purchase = DB::table('users_rolodex')->insert($card_purchase);
		}
			 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'users rolodex successfully',
				'data' =>''
				]);	



    }








 public function cardPurchase(Request $request)
    {    

    	 $validator = Validator::make($request->all(), [
                'user_id' => 'required',  
                'card_id' => 'required',  
            ]);

          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
          $user_id=$request->user_id;
        $card_id=$request->card_id;
        $transaction_id=$request->transaction_id;
        $price=$request->price;

          $user_transaction_id_check = DB::table('user_purchase')->where('transaction_id',$transaction_id)->first();
          if($user_transaction_id_check != ''){
          	// return response()->json([
           //      'errorCode' => "1",
           //      'errorMsg' =>  'Transaction id already exists',
           //      'data' => []
           //  ]);

          }	



       
        $user_purchase_check = DB::table('user_purchase')->where('user_id',$user_id)->where('card_id',$card_id)->first();
          if($user_purchase_check == ''){
        	$card_purchase=array(
				'user_id'=>$user_id,
				'card_id'=>$card_id,
				'transaction_id'=>$transaction_id,
				'price'=>$price
			);

			$user_purchase = DB::table('user_purchase')->insert($card_purchase);
		}
			 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'card puchase successfully',
				'data' =>''
				]);	



    }


 


public function check_device($user_id,$card_id){

$user_id = base64_decode($user_id);
$card_id = base64_decode($card_id);
$first_letter='';
$users_check = DB::table('users')->where('id',$user_id)->first();

if($users_check->first_name != ''){
$first_letter=strtolower(substr($users_check->first_name, 0, 1));
}

 
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");
if( $iPod || $iPhone ){
    $divice_type='iphone';
   $url='https://itunes.apple.com/in/app/sarehne/id1226895855?mt=8';
    //browser reported as an iPhone/iPod touch -- do something here
}else if($iPad){
     $divice_type='iphone';
    $url='https://itunes.apple.com/in/app/sarehne/id1226895855?mt=8';
    //browser reported as an iPad -- do something here
}else if($Android){
     $divice_type='android';
     $url='https://play.google.com/store?hl=en&tab=w8';
    //browser reported as an Android device -- do something here
}else if($webOS){
    $url='https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=xXJcWvL9JYSjX9Xpi_gD';
    //browser reported as a webOS device -- do something here
}else{
	$divice_type='';
    $url='https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=xXJcWvL9JYSjX9Xpi_gD';
}
 
//print_r($card_id);die;

return response()->view('check_device', compact('user_id','card_id','url','divice_type','first_letter'));


} 




  
}










