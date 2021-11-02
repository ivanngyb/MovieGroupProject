<?php
/*
        search - web page with form for user to enter a search
        
        Name: Caspian Maclean
        ID: 30039802
        Date: 8/9/2021
        Task: Project

        Change all the comments.
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>
            Search movies
        </title>
    </head>
    <body>
        <?php
        require "nav.php";
        ?>

        <header class="container-fluid text-center mt-3">
            <h1>Search movies</h1>
        </header>

        <main>
        <div class="container-fluid p-3">
        <!-- <div class="col"> -->
            <form action="search_results.php">
                <?php
                require "search_script.php";
                ?>
            </form>
            <!-- </div> -->
        </div>
        </main>        

    </body>
</html>