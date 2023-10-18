const calculateButton = document.getElementById("calculateButton");
calculateButton.addEventListener("click", () => {
    const weight = document.getElementById("weight").value;
    const height = document.getElementById("height").value;
    const age = document.getElementById("age").value;
    const result = document.getElementById("result");
    const maleSelect = document.getElementById('listGroupRadios1');
    const femaleSelect = document.getElementById('listGroupRadios2');
    let bmrWeight, bmrHeight, bmrAge, gender;
    if (weight === "") {
        const weightError = document.getElementById("weightError");
        return weightError.style.display = "block";
    }else {
        const weightError = document.getElementById("weightError");
        weightError.style.display = "none";
    }
    if (height === "") {
        const heightError = document.getElementById("heightError");
        return heightError.style.display = "block";
    }else {
        const heightError = document.getElementById("heightError");
        heightError.style.display = "none";
    }
    if (age === "") {
        const ageError = document.getElementById("ageError");
        return ageError.style.display = "block";
    }else {
        const ageError = document.getElementById("ageError");
        ageError.style.display = "none";
    }
    if (maleSelect.value === "male") {
        bmrWeight = 9.6 * weight;
        bmrHeight = 1.8 * height;
        bmrAge = 4.7 * age;
        gender = 665;
    }
    if (femaleSelect.value === "male") {
        bmrWeight = 13.7 * weight;
        bmrHeight = 5 * height;
        bmrAge = 6.8 * age;
        gender = 66;
    }
    const BMR = gender + bmrWeight + bmrHeight - bmrAge;
    result.value = BMR.toFixed();
});
