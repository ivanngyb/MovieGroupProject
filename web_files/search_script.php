<?php
/*
        search_script - contents of the search form,
        generated from the database

        Name: Caspian Maclean
        ID: 30039802
        Date: 8/9/2021
        Task: Project

        Menu for genre and rating need to come from the database.
*/

require "connection_script.php";



?>
                <label>Title</label>
                <input type="text" autofocus name="title" id="title"><br>
                <label>Genre</label>
                <select name="genre" id="genre">
                    <option value="">(Any)</option>

                        <?php
                        $stmt = $conn->prepare(
                            '
                            SELECT DISTINCT
                                genre
                            FROM
                                `dvd`
                            WHERE
                                1
                            ORDER BY genre;
                            '
                        );
                        $stmt->execute();
                        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                            $genre = $row["genre"];
                            echo "<option>$genre</option>";
                        }
                        ?>

                </select><br/>
                <label>Rating</label>
                <select name="rating" id="rating">
                    <option value="">(Any)</option>

                    <?php
                    $stmt = $conn->prepare(
                        '
                        SELECT DISTINCT
                            rating
                        FROM
                            `dvd`
                        WHERE
                            1
                        ORDER BY rating;
                        '
                    );
                    $stmt->execute();
                    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
                        $rating = $row["rating"];
                        echo "<option>$rating</option>";
                    }

                    $conn = null;

                    ?>

                </select><br/>
                <label>Year</label>
                <input type="number" min="1800" max="2099"
                    name="movie_year" id="movie_year"><br>
                <label></label>
                <input class="button" type="submit" value="Search"> 
