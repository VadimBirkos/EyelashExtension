var map;
var coords = {
    lat: 53.874360,
    lng: 27.652274
};

function addMarker() {

    var marker = new google.maps.Marker({
        position: coords,
        map: map,
        raiseOnDrag: false,
        draggable: false
    });
}

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: coords,
        zoom: 15,
        zoomControl: true,
        scaleControl: true,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        backgroundColor: "#f5f5f5",
        disableDefaultUI: true
    });
    addMarker();
}