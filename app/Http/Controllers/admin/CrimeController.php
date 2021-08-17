<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrimeController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function crime_category(){
        $data['page_title'] = "Crime Category";
        return view('admin.crime-category',$data);
    }

    public function add_crime_category(){
        $data['page_title'] = "Add Crime Category";
        return view('admin.add-crime-category',$data);
    }

    public function create_new_crime_category(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|unique:category|min:3|max:200',
            'code'=>'required',
            'crime_penalty'=>'required'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }

        Category::create([
           'name'=>$request->name,
           'crime_code'=>$request->code,
           'crime_penalty'=>$request->crime_penalty
        ]);

        return back()->with('flash_info','Crime category has been added successfully');
    }

    public function edit_crime_category(Category $category){
        $data['page_title'] = "Edit Crime Category";
        $data['crime'] = $category;
        return view('admin.edit-crime-category',$data);
    }

    public function update_crime_category(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3|max:200',
            'code'=>'required',
            'crime_penalty'=>'required'
        ]);

        if ($validator->fails()){

            $msg = (count($validator->errors()->all()) == 1) ? 'An error occurred' : 'Some error(s) occurred';

            foreach ($validator->errors()->all() as $value){
                $msg.='<p>'.$value.'</p>';
            }

            return redirect()->back()->with('flash_error',$msg)->withInput();

        }


        $crime = Category::find($request->id);
        $crime->name = $request->name;
        $crime->crime_code = $request->code;
        $crime->crime_penalty = $request->crime_penalty;

        if ($crime->save()){
            return back()->with('flash_info','Crime category has been updated successfully');
        }

    }

    public function crime_reporting(){
        $data['page_title'] = "Crime Reporting";
        return view('admin.crime-reporting',$data);
    }
}
