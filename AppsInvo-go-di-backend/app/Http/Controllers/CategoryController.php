<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Category;
use App\SubCategory;
use App\Advertisement;
use PDF;
use Excel;
use DB;

class CategoryController extends Controller
{
    public function getAll(Request $request){

		$categories = DB::table('template_categories')->get();
		
		if(count($categories) != '0'){
			foreach ($categories as $value) {
				$value->temp = DB::table('template')->where('cat_id',$value->tempcat_id)->count();
				//print_r($value->tempcat_id);die;
			}
		}
		//print_r($categories);die;
		return view('categories', compact('categories'));
	}

	
	

	public function delCategory(Request $request, $id = null){
		if(is_null($id)){
			$request->session()->flash('dangerMessage', '<b>Deletion failed!</b> Please try again.');
			return redirect()->route('admin-categories');
		}
	
		DB::table('template_categories')
					->where('tempcat_id', $id)
					->delete();

			$request->session()->flash('successMessage', 'Category successfully deleted.');
		
		return redirect()->route('admin-categories');
	}

	public function addCategory(Request $request){
		$validator = Validator::make($request->all(), [
            'category_name' => 'required',
            'price' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

       
       DB::table('template_categories')->insert([
						'tempcat_name' => $request->category_name,
						'price' => $request->price,
					]);
        	

			
	

		
			$request->session()->flash('successMessage', 'Category successfully created.');
		
		
		return back();
	}

	public function editCategory(Request $request){
		$validator = Validator::make($request->all(), [
            'category_name' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
//print_r($request->all());die;

        DB::table('template_categories')
					->where('tempcat_id', $request->id)
					->update([
						'tempcat_name' => $request->category_name,
						'price' => $request->price]);

			$request->session()->flash('successMessage', 'Category successfully updated.');
		
		return back();
	}
 	


}
