 
(function() {
	  window.onload = function() {

	    // Creating an object literal containing the properties 
	    // we want to pass to the map  
	    var options = {
	      zoom: 17,
	      center: new google.maps.LatLng(-34.888058, -56.145727),
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };

	    // Creating the map  
	    var map = new google.maps.Map(document.getElementById('map'), options);
	    
	    // Adding a marker to the map
	    var marker = new google.maps.Marker({
	        position: new google.maps.LatLng(-34.888058, -56.145727),
	      map: map,
	      title: 'Centro Estetico Vaucher'
	    });
	    
	    // Creating an InfoWindow with the content text: "Hello World"
	    var infowindow = new google.maps.InfoWindow({
	      content: 'Cairoli 2076 entre Avenida Italia y &Aacute;balos'
	    });
	    
	    // Adding a click event to the marker
	    google.maps.event.addListener(marker, 'click', function() {
	      // Calling the open method of the infoWindow
	      infowindow.open(map, marker);
	    });

	  };
	})();
