$(document).ready(function(){

    $(document).scroll(function(){
        var scroll = $(document).scrollTop();
        if (scroll >= 100){
            $('nav').removeClass('large').addClass('short');
        }else{
        $('nav').removeClass('short').addClass('large');
        }

});

});

function initMap() {
    var mapDiv = document.getElementById('googleMap');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: 4.761, lng: -74.038},
        zoom: 5
    });
}

