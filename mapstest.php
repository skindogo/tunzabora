<!DOCTYPE html>
<html>
<head>
  <title>Search Feature with Map</title>
  <style>
    #map {
      width: 100%;
      height: 400px;
    }
  </style>
</head>
<body>
  <div id="map"></div>

  <input type="text" id="search-box" placeholder="Search for a location">

  <script>
    // Load the Google Maps JavaScript API
    const apiKey = 'YOUR_GOOGLE_MAPS_API_KEY';
    const script = document.createElement('script');
    script.src = `https://maps.googleapis.com/maps/api/js?key=${apiKey}&libraries=places`;
    document.head.appendChild(script);

    // Create a map element
    const map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: { lat: 37.7833, lng: -122.4167 },
    });

    // Create a search box
    const searchBox = new google.maps.places.SearchBox(document.getElementById('search-box'));

    // Handle search results
    searchBox.addListener('places_changed', () => {
      const places = searchBox.getPlaces();

      if (places.length > 0) {
        const place = places[0];

        // Center the map on the searched location
        map.setCenter(place.geometry.location);

        // Add a marker to the searched location
        const marker = new google.maps.Marker({
          position: place.geometry.location,
          map: map,
        });
      }
    });
  </script>
</body>
</html>
