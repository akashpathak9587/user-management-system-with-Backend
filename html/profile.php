<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    echo "<script type=text/javascript>document.location = 'index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Registration and Login System</title>
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/profile.css">
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
                        <a href="index.php"> <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Signout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="main">
            <div class="main-title">
                <h1> <span>
                        <?php
                        echo $_SESSION['firstName'];
                        ?>
                    </span>'s Profile</h1>
            </div>
            <div class="main-container">
                <div class="main-container-link"> <a href="edit-profile.php">edit</a></div>
                <div class="main-container-table">
                    <div class="main-container-table-box">
                        <div class="main-container-table-box-label">
                            <p>First Name</p>
                        </div>
                        <div class="main-container-table-box-value">
                            <p>
                                <?php
                                echo $_SESSION['firstName'];
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="main-container-table-box">
                        <div class="main-container-table-box-label">
                            <p>Last Name</p>
                        </div>
                        <div class="main-container-table-box-value">
                            <p>
                                <?php
                                echo $_SESSION['lastName'];
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="main-container-table-box">
                        <div class="main-container-table-box-label">
                            <p>Contact No.</p>
                        </div>
                        <div class="main-container-table-box-value">
                            <p>
                                <?php
                                echo $_SESSION['contact_no'];
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="main-container-table-box">
                        <div class="main-container-table-box-label">
                            <p>Email</p>
                        </div>
                        <div class="main-container-table-box-value">
                            <p>
                                <?php
                                echo $_SESSION['email'];
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="main-container-table-box">
                        <div class="main-container-table-box-label">
                            <p>Reg. Date </p>
                        </div>
                        <div class="main-container-table-box-value">
                            <p>
                                <?php
                                echo $_SESSION['regDate'];
                                ?>
                            </p>
                        </div>
                    </div>
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