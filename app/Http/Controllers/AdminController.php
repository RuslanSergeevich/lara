<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
  public function __construct()
  {
     //аутентификация только для создания статей
     $this->middleware('auth');
     // Alternativly
     //$this->middleware('auth', ['except' => ['index', 'show']]);
  }

  public function index()
  {
    //$articles = Article::all(); //
    //$articles = Article::latest('published_at')->where('enabled', '=', '1')->get();
    //return view('articles', compact('articles'));
    return view('admin.dashboard');;
    //return view('articles')->with('articles', $articles);
  }
}
