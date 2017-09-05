<?php
    $conn = mysqli_connect("localhost","root","","login");
    mysqli_set_charset($conn,"utf8");
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $result = mysqli_query($conn, "select * from users where username = '$username' and password ='$password'");
    $row = mysqli_fetch_array($result);
    if ($row['username'] == $_POST['user'] && $row['password'] == $_POST['pass'] ){
        echo "<script>alert('Login success!!! Welcome')</script>";
        header('refresh:0; htmlfile/profile1.php');
    } else {
        echo "<script>alert('Login Failed')</script>";
        header('refresh:0; login.php');
    }
?>
