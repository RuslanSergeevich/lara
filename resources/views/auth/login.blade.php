<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Вход в админпанель сайта</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form role="form" class="form-signin" method="POST" action="{{ url('/admin/login') }}">

        {{ csrf_field() }}

        <h3 class="form-signin-heading" style="text-align:center">Вход</h3>

        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
          <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
        </div>

        <div class="form-group has-feedback">
          <label class="checkbox">
            <input type="checkbox" name="remember"> Запомнить
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
      </form>

        <div class="form-group has-feedback form-signin"><a href="/"> ← Вернуться на сайт</a></div>
    </div> <!-- /container -->

  </body>
</html>
