function initPromMap() {
    const venue = { lat: 35.2271, lng: -80.8431 };

    const mapEl = document.getElementById("prom-map");
    if (!mapEl || !window.google || !google.maps) return;

    const map = new google.maps.Map(mapEl, {
        center: venue,
        zoom: 15,

        gestureHandling: "greedy",

        disableDefaultUI: false,
        streetViewControl: false,
        mapTypeControl: false,
        fullscreenControl: false,
        zoomControl: true,
    });

    const marker = new google.maps.marker.AdvancedMarkerElement({
        map,
        position: venue,
        title: "The Hamilton",
    });

    marker.addListener("click", () => {
        window.open(
            "https://www.google.com/maps/search/?api=1&query=820+Hamilton+St+Charlotte+NC",
            "_blank"
        );
    });
}

window.initPromMap = initPromMap;
