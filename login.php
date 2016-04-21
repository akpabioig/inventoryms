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
            <span><p id="pass"><?php
                if($_GET['failed']){
                    echo "Wrong Username or Password !!!";
                }?>
            </p></span>
            <a href="adminlogin.php" id="signup"><input type="button" value="ADMIN - LOGIN"></a>
            <h2> RGU Oil Services IMS Login</h2>
            <h4>Login with your Username and password</h4>
            <form method="POST" action="loginphp.php">
            <table>
                <tr>
                    <td label for="username"> <a id = "hash">*</a> UserName : </td>
                </tr>
                <tr>
                    <td><input type="text" id="myusername" name="myusername" value="" class = "loginfield"></td>
                </tr>
                <tr>
                    <td label for="pass"> <a id = "hash">*</a> Password : </td>
                </tr>
                <tr>
                    <td><input type="password" id="mypassword" name="mypassword" value="" class = "loginfield"></td>
                </tr>
            </table>
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