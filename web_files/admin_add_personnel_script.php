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
if (! array_key_exists('username', $_GET)) {
    echo "<br/>missing username<br/>";
} else {
    require "connection_script.php";

    $username = htmlspecialchars($_GET['username']);
    echo "username: $username<br/>";

    // Need a non-html copy of the e-mail address, for the SQL query
    $raw_username = $_GET['username'];

    $stmt = $conn->prepare(
        '
    INSERT INTO personnel
        (username)
    VALUES
        (:username)
    ;
        '
    );
    
    $stmt->bindParam(':email', $raw_email);
    
    $stmt->execute();

    // If no rows were changed, show a warning message.
    if ($stmt->rowCount() == 0) {
        echo "<br/>Unsuccessful<br/>";
    } else {
        echo "<br/>Added<br/>";
    }
    $conn = null;
}


?>
 