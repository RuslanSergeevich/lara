<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
<<<<<<< HEAD
//use Request;
use Auth;
use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;


class ArticlesController extends Controller
{

     public function __construct()
     {
        //аутентификация только для создания статей
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
        // Alternativly
        //$this->middleware('auth', ['except' => ['index', 'show']]);
     }

     public function index()
     {
       //$articles = Article::all(); //
       $articles = Article::latest('published_at')->where('enabled', '=', '1')->get();
=======
use Request;
use App\Article;
use App\Http\Requests;
use Carbon\Carbon;

class ArticlesController extends Controller
{
     public function index()
     {
       $articles = Article::all();
>>>>>>> d8c0326e181d08607813fa36679853dc347be8cb
       return view('articles', compact('articles'));
       //return view('articles')->with('articles', $articles);
     }

<<<<<<< HEAD
     public function show($slug)
     {
       //return $slug;
       //$article = Article::findOrFail($slug);
       $article = Article::where('slug', '=', $slug)->first();
       return view('article_show',  compact('article'));

       //return view('articles')->with('articles', $articles);

=======
     public function show($id)
     {
       $articles = Article::find($id);
       return view('articles_show', compact('article'));
       //return view('articles')->with('articles', $articles);
>>>>>>> d8c0326e181d08607813fa36679853dc347be8cb
     }

     public function create()
     {
<<<<<<< HEAD

=======
>>>>>>> d8c0326e181d08607813fa36679853dc347be8cb
       return view('articles_create');
       //return view('articles')->with('articles', $articles);
     }

<<<<<<< HEAD
     public function store(ArticleRequest $request)
     {
       //$input = Request::all();

       //эта строка для записи времени публикации в базу
       //$input['published_at'] = Carbon::now();
=======
     public function store()
     {
       $input = Request::all();

       //эта строка для записи времени публикации в базу
       $input['published_at'] = Carbon::now();
>>>>>>> d8c0326e181d08607813fa36679853dc347be8cb

       //можно сохранять так по полю
       //$article = new Article;
       //$article->title = $input['title']

       //или так, так удобнее
<<<<<<< HEAD
       //Article::create(Request::all());
       session()->flash('flash_message', 'Новая статья успешно создана!');
       Article::create($request->all());
       return redirect('articles');


     }

     public function edit($id)
     {
       $article = Article::findOrFail($id);
       return view('article_edit',  compact('article'));
       //return view('articles')->with('articles', $articles);

     }

     public function update($id, ArticleRequest $request)
     {
       $article = Article::findOrFail($id);
       $article->update($request->all());
       return redirect('articles');
       //return view('articles')->with('articles', $articles);
=======
       Article::create($input);

       return redirect('articles');

>>>>>>> d8c0326e181d08607813fa36679853dc347be8cb

     }
}
