<!-- ======= Footer ======= -->
  <footer id="footer" style="background-image: url('/storage/img/{{$page_images[3]->src}}');">
    <div class="container">
      <h3>{{$footers->title}}</h3>
      <p>{{$footers->subtitle}}</p>
      <div class="social-links">
        @foreach ($socials as $social)
          <a href="{{$social->url}}" class=""><i class="bx bxl-{{$social->icon}}"></i></a>
        @endforeach
      </div>
      <div class="copyright">
        {{$footers->copyright}}
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/ -->
        {{$footers->designed}} <a href="{{$footers->link}}">{{$footers->link_name}}</a>
      </div>
    </div>
  </footer><!-- End Footer -->