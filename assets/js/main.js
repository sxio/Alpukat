$(document).ready(function(){
  var scroll_start = 0;
  var startchange = $('#startchange');
  var offset = startchange.offset();
  if (startchange.length){
    $(document).scroll(function() {
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          // #4286f4
          $(".navbar-default").css('background-color', '#1565c0');
          $("ul.navbar-nav > li > a, .navbar-brand").css('color','white');
          $("ul.navbar-nav > li > a, .navbar-brand").hover(function(){
            $(this).css('color','black');
            $(this).css('text-shadow','none');
          },function(){
            $(this).css('color','white');
          });

       } else {
          $('.navbar-default').css('background-color', 'transparent');
          $("ul.navbar-nav > li > a, .navbar-brand").css('color','black');
          $("ul.navbar-nav > li > a, .navbar-brand").hover(function(){
            $(this).css('color','white');
            $(this).css('text-shadow','0 0 20px rgba(0,0,0,1)');
          }, function(){
            $(this).css('color','black');
            $(this).css('text-shadow','none');
          });
       }
    });
  }

  var locate = window.location.pathname;
  locate = locate.split('/');

  $('#' + locate[2] + '_li').children().css({
      'margin-top': '4px',
      'padding-top': '8px',
      'padding-bottom': '8px',
      'border-top': '3px solid white',
      'border-bottom': '3px solid white',
      // 'border-right': '3px solid #f2f2f2',
      // 'border-left': '3px solid #f2f2f2'
      // 'border-radius': '8px'
  });

  // Initialize the chat plugin
  $('#chat_popup').popup({
    blur: false,
    transition: 'all 0.8s',
    openelement: '.chat_open',
    closeelement: '.chat_close'
  });

  $('.donation_open').click(function(){
    $('.donation_wrapper').css('display','inherit');
  });

  // Donation popup
  $('#donation_popup').popup({
    type: 'tooltip',
    transition: 'all 0.3s',
    openelement: '.donation_open',
    closeelement: '.donation_close',
    onclose: function() {
      $('.donation_wrapper').css('display','inherit');
    }
  });
});
