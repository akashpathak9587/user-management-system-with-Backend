<?php

define('servername', 'localhost');
define('username', 'root');
define('password', '4k4949585');
define('database', 'user_management_system');

$conn = mysqli_connect(servername, username, password, database);

if (!$conn) {
    echo mysqli_connect_error();
}
