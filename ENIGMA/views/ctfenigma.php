<?php
session_start();
include('../model/class.php');
$username = $_SESSION['username'];
$obj = new operation();
$obj->scoreview($username);
$result = $obj->executeQuery();
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>

<head>
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

        .modal {
            position: relative;
            top: auto;
            right: auto;
            left: auto;
            bottom: auto;
            z-index: 1;
            display: block;
        }
    </style>
     <style>
        /* CSS Styles for Modal */
        /* The Modal (background) */
        .modal1 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            z-index: 1;
        }

        /* Modal Content */
        .modal-content1 {
            background-color: #222222;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #d60101;
            width: 70%;
            max-width: 600px;
            position: relative;
        }

        /* Close Button */
        .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
     <style>
        /* CSS for the modal */
        .modals {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
        }

        .modal-contents {
            background-color: #222222;
            margin: 20% auto;
            padding: 20px;
            border: 1px solid #6c0404;
            width: 80%;
            max-width: 400px;
        }

        /* Style the close button (×) */
        .closes {
            float: right;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <a href="https://github.com/Bachittarjeet/Hacker-Bootstrap-Template/"><img style="position: absolute; top: 0; left: 0; border: 0;z-index:1001;"></a>

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
                <a class="navbar-brand" href="#">GOVERMENT ENGINEERING COLLEGE BARTONHILL</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img src="images/<?= $_SESSION['avatar'] ?>.png" class="rounded" alt="..."
                                style="height: 35px;">Profile<span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" id="hint-link">Hints</a></li>
                            <li><a href="#" id="logoutLink">Quit</a></li>
                            <li><a href="#" id="quitLink" class="btn btn-danger">logout</a></li>
                        </ul>
                    </li>
                    <li>
                        <a style="color: #f00;" href="images/enigma.JPG" download="enigma.JPG">Σnigma</a>
                    </li>
                    <li><small>your score <?= $row['flag'] ?></small></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <!-- Jumbotron -->
        <div class="jumbotron">

            <marquee>
                <p style="font-family: 'Handjet', cursive;">
                    <b>It takes 20 years to build a reputation and five minutes to ruin it. If you think about that,
                        you'll do things differently</b>
                </p>
            </marquee>

            <video width="700" height="700" autoplay loop style="margin-left: 60px;">
                <source src="videos/video.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>

           <!-- Digital Clock -->
           <div id="digital-clock" style="position: fixed; top: 10px; right: 10px; font-size: 24px; z-index: 1000;"></div>


            <div class="row">
                <div class="col-md-4"><a href="../can_you.zip" download="can_you.zip"><img
                            style="height: 200px; padding-left: 30%;" src="images/logo.jpg"></a>
                    <br><small style="color: #f00;"><marquee>The perimeter is dead. There is no perimeter</marquee>
                    </small>
                </div>
                <div class="col-md-4"></div>
            </div>
            
            <!-- Modal Container -->
    <div id="modal-container" class="modal1">
        <div class="modal-content1">
            <span class="close" id="close-modal">&times;</span>
            <!-- Content for the modal goes here -->
            
        
            <ol>
                <li><small>Seek the path to remote shores, where the gates are unlocked with cryptographic keys. Connect with the secure handshake, and the flag may be found within the realm of terminal commands</small></li>
                <li><small>Hunt where pixels meet the code, where the structure hides the treasure. Look carefully, for the first flag awaits in the heart of the &lt;head&gt; and the depth of the &lt;body&gt; </small></li>
                <li><small>Discover the flag concealed in the pixels' shadows, where metadata stores secrets. Dive into the image's depths and search for information about its origin.</small></li>
                <li><small>Locked within digital walls, the flag awaits your persistence. Seek the key that whispers secrets. Patience and perseverance shall unveil the hidden treasure.</small></li>
                <li><small>Within the labyrinth of directories, the flag lies secluded, waiting to be unearthed. Traverse the digital maze, one step at a time, and the path to victory will become clear.</small></li>
                <li><small>In the world of digital artistry, the portal to the flag lies in the shadow of an open gateway. Upload your masterpiece, a PHP payload, and manipulate the canvas to unveil the hidden treasure</small></li>
            </ol>
            
            
        </div>
    </div>
    <!-- The modal container -->
    <div id="customAlertModals" class="modals">
        <div class="modal-contents">
            <span class="closes" onclick="closeModals()">&times;</span>
            <p id="modalMessages"></p>
        </div>
    </div>

        </div>

        <footer class="mt-auto row">

            <div class="col-sm-4" style="padding-top: 0px;"> ©2023 blackwindow</div>
            <div class="col-sm-4"></div>
            <div class="form-group col-sm-4" style="padding-top: 0px;">
                <form action="../controller/ctfAction.php" method="post">
                    <div class="input-group ">


                        <span class="input-group-addon"><img src="images/flag.png" alt="Avatar"
                                style="border-radius: 50%;height: 20px;"></span>
                        <input class="form-control" type="text" placeholder="Hit me" name="flag" required>
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">Capture</button>
                        </span>
                    </div>
                </form>
            </div>
        </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Flag1{00110010 00111111 00110001 01100100 01000101 01110010 01010111 01000101 00110011 00110001 00111001 00111001 00110111 01101000 01000000 00101000 01010010} -->
    <!-- Github stars script -->
    <script>
        $(document).ready(function () {
            $.getJSON("https://api.github.com/repos/Bachittarjeet/Hacker-Bootstrap-Template/", function (data) {
                var stars = data['stargazers_count'];
                $("#stars").text(stars + " stars");
            });
        });
    </script>

<script>
function updateClock() {
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();

    // Initialize clock time to 00:00:00
    var clockTime = "00:00:00";

    // Add leading zeros as needed
    if (hours < 10) {
        hours = "0" + hours;
    }
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
    if (seconds < 10) {
        seconds = "0" + seconds;
    }

    // Update the clock time
    clockTime = hours + ":" + minutes + ":" + seconds;

    document.getElementById("digital-clock").innerHTML = clockTime;

    // Check if one hour has passed (3600 seconds)
    if (hours == 1 && minutes == 0 && seconds == 0) {
        // Redirect to challenge.php after one hour
        window.location.href = "challenge.php";
        alert("Game over!"); // Display the game over alert
    }
}

// Initialize the clock
updateClock();

// Update the clock every second
setInterval(updateClock, 1000);
</script>


<script>
// Function to clear cookies and sessions
function clearCookiesAndSessions() {
    // Clear cookies (assuming you want to clear all cookies)
    var cookies = document.cookie.split(";");
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
    }

    // Clear PHP sessions (assuming PHP sessions are used)
    // This may require server-side code to properly destroy sessions

    // Reload the page to clear sessions and refresh
    location.reload();
}

