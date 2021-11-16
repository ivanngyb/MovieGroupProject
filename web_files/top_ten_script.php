<?php
/*
        top_ten_script - table entries with list of top ten most searched movies

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

/* 
 * Table headings
 * 
 *              <tr>
 *                  <th>Rank</th>
 *                  <th>Title</th>
 *                  <th>Rating</th>
 *                  <th>Year</th>
 *                  <th>Searches</th>
 *              </tr>
 *
 * This script generates the corresponding table data rows
 * for the top 10 searched movies.
 * 
*/

require "connection_script.php";

$stmt = $conn->prepare(
    '
SELECT
    id, title, rating, movie_year, search_count, average_star_rating
FROM
    `dvd`
WHERE
    1
ORDER BY average_star_rating DESC
LIMIT 10;
    '
);

$stmt->execute();

$rank = 1;

    echo "
        <tr>
            <th>Rank</th>
            <th>Title</th>
            <th>Rating</th>
            <th>Year</th>
            <th>Stars</th>
            <th class='large-only'>Searches</th>
        </tr>";

foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    $id = $row["id"];
    $title = htmlspecialchars($row["title"]);
    $rating = $row["rating"];
    $movie_year = $row["movie_year"];
    $average_star_rating = $row["average_star_rating"];
    $search_count = $row["search_count"];

    echo "
        <tr>
            <td>$rank</td>
            <td><a href='movie_details.php?id=$id'>$title</a></td>
            <td>$rating</td>
            <td>$movie_year</td>
            <td>$average_star_rating</td>
            <td class='large-only'>$search_count</td>
        </tr>
    ";
    $rank++;
}

$conn = null;
?>