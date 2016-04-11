function validateproductForm(form)
{
    alert("You have successfully added new Product");
}

function validatesupplierForm(form)
{
    alert("You have successfully added new Supplier");
}

function validatecustomerForm(form)
{
    alert("You have successfully added new Supplier");
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

