<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use App\Models\PanditProfile;
use App\Models\PanditPujaMap;


class AuthController extends Controller{

    public function signin(){
        return view('admin.login');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = ['email' => $request->email, 'password' => $request->password];
        if (Auth::attempt($credentials)) {
            return redirect("admin/dashboard")->with(["status"=>"success", "msg"=>"Login Success"]);
        }
        return redirect("admin/login")->with(["status"=>"failed", "msg"=>"invalid username"]);

    }

    public function logout(){
        Session::flush();
        return redirect('/admin/login');
    }

    

}