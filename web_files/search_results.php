<?php
/*
        search_results - web page with search results

        Name: Caspian Maclean
        ID: 30039802
        Date: 8/9/2021
        Task: Project
*/
?>
<!-- <!DOCTYPE html>
<html> -->
    <!-- <head>
        <link rel="stylesheet" href="style.css">
        <title>
            Search results
        </title>
    </head>
    <body>
       
        <header>
            
        </header> -->
        <div class="container-fluid text-center mt-3">
            <h1>Search results</h1>
        </div>
        <div class="row mb-3">
        <div class="col-2 col-sm-2 col-md-3 col-lg-4">
</div>
        <div class="col-10 col-sm-10 col-md-7 col-lg-4">
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
        </div>
        </div>  
    <!-- </body> -->
<!-- </html> -->