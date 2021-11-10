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
                <div class="row mb-3">
                    <label class="col-2 col-sm-2 col-md-2 col-xl-3 col-form-label">E-mail</label>
                    <div class="col-10 col-sm-10 col-md-9 col-xl-6">
                        <input type="text" class="form-control" autofocus name="email" id="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-2 col-sm-2 col-md-2 col-xl-3 col-form-label"></label>
                    <div class="col-10 col-sm-10 col-md-9 col-xl-6">
                        <input class="button"  class="form-control" name="delete" type="submit" value="Delete member"> 
                    </div>
                </div>
            </form>
            <div class="container-fluid text-center mt-3">
                <h1>Member list</h1>
            </div>
            <form class="m-0 row" method="post" action="admin.php">
            <div class="row mb-3">
                    <label class="col-2 col-sm-2 col-md-2 col-xl-3 col-form-label"></label>
                    <div class="col-10 col-sm-10 col-md-9 col-xl-6">
                        <input class="button"  class="form-control" name="show" type="submit" value="Show members"> 
                    </div>
                </div>
            </form>
            <div class="row justify-content-center g-0">
            <div class="col-12 col-sm-12 col-md-10 col-xl-6">
                <table class="table">
                    <tr>
                        <th>Full name</th>
                        <th>E-mail address</th>
                    </tr>
                    <tr>
                        <td>Caspian</td>
                        <td>your.name.here@example.com</td>
                    </tr>

                </table> 
            </div>
        </div>  
        </main>
    </body>
</html>