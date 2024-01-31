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

  function showYearMessage() {
    var message = document.getElementById("yearMessage");
    message.style.display = "block";
  }

  function hideYearMessage() {
    var message = document.getElementById("yearMessage");
    message.style.display = "none";
  }


  document.addEventListener('DOMContentLoaded', function() {
    var nosheetInput = document.getElementById('student');
    var ppramtInput = document.getElementById('no');
    var chargesInput = document.getElementById('amt');

    function calculateCharges() {
        var nosheet = parseFloat(nosheetInput.value) || 0;
        var ppramt = parseFloat(ppramtInput.value) || 0;

        var charges = nosheet * ppramt;
        if (!isNaN(charges)) {
            chargesInput.value = charges.toFixed(2); 
        }
    }

    nosheetInput.addEventListener('input', calculateCharges);
    ppramtInput.addEventListener('input', calculateCharges);

    calculateCharges();
});


function calculateTotalAndUndertaking() {
    var charges = parseFloat(document.getElementById('amt').value) || 0;
    var expenses = parseFloat(document.getElementById('amt1').value) || 0;
    var totalAmt = charges + expenses;

    if (!isNaN(totalAmt)) {
        document.getElementById('totalamt').value = totalAmt;
    }

    document.getElementById('undertakingamt').value = totalAmt.toFixed(2);
}

document.addEventListener('DOMContentLoaded', function() {
    calculateTotalAndUndertaking();

    document.getElementById('amt').addEventListener('input', calculateTotalAndUndertaking);
    document.getElementById('amt1').addEventListener('input', calculateTotalAndUndertaking);
});

function printForm() {
  document.getElementById('b').style.display = 'none'; 
  document.getElementById('c').style.display = 'none'; 
  document.getElementById('d').style.display = 'none'; 

  window.print();

  document.getElementById('b').style.display = 'inline'; 
  document.getElementById('c').style.display = 'inline'; 
  document.getElementById('d').style.display = 'inline'; 

}
