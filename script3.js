// Current Date
function formatDate(date) {
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString(undefined, options);
}

const currentDate = new Date();

const currentDateElement = document.getElementById("currentDate");
currentDateElement.textContent = "Dated: " + formatDate(currentDate);