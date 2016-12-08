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

  var locate = window.location.pathname;
  locate = locate.split('/');
  // alert('#'+ locate[2]);
  $('#' + locate[2] + '_li').css({
      'background-color':'#000'
  });
  // $('.navli').hover(function(){
  //   $(this).css("background-color","black");
  // });

  // Initialize the chat plugin
  $('#chat_popup').popup({
    blur: false,
    transition: 'all 0.8s',
    openelement: '.chat_open',
    closeelement: '.chat_close'
  });
  $("#chat_open").click(function(){
    alert("hello");
  });
});
