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
$conn;
$username = 'root';
            $password = '';
            $conn = new PDO(
                'mysql:host=localhost;dbname=ica_movies_db',
                $username,
                $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
            );

/* home connection */
// $username = 'root';
// $password = 'usbw';
// $conn = new PDO(
//    'mysql:host=localhost;dbname=tafe_movie_project', $username, $password
// );

