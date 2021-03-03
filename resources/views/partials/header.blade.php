   
<!-- ======= Header ======= -->
<header id="header" class="{{$bo? null : 'fixed-top'}}  d-flex justify-content-center align-items-center header-transparent {{$bo? 'bg-secondary' : null}}" style="{{$bo? 'margin-top: 15vh; border: solid black 3px' : null}}">
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="/">{{$navlinks[0]->link}}</a></li>
        <li><a href="#about">{{$navlinks[1]->link}}</a></li>
        <li><a href="#resume">{{$navlinks[2]->link}}</a></li>
        {{-- <li><a href="#services">{{$navlinks[3]->link}}</a></li> --}}
        <li><a href="#portfolio">{{$navlinks[4]->link}}</a></li>
        <li><a href="#contact">{{$navlinks[5]->link}}</a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->