// Add an event listener to the "Quit" link
document.getElementById("quitLink").addEventListener("click", function (event) {
    // Prevent the link from navigating to a new page
    event.preventDefault();

    // Display a confirmation dialog
    var confirmation = confirm("Are you sure you want to quit?");
    if (confirmation) {
        clearCookiesAndSessions();
        window.location.href = "main.php";
    }
});
</script>
<script>
// Function to clear the 'initialTime' cookie
function clearInitialTimeCookie() {
    // Clear the 'initialTime' cookie
    document.cookie = "initialTime=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

// Add an event listener to the "Logout" link
document.getElementById("logoutLink").addEventListener("click", function (event) {
    // Prevent the link from navigating to a new page
    event.preventDefault();

    // Display a confirmation dialog
    var confirmation = confirm("Are you sure you want to logout?");
    if (confirmation) {
        // Clear the 'initialTime' cookie
        clearInitialTimeCookie();

        // Redirect to challenge.php
        window.location.href = "challenge.php";
    }
});
</script>
<script>
        // JavaScript to toggle the modal's visibility
        // Get references to the modal and hint link
        const modal1 = document.getElementById("modal-container");
        const hintLink = document.getElementById("hint-link");
        const closeModal = document.getElementById("close-modal");

        // Function to open the modal
        function openModal() {
            modal1.style.display = "block";
        }

        // Function to close the modal
        function closeModalFunction() {
            modal1.style.display = "none";
        }

        // Event listeners
        hintLink.addEventListener("click", openModal);
        closeModal.addEventListener("click", closeModalFunction);

        // Close the modal if the user clicks outside the modal content
        window.addEventListener("click", function(event) {
            if (event.target === modal1) {
                closeModalFunction();
            }
        });
    </script>
    <script>
        // Function to open the modal with a custom message
        function openModals(message) {
            document.getElementById('modalMessages').textContent = message;
            document.getElementById('customAlertModals').style.display = 'block';
        }

        // Function to close the modal
        function closeModals() {
            document.getElementById('customAlertModals').style.display = 'none';
            window.location.href = "ctfenigma.php";
        }

        // Function to parse URL parameters
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        // Check if the "id" parameter is equal to 1, 2, or 3
        var idParameter = getParameterByName('id');
        if (idParameter === '01') {
            openModals('congrats Dude you got <?= $row['flag'] ?> ');
        } else if (idParameter === '02') {
            openModals('oiii you already entered this flag!!!!');
        } else if (idParameter === '03') {
            openModals('oh oh im sorry flag is incorrect');
        }
    </script>
</body>

</html>
