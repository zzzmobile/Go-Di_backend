<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Advertisement;
use PDF;
use Validator;
use Excel;
use DB;

class UserController extends Controller
{
 



	public function getdashboard(Request $request){

		$users_count = DB::table('users')->where('user_type','1')->count();
		$guest_users_count = DB::table('users')->where('user_type','3')->count();

		$first_day_this_month = date('Y-m-01'); 
		$last_day_this_month  = date('Y-m-t');
		$current_month_users_count = DB::table('users')
									->where('user_type','1')
									->where('created_at','>=',$first_day_this_month)
           							->where('created_at','<=',$last_day_this_month)
									->count();

		$first_day_six_month_back=date('Y-m-01', strtotime('-6 month'));
		$last_day_this_month  = date('Y-m-t');
		$six_month_users_count = DB::table('users')
								->where('user_type','1')
								->where('created_at','>=',$first_day_six_month_back)
       							->where('created_at','<=',$last_day_this_month)
								->count();
		
		for($pre_data=5; $pre_data>=0; $pre_data--) {
			$six_month_back=date('Y-m-01', strtotime('-'.$pre_data.'month'));
			$last_day_this_month  = date('Y-m-t', strtotime('-'.$pre_data.'month'));					
			$total_users[] = DB::table('users')
									->where('user_type','1')
									->where('created_at','>=',$six_month_back)
           							->where('created_at','<=',$last_day_this_month)
									->count();

			$guest_users[] = DB::table('users')
									->where('user_type','3')
									->where('created_at','>=',$six_month_back)
           							->where('created_at','<=',$last_day_this_month)
									->count();

			$months[]=date('M', strtotime('-'.$pre_data.'month'));					
		}
		
		$category = DB::table('template_categories')->select('tempcat_name')->get();
			
		return view('dashboard', compact('users_count','guest_users_count','current_month_users_count','six_month_users_count','total_users','guest_users','months','category'));
	}






	public function getusers(Request $request){

		$users = DB::table('users')->where('user_type','1')->get();

		if(count($users) != '0'){
			foreach ($users as $this_user) {
					
			$this_user->users_card_count = DB::table('users_card')->where('user_id',$this_user->id)->count();

			$this_user->user_purchase_count = DB::table('user_purchase')->where('user_id',$this_user->id)->count();

			$this_user->users_rolodex_count = DB::table('users_rolodex')->where('user_id',$this_user->id)->count();
			$this_user->users_fav_count = DB::table('users_fav')->where('user_id',$this_user->id)->count();
		//echo '<pre>';print_r($this_user);die;
			}
		}

		//echo '<pre>';print_r($users);die;
		
		return view('users', compact('users'));
	}


public function editusers(Request $request){

		 $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                 'last_name' => 'required',
                 'phone' => 'required',
                  //'password' => 'required',
                 // 'promoCode' => 'required',
            ]);

            if ($validator->fails()) {
            return back()->withErrors($validator);
    	    }
       
       $first_name=$request->first_name;
       $last_name=$request->last_name;
       $id=$request->id;
       $phone=$request->phone;

       $insert_data=array(
	        				'first_name'=>$first_name,
	        				'last_name'=>$last_name,
	        				'phone'=>$phone
	        				);
       if($request->hasFile('image')){
					$result = $this->uploadFile('/profile', $request, 'image');
					if($result['errorCode'] == '1'){
						return response()->json([
							'errorCode' => '1',
							'errorMsg' => $result['errorMsg']
						]);
					}
			$insert_data['image'] = $result['fileName'];
		}


		//echo '<pre>';print_r($insert_data);die;
        DB::table('users')->where('id',$id)->update($insert_data);
        	
			$request->session()->flash('successMessage', 'successfully edit.');
		
		
		return back();
	}




    public function addusers(Request $request)
    {    
    	
		 $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                 'last_name' => 'required',
                 'email' => 'required|email',
                  //'password' => 'required',
                 // 'promoCode' => 'required',
            ]);

            if ($validator->fails()) {
            return back()->withErrors($validator);
    	    }

	 
			$users = User::where('email', $request->email)
						 ->first();	

		   if(!is_null($users)){
					$request->session()->flash('dangerMessage', 'You are already registered. Please try with other email');
		
					return back();
			}else{

             for ($i=0; $i<=5 ; $i++) { 
             	 $promo_code = 'GoDi'.mt_rand(1000, 9999);
                  $users = User::where('promo_code', $promo_code)
						 ->first();	
			      if(is_null($promo_code)){
			      	break;
			      }			 
              	
             }
						 

			DB::beginTransaction();
			$email=$request->email;
			$password=rand(111111111,999999999);		
			$users = new User;
			$users->service_key = $this->GenerateRandomString();
			$users->first_name = $request->first_name;
			$users->last_name = $request->last_name;
			$users->email = $request->email;
			$users->phone = $request->phone;
			$users->password = md5($password);
			$users->promo_code = $promo_code;		

			if($request->hasFile('image'))
			{
				$result = $this->uploadFile('/profile', $request, 'image');
				if($result['errorCode'] == '1'){
					return response()->json([
						'errorCode' => '1',
						'errorMsg' => $result['errorMsg']
					]);
				}
				$users->image = $result['fileName'];
			}

			$users->save();
          

			DB::commit();



			  if(isset($request->promoCode)){
				$promo_users=DB::table('users')
				   ->where('promo_code', $request->promoCode)
				   ->first();
				   //print_r($count); die;
				 if(isset($promo_users)){
				 	$count=$promo_users->instal_count;
				  DB::table('users')
				   ->where('promo_code', $request->promoCode)
				   ->update(['instal_count'=> ((int)$count+1)]);
				 } 
			   }



		 
$to = $email;
$subject = "Login details";
$message = "Your Email id is ".$to . "\r\n";
$message .= "Your Password is ".$password;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: noreply@appsinvo.com' . "\r\n";
//echo '<pre>';print_r($message);die;

mail($to,$subject,$message,$headers);



		 }		 
        	
			$request->session()->flash('successMessage', 'successfully created.');
		
		
		return back();
	
    }











