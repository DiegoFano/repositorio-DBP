

// seleccion de pais
function updateCountry(selectElement) {
    var country = selectElement.value;
    document.getElementById('country').textContent = country;
    selectElement.selectedIndex = 0;
}