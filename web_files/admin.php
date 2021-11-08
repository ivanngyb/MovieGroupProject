<?php
/*
        admin - allow deleting members by the administrator
        
        RAD - 
        Team Name: ICA Designs
        Team Members:
            Ivan Ng
            Caspian Maclean
            Andrew Williamson
        Date: 08/11/2021
        Sprint: Two
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
            Admin page
        </title>
    </head>


    <body>
        <?php
        require "nav.php";
        ?>
        <header class="container-fluid text-center mt-3">
            <h1>Admin page - delete or list members</h1>
        </header>
        <main>
            <!-- The Delete User Form -->
            <form class="m-0 row" method="post" action="delete">
                <?php

                ?>
            </form>
        </main>
    </body>
</html>