// Function to fetch and update location data
async function fetchLocations() {
    const response = await fetch('get_locations.php');
    const locations = await response.json();

    locations.forEach(location => {
        // Update markers on the map or on the UI with location.longitude and location.latitude
        console.log(location.username, location.longitude, location.latitude);
    });
}

// Refresh location data every 10 seconds
setInterval(fetchLocations, 10000);


function initMap() {
    const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: { lat: defaultLat, lng: defaultLng } // Default center
    });

    setInterval(async () => {
        const locations = await fetchLocations();
        locations.forEach(location => {
            new google.maps.Marker({
                position: { lat: location.latitude, lng: location.longitude },
                map: map,
                title: location.username
            });
        });
    }, 10000);
}
