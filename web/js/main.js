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
  setInterval(blinker,1500);
  //stephen 25-10-16
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/580f83ca2d3b340651816eb7/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
    })();
  });
function blinker(){
  $('.blink_me').fadeOut(500);
  $('.blink_me').fadeIn(500);
}