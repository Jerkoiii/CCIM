<?php

$jerwin = mysqli_connect("localhost", "root", "", "ccim_proj");

if ($jerwin == false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_POST['tungolUsername'];
$password = $_POST['tungolPassword'];

$query = "SELECT * FROM registration 
          WHERE tungolUsername='$username' 
          AND tungolPassword='$password'";

$result = mysqli_query($jerwin, $query);

if (mysqli_num_rows($result) > 0) {

    // SUCCESS → Redirect
    header("Location: Project.html");
    exit();

} else {
    echo "<h1>Login Failed!</h1>";
    echo "<p>Invalid username or password.</p>";
}

mysqli_close($jerwin);

?>
