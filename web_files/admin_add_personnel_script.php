<?php
/*
        admin_add_personnel_script
        
        Caspian Maclean
        Date: 15/11/2021
        Sprint: Three


*/

// Make sure an e-mail address was passed in.
// Do not check for validity, as we'll want to be able to remove/unsubscribe any
// addresses that are in the database, valid or not. The program will still warn
// if the address was not in the database.
if (
        ! array_key_exists('username', $_GET) ||
        ! array_key_exists('password', $_GET)
    ) {
    echo "<br/>missing parameter<br/>";
} else {
    require "connection_script.php";

    $html_username = htmlspecialchars($_GET['username']);

    // Need a non-html copy of the inputs, for the SQL query
    $raw_username = $_GET['username'];
    $raw_password = $_GET['password'];

    if (array_key_exists('create_admin', $_GET) && $_GET['create_admin'] == "yes") {
        $create_admin_code = 1;
        $create_admin_message = "with admin access";
    } else {
        $create_admin_code = 0;
        $create_admin_message = "without admin access";
    }
        
    $stmt = $conn->prepare(
        '
    INSERT INTO personnel
        (username)
    VALUES
        (:username)
    ;
        '
    );
    
    $stmt->bindParam(':username', $raw_username);
    
    $stmt->execute();

    // If no rows were changed, show a warning message.
    if ($stmt->rowCount() == 0) {
        echo "<br/>Unsuccessful - account not added for $html_username<br/>";
    } else {
        echo "<br/>Added $html_username ($create_admin_message)<br/>";
    }
    $conn = null;
}


?>
 