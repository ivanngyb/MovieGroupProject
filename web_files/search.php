<?php
/*
        search - web page with form for user to enter a search
        
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
            Search movies
        </title>
    </head>
    <body>
        <?php
        require "nav.php";
        ?>
        <header>
            <h1>Search movies</h1>
        </header>
        <main>
            <form action="search_results.php">
                <?php
                require "search_script.php";
                ?>
            </form>
        </main>        
    </body>
</html>