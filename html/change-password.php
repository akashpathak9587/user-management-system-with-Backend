<?php
include_once 'config.php';
session_start();
if (!isset($_SESSION['firstName'])) {
    echo "<script type='text/javascript'>document.location = 'index.php'</script>";
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $currPass = $_POST['currPass'];
    $newPass = $_POST['newPass'];
    $confPass = $_POST['confPass'];
    session_start();
    $email = $_SESSION['email'];
    $sql = "select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultArray = mysqli_fetch_assoc($result);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        echo "<script>alert('error');</script>";
    }
    if ($num > 0) {
        $hash = $resultArray['password'];
        if (!password_verify($currPass, $hash)) {
            echo "<script>alert('old password is wrong.');s</script>";
        } else {
            if ($newPass != $confPass) {
                echo "<script>alert('password does not match');</script>";
            } else {
                $passwordHash = password_hash($newPass, PASSWORD_DEFAULT);
                $sql = "update users set password='$passwordHash' where email='$email'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('password updated successfully');</script>";
                    echo "<script type='text/javascript'>document.location = 'welcome.php'</script>";
                }
            }
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
    <title>Admin Dashboard | Registration and Login System</title>
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/change-password-profile.css">
    <script src="../js/script.js" defer>
    </script>
</head>

<body>
    <nav>
        <div class="logo">
            <h1> <a href="welcome.php">User Panel </a></h1>
        </div>
        <div class="nav-button" id="navButton">
            <button> <i class="fas fa-bars"></i></button>
        </div>
        <div class="profile-button" id="profileButton">
            <a href="#"> <i class="fa-solid fa-user"></i><i class="fa-solid fa-caret-down"></i></a>
        </div>
    </nav>
    <main id="mainPage">
        <div class="sidebar" id="sidebar">
            <div class="title">
                <h1>CORE </h1>
            </div>
            <div class="sidebar-link">
                <ul class="sidebar-link-list">
                    <li class="sidebar-link-list-item">
                        <a href="welcome.php"> <i class="fa-solid fa-gauge-high"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="profile.php"> <i class="fas fa-user"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="change-password.php"> <i class="fas fa-key"></i>
                            <p>Change Password</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="index.php" onclick="<?php session_destroy(); ?>"> <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Signout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="main">
            <div class="main-title">
                <h1>Change Password</h1>
            </div>
            <div class="main-container">
                <div class="main-container-form">
                    <form action="change-password.php" method="post">
                        <div class="main-container-form-current">
                            <div class="main-container-form-current-label">
                                <label for="currentPass">Current Password</label>
                            </div>
                            <div class="main-container-form-current-input">
                                <input id="currentPass" type="password" name="currPass">
                            </div>
                        </div>
                        <div class="main-container-form-new">
                            <div class="main-container-form-new-label">
                                <label for="newPass">New Password </label>
                            </div>
                            <div class="main-container-form-new-input">
                                <input id="newPass" type="password" name="newPass">
                            </div>
                        </div>
                        <div class="main-container-form-confirm">
                            <div class="main-container-form-confirm-label">
                                <label for="confPass">Confirm Password</label>
                            </div>
                            <div class="main-container-form-confirm-input">
                                <input id="confPass" type="password" name="confPass">
                            </div>
                        </div>
                        <div class="main-container-form-submit">
                            <input type="submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>
            <footer>
                <p>copyright &#169; 2022</p><a href="#">Akash Pathak</a>
            </footer>
        </section>
    </main>
    <div class="profile-box"> <a href="change-password.php">Settings</a><a href="change-password.php">Activity Log </a><a href="index.php" onclick="<?php session_destroy(); ?>">Logout</a></div>
</body>

</html>