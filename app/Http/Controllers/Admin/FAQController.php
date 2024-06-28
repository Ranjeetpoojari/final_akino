<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FAQDetail;


class FAQController extends Controller{


    public function index(Request $request, $id=''){
        $faq = FAQDetail::orderBY('position', 'asc')->paginate(15);   
        return view('admin.faq.index', ["faqs"=>$faq]);
    }

    public function view(Request $request, $id=''){
        $faq = FAQDetail::find(decrypt($id));   
        return view('admin.faq.create', ["faqs"=>$faq, "text"=>"Update FAQ"]);
    }

    public function create(Request $request){
            return view('admin.faq.create', ["text"=>"Create New"]);
    }

    public function changeStatus($status, $id){
        $language = FAQDetail::find(decrypt($id));
        $language->is_active = $status;
        $language->save();
        return back()->with(["status"=>"success", "msg"=>"Language inactive"]);
    }

    public function store(Request $request, $id=''){
        $position =0; 
        $check = FAQDetail::orderBy('position', 'desc')->first();
        if($check){
            if($check->position>=$request->position){
                $position = $check->position+1;
            }else{
                $position = $request->position;
            }
        }else{
            $position = $request->position;
        }
        if(!isset($request->faqs_id) && ($id == null || $id == "")){
            $faq = new FAQDetail;
        }else{
            $faq = FAQDetail::find($request->faqs_id);
        }
        $faq->question = $request->question;
        $faq->position = $position;
        $faq->answer = $request->answer;
        $faq->save();
        return back()->with(["status"=>"success", "msg"=>"FAQ created successfull"]);
    }

    

   
}