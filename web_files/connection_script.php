<?php

/*
 * connection_script_server - connects to the database
 * 
 *      Name: Caspian Maclean
 *      ID: 30039802
 *      Date: 8/9/2021
 *      Task: Project
 */

/* web server connection */
$username = 'adminer';
$password = 'P@ssw0rd';
$conn = new PDO(
    'mysql:host=localhost;dbname=30039802_movie_project', $username, $password
);

/* home connection */
// $username = 'root';
// $password = 'usbw';
// $conn = new PDO(
//    'mysql:host=localhost;dbname=tafe_movie_project', $username, $password
// );

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
