<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
	public function index(){
		    return view('home.home');
	}
  public function Blog(){
   	return view('home.pages.blog');
   }
   public function About(){
   	return view('home.pages.about');
   }
      public function Contact(){
   	return view('home.pages.contact');
   }
     public function Projects(){
   	return view('home.pages.projects');
   }
}
