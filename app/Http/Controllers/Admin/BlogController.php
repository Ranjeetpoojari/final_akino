<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index(Request $request, $id = '')
    {
        $blog = Blog::where('title', '<>', null)->orderBy('id', 'desc')->paginate(15);
        return view('admin.blog.index', ["blog" => $blog]);
    }
    
    public function view(Request $request, $id)
    {
        $blog = Blog::find(decrypt($id));
        return view('admin.blog.create', ["blog" => $blog, "text" => "Update Blog"]);
    }
    
    public function create(Request $request)
    {
        return view('admin.blog.create', ["text" => "Create Blog"]);
    }
    
 
    public function store(Request $request)
    {
        // Validate your request here if needed
    
        if (isset($request->blog_id) && ($request->blog_id != null || $request->blog_id != "")) {
            $blog = Blog::find($request->blog_id);
        } else {
            $blog = new Blog;
        }
    
        // Update the file input name to match the form
        if ($request->hasFile('main_images')) {
            $fileName = time() . $request->file('main_images')->getClientOriginalName();
            $destinationPath = public_path() . '/blog/';
            $request->file('main_images')->move($destinationPath, $fileName);
            $blog->main_images = '/blog/' . $fileName;
        }
    
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->content = $request->content;
        $blog->views = $request->views;
        $blog->type = $request->type ? $request->type : 'blog';
        $blog->blog_date = $request->blog_date;
        $blog->is_active = "active";
        $blog->save();
        $imagePath = $blog->main_images;
        return back()->with(["status" => "success", "msg" => "Blog created successfully"]);
    }
    public function changeStatus($status, $id)
    {
        $language = Blog::find(decrypt($id));
        $language->is_active = $status;
        $language->save();
        return back()->with(["status" => "success", "msg" => "Language inactive"]);
    }

    public function deleteblog($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            abort(404, 'Blog post not found');
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Blog post deleted successfully');
    }
}
