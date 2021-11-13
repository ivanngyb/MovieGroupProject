<?php
/*
        admin_member_unsubscribe_script - removes subscriptions by email for the administrator
        
        RAD - 
        Team Name: ICA Designs
        Team Members:
            Ivan Ng
            Caspian Maclean
            Andrew Williamson
        Date: 11/11/2021
        Sprint: Two
*/




if (! array_key_exists('email', $_GET)) {
    echo "<br/>missing e-mail address<br/>";
} else {
    require "connection_script.php";

    echo "<br/> Unsubscribing ";                            
    $email = htmlspecialchars($_GET['email']);
    echo "email address: $email<br/>";

    $raw_email = $_GET['email'];

    $stmt = $conn->prepare(
        '
    UPDATE `member`
    SET
        newsletter_requested = 0, newsflash_requested = 0        
    WHERE
        email=:email
    ;
        '
    );
    
    $stmt->bindParam(':email', $raw_email);
    
    $stmt->execute();

    if ($stmt->rowCount() == 0) {
        echo "<br/>Unsuccessful: Not found in member database<br/>";
    } else {
        echo "<br/>Member unsubscribed<br/>";
    }
}


?>
 