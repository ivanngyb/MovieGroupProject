<?php
/*
        movie_details - a web page with details for an individual movie

        Name: Caspian Maclean
        ID: 30039802
        Date: 8/9/2021
        Task: Project
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>
            Movie details
        </title>
    </head>
    <body>
        <?php
        require "nav.php";
        ?>
        <header>
            <h1>Movie details</h1>
        </header>
        <main>
            <div class="details-list">
                <?php
                require "movie_details_script.php";
                ?>
            </div>
        </main>        
    </body>
</html>