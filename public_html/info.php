<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="icon" href="shield.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="center">
             <div class="topnav" id="myTopnav">
                <a href="./index">Home</a>
                <a href="./info" class="active">Info</a>
                <a href="./price" >Prix</a>
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
                <div class="title">
                    <h1>Golem</h1>
                </div>
            <div class="text-presentation">
                <h2>Qu'est ce que Golem?</h2>
                <p>Golem est un système permettant aux entreprises et particuliers d'éviter les 
                   attaques par phishing et arnaques en mettant en lien avec leur client un code leur permettant d'authentifié la 
                    légitimé de l'expediteur.
                </p>
                <h2>Qu'est ce que le Phishing?</h2>
                <p>L’hameçonnage (phishing en anglais) est une technique frauduleuse destinée à leurrer l’internaute pour l’inciter 
                    à communiquer des données personnelles (comptes d’accès, mots de passe…) et/ou bancaires en se faisant passer 
                    pour un tiers de confiance. <a href="https://en.wikipedia.org/wiki/Phishing">Pour en savoir plus</a>
                </p>

            </div>
            <div class="separator"></div>

            <div class="advantages">
                <h2 id="title_advantages">Avantages</h2>

                <div class="protege" id="images_div">
                    <p id="protec">Golem vous protège face aux différentes attaques de phishing et d'arnaques à travers les emails ou sms.</p>
                    <img src="images/lock.jpg" alt="lock" id="image">
                </div>

                
                <div class="python_api" id="images_div"> 
                    <p id="api">Avec la souscription Golem vous offre une api sur python permettant d'automatiser vos codes.</p>
                    <img src="images/python.jpg" alt="python" id="image">
                </div>

                <div class="simple" id="images_div">
                    <p id="simplet">Golem est simple d'usage et peut-être comprehensible par tous.</p>
                    <img src="images/cog.jpg" alt="cog" id="image">
                </div>

                <div class="cryptee" id="images_div">
                    <p id="hash">Toutes les informations liées à Golem sont encryptées grâce aux fonctions et algorithmes de hachage.</p>
                    <img src="images/hash.jpg" alt="hash" id="image">
                </div>

            </div>
            <div class="separator"></div>


            <div class="faq">
                <h1 id="title-faq">FAQ</h1>
                <h2>Q: Comment fonctionne Golem?</h2>
                <p>R: Un code est généré il doit être ensuite envoyé au client, puis il l'entrera dans notre site et vérifiera l'authenticité du message</p>
                <h2>Q: Est-ce que Golem est sécurisé?</h2>
                
                <p>R: Golem est sécurisé car chaque code est individuel avec 92 caractères différents. De plus, chaque code est supprimé au bout de 24heures si il n'est pas entré dans le site.</p>

                <h2>Q: Comment je peux utiliser golem pour mon entreprise?</h2>
                <p>R: Golem offre un abonnement mensuel d'un montant de 4,99€ avec une période d'essai de 30jours. Pour pouvoir commencer à l'utiliser envoyez d'abord une requête à l'adresse email: golem.pro.support@protonmail.com avec Informations tel que le nom de votre entreprise, votre localisation etc. Nous traiterons ensuite votre demande et répondrons.</p>

                <h2>Q: Comment Golem va pouvoir aider mon entreprise?</h2>
                <p>R: Golem vous fournit un code unique qui va permettre au client de faire la différence entre votre site et arnaques, sites frauduleux tentant de vous copier afin de récupérer les données de vos clients.</p>

                <h2>Q: Qu'est ce que Golem peut apporté à mon entreprise?</h2>
                <p>R: Golem apporte une sécurité supplémentaire pour vos clients et évitera toute fraude venant de site frauduleux se passant pour vous ou votre entreprise.</p>
            </div>
        </div>
    </div>
    
</body>
</html>