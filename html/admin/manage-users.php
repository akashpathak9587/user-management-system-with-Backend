<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users | Registration and Login System</title>
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/manage-users.css">
    <script src="../../js/script.js" defer>
    </script>
</head>

<body>
    <nav>
        <div class="logo">
            <h1> <a href="dashboard.html">Admin Panel </a></h1>
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
                        <a href="#"> <i class="fa-solid fa-users"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                    <li class="sidebar-link-list-item">
                        <a href="bwdates-report-ds.html"> <i class="fa-solid fa-calendar"></i>
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
                <h1>Manage Users</h1>
            </div>
            <div class="sub-title">
                <h1><a href="dashboard.html">Dashboard </a>/ Manage Users</h1>
            </div>
            <div class="table-container">
                <div class="table-container-title">
                    <h1> <i class="fas fa-table"> </i>Registered User Details</h1>
                </div>
                <div class="table-container-form">
                    <div class="table-container-form-select">
                        <select id="entries">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
              </select><i class="fas fa-angle-down" id="selectIcon"></i>
                        <label for="entries">entries per page</label>
                    </div>
                    <div class="table-container-form-search">
                        <input id="search" type="text" name="search" placeholder="Search...">
                    </div>
                </div>
                <div class="table-container-data">
                    <table>
                        <thead>
                            <tr>
                                <th> <a href="#"> Sno.</a></th>
                                <th> <a href="#">First Name </a></th>
                                <th> <a href="#">Last Name</a></th>
                                <th> <a href="#">Email Id </a></th>
                                <th> <a href="#">Contact No.</a></th>
                                <th> <a href="#">Reg. Date</a></th>
                                <th><a href="#">Action </a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Anuj </td>
                                <td>Kumar </td>
                                <td>phpgurukulteam@gmail.com</td>
                                <td>1234567890</td>
                                <td>2021-08-10 00:00:00</td>
                                <td>
                                    <a href="user-profile.html"> <i class="fas fa-edit"></i></a>
                                    <a href="#"> <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>akash </td>
                                <td>pathak </td>
                                <td>aakapa95@gmail.com</td>
                                <td>3423432947 </td>
                                <td>2022-03-21 16:03:52</td>
                                <td>
                                    <a href="user-profile.html"> <i class="fas fa-edit"></i></a>
                                    <a href="#"> <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-container-footer">
                    <p>Showing 1 to 2 of 2 entries</p>
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