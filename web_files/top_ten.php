<?php
/*
        top_ten - web page with list of top ten most searched movies

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
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Regular CSS -->
        <link rel="stylesheet" href="style.css">
        
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
        <!-- Optional JavaScript : Just in case we need it -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>