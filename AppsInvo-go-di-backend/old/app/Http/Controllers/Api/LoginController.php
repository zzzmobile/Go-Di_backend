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
			
			return response()->json([
				'errorCode' => '0',
				'errorMsg'  => 'Successfully Login.',
				'data'		=>	[array_map(function($v){
						return (is_null($v)) ? "" : (is_array($v)) ? $v : (String)$v;
					},[
							'serviceKey'		=> $users->service_key,
							'userId'			=> $users->id,
							'firstName'			=> $users->first_name,
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

			return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Successfully Registered.',
				'data'		=>	[array_map(function($v){
							return (is_null($v)) ? "" : (is_array($v)) ? $v : (String)$v;
						},[
									'serviceKey'		=> $users->service_key,
									'userId'			=> $users->id,
									'firstName'			=> $users->first_name,
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
			     ->update(['device_token'=> NULL]);

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



			  return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Successfully..',
				'instalCount'		=>(string)$count	
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




    public function getCategoryBusinesscard(Request $request)
    {    

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
					foreach ($temp as $value_temp) {
						$business[]=array(
							'id'=>(string)$value_temp->template_id,
							'name'=>$value_temp->template_name,
							'image'=>env('card_url').$value_temp->canvas_thumbnail,
							'business_card_json'=>env('card_url').$value_temp->canvas_json,
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










