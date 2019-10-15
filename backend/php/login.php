<?php
// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=publishing user=www password=foo")
    or die('Could not connect: ' . pg_last_error());
// TODO: get username and password from web page (make sure to sanitze them)
$username = "";
$password = "";

// Performing SQL query
$query = 'SELECT hash FROM users WHERE user="'.$username;
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
//TODO: check if result realy returns the right hash

if(password_verify($password,$result)) {
//TODO: set logged in status
}


// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
