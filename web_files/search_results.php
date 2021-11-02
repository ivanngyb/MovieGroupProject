<?php
/*
        search_results - web page with search results

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
            Search results
        </title>
    </head>
    <body>
        <?php
        require "nav.php";
        ?>
        <header>
            <h1>Search results</h1>
        </header>
        <main>
            <table>
                <tr>
                    <th>Title</th>
                    <th>Rating</th>
                    <th class='large-only'>Year</th>
                    <th>Status</th>
                </tr>
                <?php
                require "search_results_script.php";
                ?>
            </table>
        </main>        
    </body>
</html>