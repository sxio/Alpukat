$(document).ready(function(){
  var scroll_start = 0;
  var startchange = $('#startchange');
  var offset = startchange.offset();
  if (startchange.length){
    $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-default").css('background-color', '#0087a2');
       } else {
          $('.navbar-default').css('background-color', 'transparent');
       }
    });
  }
});
function blinker(){
  $('.blink_me').fadeOut(500);
  $('.blink_me').fadeIn(500);
}
setInterval(blinker,1000)
