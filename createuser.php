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
            <form method="POST" action="usercreation.php" onsubmit="return myFunction()">
                <table>
                    <tr>
                        <td label for ="locn"> <a id = "hash">*</a> Location Code : </td>
                        <td>
                            <select name = "loccode" required>
                                <option selected disabled>SELECT</option>
                                <option value = "WH Location A1">WH Location A1</option>
                                <option value = "WH Location A2">WH Location A2</option>
                                <option value="WH Location A3">WH Location A3</option>
                                <option value = "WH Location A4">WH Location A4</option>
                                <option value = "WH Location B1">WH Location B1</option>
                                <option value="WH Location B2">WH Location B2</option>
                                <option value = "WH Location B3">WH Location B3</option>
                                <option value = "WH Location B4">WH Location B4</option>
                                <option value="WH Location C1">WH Location C1</option>
                                <option value = "WH Location C2">WH Location C2</option>
                                <option value = "WH Location C3">WH Location C3</option>
                                <option value="WH Location C4">WH Location C4</option>
                                <option value = "WH Location D1">WH Location D1</option>
                                <option value = "WH Location D2">WH Location D2</option>
                                <option value="WH Location D3">WH Location D3</option>
                                <option value = "WH Location D4">WH Location D4</option>
                                <option value = "Yard 1">Yard 1</option>
                                <option value="Yard 2">Yard 2</option>
                            </select>
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
                    <tr>
                        <td label for="password"> <a id = "hash">*</a> CONFIRM PASSWORD : </td>
                    </tr>
                    <tr>
                        <td><input type="password" id="password2" name="password2" value="" class = "formfiel" rows = 1 cols = 40></td>
                    </tr>
                </table>
                <?php
                $useridquery = "SELECT max(userid) FROM login";
                $r = mysqli_query($db, $useridquery);
                while($row = $r ->fetch_array()){
                    $uid = $row['0'];
                }
                $userid += 1;
                ?>
                <input type="hidden" value="<?php echo $uid; ?>" name="uid" id="uid" />
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