<?php include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> LOGIN PAGE </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

</head>
<body>
<div style="margin-left:70px">
    <header id = "headlogin">
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
    </header>
    <section id = "content">
        <div id = "log">
            <h2> RGU Oil Services IMS Login</h2>
            <h4>Login with your Username and password</h4>
            <form method="POST" action="login.php">
            <table>
                <tr>
                    <td label for="username"> <a id = "hash">*</a> UserName : </td>
                </tr>
                <tr>
                    <td><input type="username" id="usn" name="username" value="" class = "formfiel" rows = 1 cols = 40></td>
                </tr>
                <tr>
                    <td label for="pass"> <a id = "hash">*</a> Password : </td>
                </tr>
                <tr>
                    <td><input type="password" id="pass" name="password" value="" class = "formfiel" rows = 1 cols = 40></td>
                </tr>
            </table>
            <h5><a href="#"> Forgot Password ? </a></h5>
            <p id = "signup"><input type = "submit" name = "submit" value = "Sign In"></p>
            </form>
        </div>
    </section>
</div>
<footer id= "footlogin">
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>