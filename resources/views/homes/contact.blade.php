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
        </div>
        <br>
<!-- batas navbar  -->
      <div class="row">
        <div class="col-xs-4"><h3>Riku<br>Kiranatama</h3><br>
          <img src="assets/images/user.png" class="img-circle" width="90" height="90">

      </div>

        <div class="form-group">
        <table id="table">
        <tr>
        <td ><label for="usr">Email</label></td>
        <td ><input type="text" class="form-control" id="usr" placeholder="Email Anda"></td>
        </tr>
        </div>
        <div class="form-group">
        <tr>
          <td><br></td>
          <td><br></td>
        </tr>
      </div>
        <div class="form-group">
        <tr>
        <td><label for="usr" >Massage</label></td>
        <td><textarea class="form-control" rows="4" id="comment" placeholder="Massages Anda"></textarea></td>
        </tr>
        <tr>
        <td><button type="button" class="btn btn-default btn-lg">Submit</button></td>
        <td></td>
        </tr>
      </div>
    </table>


</body>
</html>
@endsection
