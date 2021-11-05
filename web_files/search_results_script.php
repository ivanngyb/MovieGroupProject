<?php
/*
        search_results_script - generate search results table entries

        RAD - 
        Team Name: ICA Designs
        Team Members:
            Ivan Ng
            Caspian Maclean
            Andrew Williamson
        Date: 05/11/2021
        Sprint: One
        Task: Make all the pages responsive.
*/

require "connection_script.php";

// example $sql_condition:
// '1' . ' AND title LIKE :title' . ' AND rating="R"'
// could be equivalent to '1 AND title LIKE "%love%" AND rating="R"'
// start with '1' and add conditions onto it.

$sql_condition = '1';

if (array_key_exists('title', $_POST) && array_key_exists('genre', $_POST) 
    && array_key_exists('rating', $_POST) && array_key_exists('movie_year', $_POST)
) {
    $title = $_POST["title"];
    $genre = $_POST["genre"];
    $rating = $_POST["rating"];
    $movie_year = $_POST["movie_year"];

    $title_present = (strlen($title) > 0);
    $genre_present = (strlen($genre) > 0);
    $rating_present = (strlen($rating) > 0);
    $movie_year_present = (strlen($movie_year) > 0);
} else {
    echo "Invalid request: missing parameter\n";
    die;
}

if (!$title_present && !$genre_present && !$rating_present && !$movie_year_present) {
    echo "No search parameters given <br/><br/>";
    die;
}

if ($title_present) {
    $sql_condition = $sql_condition . ' AND title LIKE :title';
}
if ($genre_present) {
    $sql_condition = $sql_condition . ' AND genre=:genre';
}
if ($rating_present) {
    $sql_condition = $sql_condition . ' AND rating=:rating';
}
if ($movie_year_present) {
    $sql_condition = $sql_condition . ' AND movie_year=:movie_year';
}

$stmt = $conn->prepare(
    '
    SELECT
        id, title, rating, movie_year, status
    FROM
        `dvd`
    WHERE
    ' . $sql_condition . '
    ORDER BY title, movie_year
    LIMIT 120;
    '
);

if ($title_present) {
    $stmt->bindParam(':title', $title);
}
if ($genre_present) {
    $stmt->bindParam(':genre', $genre);
}
if ($rating_present) {
    $stmt->bindParam(':rating', $rating);
}
if ($movie_year_present) {
    $stmt->bindParam(':movie_year', $movie_year);
}

$stmt->execute();

$count = 0;

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    $id = $row["id"];
    $title = htmlspecialchars($row["title"]);
    $rating = $row["rating"];
    $movie_year = $row["movie_year"];
    $status = $row["status"];

    echo "
        <tr>
            <td><a href='movie_details.php?id=$id'>$title</a></td>
            <td>$rating</td>
            <td class='large-only'>$movie_year</td>
            <td>$status</td>
        </tr>
    ";

    $count++;
}

if ($count == 0) {
    echo "No matching movies found<br/><br/>";
}
$conn = null;
?>