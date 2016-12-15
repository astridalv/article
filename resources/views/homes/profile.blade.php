@extends("layouts.layout")
@section("content")

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
                <li>{!! link_to("/", 'Home') !!}</li>
                <li>{!! link_to(route("id_org",1), 'Profile') !!}</li>
                <li>{!! link_to(route("contact"), 'Contact') !!} </li>
              </ul>
            </div>
          </div>
        </div>
<!-- batas navbar  -->
      <div class="row">
        <div class="col-xs-4"><h3>Riku<br>Kiranatama</h3><br>
           {!! Html::image ('assets/images/user.png', 'alt', array('class'=>'img-circle')) !!}

        </div>
        <div class="col-xs-6">

          <div class="container">
            <table  class="table table-hover" id="table">
            <tr>
            <td >Nama</td>
            <td >Riku Kiranatama</td>
            </tr>
            <tr>
            <td>Tempat, tanggal lahir</td>
            <td>bandung, 7 oktober 2016</td>
            </tr>
            <tr>
            <td>jenis kelamin</td>
            <td>Pria</td>
            </tr>
            <tr>
            <td>Alamat Domisili</td>
            <td>Jalan Soekarno hatta no.104</td>
            </tr>
            </table>
          </div>
        </div>
      </div>
  @endsection
