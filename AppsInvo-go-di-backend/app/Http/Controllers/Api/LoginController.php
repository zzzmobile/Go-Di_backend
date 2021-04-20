<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Exceptions\ApiException;
use App\User;
use Validator;
use DB;

class LoginController extends Controller
{

	public function contactUs(Request $request){
    	$validator = Validator::make($request->all(), [
               'title' => 'required',
				'message' => 'required',
				'userId' => 'required',
				
            ]);

            if ($validator->fails()) {
                
           $data=array();
            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);
            }

           
            $id=$request->userId;
            $message=$request->message;
            $title=$request->title;


             $user_data=array(
	        				'message'		=> $message,
							'title'			=> $title,
							'user_id'		=> $id
	        				);


            DB::table('user_contact')->insert($user_data);
  			return response()->json([
				'errorCode' => '0',
				'errorMsg' => ' successfully',
				'data' => []
			]);
            

     }


	public function changePassword(Request $request){
    	$validator = Validator::make($request->all(), [
               //'oldPassword' => 'required',
				'newPassword' => 'required',
				'userId' => 'required',
				
            ]);

            if ($validator->fails()) {
                
           $data=array();
            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);
            }

           
            $id=$request->userId;
            $oldPassword=md5($request->oldPassword);
            $newPassword=md5($request->newPassword);
            

            if($request->has('oldPassword')){


            $check= DB::table('users')->where('id', $id)->where('password', $oldPassword)->first();
            if($check == ''){
            	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'old Password not correct',
				'data' => []
			]);
            }
        	}
            //print_r($check);die;
            $user_insert=[];
        	if($request->has('newPassword')){
            $user_insert['password']=$newPassword;
        	}
			// print_r($user_insert);die;
			DB::table('users')->where('id', $id)->update($user_insert);
	      //  print_r($check);die;

	        return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Password change successfully',
				'data' => []
			]);

	       // print_r($user_data);die;

		}











		public function updateProfile(Request $request){
    	$validator = Validator::make($request->all(), [
               //'deviceType' => 'required',
				//'deviceToken' => 'required',
				'userId' => 'required',
				
            ]);

            if ($validator->fails()) {
                
           $data=array();
            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);
            }

           
            $id=$request->userId;
            $user_insert=[];

            if($request->has('first_name')){
            $user_insert['first_name']=$request->first_name;
        	}
        	if($request->has('last_name')){
            $user_insert['last_name']=$request->last_name;
        	}
        	if($request->has('phone')){
            $user_insert['phone']=$request->phone;
        	}
        	if($request->has('password')){
            $user_insert['password']=md5($request->password);
        	}
			if($request->hasFile('image'))
			{
				$result = $this->uploadFile('/profile', $request, 'image');
				if($result['errorCode'] == '1'){
					return response()->json([
						'errorCode' => '1',
						'errorMsg' => $result['errorMsg']
					]);
				}
				$user_insert['image'] = $result['fileName'];
			}

			if($request->has('b_name')){
            $user_insert['b_name']=$request->b_name;
        	}
        	if($request->has('b_mobile')){
            $user_insert['b_mobile']=$request->b_mobile;
        	}
        	if($request->has('b_email')){
            $user_insert['b_email']=$request->b_email;
        	}
			if($request->hasFile('b_logo'))
			{
				$result = $this->uploadFile('/profile', $request, 'b_logo');
				if($result['errorCode'] == '1'){
					return response()->json([
						'errorCode' => '1',
						'errorMsg' => $result['errorMsg']
					]);
				}
				$user_insert['b_logo'] = $result['fileName'];
			}




			DB::table('users')->where('id', $id)->update($user_insert);
	        

	        $user_detail = User::where('id', $id)->first();
 //print_r($user_detail);die;
	        $image=""; 
            if(substr($user_detail->image,0,4) == 'http')
            {
            $image=$user_detail->image;	
            }else if($user_detail->image!=NULL){
            $image=url('storage/profile/'.$user_detail->image);	
            } 
            $b_logo=""; 
            if(substr($user_detail->b_logo,0,4) == 'http')
            {
            $b_logo=$user_detail->b_logo;	
            }else if($user_detail->b_logo!=NULL){
            $b_logo=url('storage/profile/'.$user_detail->b_logo);	
            } 
	        $user_data=array(
	        				'serviceKey'		=> $user_detail->service_key,
							'userId'			=> $user_detail->id,
							'firstName'			=> $user_detail->first_name,
							'lastName'			=> $user_detail->last_name,
							'email' 			=> $user_detail->email,
							'phone' 			=> $user_detail->phone,
							'promoCode' 		=> $user_detail->promo_code,
							'image'		=> $image,
							'b_name'			=> $user_detail->b_name,
							'b_mobile'			=> $user_detail->b_mobile,
							'b_email' 			=> $user_detail->b_email,
							'b_logo' 			=> $b_logo,
	        				);








	        return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'user data',
				'data' => array($user_data)
			]);

	        print_r($user_data);die;

		}




    public function login(Request $request)
    {
    	// return response()->json($request->all());
    	$users='';
    	try{


    		 for ($i=0; $i<=5 ; $i++) { 
             	 $promo_code = 'GoDi'.mt_rand(1000, 9999);
                  $users = User::where('promo_code', $promo_code)
						 ->first();	
			      if(is_null($promo_code)){
			      	break;
			      }			 
              	
             }

    		if(isset($request->email) && isset($request->password))
    		{   		
    		$users = User::where('email', $request->email)->first();

				if(is_null($users)){
				return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Invalid email password. Please try again.',
				'data' => []
				]);
			    }
			  $users = User::where('email', $request->email)
			                ->where('password', md5($request->password))->first();

			   if(is_null($users))
               {
               	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Invalid  password. Please try again.',
				'data' => []
				]);
               	
               }

    		}
    	    else if(isset($request->facebook_id))
    		{
    	    $users = User::where('facebook_id', $request->facebook_id)->first();	
    		 if(isset($request->email))
    		 {
    		 $users = User::where('email', $request->email)->first();
    		 if(is_null($users))
    		 {
    		 $users = User::where('facebook_id', $request->facebook_id)->first();	
    		 }else{
    		 DB::table('users')
            ->where('email', $request->email)
            ->update(['facebook_id' => $request->facebook_id]);
    		 }

    		  }

            /*  dd($users);*/
		            
				if(is_null($users)){

				DB::beginTransaction();
					
				$users = new User;
				$users->facebook_id = $request->facebook_id;
				$users->service_key = $this->GenerateRandomString();
				$users->device_token = $request->device_token;	
				$users->first_name = $request->firstName;
				$users->last_name = $request->lastName;
				$users->email = $request->email;
				$users->phone = $request->phone;
				$users->isActive =1;
				$users->promo_code = $promo_code;
				$users->image = $request->image;	

				$users->save();
			
				
				DB::commit();



		 $to = $request->email;
		  $subject = "Activate Account";
	      $activate_account=url('verify?promo='.$request->promoCode.'&&id='.$users->id);
	      $message="
	        <div class='container'>
	            <table class='table' style='border: 1px solid #ddd;'>
	              <tbody>
	                <tr>
	                  <td>Your Promo code is:</td>
	                  <td>". $promo_code."</td>
	                </tr>
	                 <tr>
	                  <td>Activate Your Account:</td>
	                  <td>".$activate_account."</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>";


			// Always set content-type when sending HTML email

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: noreply@appsinvo.com' . "\r\n";
			mail($to,$subject,$message,$headers);


					
				}
    		  }

    		else if(isset($request->google_id))
    		{
    		  $users = User::where('google_id', $request->google_id)->first();	
    		 if(isset($request->email))
    		 {
    		 $users = User::where('email', $request->email)->first();
    		 if(is_null($users))
    		 {
    		 $users = User::where('google_id', $request->google_id)->first();	
    		 }else{
    		 DB::table('users')
            ->where('email', $request->email)
            ->update(['google_id' => $request->google_id]);
    		   }
    	     }
		            
				if(is_null($users)){
			    DB::beginTransaction();
					
				$users = new User;
				$users->google_id = $request->google_id;
				$users->service_key = $this->GenerateRandomString();
				$users->device_token = $request->device_token;	
				$users->first_name = $request->firstName;
				$users->last_name = $request->lastName;
				$users->email = $request->email;
				$users->isActive =1;
				$users->phone = $request->phone;
				$users->promo_code = $promo_code;
				$users->image = $request->image;	

				$users->save();
			
				
				DB::commit();


		 $to = $request->email;
		  $subject = "Promo Code Details";
	      $activate_account=url('verify?promo='.$request->promoCode.'&&id='.$users->id);
	      $message="
	        <div class='container'>
	            <h2>OTP Details</h2>
	            <table class='table' style='border: 1px solid #ddd;'>
	              <tbody>
	                <tr>
	                  <td>Your Promo code is:</td>
	                  <td>". $promo_code."</td>
	                </tr>
	                 <tr>
	                  <td>Activate Your Account:</td>
	                  <td>".$activate_account."</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>";


			// Always set content-type when sending HTML email

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: noreply@appsinvo.com' . "\r\n";
			mail($to,$subject,$message,$headers);


			}
    		}else{
    	
			   	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Wrong credentials, please try again..',
				'data' => []
				]);
    		}


            

             $image=""; 
            if(substr($users->image,0,4) == 'http')
            {
            $image=$users->image;	
            }else if($users->image!=NULL){
            $image=url('storage/profile/'.$users->image);	
            } 
			
			$guest_token = $request->guest_token;	
             DB::table('users')
			    ->where('id', '=', $users->id)
			     ->update(['user_type'=>'1','guest_token'=>$guest_token]);

			return response()->json([
				'errorCode' => '0',
				'errorMsg'  => 'Successfully Login.',
				'data'		=>	[array_map(function($v){
						return (is_null($v)) ? "" : (is_array($v)) ? $v : (String)$v;
					},[
							'serviceKey'		=> $users->service_key,
							'userId'			=> $users->id,
							'firstName'			=> $users->first_name,
							'paid_unpaid'			=> $users->paid_unpaid,
							'password'			=> ($users->password)!= ''?'1':'0',
							'lastName'			=> $users->last_name,
							'email' 			=> $users->email,
							'phone' 			=> $users->phone,
							'promoCode' 		=> $users->promo_code,
							'image'		=> $image
						])]
			]);	


		 }
		catch(ApiException $e){
	    	DB::rollback();
	    	return response()->json([
				'errorCode' => $e->errorCode,
				'errorMsg' => $e->getMessage(),
				'data' => []
			]);
	    }
		catch(ApiException $e)
		{
			DB::rollback();
	    	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Something went wrong. Please try again.',
				'data' => []
			]);
		}	
    }


 public function guest_user(Request $request)
    {    
    	

		 $validator = Validator::make($request->all(), [
                'guest_token' => 'required'
            ]);

            if ($validator->fails()) {
                
           $data=array();
            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);
            }



		$guest_token = $request->guest_token;	

		$users=DB::table('users')
				   ->where('guest_token', $guest_token)
				   ->first();
		if($users == ''){
			DB::table('users')->insert([
				'guest_token'=>$guest_token,
				'user_type'=>'3'
			]);
		}

		print_r($users);die;


}

	

    public function invite_offer($promoCode){

    	

    	$users=DB::table('users')->where('promo_code', $promoCode)->first();
    	//print_r($users);die;
    	if($users != ''){

    	
    	$user_id=$users->id;
    	$user_invite_offer=DB::table('user_invite_offer')->where('user_id', $user_id)->first();
    	if($user_invite_offer == ''){
    		DB::table('user_invite_offer')->insert(['user_id'=> $user_id]);
    	}

    	
		$instal_count=$users->instal_count;

		$user_invite_offer_data=DB::table('user_invite_offer')->where('user_id', $user_id)->first();

		$pro=$user_invite_offer_data->pro;
		$vip=$user_invite_offer_data->vip;
		$premiun=$user_invite_offer_data->premiun;
		

		if($instal_count == '10'){
			$pro_update=$pro+1;
			DB::table('user_invite_offer')->where('user_id', $user_id)
			->update(['pro'=> $pro_update]);
		}elseif($instal_count == '20'){
			$pro_update=$pro+2;
			DB::table('user_invite_offer')->where('user_id', $user_id)
			->update(['pro'=> $pro_update]);
		}elseif($instal_count == '40'){
			$vip_update=$vip+1;
			DB::table('user_invite_offer')->where('user_id', $user_id)
			->update(['vip'=> $vip_update]);
		}elseif($instal_count == '60'){
			$vip_update=$vip+2;
			DB::table('user_invite_offer')->where('user_id', $user_id)
			->update(['vip'=> $vip_update]);
		}elseif($instal_count == '80'){
			//DB::table('users')->where('id', $user_id)->update(['paid_unpaid'=>'1']);
			DB::table('user_invite_offer')->where('user_id', $user_id)
			->update(['premiun'=>'1','premiun_date'=> date('Y-m-d')]);
			
		}elseif($instal_count > '80'){
			$main_value=$instal_count-80;
			$cal=$main_value % 20;
			if($cal == '0'){
				$vip_update=$vip+2;
			DB::table('user_invite_offer')->where('user_id', $user_id)
			->update(['vip'=> $vip_update]);
			}
			//print_r($cal);die;
		}

		}


//print_r($instal_count);die;
    }




    public function register(Request $request)
    {    
    	// return response()->json($request->all());
    	try{

		 $validator = Validator::make($request->all(), [
                'firstName' => 'required',
                 'lastName' => 'required',
                 'email' => 'required|email',
                  'password' => 'required',
                 // 'promoCode' => 'required',
            ]);

            if ($validator->fails()) {
                
           $data=array();
            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);
            }

	 


           



			$users = User::where('email', $request->email)
						 ->first();	

		   if(!is_null($users)){
					return response()->json([
					'errorCode' => '1',
					'errorMsg' => 'You are already registered. Please try with other email.',
					]);
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

			if($request->has('guest_token'))
			{
			$guest_token = $request->guest_token;	
			//DB::table('users')->where('guest_token',$guest_token)->delete();
			}

			$users = new User;
			$users->service_key = $this->GenerateRandomString();
			$users->first_name = $request->firstName;
			$users->last_name = $request->lastName;
			$users->email = $request->email;
			$users->phone = $request->phone;
			$users->password = md5($request->password);
			$users->promo_code = $promo_code;		
			$users->device_token = $request->deviceToken;			

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



		  $to = $request->email;
		  $subject = "Activate Account";
	      $activate_account=url('verify?promo='.$request->promoCode.'&&id='.$users->id);
	      $message="
	        <div class='container'>
	            <table class='table' style='border: 1px solid #ddd;'>
	              <tbody>
	                <tr>
	                  <td>Your Promo code is:</td>
	                  <td>". $promo_code."</td>
	                </tr>
	                 <tr>
	                  <td>Activate Your Account:</td>
	                  <td>".$activate_account."</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>";


			// Always set content-type when sending HTML email

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: noreply@appsinvo.com' . "\r\n";
			mail($to,$subject,$message,$headers);

/*			if(==true){
			  
			}else{
				  return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Something went wrong. Please try again.',
				'data' => []
			     ]);	

			}
*/



			


            $image=""; 
            if(substr($users->image,0,4) == 'http')
            {
            $image=$users->image;	
            }else if($users->image!=NULL){
            $image=url('storage/profile/'.$users->image);	
            } 


 $invite_offer=$this->invite_offer($request->promoCode);

//print_r($invite_offer);die;



			return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Successfully Registered.',
				'data'		=>	[array_map(function($v){
							return (is_null($v)) ? "" : (is_array($v)) ? $v : (String)$v;
						},[
									'serviceKey'		=> $users->service_key,
									'userId'			=> $users->id,
									'firstName'			=> $users->first_name,
									'paid_unpaid'		=> '0',
									'lastName'			=> $users->last_name,
									'email' 			=> $users->email,
									'phone' 			=> $users->phone,			
									'promoCode' 		=> $users->promo_code,
									'image'		=> $image								
								])]
				]);


		 }		 
        
	
		}
		catch(ApiException $e){
	    	DB::rollback();
	    	return response()->json([
				'errorCode' => $e->errorCode,
				'errorMsg' => $e->getMessage(),
				'data' => []
			]);
	    }
		catch(ApiException $e)
		{
			DB::rollback();
	    	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Something went wrong. Please try again.',
				'data' => []
			]);
		}
    }










    public function logout(Request $request)
    {    

    	try{

		 $validator = Validator::make($request->all(), [
                'userId' => 'required|integer',  
            ]);


          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }


		   DB::beginTransaction();

		   DB::table('users')
			    ->where('id', '=', $request->userId)
			     ->update(['device_token'=> NULL,'user_type'=>'3']);

           DB::commit();





			  return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Logged Out Successfully..',
				'data'		=>[]	
				]);	

         }
         	catch(ApiException $e){
	    	DB::rollback();
	    	return response()->json([
				'errorCode' => $e->errorCode,
				'errorMsg' => $e->getMessage(),
				'data' => []
			]);
	    }
		catch(ApiException $e)
		{
			DB::rollback();
	    	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Something went wrong. Please try again.',
				'data' => []
			]);
		}



    }




    public function forgotPassword(Request $request)
    {
      try{
      	 $validator = Validator::make($request->all(), [
                 'email' => 'required',
            ]);

            if ($validator->fails()) {
                
           $data=array();
            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first()
            ]);
        }

      $users = DB::table('users') ->select('email')->where('email', $request->email)->first();

	        if(is_null($users)){
				return response()->json([
				'errorCode' => '1',
				'errorMsg' => ' Email not found. Please try other.'
				]);
			    }else{

		   $otp = mt_rand(100000, 999999);    	
		   DB::table('users')
            ->where('email', $request->email)
            ->update(['otp' => $otp]);	    	

		  $to = $request->email;
		  $subject = "Forgot Password OTP";
         
	      $message="
	        <div class='container'>
	            <table class='table' style='border: 1px solid #ddd;'>
	              <tbody>
	                <tr>
	                  <td>Your OTP is:</td>
	                  <td>". $otp."</td>
	                </tr>
	              </tbody>
	            </table>
	          </div>";


			// Always set content-type when sending HTML email

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: noreply@appsinvo.com' . "\r\n";
			mail($to,$subject,$message,$headers);  	

			    return response()->json([
				'errorCode' => '0',
				'errorMsg'  => 'Successfully...'
			]);	

		  }
   	       
			
		}
		catch(ApiException $e){
	    	DB::rollback();
	    	return response()->json([
				'errorCode' => $e->errorCode,
				'errorMsg' => $e->getMessage()
			]);
	    }
		catch(ApiException $e)
		{
			DB::rollback();
	    	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Something went wrong. Please try again.'
			]);
		}	
    }




    public function resetPasswordByOTP(Request $request)
    {
      try{
      	 $validator = Validator::make($request->all(), [
      	 	      'email' => 'required',
                  'otp' => 'required',
                   'newPassword' => 'required',
            ]);

            if ($validator->fails()) {
                
           $data=array();
            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first()
            ]);
        }

       $otp=$request->otp;

      $users = DB::table('users')
            ->select('password')
            ->where('email', $request->email)
            ->where('otp', $otp)->first();
   
	        if(is_null($users)){
				return response()->json([
				'errorCode' => '1',
				'errorMsg' => ' OTP incorract. Please try again.'
				]);
			    }else{

			 DB::table('users')
	            ->where('email', $request->email)
	            ->update(['password' => md5($request->newPassword), 'otp'=>NULL]);

            	 return response()->json([
				'errorCode' => '0',
				'errorMsg'  => 'Your password updated successfully.'
			]);	

		  }
   	       
			
		}
		catch(ApiException $e){
	    	DB::rollback();
	    	return response()->json([
				'errorCode' => $e->errorCode,
				'errorMsg' => $e->getMessage()
	
			]);
	    }
		catch(ApiException $e)
		{
			DB::rollback();
	    	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Something went wrong. Please try again.'
			]);
		}	
    }






    public function instalCountByPromocode(Request $request)
    {    

    	try{

		 $validator = Validator::make($request->all(), [
                'userId' => 'required|integer',  
            ]);


          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }


		   DB::beginTransaction();

		   $instal_count=DB::table('users')
		        ->select('instal_count')
			    ->where('id', '=', $request->userId)
			    ->first();

           DB::commit();
             $count=0;
             if(isset($instal_count) && $instal_count->instal_count){
             	$count=(int)$instal_count->instal_count;
             }
  

  	 $pro='0';
		$vip='0';

 $user_invite_offer=DB::table('user_invite_offer')->where('user_id', $request->userId)->first();
if($user_invite_offer != ''){
$pro=$user_invite_offer->pro;
			$vip=$user_invite_offer->vip;
}

			  return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Successfully..',
				'instalCount'		=>(string)$count	,
				'pro'=>$pro,
	    		'vip'=>$vip,
				]);	

         }
         	catch(ApiException $e){
	    	DB::rollback();
	    	return response()->json([
				'errorCode' => $e->errorCode,
				'errorMsg' => $e->getMessage(),
				'data' => []
			]);
	    }
		catch(ApiException $e)
		{
			DB::rollback();
	    	return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Something went wrong. Please try again.',
				'data' => []
			]);
		}



    }


