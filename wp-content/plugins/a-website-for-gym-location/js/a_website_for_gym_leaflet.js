document.addEventListener('DOMContentLoaded', () => {

    const lan = document.querySelector('#lat').value;
    const lng = document.querySelector('#lng').value;
    const address = document.querySelector('#address').value;

if (lat && lng) {
    
    var map = L.map('map').setView([lan, lng], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    L.marker([lan,lng]).addTo(map)
        .bindPopup(address)
        .openPopup();

}
});