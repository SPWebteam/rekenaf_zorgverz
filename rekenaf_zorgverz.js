(function($) {
  Drupal.behaviors.gridBlockHeight = {
    attach: function(context) {
      $('.home-items', context).once('sp-home-items', function() {
        var self = this;

        var set_block_height = function() {
          var max_height = 0;

          $('.home-item-link', self).removeAttr('style');

          $('.home-item-link', self).each( function() {
            if( $(this).outerHeight() > max_height ) {
              max_height = $(this).outerHeight();
            }
          });

          $('.home-item-link', self).height( max_height );
        }

        set_block_height();
        $(window).on('resize load', function() {
          set_block_height();
        });
      });
    }
  };
  Drupal.behaviors.spHomeCarousel = {
    attach: function(context) {
      $('.home-items-wrapper', context).once('home-items', function() {
        var self = this;
        var owl = $('.home-items', self);
        owl.owlCarousel({
          center: true,
          items: 2,
          loop: true,
          mouseDrag: true,
          margin: 15,
          autoWidth: true,
          touchDrag: true,
          nav: false,
          navText: ['&larr;', '&rarr;'],
          dots: true,
          callbacks: true,
          afterInit: Drupal.centerBlockOwlCarousel( owl ),
          responsive:{
            620:{
              items:3
            },
            915:{
              items:4
            },
            1210:{
              items:5
            },
            1505:{
              items:6
            },
          },
          responsiveRefreshRate: 100
        });

        Drupal.centerBlockOwlCarousel( owl );
        $(window).on('resize load', function() {
          Drupal.centerBlockOwlCarousel( owl );
        });
      });
    }
  };

$(window).on('load', function() {
    var owlWidth = $('.thema-onderwerp').length*295;
    $('.home-image-overlay').css('max-height', 'none');
    if($('.owl-stage').length != 0){
      if(Drupal.get_viewport_size().width > owlWidth) {
        $('.owl-item').removeClass('center');
        var position = $('.owl-stage').position()
        var items = $('.owl-item').length;
        if(items % 2 === 0 ) {
          var offsetNumber = (items / 2) -0.5;
        } else {
          var offsetNumber = Math.floor(items / 2);
        }
        var offset = position.left-295*offsetNumber;
        $('.owl-stage').css('-webkit-transform', 'translate3d('+offset+'px, 0px, 0px)');
      }
    }

    $(".tab-content").hide();
    $("#wegmetdezorgverzekeraars-content").show();

    $("#wegmetdezorgverzekeraars-title").click(function(event){
      event.preventDefault();
      $("#support-examples").show();
      $(".rekenaf-persons").show();
      $(".tab-content").hide();
      $("#wegmetdezorgverzekeraars-content").show();
      $(".tab-title").removeClass("active");
      $("#wegmetdezorgverzekeraars-title").addClass("active");
    });

    $(".link-to-support-form").click(function(event){
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $("#rekenaf-zorgverz-statement-form").offset().top
      }, "slow");
    });

    $("#stopmarktwerking-title").click(function(event){
      event.preventDefault();
      $("#support-examples").show();
      $(".rekenaf-persons").show();
      $(".tab-content").hide();
      $("#stopmarktwerking-content").show();
      $(".tab-title").removeClass("active");
      $("#stopmarktwerking-title").addClass("active");
    });

    $("#zorgvanons-title").click(function(event){
      event.preventDefault();
      $("#support-examples").hide();
      $(".rekenaf-persons").show();
      $(".tab-content").hide();
      $("#zorgvanons-content").show();
      $(".tab-title").removeClass("active");
      $("#zorgvanons-title").addClass("active");
    });

    $("#steunbetuigingen-title").click(function(event){
      event.preventDefault();
      $("#support-examples").hide();
      $(".rekenaf-persons").hide();
      $(".tab-content").hide();
      $("#steunbetuigingen-content").show();
      $(".tab-title").removeClass("active");
      $("#steunbetuigingen-title").addClass("active");
    });

    $("#link_to_support_items").click(function(event){
      $("#support-examples").hide();
      $(".rekenaf-persons").hide();
      $(".tab-content").hide();
      $("#steunbetuigingen-content").show();
      $(".tab-title").removeClass("active");
      $("#steunbetuigingen-title").addClass("active");
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $("#steunbetuigingen-content").offset().top
      }, "slow");
    });

})
}(jQuery));