public function strafter($string, $substring) {
  $pos = strpos($string, $substring);
  if ($pos === false)
   return $string;
  else  
   return(substr($string, $pos+strlen($substring)));
}
public function strbefore($string, $substring) {
  $pos = strpos($string, $substring);
  if ($pos === false)
   return $string;
  else  
   return(substr($string, 0, $pos));
}
public function msort($array, $key, $sort_flags = SORT_REGULAR) {
dd($array);
    if (count($array) > 0) {
    	// print_r(1);die;
        if (!empty($key)) {
            $mapping = array();
           // print_r($array);
            if(count($array) != '0'){
            	foreach ($array as $k => $v) {
                $sort_key = '';
                if (!is_array($key)) {
                    $sort_key = $v[$key];
                } else {
                    // @TODO This should be fixed, now it will be sorted as string
                   
                    	// print_r($v->zIndex);die;
                        $sort_key .= $v->zIndex;
                  
                    $sort_flags = SORT_ASC;
                }
                $mapping[$k] = $sort_key;
            }
            }
           

            asort($mapping, $sort_flags);
            $sorted = array();
            foreach ($mapping as $k => $v) {
            	//print_r($array->$k);
            	if(isset($array->$k) != '0'){
 				$sorted[] = $array->$k;
            	}
               
            }
            return $sorted;
        }
    }
    return $array;
}
    public function getCategoryBusinesscard(Request $request)
    {    

		 $validator = Validator::make($request->all(), [
               // 'user_id' => 'required|integer',  
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
				$temp=[];
				//->where('template_id','68')
				$temp = DB::table('template')->where('cat_id',$value->tempcat_id)->get();
				$business=[]; 
				if(count($temp) != '0'){
					$businescard=[];
					$back_card=[];
					foreach ($temp as $value_temp) {
						$businescard=[];
						//print_r(json_decode($value_temp->canvas_json)->front);die;
						//$card='';
						if(isset(json_decode($value_temp->canvas_json)->front) != ''){
							//if(count(json_decode($value_temp->canvas_json)->front) != '0'){
$card= json_decode($value_temp->canvas_json)->front;
							//}

						}
						
//if($value_temp->template_id == '132'){
						//	print_r($value_temp->canvas_json)	;die;
							//}
					//	print_r($value_temp->template_id);echo "<br>";
//print_r($card);
						//print_r($card);die;
						if($card != ''){

							$card = $this->msort($card, array('zIndex'));
							
							foreach ($card as  $value) {

							$businescard[]=$value;
							$value->font_size='';
							$value->svg='';
							if($value->type == 'text'){
							$value->font_size=$value->height;

							}
							
							}
						
						
						}
						
						 
						//echo "<br>";echo "<br>";echo "next";echo "<br>";

					//	print_r($card);die;

						





$card1='';
						if(isset(json_decode($value_temp->canvas_json)->back) != ''){
							
							$back_count=json_decode($value_temp->canvas_json)->back;
						
						//$card1=[];

						$card1= $back_count;
	
						if($card1 != ''){
						if(count($card1) != '0'){
							
							//print_r($card1);
						$card1 = $this->msort($card1, array('zIndex'));
						
						}
						}
						
						
						

						$back_card=[];
							if(count($card1) != '0'){
								//print_r($value_temp->template_id);
								foreach ($card1 as  $value) {
// if($value_temp->template_id == '90'){
// 							print_r($value);die;	
// 						}
									$value->svg='';
									$back_card[]=$value;
									$value->font_size='';
									if($value->type == 'text'){
									$value->font_size=$value->height;

									}
									
								}
							}
						}











						
						$users_fav_check = DB::table('users_fav')->where('user_id',$user_id)->where('card_id',$value_temp->template_id)->first();
						$user_fav='0';
						if($users_fav_check != ''){
							$user_fav='1';
						}

						$user_purchase_check = DB::table('user_purchase')->where('user_id',$user_id)->where('card_id',$value_temp->template_id)->first();
						$user_purchase='0';
						if($user_purchase_check != ''){
							$user_purchase='1';
						}
						$image='';
						if($value_temp->image != ''){
							$image=env('card_url').'tshirtecommerce/'.$value_temp->image;
						}

						$back_image='';
						if($value_temp->back_image != ''){
							$back_image=env('card_url').'tshirtecommerce/'.$value_temp->back_image;
						}

						$price='';
						if($value_temp->price != ''){
							$price=$value_temp->price;
						}

						$card_json=array(
							'front_card_json'=>$businescard,
							'back_card_json'=>$back_card,
							'front_card_back_color'=>$value_temp->back_background_color,
							'front_card_front_color'=>$value_temp->background_color,
						);
						$business[]=array(
							'admin_card_id'=>(string)$value_temp->template_id,
							'name'=>$value_temp->template_name,
							'card_type'=>$value_temp->card_type,
							'price'=>$price,
							'user_fav'=>$user_fav,
							'user_purchase'=>$user_purchase,
							'background_color'=>$value_temp->background_color,
							'front_image'=> $image,
							'back_image'=> $back_image,
							'card_json'=> $card_json,
							);
						
					}
				}
				$category['business_card']=$business;

				$category_detail[]=$category;

			//print_r($category_detail);die;
			}
		}

		 return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'data..',
				'data' => $category_detail
				]);	


