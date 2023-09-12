<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golem - V0.0.9</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="icon" href="shield.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
          <div class="topnav" id="myTopnav">
                <a href="./index">Home</a>
                <a href="./info">Info</a>
                <a href="./price">Prix</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                
            </div>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement( 'google_translate_element');
        }
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
                } 
        </script>
        <div class="center">
            <div class="title">
                <div class="explications">
                    <div class="text">
                        <h1>Ce code est bien vérifié.</h1>
                    </div>
                </div>
            </div>
            <div class="message">
                <p id="message1">Ce code est vérifié par le système golem.
                    Merci de nous avoir fait confience
                </p>
                <p>Si vous avez apprécier notre expertise recommandez à vos proches Golem pour rendre leurs actions plus surs.</p>
            </div>
        </div>
    </div>
    
</body>
</html>