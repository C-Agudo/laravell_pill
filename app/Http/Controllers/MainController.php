<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function welcome(){
        return view('welcome');
    }
    public function contact(Request $request){
        if($request->isMethod('post')){
            echo "Estoy recibiendo por post";
        }
        if($request->isMethod('get')){
            return view('contact');
        }      
    }
}