print_r($categories);die;

    }


    public function getBusinesscardDetail(Request $request)
    {    

    	
		 $validator = Validator::make($request->all(), [
                'business_card_id' => 'required|integer',  
            ]);


          if ($validator->fails()) {

           $data=array();

            return response()->json([
                'errorCode' => "1",
                'errorMsg' =>  $validator->errors()->first(),
                'data' => $data
            ]);

          }
          $business_card_id=$request->business_card_id;
          $business=[];
          $temp = DB::table('template')->where('template_id',$business_card_id)->first();
          if($temp != ''){

         $categories = DB::table('template_categories')->where('tempcat_id',$temp->cat_id)->first();
          $business=array(
							'id'=>(string)$temp->template_id,
							'name'=>$temp->template_name,
							'category_name'=>$categories->tempcat_name,
							'image'=>env('card_url').$temp->canvas_thumbnail,
							'business_card_json'=>env('card_url').$temp->canvas_json,
							);

				$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => env('card_url').$temp->canvas_json,
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "GET",
				  CURLOPT_HTTPHEADER => array(
				    "cache-control: no-cache",
				    "postman-token: 1995439f-17c4-5db1-9b8c-35a62bae9898"
				  ),
				));

				$response = curl_exec($curl);
				$card_design=json_decode($response);
				foreach ($card_design as $key=>$value) {
					//print_r($key);die;
					if($key == '0'){
						$card_data['size_detail']=json_decode($value);
						///print_r($card_data);die;
					}else{
						$card_data['card_detail']=$value->objects;
					}
					
					
				}

				$business['card_design']=$card_data;
				//print_r($business);die;


//print_r();die;
 		}
         // print_r($business);die;

           return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'data..',
				'data' => $business
				]);	


    }






















  
}










