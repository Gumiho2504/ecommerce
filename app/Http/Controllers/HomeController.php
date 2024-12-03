<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct(){

    }
     public function index(){
         $user = Auth::user();
         dump($user);
        return view('homes.home');
    }
    public function about(){
        return view('homes.about');
    }
    public function shop(){
        return view('homes.shop');
    }
    public function blog(){
        return view('homes.blog');
    }
    public function contact(){ return view('homes.contact');}
    public function cart(){
        return view('homes.cart');
    }
}
