   
<header id="header" class="fixed-top  d-flex justify-content-center align-items-center bg-dark">
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="{{Route::currentRouteName() == "boHero" ? 'active' : null}}"><a href="/">{{$navlinks[0]->link}}</a></li>
        <li class="{{Route::currentRouteName() == "boAbout" ? 'active' : null}}"><a href="{{route('boAbout')}}">{{$navlinks[1]->link}}</a></li>
        <li class="{{Route::currentRouteName() == "boResume" ? 'active' : null}}"><a href="{{route('boResume')}}">{{$navlinks[2]->link}}</a></li>
        <li class="{{Route::currentRouteName() == "boPortfolio" ? 'active' : null}}"><a href="{{route('boPortfolio')}}">{{$navlinks[3]->link}}</a></li>
        <li class="{{Route::currentRouteName() == "boContact" ? 'active' : null}}"><a href="{{route('boContact')}}">{{$navlinks[4]->link}}</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->