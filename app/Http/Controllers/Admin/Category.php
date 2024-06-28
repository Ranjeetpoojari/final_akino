<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subcategory;
use App\Models\LocaAtion;
use App\Models\Language;
use App\Models\Country;


class Category extends Controller{


    public function index(Request $request, $id=''){
        $category = Subcategory::where('name', '<>', null)->orderBY('id', 'desc')->paginate(15);  
        return view('admin.category.index', ["category"=>$category]);
    }

    public function createCategory(Request $request){
        return view('admin.category.create');
    }

    public function edit($id){
        return view('admin.category.edit', ["category"=>Subcategory::find(decrypt($id))]);
    }

    public function store(Request $request){
        $category = new Subcategory;
        if (!empty($request->banner)) {
            $fileName = time().$request->banner->getClientOriginalName();
            $destinationPath = public_path().'/category/';
            $request->banner->move($destinationPath, $fileName);
            $category->banner = "/category/".$fileName;
        }
        if (!empty($request->icon)) {
            $fileName = time().$request->icon->getClientOriginalName();
            $destinationPath = public_path().'/category/';
            $request->icon->move($destinationPath, $fileName);
            $category->icon = "/category/".$fileName;
        }
        $category->category_id = 2;
        $category->name = $request->name;
        $category->slug = str_replace(" ", "-", strtolower($request->name));
        $category->save();
        return back()->with(["status"=>"success", "msg"=>"Category created successfull"]);
        
    }

    public function update(Request $request){
        $category = Subcategory::find($request->subcategory_id);
        if (!empty($request->banner)) {
            $fileName = time().$request->banner->getClientOriginalName();
            $destinationPath = public_path().'/category/';
            $request->banner->move($destinationPath, $fileName);
            $category->banner = "/category/".$fileName;
        }
        if (!empty($request->icon)) {
            $fileName = time().$request->icon->getClientOriginalName();
            $destinationPath = public_path().'/category/';
            $request->icon->move($destinationPath, $fileName);
            $category->icon = "/category/".$fileName;
        }
        $category->name = $request->name;
        $category->slug = str_replace(" ", "-", strtolower($request->name));
        $category->save();
        return back()->with(["status"=>"success", "msg"=>"Category updated successfull"]);
        
    }

    

 
   

}