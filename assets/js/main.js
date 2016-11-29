$(document).ready(function(){
  var scroll_start = 0;
  var startchange = $('#startchange');
  var offset = startchange.offset();
  if (startchange.length){
    $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-default").css('background-color', '#4286f4');
          $("ul.navbar-nav > li > a, .navbar-brand").css('color','white');
          $("ul.navbar-nav > li > a, .navbar-brand").hover(function(){
            $(this).css('color','black');
          },function(){
            $(this).css('color','white');
          });

       } else {
          $('.navbar-default').css('background-color', 'transparent');
          $("ul.navbar-nav > li > a, .navbar-brand").css('color','white');
          $("ul.navbar-nav > li > a, .navbar-brand").hover(function(){
            $(this).css('color','#16BFFD');
          }, function(){
            $(this).css('color','white');
          });
       }
    });
  }
  setInterval(blinker,1500);
  // Initialize the chat plugin
  $('#my_popup').popup({
    background: true,
    blur: false,
    transition: 'all 1s'
  });
});

//Meikelwis 25-10-16
function blinker(){
  $('.blink_me').fadeOut(500);
  $('.blink_me').fadeIn(500);
}