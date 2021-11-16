<?php
/*
        add_rating_script - adds a star rating for a dvd.

        Caspian Maclean
        Date: 15/11/2021
        Sprint: Three

        Usage: add_rating_script.php?id=4&stars=5
*/

if (! array_key_exists('stars', $_GET) || !array_key_exists('id', $_GET)) {
    echo "<!-- Missing parameter -->";
} else {
    require "connection_script.php";
    $id = $_GET['id'];
    $stars_to_add = $_GET['stars'];

    $stmt = $conn->prepare(
        '
    UPDATE `dvd`
    SET
        number_of_star_ratings = number_of_star_ratings + 1,
        total_stars = total_stars + :stars_to_add,
        average_star_rating = (total_stars + :stars_to_add) / (number_of_star_ratings + 1)
    WHERE
        id=:id
    ;
        '
    );

//        average_star_rating = (number_of_star_ratings + 1) / (total_stars + :stars_to_add)


    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':stars_to_add', $stars_to_add);
    
    $stmt->execute();

    $conn = null;
}
?>