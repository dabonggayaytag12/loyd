<?php 
?>


<?php 
require('connect.php');
session_start();
if(isset($_POST['username'])){
    $username = stripcslashes($_REQUEST['username']);
    $pass = stripcslashes($_REQUEST['password']);
    $username = mysqli_real_escape_string($conn, $username);
    $pass = mysqli_real_escape_string($conn, $pass);

    $query = "SELECT * FROM admins WHERE username ='$username' AND password='$pass'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $get = mysqli_fetch_array($result);
    $rows = mysqli_num_rows($result);
    if($rows == 1)
    {
        $_SESSION['name'] = $get['name'];
        header("location:index.php");
    } else {
        echo "<script>
            alert('Incorrect Username or Password');
            window.location.href = 'loginform.php'; 
        </script>";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <form method="POST" action="">
        <h2>Admin Login</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
