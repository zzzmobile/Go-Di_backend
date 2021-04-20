<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Advertisement;
use PDF;
use Excel;
use DB;

class UserController extends Controller
{
    public function getAll(Request $request){
		//get all users
		$categories = DB::table('template_categories')->get();
		//print_r($_GET['cat']);die;
		if(isset($_GET['cat'])){
		$template = DB::table('template')->where('cat_id',$_GET['cat'])->get();
		}else{
		$template = DB::table('template')->get();
		}
		
		//echo '<pre>';print_r();die;
		if(count($template) != '0'){
			foreach ($template as $value) {
				$category = DB::table('template_categories')->where('tempcat_id',$value->cat_id)->first();
				$value->category= $category->tempcat_name;
				$value->canvas_thumbnail= env('card_url').$value->canvas_thumbnail;


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
