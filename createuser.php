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
            <h4> CREATE USER </h4>
            <form method="POST" action="usercreation.php">
                <table>
                    <tr>
                        <td label for = title> <a id = "hash">*</a> TITLE</td>
                        <td>
                            <select name = "title" required>
                                <option selected disabled>SELECT</option>
                                <option value = "Mr."> Mr. </option>
                                <option value = "Mrs.">Mrs. </option>
                                <option value="Miss">Miss</option>
                                <option value = "Master">Master</option>
                                <option value = "Dr.">Dr.</option>
                                <option value="Eng.">Eng.</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td label for = firstname> <a id = "hash">*</a> FIRST NAME : </td>
                    </tr>
                    <tr>
                        <td> <input type="text" id="firstname" name="firstname" value="" class = "formfiel" rows = 1 cols = 40></td>
                    </tr>
                    <tr>
                        <td label for = middlename> <a id = "hash">*</a> MIDDLE NAME : </td>
                    </tr>
                    <tr>
                        <td> <input type="text" id="middlename" name="middlename" value="" class = "formfiel" rows = 1 cols = 40></td>
                    </tr>
                    <tr>
                        <td label for = middlename> <a id = "hash">*</a> LAST NAME : </td>
                    </tr>
                    <tr>
                        <td> <input type="text" id="middlename" name="middlename" value="" class = "formfiel" rows = 1 cols = 40></td>
                    </tr>
                    <tr>
                        <td label for = position> <a id = "hash">*</a> COMPANY POSITION : </td>
                    </tr>
                    <tr>
                        <td> <input type="text" id="position" name="position" value="" class = "formfiel" rows = 1 cols = 40></td>
                    </tr>
                    <tr>
                        <td label for="username"> <a id = "hash">*</a> USER NAME : </td>
                    </tr>
                    <tr>
                        <td><input type="text" id="username" name="username" value="" class = "formfiel" rows = 1 cols = 40></td>
                    </tr>
                    <tr>
                        <td label for="password"> <a id = "hash">*</a> PASSWORD : </td>
                    </tr>
                    <tr>
                        <td><input type="password" id="password" name="password" value="" class = "formfiel" rows = 1 cols = 40></td>
                    </tr>

                </table>
                <h5><a href="#"> Forgot Password ? </a></h5>
                <p id = "signup"><input type = "submit" name = "submit" value = "REGISTER USER"></p>
            </form>
        </div>
    </section>
</div>
<footer id= "footlogin">
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>