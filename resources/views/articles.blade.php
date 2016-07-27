@extends('header.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Статьи</h1></div>

                <div class="panel-body">
                     @foreach ($articles as $article)
                        <articles>
                          <div class="col-md-12"><h3>{{ $article->title }}</h3></div>
                          <div class="col-md-12">{{ $article->body }}</div>
                          <div class="col-md-12"><a href="{{ url('/articles', $article->slug) }}">Читать далее</a></div>
                          <hr/>
                        </article>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('footer.footer')
