<?php
/*
        movie_details_script - display details for an individual movie

        Name: Caspian Maclean
        ID: 30039802
        Date: 8/9/2021
        Task: Project
*/

require "connection_script.php";

if (array_key_exists('id', $_GET)) {
    $id = $_GET["id"];
} else {
    echo "Invalid request: id parameter required\n";
    die;
}

$stmt = $conn->prepare(
    '
SELECT
    title, studio, status, sound,
    versions, recommended_retail_price,
    rating, movie_year,
    genre, aspect, search_count
FROM
    `dvd`
WHERE
    id=:id
;
    '
);

$stmt->bindParam(':id', $id);
$stmt->execute();
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
    $title = htmlspecialchars($row["title"]);
    $studio = $row["studio"];
    $status = $row["status"];
    $sound = $row["sound"];
    $versions = $row["versions"];
    $recommended_retail_price = $row["recommended_retail_price"];
    $rating = $row["rating"];
    $movie_year = $row["movie_year"];
    $genre = $row["genre"];
    $aspect = $row["aspect"];
    $search_count = $row["search_count"];
    echo "
                <label>Title:  </label>$title<br/>
                <label>Studio:  </label>$studio<br/>
                <label>Status:  </label>$status<br/>
                <label>Sound:  </label>$sound<br/>
                <label>Versions:  </label>$versions<br/>
                <label>RRP:  </label>$recommended_retail_price
                <div class='detail-halfway'> <br/></div>
                <label>Rating:  </label>$rating<br/>
                <label>Year:  </label>$movie_year<br/>
                <label>Genre: </label>$genre<br/>
                <label>Aspect:  </label>$aspect<br/>
                <label>Searches:  </label>$search_count<br/>
    ";
}
$conn = null;

?>
            