<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Impact;
use App\Models\Blogs;


class TestimonialController extends Controller{


    public function index(Request $request, $id=''){
        $test = Testimonial::where('name', '<>', null)->orderBY('id', 'desc')->paginate(15);  
        return view('admin.testimonial.index', ["testimonial"=>$test]);
    }

    public function view(Request $request, $id){
        $faq = Testimonial::find(decrypt($id));   
        return view('admin.testimonial.create', ["faqs"=>$faq, "text"=>"Update Testimonial"]);
    }

    public function create(Request $request){
        return view('admin.testimonial.create', ["text"=>"Create Testimonial"]);
    }

    public function store(Request $request){
        // return $request;
        if(isset($request->testimonial_id) && ($request->testimonial_id != null || $request->testimonial_id != "")){
            $test = Testimonial::find($request->testimonial_id);
        }else{
            $test = new Testimonial;
        }
        if (!empty($request->images)) {
            $fileName = time().$request->images->getClientOriginalName();
            $destinationPath = public_path().'/testimonial/';
            $request->images->move($destinationPath, $fileName);
            $test->image = '/testimonial/'.$fileName;
        }
        
        $test->name = $request->name;
        $test->email = $request->email;
        $test->mobile = $request->mobile;
        $test->message = $request->message;
        $test->is_active = "active";
        $test->save();
        return back()->with(["status"=>"success", "msg"=>"Testimonial created successfull"]);
        
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

    public function blogsIndex(Request $request, $id = '')
    {
        $blogs = Blogs::where('name', '<>', null)->orderBy('id', 'desc')->paginate(15);
        return view('admin.blogs.index', ["blogs" => $blogs]);
        // $blogs = Blogs::where('name', '<>', null)->orderBy('id', 'desc')->paginate(15);
        // return view('admin.blogs.index');
    }

    public function blogsView(Request $request, $id)
    {
        $blogs = Blogs::find(decrypt($id));   
        return view('admin.blogs.create', ["faqs" => $blogs, "text" => "Update Blogs"]);
    }

    public function blogsCreate(Request $request)
    {
        return view('admin.blogs.create', ["text" => "Create Blogs"]);
    }

    public function blogsStore(Request $request)
    {
        $test = isset($request->blog_id) ? Blogs::find($request->blog_id) : new Blogs;

        if (!empty($request->images)) {
            $fileName = time() . $request->images->getClientOriginalName();
            $destinationPath = public_path('/blogs/');
            $request->images->move($destinationPath, $fileName);
            $test->image = '/blogs/' . $fileName;
        }

        $test->name = $request->name;
        $test->image = $request->image;
        $test->blogs = $request->blogs;
        // $test->top_head = $request->top_head;
        $test->is_active = "active";
        $test->save();

        return back()->with(["status" => "success", "msg" => "Blog created successfully"]);
    }

 
    

 
   

}