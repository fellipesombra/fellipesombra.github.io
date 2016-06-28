function initMap(data) {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 3,
    center: data.center,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var flightPlanCoordinates = data.coordinates;
  var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });
  
  for (i = 0; i < data.coordinates.length; i++) { 
	  var marker = new google.maps.Marker({
		    position: item[index],
		    map: map,
		    title: index
		  });
  }
  
  flightPath.setMap(map);

}




function getMapInfo () {

    jQuery.ajax({
        type: "GET",
        url: "http://fellipesombra.github.io/onmyway-service/rest/map/trip/"+$.QueryString["trip"], //depois mudar hostname para ser dinâmico
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (data, status, jqXHR) {
        	initMap(data);
        },

        error: function (jqXHR, status) {
            // error handler
        }
});
}