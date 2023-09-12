<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golem - V0.0.9</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="icon" href="shield.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="main">
        <div class="topnav" id="myTopnav">
                <a href="./index">Home</a>
                <a href="./info">Info</a>
                <a href="./price" >Prix</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <script>

            function googleTranslateElementInit() {
                    new google.translate.TranslateElement('google_translate_element');
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
                    <h1>Il y a eu un problème technique.</h1>
                </div>
                <div class="subtitle">
                    <h2>Veuillez nous excuser pour la gêne occasionée et reesayez de vous reconnecter au site web dans 5 minutes.</h2>
                </div>
                <div class="image">
                    <img src="images/error.jpg" id="cog" height="250px">
                </div>

                <div class="message">
                    <p>Si le problème persiste veuillez envoyez un message au support: golem.pro.support@protonmail.com</p>
                    <p>Nous essayerons de faire tout notre possible pour régler le problème le plus rapidement.</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>