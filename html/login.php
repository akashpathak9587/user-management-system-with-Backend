<?php
include_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultArray = mysqli_fetch_assoc($result);
    $hash = $resultArray['password'];
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        echo "<script>alert('Your Mail is not registered with out system.')</script>";
    }
    if ($num > 0) {
        if (!password_verify($password, $hash)) {
            echo "<script>alert('Password is invalid. Try again with correct password.')</script>";
        } else {
            session_start();
            $_SESSION['firstName'] = $resultArray['first_name'];
            $_SESSION['lastName'] = $resultArray['last_name'];
            $_SESSION['email'] = $resultArray['email'];
            $_SESSION['contact_no'] = $resultArray['contact_no'];
            $_SESSION['regDate'] = $resultArray['date'];
            echo "<script type=text/javascript>document.location = 'welcome.php'</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login | Registration and Login System</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
</head>

<body>
    <div class="main-form">
        <div class="form-header">
            <div class="main-heading">
                <h1>Registration and Login System</h1>
            </div>
            <div class="sub-heading">
                <h1>User Login </h1>
            </div>
        </div>
        <div class="logForm">
            <form action="login.php" method="post">
                <input id="email" type="email" name="email" placeholder="Email address">
                <input id="pass" type="password" name="pass" placeholder="password"><a href="password-recovery.php">Forgot Password?</a>
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="formFooter"><a href="signup.php">Need an account? Sign up! </a><a href="index.php">Back to Home</a></div>
    </div>
    <footer>
        <p>copyright &#169; 2022</p><a href="#">Akash Pathak</a>
    </footer>
</body>

</html>