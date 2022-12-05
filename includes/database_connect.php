
<?php
/*
$conn = mysqli_connect("localhost/127.0.0.1", "root", "", "PGLife");

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
*/

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'entities';

$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
         

?>


