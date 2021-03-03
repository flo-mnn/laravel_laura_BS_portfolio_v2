<!-- ======= Hero Section ======= -->
<section id="hero" style="background-image: url('storage/img/{{$page_images[0]->src}}');">
    <div class="hero-container">
      @if ($bo)
          <h1 class="text-warning mb-5">Welcome in your back office</h1>
      @endif
      <h1>{{$titles[0]->title}}</h1>
      <h2>{{$titles[0]->subtitle}}</h2>
      <a href="{{$bo? '#editHero': '#about'}}" class="btn-scroll scrollto" title="Scroll Down"><i class="bx bx-chevron-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">