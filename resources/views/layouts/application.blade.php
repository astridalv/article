<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta httpequiv="XUACompatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>implementasi make article</title>
      {!! Html::style ("assets/css/bootstrap.min.css") !!}
      {!! Html::style ("assets/js/bootstrap.min.js") !!}
      {!! Html::style ("assets/css/ripples.min.css") !!}
      {!! Html::style ("assets/css/layout.css") !!}
      {!! Html::style ("assets/css/bootstrap-material-design.min.css") !!}
      {!! Html::style ("assets/css/ripples.min.css") !!}
      {!! Html::style ("assets/css/bootstrap.css") !!}
      {!! Html::style ("assets/css/ripples.css") !!}

    </head>
    <body style="padding-top:60px;">
      <!--bagian navigation-->
            @include("articles.head_nav")
            <!-- Bagian Content -->
            <div class="container clearfix">
             <div class="row row-offcanvas row-offcanvas-left ">
                <!--Bagian Kiri-->
                @include("articles.left_nav")
                <!--Bagian Kanan-->
                <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">
                  <div class="panel-body">
                    @if (Session::has('error'))
                      <div class="session-flash alert-danger">
                          {{Session::get('error')}}
                      </div>
                    @endif
                    @if (Session::has('notice'))
                    <div class="session-flash alert-info">
                          {{Session::get('notice')}}
                    </div>
                    @endif
                    @yield("content")
                  </div>
                </div>
            </div>
          </div>
     <script src="/assets/js/jquery/jquery-2.2.4.js"></script>
     <script src="/assets/js/bootstrap/bootstrap.js"></script>
     <script src="/assets/js/material-design/material.js"></script>
     <script src="/assets/js/material-design/ripples.js"></script>
     <script src="/assets/js/customs/layout.js"></script>
     <script>
     $.material.init();
     </script>
 </body>
</html>
