<?php

namespace App\Http\Controllers\admin;
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subsubcategory;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
    public function index(Request $request, $id = '')
    {
       $subsubcategory = Subsubcategory::where('title', '<>', null)->orderBy('id', 'desc')->paginate(15);
        return view('admin.subsubcategory.index', ["subsubcategory" =>$subsubcategory]);
    }
    
    public function view(Request $request, $id)
    {
       $subsubcategory = Subsubcategory::find(decrypt($id));
       $subcat = Subcategory::all();
        return view('admin.subsubcategory.create', ["subsubcategory" =>$subsubcategory, "text" => "Update ourwork","subcat"=>$subcat,]);
    }
    
    public function create(Request $request)
    {
        
        $subcat = Subcategory::all();
        return view('admin.subsubcategory.create', ["text" => "Create ourwork","subcat"=>$subcat,]);
    }
    
 
    public function store(Request $request)
    {
        // Validate your request here if needed
    
        if (isset($request->ourwork_id) && ($request->ourwork_id != null || $request->ourwork_id != "")) {
           $Subsubcategory = Subsubcategory::find($request->ourwork_id);
        } else {
           $Subsubcategory = new Subsubcategory;
        }
    
        if ($request->hasFile('main_image')) {
            $fileName = time() . $request->file('main_image')->getClientOriginalName();
            $destinationPath = public_path() . '/ourwork/';
            $request->file('main_image')->move($destinationPath, $fileName);
           $Subsubcategory->main_image = '/ourwork/' . $fileName;
        }
        if ($request->hasFile('banner')) {
            $fileName = time() . $request->file('banner')->getClientOriginalName();
            $destinationPath = public_path() . '/ourwork/';
            $request->file('banner')->move($destinationPath, $fileName);
            $Subsubcategory->banner = '/ourwork/' . $fileName;
        }
    
       $Subsubcategory->title = $request->title;
       $Subsubcategory->slug = $request->slug;
       $Subsubcategory->category = $request->category;
    
        // Search for the Subcategory based on the category name
        $subcategory = Subcategory::where('name', $request->category)->first();
    
        if ($subcategory) {
            // If a matching subcategory is found, save its id as subcategory_id
           $Subsubcategory->subcategory_id = $subcategory->id;
        } else {
           $Subsubcategory->subcategory_id = null;
        }
    
       $Subsubcategory->slogan = $request->slogan;
       $Subsubcategory->description = $request->description;
       $Subsubcategory->total = $request->total;
       $Subsubcategory->is_active = "active";
       $Subsubcategory->save();
    
        $imagePath =$Subsubcategory->main_image;
        return back()->with(["status" => "success", "msg" => "ourwork created successfully"]);
    }
    public function changeStatus($status, $id)
    {
        $language = Subsubcategory::find(decrypt($id));
        $language->is_active = $status;
        $language->save();
        return back()->with(["status" => "success", "msg" => "Language inactive"]);
    }

    public function deleteourwork($id)
    {
       $Subsubcategory = Subsubcategory::find($id);
        if (!$subsubcategory) {
            abort(404, 'ourwork post not found');
        }
       $Subsubcategory->delete();
        return redirect()->back()->with('success', 'ourwork post deleted successfully');
    }
   //
}
