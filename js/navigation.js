//Navigation functionality for both desktop and mobile navs

(function($) {

  //on click of the menu button, toggle making the menu larger (.bigger-menu) width to show the navigation item descriptions.
  // $('#menu-item-76 a').click(function() {
  //   $('.main-navigation').toggleClass('bigger-menu');
  // });

  $('.nav-open').on("click", function(e) {
    e.preventDefault();
    $('.main-navigation').toggleClass('bigger-menu');
    $('.nav-open').toggleClass('nav-close');
  });

//bigger-menu-mobile-alt is the full-page mobile nav
  $('.mobile-menu-button a').click(function() {
      $('.nav-items-container').toggleClass('open');
      $('.mobile-menu-button').toggleClass('mobile-menu-button-alt');
      $('body').toggleClass('stop-overflow');
      $('.main-navigation').toggleClass('bigger-menu-mobile-alt')
  });
})( jQuery );


//when the mobile navigation is full screen, or when the bigger desktop nav is open, change the hamburger icon to the X icon
