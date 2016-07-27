<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Auth;
use App\AdminPagesModel;
use App\Http\Requests;
use App\Http\Requests\AdminPagesRequest;
use Carbon\Carbon;

class AdminPagesController extends Controller
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
  $pages = AdminPagesModel::latest('published_at')->get();
  return view('admin.pages.pages_show', compact('pages'));
  //return view('articles')->with('articles', $articles);
  }


  public function addphoto()
  {

  return  'work';

  }

  public function create()
  {

    return view('admin.pages.page_create');
    //return view('articles')->with('articles', $articles);
  }

  public function store(AdminPagesRequest $request)
  {

    session()->flash('flash_message', 'Новая страница успешно создана!');
    AdminPagesModel::create($request->all());
    return redirect('admin/pages');


  }

  public function edit($id)
  {
    $page = AdminPagesModel::findOrFail($id);
    return view('admin.pages.page_edit',  compact('page'));
    //return view('articles')->with('articles', $articles);

  }


  public function update($id, AdminPagesRequest $request)
  {
    $page = AdminPagesModel::findOrFail($id);
    $page->update($request->all());
    return redirect('admin/pages');
    //return view('articles')->with('articles', $articles);

  }
}
