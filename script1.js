// Current Date
    function formatDate(date) {
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        return date.toLocaleDateString(undefined, options);
    }

    const currentDate = new Date();

    const currentDateElement = document.getElementById("currentDate");
    currentDateElement.textContent = "Dated: " + formatDate(currentDate);

    function showSubjectCodeMessage() {
        var message = document.getElementById("subjectCodeMessage");
        message.style.display = "block";
    }

    function hideSubjectCodeMessage() {
        var message = document.getElementById("subjectCodeMessage");
        message.style.display = "none";
    }

    function showSubjectMessage() {
        var message = document.getElementById("subjectMessage");
        message.style.display = "block";
    }

    function hideSubjectMessage() {
        var message = document.getElementById("subjectMessage");
        message.style.display = "none";
    }
