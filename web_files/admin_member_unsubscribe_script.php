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

require "connection_script.php";

$stmt = $conn->prepare(
    '
SELECT
    first_name, last_name, email, newsletter_requested, newsflash_requested
FROM
    `member`
WHERE
    email="caspianmaclean@example.com"
;
    '
);

$stmt->execute();

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    $first_name = htmlspecialchars($row["first_name"]);
    $last_name = htmlspecialchars($row["last_name"]);
    $email = htmlspecialchars($row["email"]);
    $url_email = urlencode($row["email"]);
    $newsletter_requested_code = $row["newsletter_requested"];
    if ($newsletter_requested_code == 0) {
        $newsletter_requested_display = "no";
    } else {
        $newsletter_requested_display = "yes";
    }
    $newsflash_requested_code = $row["newsflash_requested"];
    if ($newsflash_requested_code == 0) {
        $newsflash_requested_display = "no";
    } else {
        $newsflash_requested_display = "yes";
    }

    echo "
        *** $first_name $last_name / $email / 
        $newsletter_requested_display (letter) / $newsflash_requested_display (newsflash) ***
    ";
    $conn = null;
}
?>
 