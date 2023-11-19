<!DOCTYPE html>
<html>
<?php Session_start(); ?>
<head>
    <!-- Include Bootstrap CSS and JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Enigma</title>
    <link href="css/hacker.css" rel="stylesheet">
    <link rel="icon" href="/images/blackwindow.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100;300&display=swap" rel="stylesheet">
    <style>
        .tall-row {
            margin-top: 40px;
        }

        /* Custom CSS for responsiveness */
        @media (max-width: 767px) {
            /* Adjust styles for smaller screens here */
            .jumbotron {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .breadcrumb {
                padding-left: 15px;
            }

            /* Adjust footer columns for smaller screens */
            .footer-column {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

<a href="https://github.com/Bachittarjeet/Hacker-Bootstrap-Template/"><img
        style="position: absolute; top: 0; left: 0; border: 0;z-index:1001;"></a>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GOVERNMENT ENGINEERING COLLEGE BARTONHILL</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"><img src="images/<?= $_SESSION['avatar'] ?>.png" class="rounded" alt="..."
                            style="height: 35px;"> Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="avatar.php">Change Avatar</a></li>
                        <li><a href="../controller/logoutAction.php">Logout</a></li>
                    </ul>
                </li>
                <li>
                    <a style="color: #f00;" target="">Σnigma</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <!-- Jumbotron -->
    <div class="jumbotron" style="background-image: url('images/error.gif'); background-size: cover; background-repeat: no-repeat;">
        <ul class="breadcrumb">
            <li><a href="profile.php">home</a></li>
            <li class="active">Challenges</li>
            <li><a href="Leaderboard.php">Leaderboard</a></li>
        </ul>

            
                <!-- Anchor tag -->
                <div class="col-md-4">
                <div class="well">
                <a href="#" id="openModalLink">CTF-for Enigma<span><img src="images/ctf.png" class="rounded" alt="..."
                            style="height: 140px;"></span></a>
                            <br><small>Difficulty Level :</small> <small style="color: #f00;">Beginner</small>
                </div>
                
                
           
        </div>
    </div>
</div>

<!-- Modal code (unchanged) -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <marquee>
                    <p style="font-family: 'Handjet', cursive;"><b>To understand a hacker, you must think
                            like one</b></p>
                </marquee>
            </div>
            <div class="modal-body">
                <p> Seriously!!! Huh??? Are you sure you want to do this, ayyee Go on Dude</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Nah!!!</button>
                <button type="button" class="btn btn-primary" id="saveChangesButton">Yeah!!</button>
            </div>
        </div>
    </div>
</div>

<!-- Responsive footer -->
<footer class="mt-auto row text-center">
    <div class="col-xs-12 col-sm-4 footer-column">©2023 blackwindow</div>
    <div class="col-xs-12 col-sm-4 footer-column"></div>
</footer>

<!-- JavaScript code (unchanged) -->
<script>
    // Attach an event listener to the anchor tag with the ID "openModalLink"
    document.getElementById("openModalLink").addEventListener("click", function (event) {
        // Prevent the default behavior of the anchor tag (e.g., navigating to a URL)
        event.preventDefault();

        // Use Bootstrap's modal method to show the modal
        $('#myModal').modal('show');
    });

    // Attach an event listener to the "Save changes" button with the ID "saveChangesButton"
    document.getElementById("saveChangesButton").addEventListener("click", function () {
        // Redirect to another page when the button is clicked
        window.location.href = "ctfenigma.php"; // Replace with your desired URL
    });
</script>
</body>

</html>
