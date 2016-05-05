<?php include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> ADMIN CREATE USER </title>
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
            <h4> ADMIN CREATE USER </h4>
            <form method="POST" action="usercreation.php">
                <?php
                $useridquery = "SELECT max(userid) FROM login";
                $r = mysqli_query($db, $useridquery);
                while($row = $r ->fetch_array()){
                    $uid = $row['0'];
                }
                $uid += 10;
                ?>
                <input type="hidden" value="<?php echo $uid; ?>" name="uid" id="uid" />
                <table>
                    <tr>
                        <td label for ="title"> <a id = "hash">*</a> TITLE : </td>
                        <td>
                            <select name = "title" required id = "title">
                                <option selected disabled>SELECT</option>
                                <option value = "Mr"> MR.  </option>
                                <option value = "Mrs"> MRS. </option>
                                <option value="Dr"> DR. </option>
                                <option value = "Master"> MASTER </option>
                                <option value = "Miss"> MISS </option>
                                <option value="Eng"> ENG. </option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td label for = firstname> <a id = "hash">*</a> FIRST NAME : </td>
                    </tr>
                    <tr>
                        <td> <input type="text" id="firstname" name="firstname" value="" class = "formfiel" required></td>
                    </tr>
                    <tr>
                        <td label for=middlename> MIDDLE NAME :</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="middlename" name="middlename" value="" class="formfiel" rows=1
                                   cols=40></td>
                    </tr>
                    <tr>
                        <td label for = lastname> <a id = "hash">*</a> LAST NAME : </td>
                    </tr>
                    <tr>
                        <td> <input type="text" id="lastname" name="lastname" value="" class = "formfiel" rows = 1 cols = 40 required></td>
                    </tr>
                    <tr>
                        <td label for = position> <a id = "hash">*</a> COMPANY POSITION : </td>
                    </tr>
                    <tr>
                        <td><input type="text" id="staffposition" name="staffposition" value="" class="formfiel" rows=1
                                   cols=40 required></td>
                    </tr>
                    <tr>
                        <td label for="username"> <a id = "hash">*</a> USER NAME : </td>
                    </tr>
                    <tr>
                        <td><input type="text" id="username" name="username" value="" class = "formfiel" rows = 1 cols = 40 required></td>
                    </tr>
                    <tr>
                        <td label for="password"> <a id = "hash">*</a> PASSWORD : </td>
                    </tr>
                    <tr>
                        <td><input type="password" id="password" name="password" value="" class = "formfiel" rows = 1 cols = 40 required></td>
                    </tr>
                    <tr>
                        <td label for="password"> <a id = "hash">*</a> CONFIRM PASSWORD : </td>
                    </tr>
                    <tr>
                        <td><input type="password" id="password2" name="password2" value="" class = "formfiel" rows = 1 cols = 40 required></td>
                    </tr>
                </table>
                <p id="signup"><input type="submit" onclick="return myFunction()" name="submit" value="REGISTER USER">
                </p>
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
            alert("YOU HAVE SUCCESSFULLY CREATED A NEW USER !!!");
        }
        return ok;
    }
</script>
<footer id= "footlogin">
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>