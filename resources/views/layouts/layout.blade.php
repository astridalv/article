<html>
<head>
<title>implementasi design</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
{!! Html::style ("assets/css/bootstrap.min.css") !!}
{!! Html::style ("assets/js/bootstrap.min.js") !!}
{!! Html::style ("assets/css/ripples.min.css") !!}
{!! Html::style ("assets/css/costum.css") !!}
{!! Html::style ("assets/css/bootstrap-material-design.min.css") !!}
{!! Html::style ("assets/css/ripples.min.css") !!}
<style>
 .carousel-inner > .item > img,
 .carousel-inner > .item > a > img {
     width: 70%;
     margin: auto;
 }
 </style>
</head>

<body id="isi">

@yield('content')
  {!! html::script("assets/js/jquery-2.2.5.js") !!}
  {!! html::script("assets/js/bootstrap.min.js") !!}
  {!! html::script("assets/js/material.min.js") !!}
 {!! html::script("assets/js/ripples.min.js") !!}

<script>
$.material.init();
</script>
</body>
</html>
