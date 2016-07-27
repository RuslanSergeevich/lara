
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
      <script src="//cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>

    <title>Админпанель сайта</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/css/dropzone.css" rel="stylesheet">

    <script src="//yandex.st/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    <script src="//api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <!-- Custom styles for this template -->
    <link href="/css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        @include('admin.navbar')

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        @if(Session::has('flash_message'))
          <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
        @endif

        @yield('content')

      </div><!--/row-->

      <hr>
      <footer>
        <p>&copy; Турбазы Крыма {{ date('Y') }}</p>
      </footer>
    </div><!--/.container-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/offcanvas.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Russian.json"
            }
        });
    });
    </script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
    <script>
        $( "div.alert" ).delay( 2000 ).fadeOut( 800 );
    </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
      <script src="https://dimik.github.io/ymaps/examples/location-tool/location-tool.js" type="text/javascript"></script>
      <script src="https://dimik.github.io/ymaps/examples/location-tool/cross-control.js" type="text/javascript"></script>
      <script src="https://dimik.github.io/ymaps/examples/location-tool/geolocation-button.js" type="text/javascript"></script>
      <script type="text/javascript">
          ymaps.ready(function () {
              var myMap = new ymaps.Map('YMapsID', {
                      center: [{{ $page->markerPosition }}],
                      zoom: {{ $page->mapZoom }},
                      behaviors: ['default', 'scrollZoom']
                  });

              myMap.controls
                  .add('mapTools')
                  .add(new CrossControl)
                  .add('zoomControl')
                  .add('typeSelector', { top: 5, right: 5 })
                  .add(new ymaps.control.SearchControl({ noPlacemark: true }), { top: 5, left: 200 });

              new LocationTool(myMap);
          });
      </script>
      <style type="text/css">
          #YMapsID {
              width: 100%;
              height: 500px;
          }
      </style>
  </body>
</html>
