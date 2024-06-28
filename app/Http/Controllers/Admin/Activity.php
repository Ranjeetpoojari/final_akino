<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\ActivityDetail;

class Activity extends Controller{ 
    
    public function index(Request $request, $id = '')
    {
        $activities = ActivityDetail::where('title', '<>', null)->orderBy('id', 'desc')->paginate(15);
        return view('admin.activity.index', ["activity" => $activities]);
    }
    
    public function view(Request $request, $id)
    {
        $activity = ActivityDetail::find(decrypt($id));
        return view('admin.activity.create', ["activity" => $activity, "text" => "Update Activity"]);
    }
    public function viewpage(Request $request ,$id)
    {
        $activity = ActivityDetail::find(decrypt($id));
        return view('admin.activity.view',["activity" => $activity, "text" => "Update Activity"]);
    }
    
    public function create(Request $request)
    {
        return view('admin.activity.create', ["text" => "Create Activity"]);
    }
    
    public function store(Request $request)
    {
        // Validate your request here if needed
    
        if (isset($request->activity_id) && ($request->activity_id != null || $request->activity_id != "")) {
            $activity = ActivityDetail::find($request->activity_id);
        } else {
            $activity = new ActivityDetail;
        }
    
        if ($request->hasFile('Main_image')) {
            $fileName = time() . $request->Main_image->getClientOriginalName();
            $destinationPath = public_path() . '/activity/';
            $request->Main_image->move($destinationPath, $fileName);
            $activity->Main_image = '/activity/' . $fileName;
        }
          if ($request->hasFile('index_banner')) {
            $fileName = time() . $request->index_banner->getClientOriginalName();
            $destinationPath = public_path() . '/activity/';
            $request->index_banner->move($destinationPath, $fileName);
            $activity->index_banner = '/activity/' . $fileName;
        }
        // $activity->video = $request->video;
        $activity->title = $request->title;
        $activity->slug = $request->slug;
        $activity->location = $request->location;
        $activity->activity_date = $request->activity_date;
        $activity->description = $request->description;
      
        $activity->is_active = "active";

        $activity->save();
    
        return back()->with(["status" => "success", "msg" => "Activity created successfully"]);
    }
    public function changeStatus($status, $id){
        $language = ActivityDetail::find(decrypt($id));
        $language->is_active = $status;
        $language->save();
        return back()->with(["status"=>"success", "msg"=>"Language inactive"]);
    }
    public function deleteactivity($id){
        $activity = ActivityDetail::find($id);
        if (!$activity) {
            abort(404, 'Blog post not found');
        }
        $activity->delete();
        return redirect()->back()->with('success', 'Blog post deleted successfully');
    }
 
}
