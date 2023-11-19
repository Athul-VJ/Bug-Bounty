
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Enigma</title>
    <link href="css/hacker.css" rel="stylesheet">
    <link rel = "icon" href ="/images/blackwindow.png"  type = "image/x-icon">
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
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src= "images/6.png" class= "rounded" alt= "..."  style="height: 35px;">Profile<span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Change Avatar</a></li>
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
        <div class="jumbotron">
            <h3 style="color:red"><center><b>Change avatar</b></center></h3>
        <div class="row">
                <div class="col-md-4">
                <a href="../controller/avatarAction.php?para=6"><img src="images/6.png" class="rounded" alt="..." style="height: auto; max-width: 35%;"></a>
                </div>
                <div class="col-md-4">
                <a href="../controller/avatarAction.php?para=1"><img src="images/1.png" class="rounded" alt="..." style="height: auto; max-width: 35%;"></a>
                </div>
                <div class="col-md-4">
                <a href="../controller/avatarAction.php?para=2"><img src="images/2.png" class="rounded" alt="..." style="height: auto; max-width: 35%;"></a>
                </div>
        </div>
        <div class="row">
                <div class="col-md-4">
                <a href="../controller/avatarAction.php?para=3"><img src="images/3.png" class="rounded" alt="..." style="height: auto; max-width: 35%;"></a>
                </div>
                <div class="col-md-4">
                <a href="../controller/avatarAction.php?para=4"><img src="images/4.png" class="rounded" alt="..." style="height: auto; max-width: 35%;"></a>
                </div>
                <div class="col-md-4">
                <a href="../controller/avatarAction.php?para=5"><img src="images/5.png" class="rounded" alt="..." style="height: auto; max-width: 35%;"></a>
                </div>
        </div>
         

        </div>

        <footer class="mt-auto row">
 
 <div class="col-sm-4" style="padding-top: 0px;"> ©2023 blackwindow</div>
                       <div class="col-sm-4"></div>
                       <div class="form-group col-sm-4" style="padding-top: 0px;">
                       <div class="input-group ">
</div>
                           
                       </div>
                   </div>


</footer>


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
