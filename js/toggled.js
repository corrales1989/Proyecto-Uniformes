$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == false) {          
        overlay.hide();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      } else {   
        overlay.show();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});