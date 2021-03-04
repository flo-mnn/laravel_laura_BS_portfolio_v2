<!-- ======= Hero Section ======= -->
<section id="hero" style="background-image: url('storage/img/{{$page_images[0]->src}}');">
    <div class="hero-container">
      @if (Str::contains((Route::getCurrentRoute()->uri()),'bo'))
          <h1 class="text-warning mb-5">Welcome in your back office</h1>
      @endif
      <h1>{{$titles[0]->title}}</h1>
      <h2>{{$titles[0]->subtitle}}</h2>
      @if (Str::contains((Route::getCurrentRoute()->uri()),'bo'))
          {{-- display nothing --}}
          @else
          <a href="#about" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
      @endif
    </div>
  </section><!-- End Hero -->

  <main id="main">