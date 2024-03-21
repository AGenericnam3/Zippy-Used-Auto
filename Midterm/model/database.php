<?php
//Set up the server
$dsn ="mysql:host=localhost; dbname = zippyusedautos";
$username = 'root';
$password = 'password1';

// Connect to the first database
$conn1 = mysqli_connect($host, $username, $password, "zippyusedautos");