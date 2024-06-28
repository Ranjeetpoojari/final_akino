<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Volunteer;

class VolunteerdetailController extends Controller
{
    //
    public function index(Request $req , $id=''){
        $volunteer = Volunteer::where('name', '<>', null)->orderBY('id', 'desc')->paginate(15);
        return view('admin.volunteer.index',["volunteer"=>$volunteer]);
    }
}
