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
//$username = 'adminer';
//$password = 'P@ssw0rd';
//$conn = new PDO(
//    'mysql:host=localhost;dbname=ica_movies_db', $username, $password
//);

/* home connection */
$username = 'root';
$password = '';
$conn = new PDO(
   'mysql:host=localhost;port=8306;dbname=ica_movies_db', $username, $password
);

/* lab pc*/
// $username = 'root';
// $password = '';
// $conn = new PDO(
//    'mysql:host=localhost;port=8306;dbname=ica_movies_db', $username, $password
// );

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
