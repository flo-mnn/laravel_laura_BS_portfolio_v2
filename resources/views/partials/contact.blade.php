<!-- ======= Contact Me Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>{{$titles[6]->title}}</span>
        <h2>{{$titles[6]->title}}</h2>
        <p>{{$titles[6]->subtitle}}</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="{{$contact_cards_heads[0]->icon}}"></i>
                <h3>{{$contact_cards_heads[0]->title}}</h3>
                <div class="social-links">
                  @foreach ($socials as $social)
                    <a href="{{$social->url}}" class="twitter"><i class="icofont-{{$social->icon}}"></i></a>  
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="{{$contact_cards_heads[1]->icon}}"></i>
                <h3>{{$contact_cards_heads[1]->title}}</h3>
                @foreach ($emails as $email)
                  <p>{{$email->email}}</p>
                @endforeach
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="{{$contact_cards_heads[2]->icon}}"></i>
                <h3>{{$contact_cards_heads[2]->title}}</h3>
                @foreach ($phones as $phone)
                  <p>{{$phone->phone}}</p>  
                @endforeach
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{$forms->name}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="{{$forms->email}}" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="{{$forms->subject}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="{{$forms->message}}"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Me Section -->