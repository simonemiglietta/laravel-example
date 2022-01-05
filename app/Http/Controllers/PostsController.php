<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');  
    }
    public function create(){
//fa riferimento alla view nella cartella posts 
        return view('posts.create');
    }
    public function store()
    {
        //fa riferimento alla view nella cartella posts 
               $data = request()->validate([
                   'caption' => 'required',
                   'image' => ['required','image'],
               ]);
               // save only the path into db, the real file is on server folder
               $imagePath = request('image')->store('uploads','public');

               auth()->user()->posts()->create([
                   'caption' => $data['caption'],
                   'image' => $imagePath,

               ]);
               return redirect('/profile/' .auth()->user()->id);
            }
}
