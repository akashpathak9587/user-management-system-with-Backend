<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Registration and Login System</title>
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/welcome.css">
    <script src="../js/script.js" defer>
    </script>
</head>

<body>
    <nav>
        <div class="logo">
            <h1> <a href="welcome.html">User Panel </a></h1>
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
                        <a href="welcome.html"> <i class="fa-solid fa-gauge-high"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="profile.html"> <i class="fas fa-user"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="change-password.html"> <i class="fas fa-key"></i>
                            <p>Change Password</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="index.html"> <i class="fa-solid fa-right-from-bracket"></i>
                            <p>Signout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="main">
            <div class="main-title">
                <h1>Dashboard</h1>
            </div>
            <div class="sub-title">
                <h1>Dashboard </h1>
            </div>
            <div class="main-navigation">
                <div class="main-navigation-box">
                    <div class="main-navigation-box-text">
                        <p>
                            Welcome Back <span>AnujKumar</span></p>
                    </div>
                    <div class="main-navigation-box-link"> <a href="profile.html">View Profile<i class="fa-solid fa-angle-right"></i></a></div>
                </div>
            </div>
            <footer>
                <p>copyright &#169; 2022</p><a href="#">Akash Pathak</a>
            </footer>
        </section>
    </main>
    <div class="profile-box"> <a href="change-password.html">Settings</a><a href="change-password.html">Activity Log </a><a href="index.html">Logout</a></div>
</body>

</html>