@extends('admin.app')
@section('content')
<div class="col-xs-12 col-sm-12">
  <p class="pull-right visible-xs">
    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
  </p>

    <h3>Добавление страницы</h3>
    <hr>
  <div class="row">
    <div class="col-12 col-sm-12 col-md-12">

      <form role="form" class="form-signin" method="POST" action="{{ url('/admin/pages') }}">

        {{ csrf_field() }}

        <div class="form-group has-feedback">
          <label for="text">Title:</label>
          <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}" required autofocus>
              @if ($errors->has('title'))
                  <div class="alert alert-danger">{{ $errors->first('title') }}</div>
              @endif
        </div>

        <div class="form-group has-feedback">
          <label for="description">Description:</label>
          <input type="text" class="form-control" name="description" placeholder="Description" value="{{ old('description') }}" required autofocus>
              @if ($errors->has('description'))
                  <div class="alert alert-danger">{{ $errors->first('description') }}</div>
              @endif
        </div>

        <div class="form-group has-feedback">
          <label for="keywords">Keywords:</label>
          <input type="text" class="form-control" name="keywords" placeholder="Keywords" value="{{ old('keywords') }}" required autofocus>
              @if ($errors->has('keywords'))
                  <div class="alert alert-danger">{{ $errors->first('keywords') }}</div>
              @endif
        </div>

        <div class="form-group has-feedback">
          <label for="name">Название страницы:</label>
          <input type="text" class="form-control" name="name" placeholder="Название страницы" value="{{ old('name') }}" required autofocus>
              @if ($errors->has('name'))
                  <div class="alert alert-danger">{{ $errors->first('name') }}</div>
              @endif
        </div>

        <div class="form-group has-feedback">
          <label for="slug">Алиас страницы:</label>
          <input type="text" class="form-control" name="slug" placeholder="Алиас страницы" value="{{ old('slug') }}">
              @if ($errors->has('slug'))
                  <div class="alert alert-danger">{{ $errors->first('slug') }}</div>
              @endif
        </div>

        <div class="form-group has-feedback">
          <label for="body">Содержание страницы:</label>
          <textarea value=" " name="body" id="body" class="form-control"></textarea>
        </div>

        <div class="form-group has-feedback">
          <label for="slug">Дата публикации:</label>

          <input type="date" class="form-control" name="published_at"  value="{{ old('published_at') }}">
              @if ($errors->has('date'))
                  <div class="alert alert-danger">{{ $errors->first('date') }}</div>
              @endif
        </div>
        <hr>
          <h4>Карта размещения турбазы</h4>
        <div class="col-12 col-sm-12 col-md-12">
          <div class="col-8 col-sm-8 col-md-8">
            <div id="YMapsID"></div>
          </div>
                <br/>
          <div class="col-4 col-sm-4 col-md-4">
            <div class="form-group has-feedback">
              <label for="metka">Координаты метки:</label>
              <input type="text" class="form-control" name="markerPosition" id="markerPosition">
            </div>

            <div class="form-group has-feedback">
              <label for="mapZoom">Масштаб карты:</label>
              <input type="text" class="form-control" name="mapZoom" id="mapZoom">
            </div>

            <div class="form-group has-feedback">
              <label for="mapCenter">Координаты центра:</label>
              <input type="text" class="form-control" name="mapCenter" id="mapCenter">
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12">
            <hr>
          <div class="form-group has-feedback">
            <label for="enabled">Опубликовано:</label>
            <input type="hidden" name="enabled"  value="0">
            <input type="checkbox" name="enabled"  value="1" checked data-toggle='toggle' data-on='ВКЛ' data-off='ВЫКЛ' data-onstyle='success' data-offstyle='danger'>
          </div>
          <button class="btn btn-primary" type="submit"> Добавить </button>
        </div>
      </form>

    </div><!--/span-->
  </div><!--/row-->
</div><!--/span-->
@endsection
