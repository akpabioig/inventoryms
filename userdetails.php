<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
include('connection.php');
$sql = "SELECT user.userid, user.title, user.firstname, user.middlename, user.lastname, user.staffposition, login.username, login.password
FROM user, login
WHERE user.userid = login.userid
ORDER BY user.username";
$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> USER DETAILS </title>
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
        <button id="logout"><a href="logout.php">LOG-OUT</a></button>
    </header>
    <section id="admincontent">
        <h3> ADMIN HOMEPAGE </h3>
        <img src="images/userdetails.jpg" style{height="250" width="200" }/>
        <div id="form1">
            <div id="purchasetable">
            <table id="t2">
                <tr>
                    <th> USER ID</th>
                    <th> TITLE</th>
                    <th> FIRST NAME</th>
                    <th> MIDDLE NAME</th>
                    <th> LAST NAME</th>
                    <th> STAFF POSITION</th>
                    <th> USERNAME</th>
                    <th> PASSWORD</th>
                </tr>
                <tbody id="usertd">
                <?php
                if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
                    while ($row = $result->fetch_array()) {
                        echo "
                                <tr>
                        <td><input type=\"text\" id = \"userid\" name= \"userid\"  value = \"{$row['userid']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"title\" name= \"title\"  value = \"{$row['title']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"firstname\" name= \"firstname\"  value = \"{$row['firstname']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"middlename\" name= \"middlename\"  value = \"{$row['middlename']}\" class = \"tablefield\" disabled></td>

                        <td><input type=\"text\" id = \"lastname\" name= \"lastname\"  value = \"{$row['lastname']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"staffposition\" name= \"staffposition\"  value = \"{$row['staffposition']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"username\" name= \"username\"  value = \"{$row['username']}\" class = \"tablefield\" disabled></td>
                        <td><input type=\"text\" id = \"password\" name= \"password\"  value = \"{$row['password']}\" class = \"tablefield\" disabled></td>
                        <td><a href='edit-user.php?prodid={$row['userid']}' onclick='return editconfig()'><img src = 'images/edit.png' style{height=\"25\" width=\"25\"}></a></td>
                        <td><a href='deleteuser.php?prodid={$row['userid']}' onclick='return deleteconfig()'> <img src = 'images/delete.png' style{height=\"25\" width=\"25\"}></a> </td>
                    </tr>

                                ";
                    }
                } else {
                    echo '<option> No Result Found </option>';
                }
                ?>
                </tbody>
            </table>
            </div>
        </div>
</div>
</section>
<script>
    function deleteconfig() {

        var del = confirm("ARE YOU SURE YOU WANT TO DELETE THIS USER?");
        if (del == true) {
            alert("USER DELETED !!!")
        }
        return del;
    }
    function editconfig() {
        var edit = confirm("ARE YOU SURE YOU WANT TO EDIT THIS USERS DETAILS ?");
        if (edit == true) {
            alert("TRANSFERRING YOU TO THE EDIT USER PAGE !!!")
        }
        return edit;
    }
</script>
</div>
<footer id="footlogin">
    <p>&copy; Akpabio Ignatius, 2016</p>
</footer>
</body>
</html>