public function delUser(Request $request, $id = null){
		if(is_null($id)){
			$request->session()->flash('dangerMessage', '<b>Deletion failed!</b> please try again.');
			return back();
		}
		$status = DB::transaction(function () use ($id){
			$user = User::find($id);
			$user->delete();
			
		});
		if(is_null($status)){
			$request->session()->flash('successMessage', 'User successfully deleted.');
		}
		else{
			$request->session()->flash('dangerMessage', '<b>Deletion failed!</b> please try again.');
		}
		return back();
	}
	
	public function activeUser(Request $request, $id = null){
		if(is_null($id)){
			$request->session()->flash('dangerMessage', '<b>Activation failed!</b> please try again.');
			return back();
		}
		$status = DB::transaction(function () use ($id){
			DB::table('users')
					->where('id', $id)
					->update([
						'isActive' => '1'
					]);
		});
		if(is_null($status)){
			$request->session()->flash('successMessage', 'User successfully activated.');
		}
		else{
			$request->session()->flash('dangerMessage', '<b>Activation failed!</b> please try again.');
		}
		return back();
	}
	
	public function inactiveUser(Request $request, $id = null){
		if(is_null($id)){
			$request->session()->flash('dangerMessage', '<b>Deactivation failed!</b> please try again.');
			return back();
		}
		$status = DB::transaction(function () use ($id){
			DB::table('users')
					->where('id', $id)
					->update([
						'isActive' => '0'
					]);
		});
		if(is_null($status)){
			$request->session()->flash('successMessage', 'User successfully deactivated.');
		}
		else{
			$request->session()->flash('dangerMessage', '<b>Deactivation failed!</b> please try again.');
		}
		return back();
	}





    public function getAll(Request $request){
		//get all users
		$categories = DB::table('template_categories')->get();
		//print_r($_GET['cat']);die;
		if(isset($_GET['cat'])){
		$template = DB::table('template')->where('cat_id',$_GET['cat'])->get();
		}elseif(isset($_GET['card_type'])){
		$template = DB::table('template')->where('card_type',$_GET['card_type'])->get();
		}else{
		$template = DB::table('template')->get();
		}
		
		//echo '<pre>';print_r();die;
		if(count($template) != '0'){
			foreach ($template as $value) {
				$value->canvas_json='';
				if(isset(json_decode($value->canvas_json)->front)){
$value->canvas_json=json_decode($value->canvas_json)->front;
				}
				
				$category = DB::table('template_categories')->where('tempcat_id',$value->cat_id)->first();
				$value->category= $category->tempcat_name;
				$value->canvas_thumbnail= env('card_url').'tshirtecommerce/'.$value->canvas_thumbnail;
				if($value->image != ''){
					$value->image= env('card_url').'tshirtecommerce/'.$value->image;
				}
				


			}
		}
	//echo '<pre>';print_r($template);die;
		return view('card',compact('template','categories'));
	}


 public function card_creater(Request $request){
		//get all users
		
		
		return view('card_editor');
	}

	public function deltemp(Request $request, $id = null){
		if(is_null($id)){
			$request->session()->flash('dangerMessage', '<b>Deletion failed!</b> Please try again.');
			return back();
		}
	
		DB::table('template')
					->where('template_id', $id)
					->delete();

			$request->session()->flash('successMessage', ' successfully deleted.');
		
		return back();
	}
	
	
}
