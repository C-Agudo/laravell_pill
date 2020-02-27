<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

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
        $items = Articles::paginate(3);
        return view('articles', compact('items'));
    }
    public function article($slug){
        $item = Articles::where('slug','like',$slug)->get();
        return view('article', compact('item'));
    }
}
