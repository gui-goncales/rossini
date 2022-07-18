(function ($) {
  $(".takeServices .item").mouseenter(function () {
    $(".takeServices .item").removeClass("active");
    $(this).addClass("active"); 
  });

  $(".column:nth-child(1)").addClass("show");
  $(".btnOption:nth-child(1)").addClass("activeMenuPortfolio");
  
  $(".btnOption").click(function(){
    var btn = $(this).attr("data-id");
      $(".btnOption").removeClass("activeMenuPortfolio");
      $(this).addClass("activeMenuPortfolio");
      $(".column").removeClass("show");
      $("#" + btn).addClass("show");
  });

    //smoothscroll
  
    $('a[href^="#"]').on('click', function (e) {
      e.preventDefault();
      $(document).off("scroll");
  
      var target = this.hash,
      menu = target;
      $target = $(target);
      $('html, body').stop().animate({
        'scrollTop': $target.offset().top+2
      }, 50, 'swing', function () {
        window.location.hash = target;
      },200);
    });
  
    $('#openDrop2').click(function () {
      $(this).toggleClass('activeItem');
      $('.dropDownMobile2').toggleClass('activeDrop');
    });
  
    $('.sliderParceiros').slick({
      centerMode: true,
      centerPadding: '0px',
      arrows: false,
      slidesToShow: 6,
      speed: 800,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 4
          }
        },
        {
          breakpoint: 480,
          settings: {
            centerMode: false,
            centerPadding: '0px',
            slidesToShow: 2
          }
        }
      ]
    });
    
  
    var toggle = document.querySelector('.toggle input');

    $('.toggle input').click(function () {
      var animate = setInterval(() => {
        toggle.checked = !toggle.checked;
      }, 3000);
      clearInterval(animate);
      $('.contentMenu').toggleClass('activeMenuContent');
    });
  
  // ANIMATION ELEMENT
  var $animation_elements = $('.animation-element');
  var $window = $(window);

  function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = window_top_position + window_height;

    $.each($animation_elements, function () {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = element_top_position + element_height;

      //check to see if this current container is within viewport
      if (
        element_bottom_position >= window_top_position &&
        element_top_position <= window_bottom_position
      ) {
        $element.addClass('in-view');
      } else {
        $element.removeClass('in-view');
      }
    });
  }

  $window.on('scroll resize', check_if_in_view);
  $window.trigger('scroll', check_if_in_view);
 
})(jQuery);
