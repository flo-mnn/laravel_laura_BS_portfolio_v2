// added code for bo sortable option

/**
* Template Name: Laura - v2.2.1
* Template URL: https://bootstrapmade.com/laura-free-creative-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 21;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, .mobile-nav');
  // IF added for back-office active needs
  var includesBo = (window.location.href).includes('bo');
  if (!includesBo) {
    $(window).on('scroll', function() {
      var cur_pos = $(this).scrollTop() + 200;
  
      nav_sections.each(function() {
        var top = $(this).offset().top,
          bottom = top + $(this).outerHeight();
  
        if (cur_pos >= top && cur_pos <= bottom) {
          if (cur_pos <= bottom) {
            main_nav.find('li').removeClass('active');
          }
          main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
        }
        if (cur_pos < 300) {
          $(".nav-menu ul:first li:first").addClass('active');
        }
      });
    });
  }

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Skills section
  $('.skills-content').waypoint(function() {
    $('.progress .progress-bar').each(function() {
      $(this).css("width", $(this).attr("aria-valuenow") + '%');
    });
  }, {
    offset: '80%'
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });

    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function() {
      $('.venobox').venobox();
    });
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

})(jQuery);



// sortable for BO
// display the sortable
let changeBtns = document.querySelectorAll('.btn-light');


for (let i = 0; i < changeBtns.length; i++) {
  const element = changeBtns[i];
  element.addEventListener('click',function(e){
    e.preventDefault();
    let table = e.target.closest('table');
    let allHandles = table.querySelectorAll('.bx-move');
    let saveOrder = table.querySelector('.save-order');
    let toggle = e.target.classList.toggle('sorting');
    if (toggle) {
      e.target.classList.replace('btn-light','btn-success');
      e.target.textContent = 'Save Order';
      for (let i = 0; i < allHandles.length; i++) {
        const element = allHandles[i];
        element.classList.remove('d-none');
      }
    } else {
      e.target.classList.replace('btn-success','btn-light');
      e.target.textContent = 'Change Order';
      for (let i = 0; i < allHandles.length; i++) {
        const element = allHandles[i];
        element.classList.add('d-none');
      }
      // form activate to get the new order in DB:
      saveOrder.click();
    }
  })
}

// to collect new order have a look at sortable library page https://sortablejs.github.io/Sortable/
// the sortable
var elements = document.querySelectorAll('tbody');
for (let i = 0; i < elements.length; i++) {
  const el = elements[i];
  new Sortable(el, {
    animation: 150,
    handle: '.bx-move',
    ghostClass: 'blue-background-class'
  });
}

// added for color theme
let colorInput = document.querySelector('#themeColorInput');
let colorInputRGB = document.querySelector('#themeColorInputRGB');
let colorInputRGBHover = document.querySelector('#themeColorInputRGBHover');
let regularRGBLabel = document.querySelector('#regularRGBLabel');
let hoverRGBLabel = document.querySelector('#hoverRGBLabel');
function hexToRGB() {
  let r = 0, g = 0, b = 0;
  let h = colorInput.value;
  // 3 digits
  if (h.length == 4) {
    r = "0x" + h[1] + h[1];
    g = "0x" + h[2] + h[2];
    b = "0x" + h[3] + h[3];

  // 6 digits
  } else if (h.length == 7) {
    r = "0x" + h[1] + h[2];
    g = "0x" + h[3] + h[4];
    b = "0x" + h[5] + h[6];
  }
  
  return colorInputRGB.value="rgb("+ +r + "," + +g + "," + +b + ")";
}

if (window.location.pathname == "/bo") {
  colorInput.addEventListener('change',function(){
    let rgb = colorInputRGB.value;
    regularRGBLabel.style.backgroundColor = `${rgb}`;
    let hoverRGB = rgb.split(',');
    let bb = hoverRGB.slice(-1);
    let newBb = Number(bb[0].slice(0,-1))+50;
    newBb += ')';
    console.log(newBb);
    let newHoverRGB = [hoverRGB[0],hoverRGB[1],newBb];
    newHoverRGB = newHoverRGB.toString();
    colorInputRGBHover.value = newHoverRGB;
    hoverRGBLabel.style.backgroundColor = `${newHoverRGB}`;
  });
}

