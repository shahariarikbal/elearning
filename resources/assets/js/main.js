// fixed header
$(window).scroll(function() {
  var scrollTop = $(window).scrollTop();
  if (scrollTop >= 100) {
      $('body').addClass('fixed-header');
  } else {
      $('body').removeClass('fixed-header');
  }
});

// Navbar Toggle Button For Mini Device
// $('.nav-toggle-btn').click(function() {
//   $('.nav-list').toggleClass('menu-visible');
// });