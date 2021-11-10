<?php
/*
        nav - the navigation pane shared by all the web pages

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
<!-- <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="top_ten.php">Top Ten List</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="search.php">New Search</a></li>
            </ul>
        </div>
    </nav> -->
<nav class="navbar navbar-expand-sm bg-white navbar-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./resources/logo_transparent.svg" width="290" height="62.5" class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="top_ten.php">Top 10</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</nav>