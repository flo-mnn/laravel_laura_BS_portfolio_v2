<!-- ======= My Portfolio Section ======= -->
<section id="portfolio" class="portfolio {{Str::contains(Route::getCurrentRoute()->uri(),'bo')? 'mt-5' : null}}">
    <div class="container">

      <div class="section-title">
        <span>{{$titles[4]->title}}</span>
        <h2>{{$titles[4]->title}}</h2>
        <p>{{$titles[4]->subtitle}}</p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center">
        @foreach ($portfolio_filters as $portfolio_filter)
            @if ($loop->iteration == 1)  
              <li data-filter="*" class="filter-active">{{$portfolio_filter->filter}}</li>
            @else
              <li data-filter=".filter-{{$portfolio_filter->filter}}" class="text-capitalize">{{$portfolio_filter->filter}}</li>  
            @endif
        @endforeach
      </ul>

      <div class="row portfolio-container">
        @foreach ($portfolio_items as $portfolio_item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio_item->filter}}">
            <div class="portfolio-img"><img src="/storage/img/{{$portfolio_item->cover_src}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4 class="text-capitalize">{{$portfolio_item->title}}</h4>
              <p class="text-capitalize">{{$portfolio_item->filter}}</p>
                <a href="/storage/img/{{$portfolio_item->cover_src}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$portfolio_item->title}}">
                    <i class="bx bx-plus"></i>
                </a>
                <a href="{{$portfolio_item->url}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </section><!-- End My Portfolio Section -->