
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="shield.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golem - V0.0.9</title>
    <link rel="stylesheet" href="styl2.css">
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
                    <h1>Le code que vous venez d'entrer n'existe pas.</h1>
                </div>
                <div class="instruction">
                    <div class="methode">
                        <h2>Essayez les méthodes ci-dessous.</h2>
                    </div>
                    <div class="text-method">
                        <li>Regardez si vous avez bien orthographié le code et réessayez.</li>
                        <li>Le code ne provient peut-être pas d'une société reconnue par Golem donc il est faux.</li>
                        <li>Les codes expirent en 24heures, si c'est le cas vous pouvez en redemandez un par sms ou email.</li>
                    </div>
                    <div class="conclusion">
                        <h2>Si ces méthodes n'ont pas fonctionnées, il s'agit surement d'un site frauduleux
                            dans tout les cas ne cliquez pas sur le lien et signalez le grâce au boutton ci-dessous.</a>
                        </h2>
                    </div>
                    <div class="signaler">
                        <div class="boutton">
                            <form action="https://www.service-public.fr/particuliers/vosdroits/R47282" method="get" target="_blank">
                                <button type="submit" id="button">Signaler</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
    </div>
    
</body>
</html>