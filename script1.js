document.addEventListener("DOMContentLoaded", function () {
    const stateDropdown = document.getElementById("stateDropdown");
    const districtDropdown = document.getElementById("districtDropdown");
    const fetchButton = document.getElementById("fetchButton");
    const tableContainer = document.getElementById("tableContainer");

    // Populate state and district dropdowns using AJAX or static options

    fetchButton.addEventListener("click", function () {
        const selectedState = stateDropdown.value;
        const selectedDistrict = districtDropdown.value;

        if (selectedState && selectedDistrict) {
            // Make an AJAX request to fetch data from the PHP script
            const xhr = new XMLHttpRequest();
            xhr.open("GET", `fetch.php?state=${selectedState}&district=${selectedDistrict}`, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    tableContainer.innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    });
});
