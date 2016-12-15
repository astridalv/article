<html>
<head>
<title>implementasi design</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<link href="css/ripples.min.css" rel="stylesheet">
<link href="css/costum.css" rel="stylesheet">
<link href="css/bootstrap-material-design.min.css" rel="stylesheet">
<link href="css/ripples.min.css" rel="stylesheet">

<style>
 .carousel-inner > .item > img,
 .carousel-inner > .item > a > img {
     width: 70%;
     margin: auto;
 }
 </style>
</head>
<body>
  <!-- buat navbar  -->
        <div id="bar" class="navbar navbar-fixed-top navbar-default" role="navigation">
          <div class="container">
            <div  class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"/>
                <span class="icon-bar"/>
                <span class="icon-bar"/>
              </button>
              <a href=”#” class = "navbar-brand"><font color="#FFF8DC">Training Bootstrap</font></a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right" class="li">
                <li><a href="./home.html"><font color="#FFF8DC">Home</font></a></li>
                <li><a href="./profile.html"><font color="#FFF8DC">Profile</font></a></li>
                <li><a href="./contact.html"><font color="#FFF8DC">Contact</font></a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
        <br>
<!-- buat carousel  -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <div class="item active">
              <img src="images/gambar1.jpg" alt="gambar1" class="img-responsive">
              <div class="container">
              <div class="carousel-caption">
                <h3>Chania</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
              </div>
            </div>
          </div>


            <div class="item">
              <img src="images/gambar2.jpg" alt="gambar2" class="img-responsive">
              <div class="container">
              <div class="carousel-caption">
                <h3>flower</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
              </div>
            </div>
          </div>
            <div class="item">
              <img src="images/gambar3.jpg" alt="gambar2" width="460" height="345">
              <div class="container">
              <div class="carousel-caption">
                <h3>flower</h3>
                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
              </div>
            </div>
          </div>

          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- batas buat carousel  -->
        <!-- txt -->
        <div class="row">
          <div class="col-xs-4">
            <p>Hallo saya Riku, saya saat ini akan lulus kuliah,salam kenal ya,Berikut contoh dari hasil design grafik yang saya buat. </p>
          </div>
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
          <p>Facebook : riku@mail.com <br>
            Twitter : riku@mail.com <br>
            Telpon : 022-232392 <br>
            Alamat : jalan harapan bangas no.23, Bandung. Indonesia</p>
        </div>
      </div>
        <script src="js/jquery-2.2.5.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/material.min.js"></script>
       <script src="js/ripples.min.js"></script>

   <script>
     $.material.init();
   </script>
</body>
</html>
