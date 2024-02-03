<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use DB;
use Session;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    
    public function __construct(){

    }

    public function showFormLogin(){
    	if(Auth::check()) {
    		return redirect()->route('dashboard');
    	}
    	return view('admin.login');
    }

    public function login(Request $req){

		return redirect()->route('dashboard');
		exit();
        
    	$rules = [
    		'email' => 'required|string',
    		'password' => 'required|string'
    	];

    	$messages = [
    		'email.required' => 'Username wajib diisi!',
    		'password.required' => 'Password wajib diisi!',
    	];

    	$validator = Validator::make($req->all(), $rules, $messages);

    	if($validator->fails()){
    		return redirect()->back()->withErrors($validator)->withInput($req->all());
    	}

    	$data = [
    		'email' => $req->input('email'),
    		'password' => $req->input('password'),
			'status' => 'ACTIVE'
    	];

        // $fieldType = filter_var($req->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    	Auth::attempt(
			array(
				// $fieldType => $req->input('email'), 
                'email' => $req->input('email'), 
				'password' => $req->input('password'),
				'status' => 'ACTIVE'
			)
		);

    	if(Auth::check()){

            $user = User::find(Auth()->user()->id);
			$user->last_login = Carbon::now();
            $user->save();

			// $temp_akses = [];


			// foreach ($get_akses as $key => $value) {
			// 	array_push($temp_akses, $value->id_sekolah);
			// }

			// Session::put('akses_sekolah', $temp_akses);

    		return redirect()->route('dashboard');

    	}else{
    		Session::flash('error', 'Username atau Password salah.');
    		return redirect()->route('login');
    	}
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }


}
