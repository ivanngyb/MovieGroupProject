<?php
/*
        top_ten - web page with list of top ten most searched movies

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
            Top ten searched movies
        </title>
    </head>
    <body>
        <?php
        require "nav.php";
        ?>
        <header>
            <h1>Top ten searched movies - number of searches</h1>
        </header>
        <main>
            <div>
                <img src="top_ten_image_script.php"/>
            </div>
            <table>
                <tr>
                    <th>Rank</th>
                    <th>Title</th>
                    <th>Rating</th>
                    <th>Year</th>
                    <th>Searches</th>
                </tr>
                <?php
                require "top_ten_script.php";
                ?>
            </table>
        </main>        
    </body>
</html>