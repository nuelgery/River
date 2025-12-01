<?php
session_start();
// If already logged in, redirect to dashboard
if (isset($_SESSION['admin_id'])) {
    header("location:dashboard_admin.php");
    exit;
}

if (isset($_GET['pesan'])) {
    echo "<script>alert('".$_GET['pesan']."');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>login river tubing tw</title>    
</head>
<body>
    <h1>testing login</h1>
    <h3>testing login backend</h3>

    <!-- Change action to login_process.php -->
    <form action="login_prosess.php" method="post">        
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login" value="Log In"></td>
            </tr>
        </table>
    </form>
</body>
</html>