var map;
var coords = { lat: 53.874360, lng: 27.652274 };
function addMarker() {

    var marker = new google.maps.Marker({
        position: coords,
        map: map,
        raiseOnDrag: false,
        draggable: false
    });
}

function initMap() {
    debugger;
    map = new google.maps.Map(document.getElementById('map'), {
        center: coords,
        zoom: 16,
        zoomControl: true,
        scaleControl: true,
        scrollwheel: true,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        backgroundColor: "#ffffff",
        disableDefaultUI: true
    });
    addMarker();
}