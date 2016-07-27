<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
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
       return view('articles', compact('articles'));
       //return view('articles')->with('articles', $articles);
     }

     public function show($slug)
     {
       //return $slug;
       //$article = Article::findOrFail($slug);
       $article = Article::where('slug', '=', $slug)->first();
       return view('article_show',  compact('article'));

       //return view('articles')->with('articles', $articles);

     }

     public function create()
     {

       return view('articles_create');
       //return view('articles')->with('articles', $articles);
     }

     public function store(ArticleRequest $request)
     {
       //$input = Request::all();

       //эта строка для записи времени публикации в базу
       //$input['published_at'] = Carbon::now();

       //можно сохранять так по полю
       //$article = new Article;
       //$article->title = $input['title']

       //или так, так удобнее
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

     }
}
