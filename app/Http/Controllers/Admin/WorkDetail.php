<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\OurWorkDetail;
use App\Models\Subcategory;

class WorkDetail extends Controller
{
public function index(Request $request, $id = '')
    {
        $ourwork = OurWorkDetail::where('title', '<>', null)->orderBy('id', 'desc')->paginate(15);
        return view('admin.ourwork.index', ["ourwork" => $ourwork]);
    }
    
    public function view(Request $request, $id)
    {
        $ourwork = OurWorkDetail::find(decrypt($id));
        $subcat = Subcategory::all();
        return view('admin.ourwork.create', ["ourwork" => $ourwork,"subcat"=>$subcat, "text" => "Update ourwork"]);
    }
    
    public function create(Request $request)
    {
        $subcat = Subcategory::all();
        return view('admin.ourwork.create', ["text" => "Create ourwork","subcat"=>$subcat,]);
    }
    
 
    public function store(Request $request)
    {
        // Validate your request here if needed
    
        if (isset($request->ourwork_id) && ($request->ourwork_id != null || $request->ourwork_id != "")) {
            $ourwork = OurWorkDetail::find($request->ourwork_id);
        } else {
            $ourwork = new OurWorkDetail;
        }
    
        if ($request->hasFile('main_image')) {
            $fileName = time() . $request->file('main_image')->getClientOriginalName();
            $destinationPath = public_path() . '/ourwork/';
            $request->file('main_image')->move($destinationPath, $fileName);
            $ourwork->main_image = '/ourwork/' . $fileName;
        }
    
        $ourwork->title = $request->title;
        $ourwork->slug = $request->slug;
        $ourwork->category = $request->category;
    
        // Search for the Subcategory based on the category name
        $subcategory = Subcategory::where('name', $request->category)->first();
    
        if ($subcategory) {
            // If a matching subcategory is found, save its id as subcategory_id
            $ourwork->subcategory_id = $subcategory->id;
        } else {
            $ourwork->subcategory_id = null;
        }
    
        $ourwork->slogan = $request->slogan;
        $ourwork->description = $request->description;
        $ourwork->total = $request->total;
        $ourwork->is_active = "active";
        $ourwork->save();
    
        $imagePath = $ourwork->main_image;
        return back()->with(["status" => "success", "msg" => "ourwork created successfully"]);
    }
    public function changeStatus($status, $id)
    {
        $language = OurWorkDetail::find(decrypt($id));
        $language->is_active = $status;
        $language->save();
        return back()->with(["status" => "success", "msg" => "Language inactive"]);
    }

    public function deleteourwork($id)
    {
        $ourwork = OurWorkDetail::find($id);
        if (!$ourwork) {
            abort(404, 'ourwork post not found');
        }
        $ourwork->delete();
        return redirect()->back()->with('success', 'ourwork post deleted successfully');
    }
}


