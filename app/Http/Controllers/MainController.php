<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

use Illuminate\Http\Request;
use App\Articles;



function convertToSlug($string){
    $valueSearch = ' ';
    $valueReplace = '_';
    $correctStr = str_replace($valueSearch, $valueReplace, $string );
    return strtolower($correctStr);
}


class MainController extends Controller
{
    //

    
    public function home(){
        $items = Articles::paginate(3);
        return view('home', compact('items'));
    }
    public function welcome(){
        return view('welcome');
    }
    public function contact(Request $request){
        if($request->isMethod('post')){
            $validate = $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|string|email',
                'tel' => 'int',
                'consult' => 'required|string|min:55'
            ]);
            if($validate){
                $contact=$request->all();
                Mail::to($request->get('email'))->send( new ContactMail($contact));
                return back()->with('message', 'Message send properly');
                
            }
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

    public function newArticle(Request $request){
        $title = $request->input('title');
        $article = DB::table('articles')->insertGetId(array(
            'user_id'=>1,
            'title'=> $title,
            'summary'=> $request->input('summary'),
            'content'=> $request->input('content'),
            'slug'=> convertToSlug($title),
        ));
        $items = Articles::paginate();
        return view('home', compact('items'));
    }
}
