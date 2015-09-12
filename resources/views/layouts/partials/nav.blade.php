<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Lager.io</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          @if(Auth::guest())
            <ul class="nav navbar-nav">
              <li><a href="/auth/login">Login</a></li>
              <li><a href="/auth/register">Register</a></li>
            </ul>
          @endif
          @if(Auth::user())
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->company->name}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/storage/create">Create new Storage</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">{{Auth::user()->name}}</li>
                  <li><a href="/profile">Profile</a></li>
                  <li><a href="/auth/logout">Logout</a></li>
                </ul>
              </li>
            </ul>
          @endif
        </div><!--/.nav-collapse -->
      </div>
    </nav>