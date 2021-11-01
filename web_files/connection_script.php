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
try {
    $username = 'adminer';
    $password = 'P@ssw0rd';
    $conn = new PDO(
        'mysql:host=localhost;dbname=ica_movies_db',
        $username,
        $password,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
    );
} catch (PDOException $e) {
    try {
        $username = 'root';
        $password = '';
        $conn = new PDO(
            'mysql:host=localhost;port=8306;dbname=ica_movies_db',
            $username,
            $password,
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
        );
    } catch (PDOException $e2) {
        try {
            $username = 'root';
            $password = '';
            $conn = new PDO(
                'mysql:host=localhost;dbname=ica_movies_db',
                $username,
                $password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
            );
        } catch (PDOException $e3) {
            echo 'Connection failed: ' . $e3->getMessage();
        }
    }
}


