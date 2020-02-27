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
            $validate = $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|string|email',
                'tel' => 'number',
                'consult' => 'required|string|min:55'
            ]);
        }
        if($request->isMethod('get')){
            return view('contact');
        }      
    }
    public function articles(){

        return view('articles');
    }
    public function article(){
        
        return view('article');
    }
}
