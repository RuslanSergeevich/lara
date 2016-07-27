@extends('header.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Добавить статью</h1></div>

                <div class="panel-body">
                    {!! Form::open(['url' => 'articles']) !!}

                    <div class="form-group">
                        {!! Form::label('title', 'Название Статьи:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('bode', 'Содержание Статьи:') !!}
                        {!! Form::textarea('title', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Добавить', null, ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('footer.footer')
