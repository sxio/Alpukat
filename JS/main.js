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
$(function(){ //Untuk tmbh google map gak tw salah dimana gak muncul 
  function initMap(){
    var location = new google.maps.LatLng(50.0875726, 14.4189987);

    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center : location;
      zoom: 16,
      panControl: false;
      mapTypeId : google.maps.mapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas,mapOptions);
    google.maps.event.addDomListener(window, 'load', initMap);
  }
}