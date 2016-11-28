$(document).ready(function(){
  var scroll_start = 0;
  var startchange = $('#startchange');
  var offset = startchange.offset();
  if (startchange.length){
    $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-default").css('background-color', '#e60000');
          $("ul.navbar-nav > li > a, .navbar-brand").css('color','white');
            
       } else {
          $('.navbar-default').css('background-color', 'transparent');
          $("ul.navbar-nav > li > a, .navbar-brand").css('color','black');
       }
    });
  }
  setInterval(blinker,1500);

});
//Meikelwis 25-10-16
function blinker(){
  $('.blink_me').fadeOut(500);
  $('.blink_me').fadeIn(500);
}