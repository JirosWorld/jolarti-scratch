$(document).ready(function() { 

    $("#knop").click(function(){
        $(".mijnrij").toggleClass("bg-mijnrij");
    });

  //All anchors that you want smooth scrolling you should attribute that class
  // This should prevent problems with carousel, scrollspy, etc...
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000); // The number here represents the speed of the scroll in milliseconds
// Change the speed to whatever you want
// If 1000 is too much, try 800 or lower
        return false;
      }
    }
  });

});