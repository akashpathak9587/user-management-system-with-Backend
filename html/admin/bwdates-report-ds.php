<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Between Dates report date selection | Registration and Login System</title>
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/bwdates-report-ds.css">
    <script src="../../js/script.js" defer>
    </script>
</head>

<body>
    <nav>
        <div class="logo">
            <h1><a href="dashboard.html">Admin Panel</a></h1>
        </div>
        <div class="nav-button" id="navButton">
            <button> <i class="fas fa-bars"></i></button>
        </div>
        <div class="search-box">
            <form action="searchResult.html">
                <input id="search" type="text" name="search" placeholder="Search User by Name, email and Contact Number">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
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
                        <a href="dashboard.html"> <i class="fa-solid fa-gauge-high"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="manage-users.html"> <i class="fa-solid fa-users"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="#"> <i class="fa-solid fa-calendar"></i>
                            <p>B/w Dates Report</p>
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
                <h1>B/w Dates Report Date Selection</h1>
            </div>
            <div class="main-container">
                <div class="main-container-form">
                    <form action="#" method="get">
                        <div class="main-container-form-from">
                            <div class="main-container-form-from-label">
                                <label for="FromDate">From Date</label>
                            </div>
                            <div class="main-container-form-from-input">
                                <input id="FromDate" type="date" name="FromDate">
                            </div>
                        </div>
                        <div class="main-container-form-to">
                            <div class="main-container-form-to-label">
                                <label for="ToDate">To Date </label>
                            </div>
                            <div class="main-container-form-to-input">
                                <input id="ToDate" type="date" name="ToDate">
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
    <div class="profile-box"> <a href="#">Change Password </a><a href="index.html">Logout</a></div>
</body>

</html>