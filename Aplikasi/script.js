document.addEventListener("DOMContentLoaded", function () {
    const calcForm = document.getElementById("calc-form");
    const areaInput = document.getElementById("area");
    const cropSelect = document.getElementById("crop");
    const calculateBtn = document.getElementById("calculate");
    const resultSpan = document.getElementById("water-requirement");

    calculateBtn.addEventListener("click", function () {
        const area = parseFloat(areaInput.value);
        const crop = cropSelect.value;
        let waterRequirement = 0;

        if (crop === "padi") {
            waterRequirement = area * 5000; // Contoh perhitungan, bisa disesuaikan dengan data yang sebenarnya
        } else if (crop === "jagung") {
            waterRequirement = area * 6000;
        } else if (crop === "kedelai") {
            waterRequirement = area * 4000;
        }

        resultSpan.textContent = `${waterRequirement} liter`;
    });
});
