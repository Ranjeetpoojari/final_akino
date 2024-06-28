<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CompaignCategory;



class CompaignCategories extends Controller
{
    //
    public function index(Request $request, $id=''){
        $camp = CompaignCategory::where('title', '<>', null)->orderBY('id', 'desc')->paginate(15);  
        return view('admin.campagincategory.index', ["camp"=>$camp]);
    }

    public function createCategory(Request $request){
        return view('admin.campagincategory.create');
    }

    public function edit($id){
     $camp = CompaignCategory::find(decrypt($id));
        return view('admin.campagincategory.create', [ "camp" =>$camp ]);
    }

    // public function store(Request $request) {
 
    //     if (isset($request->id) && ($request->id != null || $request->id != "")) {
    //         $camp = CompaignCategory::find($request->id);
    //      } else {
    //         $camp = new CompaignCategory;
    //      }
    //     if ($request->hasFile('image')) {
    //         $fileName = time() . $request->image->getClientOriginalName();
    //         $destinationPath = public_path().'/camp/';
    //         $request->image->move($destinationPath, $fileName);
    //         $camp->image = "/camp/" . $fileName;
    //     }
      
    //     if ($request->hasFile('main_image')) {
    //         $fileName = time().$request->main_image->getClientOriginalName();
    //         $destinationPath = public_path().'/camp/';
    //         $request->main_image->move($destinationPath, $fileName);
    //         $cd->main_image = '/camp/'.$fileName;
    //     }
    //     $camp->title = $request->title;
    //     $camp->short_discription = $request->short_discription;
    //     $camp->is_active = 'active';
    //     $camp->slug = str_replace(" ", "-", strtolower($request->title)); // Corrected 'name' to 'title'
    //     $camp->save();
        
    //     return back()->with(["status" => "success", "msg" => "Campaign Category created successfully"]);
    // }
    public function store(Request $request) {
 
        $camp = new CompaignCategory;
    
        if ($request->hasFile('image')) {
            $imageFileName = time() . $request->image->getClientOriginalName();
            $destinationPath = public_path().'/camp/';
            $request->image->move($destinationPath, $imageFileName);
            $camp->image = "/camp/" . $imageFileName;
        }
      
        if ($request->hasFile('main_image')) {
            $mainImageFileName = time() . $request->main_image->getClientOriginalName();
            $destinationPath = public_path().'/camp/';
            $request->main_image->move($destinationPath, $mainImageFileName);
            $camp->main_image = '/camp/' . $mainImageFileName;
        }
    
        $camp->title = $request->title;
        $camp->short_discription = $request->short_discription; 
        $camp->is_active = 'active';
        $camp->slug = str_replace(" ", "-", strtolower($request->title)); 
        $camp->save();
        
        return back()->with(["status" => "success", "msg" => "Campaign Category created successfully"]);
    }
    

    public function update(Request $request){
        $camp = CompaignCategory::find($request->subcategory_id);
        if (!empty($request->banner)) {
            $fileName = time().$request->banner->getClientOriginalName();
            $destinationPath = public_path().'/category/';
            $request->banner->move($destinationPath, $fileName);
            $camp->banner = "/category/".$fileName;
        }
        if (!empty($request->icon)) {
            $fileName = time().$request->icon->getClientOriginalName();
            $destinationPath = public_path().'/category/';
            $request->icon->move($destinationPath, $fileName);
            $camp->icon = "/category/".$fileName;
        }
        $camp->name = $request->name;
        $camp->slug = str_replace(" ", "-", strtolower($request->name));
        $camp->save();
        return back()->with(["status"=>"success", "msg"=>"Category updated successfull"]);
        
    }
    public function delete($id)
    {
        $camp = CompaignCategory::find($id);
        if (!$camp) {
            abort(404, 'Campaign post not found');
        }
        $camp->delete();
        return redirect()->back()->with('success', 'Blog post deleted successfully');
    }
}
