<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enigma</title>
    <link href="../views/css/hacker.css" rel="stylesheet">
    <link rel="icon" href="../views/images/blackwindow.png" type="image/x-icon">
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
</head>
<body>
    <a href="https://github.com/Bachittarjeet/Hacker-Bootstrap-Template/"><img style="position: absolute; top: 0; left: 0; border: 0;z-index:1001;"></a>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GOVERMENT ENGINEERING COLLEGE BARTONHILL</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" target="#">error</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- Jumbotron -->
        <div class="jumbotron">
            
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Github stars script -->
    <script>
        $(document).ready(function(){
            $.getJSON("https://api.github.com/repos/Bachittarjeet/Hacker-Bootstrap-Template/", function(data){
                var stars = data['stargazers_count'];
                $("#stars").text(stars + " stars");
            });
        });
    </script>
</body>
</html>
