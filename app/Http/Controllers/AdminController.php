<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        # code . . .
        $data = Auth::user();
        // echo $data;
        if (!$data == "") {
            return view('admin/admin');
        } else {
            # code...
            return view('front');
        }
        
    }
}
