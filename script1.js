//Form Number
// document.addEventListener('DOMContentLoaded', function () {

//     var form = document.getElementById('pprset');
//     var formNumberInput = document.getElementById('formNumber');

//     var formNumber = 1;
//     formNumberInput.value = formNumber;

//     form.addEventListener('submit', function (event) {
//         event.preventDefault();

//         formNumber++;
//         formNumberInput.value = formNumber;

//     });
// });

// Current Date
    function formatDate(date) {
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString(undefined, options);
    }

    const currentDate = new Date();

    const currentDateElement = document.getElementById("currentDate");
    currentDateElement.textContent = "Dated: " + formatDate(currentDate);