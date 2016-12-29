<div class="navbar navbar-fixed-top navbar-default" role="navigation" id="nav">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar“></span>
        <span class="icon-bar“></span>
        <span class="icon-bar“></span>
      </button>
      <a class = "navbar-brand"><font color="#FFF8DC">asteroid</font></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">

            <li>{!! link_to(route('articles.index'), 'List article') !!}</li>
            <li>{!! link_to(route('articles.create'), 'create article') !!}</li>
            <li>{!! link_to(route('reporter.create'), 'Insert Reporter') !!}</li>
            <li>{!! link_to(route('reporter.index'), 'List Reporter') !!}</li>
            <li>{!! link_to(route('images.create'), 'Insert Image') !!}</li>
            <li>{!! link_to(route('viewimage'), 'List Image') !!}</li>


            @if (Sentinel::check())
              <li>{!! link_to(route('logout'), 'Logout') !!}</li>
              <li><a>Wellcome {!! Sentinel::getUser()->email !!}</a></li>
            @else
              <li>{!! link_to(route('signup'), 'Signup') !!}</li>
              <li>{!! link_to(route('login'), 'Login') !!}</li>
            @endif

          </ul>
          </div>
        </div>
      </div>
