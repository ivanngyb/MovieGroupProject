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
            <h1>Admin page</h1>
        </header>
        <main>
            <div class="container-fluid text-center mt-3">
                <h2>Unsubscribe</h2>
            </div>
            <!-- The Unsubscribe User Form -->
            <form class="m-0 row" method="get" action="admin.php">
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
                        <button class="button"  class="form-control" name="submit" type="submit" value="unsubscribe"> 
                          Unsubscribe member
                        </button>
                        <?php
                          if (isset($_GET['submit']) && $_GET['submit'] == "unsubscribe" ) {
                            echo "<br/> Unsubscribed ";
                            $email = htmlspecialchars($_GET['email']);

                            echo "$email<br/>";
                            echo "script output: ";
                            require "admin_member_unsubscribe_script.php";
                          }
                        ?>
                    </div>
                </div>
            </form>
            <div class="container-fluid text-center mt-3">
                <h2>Member list</h2>
            </div>
            <form class="m-0 row" method="get" action="admin.php">
            <div class="row mb-3">
                    <label class="col-2 col-sm-2 col-md-2 col-xl-3 col-form-label"></label>
                    <div class="col-10 col-sm-10 col-md-9 col-xl-6">
                        <button class="button"  class="form-control" name="show" type="submit" value="show">
                          Show members
                        </button>
                    </div>
                </div>
            </form>
            <!-- If the show members form was submitted include the members table. -->
            <?php 
                if (isset($_GET['show'])) {
                    echo '
                    <div class="row justify-content-center g-0">
                        <div class="col-12 col-sm-12 col-md-10 col-xl-6">
                            <table class="table">
                                <tr>
                                    <th>Full name</th>
                                    <th>E-mail address</th>
                                    <th>Subscribed to newsletter</th>
                                    <th>Subscribed to newsflashes</th>
                                    <th>Unsubscribe</th>
                                </tr>
                    ';
                    require 'admin_member_list_script.php';
                    echo '
                            </table> 
                        </div>
                    </div>  
                    ';
                }
                ?>
        </main>
    </body>
</html>