//Navigation functionality for both desktop and mobile navs

(function($) {
  //on click of the menu button, toggle making the menu larger (.bigger-menu) width to show the navigation item descriptions.

  $('#menu-item-76 a').click(function() {
    // if ($('.main-navigation').hasClass('bigger-menu')) {
    //     $('.main-navigation').removeClass('bigger-menu');
    // }else {
    //   $('.main-navigation').addClass('bigger-menu');
    // }
    $('.main-navigation').toggleClass('bigger-menu');
  });

//bigger-menu-mobile-alt is the full-page mobile nav
  $('.mobile-menu-button a').click(function() {
      $('.nav-items-container').toggleClass('open');
      $('body').toggleClass('stop-overflow');

      if ($('.nav-items-container').hasClass('open')) {
        $('.mobile-menu-button').addClass('mobile-menu-button-alt');
      }

      if ($('.main-navigation').hasClass('bigger-menu-mobile-alt')) {
          $('.main-navigation').removeClass('bigger-menu-mobile-alt');
      }else {
        $('.main-navigation').addClass('bigger-menu-mobile-alt');
      }
  });

})( jQuery );


//on click of mobile menu button, if nav-items-container has class open, fade out slow on nav-items-container
//else fade in slow nav-items-container
