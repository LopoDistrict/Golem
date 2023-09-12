<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style6.css">
    <link rel="icon" href="shield.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Golem</title>
</head>
<body>
    
    <div class="container">
            <div class="topnav" id="myTopnav">
                <a href="./index">Home</a>
                <a href="./info">Info</a>
                <a href="./price" class="active">Prix</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                
            </div>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>

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



            <div class="price">
            <h1>Prix</h1>
                <h2>Golem vous offre une seule, unique mais complète option. </h2>
                <p id="condition">*Offre peut changer lorsque l'alpha ouverte se terminera.</p>
                <div class="box-offer" onclick="document.getElementById('footer').scrollIntoView();">
                    <div class="title-offer">
                        <p id="title1">Business</p>
                        <div class="price-num">
                            <p id="price" style="text-align:center;">1 mois d'essai offert puis 4,99€/4.99$/4.99£ par mois *</p>
                            <div class="title-feature">
                                <p id="title1">Avantages</p>
                                <div class="feature">
                                    <li id="txt">1 mois d'essai sans payement</li>
                                    <li id="txt">Code encrypté et hashé</li>
                                    <li id="txt">Pas de limite dans la création de code</li>
                                    <li id="txt">Interface en python + API</li>
                                    <li id="txt">Protection et sécurité assuré</li>
                                    <li id="txt">Plus de sécurité pour votre entreprise ou organisation</li>
                                </div>
                            </div>
                            <div class="title-requirement">
                                <p id="title1">Exigences.</p>
                                <div class="requirement">
                                    <p>Pour prouver votre authenticité et améliorer le protocole nous avons besoins de certains justificatifs:</p>
                                    <li id="txt">Revenus des 3 derniers mois</li>
                                    <li id="txt">Nom, localisation, Pdg de votre entreprise</li>
                                    <li id="txt">Domaine d'activité</li>
                                    <li id="txt">Voir plus...</li>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div id="separateur"></div>
                
        <div class="s" id="footer">
            <div id="bottom">
                <div class="titlei">
                    <h2>Commencer à utiliser Golem</h2>
                    <p>Afin de commencer à utiliser golem il faut que vous réunissiez les informations présentes dans "Exigences" puis les envoyez à cette adresse: golem.pro.support@protonmail.com
                        Nous traiterons votre demande et ferons suite. Si vous êtes accepetez votre mois d'essai commencera (sans prélévation) et ensuite pour pouvoir continuer à utilisez
                        Golem il vous faudra payer 4,99€/4.99$/4.99£.
                    </p>
                </div>
        </div>

            </div>
        </div>
        
    
    
</body>
</html>