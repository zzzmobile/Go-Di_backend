<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use DB;

class LoginController extends Controller
{
    public function logout(){
		Auth::logout();
		return redirect()->route('admin-login');
	}

	/**
     * Handle an authentication attempt.
     *
     * @return Response
     */
	public function authenticate(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
		]); 
		
		$email = $request->email;
		$password = $request->password;
		
		$user = DB::table('users')->where(['email' => $email, 'password' => md5($password)])->where('user_type','2')->first();
		if (!is_null($user)) {
		
				Auth::loginUsingId($user->id, false);
			return redirect()->route('admin-business_card');
			

		}
		else{
			// Authentication failed...
			$request->session()->flash('dangerMessage', '<b>Login failed!</b> Email or Password are incorrect.');
			return back();
		}
	}

	public function changePassword(Request $request){
		$this->validate($request, [
			'old_password' => 'required',
			'new_password' => 'required|min:8|max:20',
			'confirm_password' => 'required|same:new_password'
		]);
		
		if(Auth::user()->password != md5($request->old_password)){
			$request->session()->flash('dangerMessage', '<b>Failed!</b> Old password is invalid.');
			return back();
		}
		
		$password = $request->new_password;
		$userId = Auth::user()->id;
		$user = User::find($userId);
		$user->password = md5($password);
		if($user->save()){
			$request->session()->flash('successMessage', 'Password changed!');
		}
		else{
			$request->session()->flash('dangerMessage', '<b>Failed!</b> Please try again.');
		}
		return back();
	}

	public function forgot(Request $request){
		$validator = Validator::make($request->all(), [
			'email' => 'required|email'
		]);
		
		if ($validator->fails()) {
        	return response()->json([
				'errorCode' => '1',
				'errorMsg' => $validator->errors()->first(),
			]);
        }
		
		$user = User::where('email', $request->email)
								->where('user_type', '2')
								->first();
		if(is_null($user)){
			return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Email is not registered.',
			]);
		}

		$password = $this->generateServiceKey(4);
		$user->password = md5($password);
		if($user->save()){
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <info@qwikfarm.com>' . "\r\n";

			// Send mail
			mail($user->email, 'Forgot Password', "Your password is : " . $password, $headers);


			$request->session()->flash('successMessage', 'Password sent to your email.');

			return response()->json([
				'errorCode' => '0',
				'errorMsg' => 'Password sent to your email.',
			]);
		}

		return response()->json([
				'errorCode' => '1',
				'errorMsg' => 'Something went wrong. Please try again.',
			]);
	}
}
