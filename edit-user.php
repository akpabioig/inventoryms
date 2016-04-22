<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
include('connection.php');

if (isset($_GET['userid'])) {
    $userId = $_GET['userid'];
    $sqlselect = "SELECT *
                  FROM user, login
                  WHERE login.userid = $userId";
    $getResult = mysqli_query($db, $sqlselect);

    while ($selectRow = $getResult->fetch_array()) {
        $gettitle = $selectRow['title'];
        $getfirstname = $selectRow['firstname'];
        $getmiddlename = $selectRow['middlename'];
        $getlastname = $selectRow['lastname'];
        $getstaffposition = $selectRow['staffposition'];
        $getusername = $selectRow['username'];
        $getpassword = $selectRow['password'];
    }
} else {
    header("Location: userdetails.php?f=1");
}
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> ADMIN CREATE USER </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css"/>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
<div style="margin-left:70px">
    <header id="headlogin">
        <h1> RGU Oil Services </h1>
        <h2> Inventory Management Made Easy </h2>
    </header>
    <section id="content">
        <div id="log">
            <h2> RGU Oil Services IMS User Update Page</h2>
            <h4> EDIT USER DETAILS </h4>
            <form method="post" action="updateuser.php">
                <table>
                    <tr>
                        <td label for="title"><a id="hash">*</a> TITLE :</td>
                        <td>
                            <select name="title" required id="title" value="<?php echo $gettitle; ?>">
                                <option selected disabled>SELECT</option>
                                <option <?php if ($gettitle == 'Mr') {
                                    echo 'selected';
                                } ?> value="Mr"> MR.
                                </option>
                                <option <?php if ($gettitle == 'Mrs') {
                                    echo 'selected';
                                } ?> value="Mrs"> MRS.
                                </option>
                                <option <?php if ($gettitle == 'Dr') {
                                    echo 'selected';
                                } ?>value="Dr"> DR.
                                </option>
                                <option <?php if ($gettitle == 'Master') {
                                    echo 'selected';
                                } ?>value="Master"> MASTER
                                </option>
                                <option <?php if ($gettitle == 'Miss') {
                                    echo 'selected';
                                } ?>value="Miss"> MISS
                                </option>
                                <option <?php if ($gettitle == 'Dr') {
                                    echo 'selected';
                                } ?>value="Eng"> ENG.
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td label for=firstname><a id="hash">*</a> FIRST NAME :</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="firstname" name="firstname" value="<?php echo $getfirstname; ?>"
                                   class=" formfiel" required>
                        </td>
                    </tr>
                    <tr>
                        <td label for=middlename><a id="hash">*</a> MIDDLE NAME :</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="middlename" name="middlename" value="<?php echo $getmiddlename; ?>"
                                   class=" formfiel" rows=1 cols=40 required>
                        </td>
                    </tr>
                    <tr>
                        <td label for=lastname><a id="hash">*</a> LAST NAME :</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="lastname" name="lastname" value="<?php echo $getlastname; ?>"
                                   class=" formfiel" rows=1 cols=40 required>
                        </td>
                    </tr>
                    <tr>
                        <td label for=position><a id="hash">*</a> COMPANY POSITION :</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="position" name="position" value="<?php echo $getstaffposition; ?>"
                                   class=" formfiel" rows=1 cols=40required></td>
                    </tr>
                    <tr>
                        <td label for="username"><a id="hash">*</a> USER NAME :</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="username" name="username" value="<?php echo $getusername; ?>"
                                   class="formfiel" rows=1 cols=40 required></td>
                    </tr>
                    <tr>
                        <td label for="password"><a id="hash">*</a> PASSWORD :</td>
                    </tr>
                    <tr>
                        <td><input type="password" id="password" name="password" value="<?php echo $getpassword; ?>"
                                   class=" formfiel" rows=1 cols=40 required></td>
                    </tr>
                    <tr>
                        <td label for="password"><a id="hash">*</a> CONFIRM PASSWORD :</td>
                    </tr>
                    <tr>
                        <td><input type="password" id="password2" name="password2" value="" class="formfiel" rows=1
                                   cols=40 required></td>
                    </tr>
                </table>
                <input type="hidden" id="uid" name="uid" value="<?php echo $userId; ?>"/>
                <p id="signup"><input type="submit" onclick="return myFunction()" name="submit"
                                      value="UPDATE USER DETAILS"></p>
            </form>
        </div>
    </section>
</div>
<script>
    function myFunction(form) {
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("password2").value;
        var ok = true;
        if (pass1 != pass2) {
            alert("Passwords Do not match");
            return false;
        }
        else {
            alert("PASSWORD MATCH !!!");
            alert("YOU HAVE SUCCESSFULLY EDITED USER DETAILS !!!");
        }
        return ok;
    }
</script>
<footer id="footlogin">
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>