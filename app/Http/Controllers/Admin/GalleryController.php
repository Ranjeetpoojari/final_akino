<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Album;
use App\Models\Gallery;


class GalleryController extends Controller{


    public function index(Request $request, $id=''){
        $test = Album::where('name', '<>', null)->orderBY('id', 'desc')->paginate(15);  
        return view('admin.gallery.index', ["gallery"=>$test]);
    }

    public function view(Request $request, $id){
        $faq = Testimonial::find(decrypt($id));   
        return view('admin.gallery.create', ["faqs"=>$faq, "text"=>"Update Testimonial"]);
    }

    public function createAlbum(Request $request){
        return view('admin.gallery.createAlbum', ["text"=>"Create Album"]);
    }
    public function create(Request $request,$id){
        return view('admin.gallery.create', ["album_id"=>decrypt($id), "text"=>"Create Gallery"]);
    }

    public function editAlbum($id){
        $album = Album::find(decrypt($id));
        return view('admin.gallery.createAlbum', ["text"=>"Create Album", "album"=>$album]);
    }

    public function storeAlbum(Request $request){
        if(isset($request->album_id) && ($request->album_id != null || $request->album_id != "")){
            $al =  Album::find($request->album_id);
        }else{
            $al = new Album;
        }
        $al->name = $request->name;
        $al->date = $request->date;
        if(isset($request->is_active) && ($request->is_active != null || $request->is_active != "")){
            $active = $request->is_active;
        }else{
            $active = "active";
        }
        $al->is_active = $active;
        $al->save();
        return back()->with(["status"=>"success", "msg"=>"Album created successfull"]);
    }

    public function store(Request $request){
        // return $request;
        if ($request->hasFile('images')) {
            foreach ($request['images'] as $images) {
                $test = new Gallery;
                $fileName = time().$images->getClientOriginalName();
                $destinationPath = public_path().'/gallery/';
                $images->move($destinationPath, $fileName);

                $test->image = '/gallery/'.$fileName;
                $test->album_id = $request->album_id;
                $test->type = $request->type;
                $test->is_active = "active";
                $test->save();
              
            }
        }
      
        return back()->with(["status"=>"success", "msg"=>"Gallery created successfull"]);
        
    }

    public function deleteGallary($id){
        $ga = Gallery::find($id);
        if($ga){
            $ga->delete();
            return ["status"=>"success"];
        }else{
            return ["status"=>"falied"];
        }
    }

 

    public function impactIndex(Request $request, $id=''){
        $test = Impact::where('name', '<>', null)->orderBY('id', 'desc')->paginate(15);  
        return view('admin.impact.index', ["impact"=>$test]);
    }

    public function impactView(Request $request, $id){
        $faq = Impact::find(decrypt($id));   
        return view('admin.impact.create', ["faqs"=>$faq, "text"=>"Update Impact"]);
    }

    public function impactCreate(Request $request){
        return view('admin.impact.create', ["text"=>"Create Impact"]);
    }

    public function impactStore(Request $request){
        // return $request;
        if(isset($request->impact_id) && ($request->impact_id != null || $request->impact_id != "")){
            $test = Impact::find($request->impact_id);
        }else{
            $test = new Impact;
        }
        if (!empty($request->images)) {
            $fileName = time().$request->images->getClientOriginalName();
            $destinationPath = public_path().'/impact/';
            $request->images->move($destinationPath, $fileName);
            $test->image = '/impact/'.$fileName;
        }
        
        $test->name = $request->name;
        $test->total_number = $request->total_number;
        $test->description = $request->description;
        $test->top_head = $request->top_head;
        $test->is_active = "active";
        $test->save();
        return back()->with(["status"=>"success", "msg"=>"Impact created successfull"]);
        
    }

    public function showGallery($id){
        $album = Album::find(decrypt($id));
        $images = Gallery::where('album_id', $album->id)->get();
        return view('admin.gallery.show_gallery', ["text"=>"Create Impact", "album"=>$album, "images"=>$images]);
    }

 
    

 
   

}