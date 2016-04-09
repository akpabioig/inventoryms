function validateForm(form)
{
    alert("You have successfully added new Product");
}


function myFunction(form) {
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("password2").value;
    var ok = true;
    if (pass1 != pass2) {
        alert("Passwords Do not match");
        document.getElementById("pass1").style.borderColor = "#E34234";
        document.getElementById("pass2").style.borderColor = "#E34234";
        ok = false;
        alert("You Have Successfully created a New User");
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
}

// WH LOCATION A1
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("a1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



// WH LOCATION A2
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("a2");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
modal1.onclick = function(event1) {
    if (event1.target == modal1) {
        modal1.style.display = "none";
    }
}

// WH LOCATION A3
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("a3");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
modal2.onclick = function(event2) {
    if (event2.target == modal2) {
        modal2.style.display = "none";
    }
}

// WH LOCATION A4
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn3 = document.getElementById("a4");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks on the button, open the modal
btn3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
    modal3.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
modal3.onclick = function(event3) {
    if (event3.target == modal3) {
        modal3.style.display = "none";
    }
}

// WH LOCATION B1
var modal4 = document.getElementById('myModal4');

// Get the button that opens the modal
var btn4 = document.getElementById("b1");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks on the button, open the modal
btn4.onclick = function() {
    modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
    modal4.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
modal4.onclick = function(event4) {
    if (event4.target == modal4) {
        modal4.style.display = "none";
    }
}

// WH LOCATION B2
var modal5 = document.getElementById('myModal5');

// Get the button that opens the modal
var btn5 = document.getElementById("b2");

// Get the <span> element that closes the modal
var span5 = document.getElementsByClassName("close5")[0];

// When the user clicks on the button, open the modal
btn5.onclick = function() {
    modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
    modal5.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
modal5.onclick = function(event5) {
    if (event5.target == modal5) {
        modal5.style.display = "none";
    }
}

// WH LOCATION B3
var modal6 = document.getElementById('myModal6');

// Get the button that opens the modal
var btn6 = document.getElementById("b3");

// Get the <span> element that closes the modal
var span6 = document.getElementsByClassName("close6")[0];

// When the user clicks on the button, open the modal
btn6.onclick = function() {
    modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span6.onclick = function() {
    modal6.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
modal6.onclick = function(event6) {
    if (event6.target == modal6) {
        modal6.style.display = "none";
    }
}

// WH LOCATION B4
var modal7 = document.getElementById('myModal7');

// Get the button that opens the modal
var btn7 = document.getElementById("b3");

// Get the <span> element that closes the modal
var span7 = document.getElementsByClassName("close7")[0];

// When the user clicks on the button, open the modal
btn7.onclick = function() {
    modal7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span7.onclick = function() {
    modal7.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
modal7.onclick = function(event7) {
    if (event7.target == modal7) {
        modal7.style.display = "none";
    }
}