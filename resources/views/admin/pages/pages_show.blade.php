@extends('admin.app')
@section('content')
<div class="col-xs-12 col-sm-12">
 
  <h3>Список страниц</h3>
  <a href="/admin/pages/create"><button class="btn btn-success" type="submit">Добавить страницу</button></a>

  <hr>
  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
              <tr class="info">
                  <th>id</th>
                  <th>Название</th>
                  <th>Алиас</th>
                  <th>Дата публикации</th>
                  <th>Опубликовано</th>
                  <th>Редактировать</th>
              </tr>
          </thead>
          <tfoot>
            <tr class="info">
                <th>id</th>
                <th>Название</th>
                <th>Алиас</th>
                <th>Дата публикации</th>
                <th>Опубликовано</th>
                <th>Редактировать</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($pages as $page)
            <tr class="warning">
              <td>{{ $page->id }}</td>
              <td>{{ $page->name }}</td>
              <td>{{ $page->slug }}</td>
              <td>{{ $page->published_at }}</td>
              <td>@if($page->enabled==1)<p class="text-success">Да</p>@elseif($page->enabled==0)<p class="text-danger">Нет</p>@endif</td>
              <td><a href="/admin/pages/{{ $page->id }}/edit"><button type="button" class="btn btn-primary">Редактировать</button></td>
            </tr>
            @endforeach
          </tbody>
      </table>
      <hr>
      <a href="/admin/pages/create"><button class="btn btn-success" type="submit">Добавить страницу</button></a>
</div><!--/span-->
@endsection
