var map = L.map('map').setView([-7.24917, 112.75083], 10);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([-7.24917, 112.75083]).addTo(map)
    .openPopup();