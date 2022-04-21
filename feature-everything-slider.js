jQuery(function($) {

  document.documentElement.style.setProperty('--vh', (window.innerHeight*.01) + 'px');

  $('.feature-everything-slider__slides').each(function() {
    const $slider = $(this);
    const $sliderWrap = $slider.closest('.feature-everything-slider');
    const $sliderGroup = $slider.find('.wp-block-group:eq(0)');

    $slider.slick({
      autoplaySpeed: 6100,
      pauseOnHover: false,
      adaptiveHeight: true,
      draggable: false,
      nextArrow: $sliderWrap.find('.feature-everything-slider__arrow.is-next'),
      prevArrow: $sliderWrap.find('.feature-everything-slider__arrow.is-prev'),
      responsive: [
        {
          breakpoint: 1000,
          settings: {
            draggable: true
          }
        }
      ]
    });

    if ($sliderGroup.hasClass('has-text-background-color')) {
      $sliderWrap.addClass('is-style-color-text');
    }
    else if ($sliderGroup.hasClass('has-accent-background-color')) {
      $sliderWrap.addClass('is-style-color-accent');
    }
    else if ($sliderGroup.hasClass('has-light-background-color')) {
      $sliderWrap.addClass('is-style-color-light');
    }
  });

});

