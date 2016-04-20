function validateproductForm(form)
{
    alert("YOU HAVE SUCCESSFULLY ADDED A NEW PRODUCT !!!");
}

function validatesupplierForm(form)
{
    alert("YOU HAVE SUCCESSFULLY ADDED A NEW SUPPLIER !!!");
}

function validatecustomerForm(form)
{
    alert("YOU HAVE SUCCESSFULLY ADDED A NEW CUSTOMER !!!");
}

function validatesalesForm(form) {
    alert("YOU HAVE SUCCESSFULLY CREATED A NEW SALES ORDER !!!");
}

function validatepurchaseForm(form) {
    alert("YOU HAVE SUCCESSFULLY CREATED A NEW PURCHASE ORDER !!!");
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
        alert("YOU HAVE SUCCESSFULLY CREATED A NEW USER !!!");
    }
    else {
        alert("PASSWORD MATCH !!!");
    }
    return ok;
}

