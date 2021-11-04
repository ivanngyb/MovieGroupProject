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
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>
            Top ten searched movies
        </title>
    </head>
    <body>
        <?php
        require "nav.php";
        ?>
        <header class="container-fluid text-center mt-3">
            <h1>Top ten Most Searched Movies</h1>
        </header>
        <main>
            <!-- Top 10 Graph -->
            <div class="text-center">
                <img src="top_ten_image_script.php"  class="img-fluid">
            </div>

            <!-- Top 10 Table -->
            <div class="row justify-content-center g-0">
                <div class="col-12 col-sm-12 col-md-10 col-xl-6 pe-0">
                    <table class="table">
                        <?php
                        require "top_ten_script.php";
                        ?>
                    </table>
                </div>
            </div>
        </main>        
    </body>
</html>