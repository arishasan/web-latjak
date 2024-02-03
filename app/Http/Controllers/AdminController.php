<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{	
	public function __construct(){

	}
    
    public function index(Request $req){
        // print_r(Session::get('akses_sekolah'));
        // exit();
        $data = [

        ];
        return view('admin.pages.dashboard.index')->with($data);
    }

    public function devices(Request $req){
        // print_r(Session::get('akses_sekolah'));
        // exit();
        $data = [

        ];
        return view('admin.pages.devices.index')->with($data);
    }

    public function users(Request $req){
        // print_r(Session::get('akses_sekolah'));
        // exit();
        $data = [

        ];
        return view('admin.pages.users.index')->with($data);
    }

}
