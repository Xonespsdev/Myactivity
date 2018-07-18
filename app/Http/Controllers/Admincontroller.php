<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
    	return view('admin.dashboard');
    }
     public function Profile(){
    	return view('admin.profile.index');
    }
    public function Blog(){
    	return view('admin.blogs.index');
    }
}
