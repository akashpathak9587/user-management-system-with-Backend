<?php
$pMatch = true;
$exist = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once 'config.php';

    $fName = $_POST["first_name"];
    $lName = $_POST['last_name'];
    $email = $_POST['email'];
    $MobNo = $_POST['mobNumber'];
    $cPass = $_POST['confPass'];
    $pass = $_POST['pass'];

    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num  = mysqli_num_rows($result);
    if ($num == 0) {
        if ($pass == $cPass) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "insert into users (first_name, last_name, password, email, contact_no, date) values('$fName', '$lName', '$hash', '$email', '$MobNo', current_timestamp)";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Registration successfully done, now you can login');</script>";
                echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
            } else {
                echo mysqli_error($conn);
            }
        } else {
            $pMatch = false;
        }
    } else {
        echo "<script>alert('Email Already registered with us')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup | Registration and Login System</title>
    <link rel="stylesheet" href="../css/registration.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
</head>

<body>
    <div class="main-form">
        <header>
            <div class="main-header">
                <h1>Registration and Logind System</h1>
            </div>
            <div class="sub-header">
                <h1>Create Account</h1>
            </div>
        </header>
        <div class="Regform">
            <form action="signup.php" method="post">
                <input id="name" type="text" name="first_name" required placeholder="First Name">
                <input id="name" type="text" name="last_name" placeholder="Last Name">
                <input id="email" type="email" name="email" required placeholder="Email Address">
                <input id="number" type="text" name="mobNumber" required maxlength="10" placeholder="Contact Number">
                <input id="password" type="password" name="pass" required placeholder="password">
                <input id="password" type="password" name="confPass" required placeholder="Confirm Password">
                <?php
                if (!$pMatch) {
                    echo "<p style='padding: 10px; text-align: left;'>password not match</p>";
                }
                ?>
                <input id="submit" type="submit" value="Create Account">
            </form>
        </div>
        <div class="formFooter"> <a href="login.php">Have an account? Go to Login</a><a href="index.php">Back to Home</a></div>
    </div>
    <footer>
        <p>copyright &#169; 2022</p><a href="#">Akash Pathak</a>
    </footer>
</body>

</html>