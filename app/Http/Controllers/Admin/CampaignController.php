<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DocumentDetail;
use App\Models\CampaignDetail;
use App\Models\Subcategory;


class CampaignController extends Controller {

    public function index(Request $request){
        $cd = CampaignDetail::orderBy("id", 'desc')->paginate(15);
        return view("admin.campaign.index", ["campaigns"=>$cd]);
    }
    
    public function create(Request $request){
        return view("admin.campaign.create", ["text"=>"Create New Campaign"]);
    }

    public function edit($id){
        $campaign_id = decrypt($id);
        $cd = CampaignDetail::find($campaign_id);
        return view("admin.campaign.edit", ["text"=>"Update Campaign", "campaign"=>$cd]);
    }

    public function store(Request $request){
        $cd = new CampaignDetail;
        $cd->title = $request->title;
        $cd->short_description = $request->short_description;
        $cd->description = $request->description;
        if ($request->hasFile('main_image')) {
            $fileName = time().$request->main_image->getClientOriginalName();
            $destinationPath = public_path().'/campaign/';
            $request->main_image->move($destinationPath, $fileName);
            $cd->main_image = '/campaign/'.$fileName;
        }
        $cd->meta_description = $request->short_description;
        $cd->fund_amount = $request->fund_amount;
        $cd->campiagn_type = $request->campiagn_type;
        $cd->description = $request->description;
        $cd->status = "created";
        $cd->is_active = $request->is_active;
        $cd->is_direct = $request->is_direct;
        $cd->save();
        $subcategory = Subcategory::find($request->campiagn_type);
        if ($subcategory) {
            $cd->camp_name = $subcategory->name;
            $cd->save();
        }
        return redirect("/admin/campaign/document/create/".encrypt($cd->id))->with(["status"=>"success", "msg"=>"Campiagn created successfull"]);

    
    }

    public function update(Request $request){
        $cd = CampaignDetail::find($request->id);
        $cd->title = $request->title;
        $cd->short_description = $request->short_description;
        $cd->description = $request->description;
        if ($request->hasFile('main_image')) {
            $fileName = time().$request->main_image->getClientOriginalName();
            $destinationPath = public_path().'/campaign/';
            $request->main_image->move($destinationPath, $fileName);
            $cd->main_image = '/campaign/'.$fileName;
        }
        
        $cd->meta_description = $request->short_description;
        $cd->fund_amount = $request->fund_amount;
        $cd->campiagn_type = $request->campiagn_type;
        $cd->is_active = $request->is_active;
        $cd->is_direct = $request->is_direct;
        $cd->save();
        $subcategory = Subcategory::find($request->campiagn_type);
        if ($subcategory) {
            $cd->camp_name = $subcategory->name;
            $cd->save();
        }
        return back()->with(["status"=>"success", "msg"=>"Campiagn Updated successfull"]);;

    }

    public function documentCreate(Request $request, $id){
        $campaign_id = decrypt($id);
        return view("admin.campaign.documents-create", ["campaign_id"=>$campaign_id, "text"=>"Create New Campaign"]);
    }

    public function documentStore(Request $request){
        // return $request;
        if ($request->hasFile('attachment')) {
            foreach ($request['attachment'] as $images) {
                $dd = new DocumentDetail;
                $fileName = time().$images->getClientOriginalName();
                $destinationPath = public_path().'/campaign/documents/';
                $images->move($destinationPath, $fileName);

                $dd->attachment = '/campaign/documents/'.$fileName;
                $dd->name = $request->name;
                $dd->campaign_id = $request->campaign_id;
                $dd->is_active = "active";
                $dd->save();
            }
        }
        return back()->with(["status"=>"success", "msg"=>"Campiagn created successfull"]);;
    }


    public function documentView($id){
        $campaign_id = decrypt($id);
        $dd = DocumentDetail::where('campaign_id', $campaign_id)->get();
        return view('admin.campaign.view-documents', ["documents"=>$dd, "campaign_id"=>$campaign_id]);
    }

    public function documentDelete($id){
        $dd = DocumentDetail::find($id);
        if($dd){
            $dd->delete();
            echo "success";
        }else{
            echo "failed";
        }
    }
   

}