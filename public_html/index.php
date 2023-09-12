<?php
// Connexion à la base de données
$servername = "servername";
$username = "username";
$password = "pswd";
$dbname = "db";
$port = port;
$conn = new mysqli($servername, $username, $password, $dbname, $port);





if ($conn->connect_error) {
    header("Location: ./error");
}


// Vérification si le formulaire de recherche a été soumis
if (isset($_GET['search'])) {
    // Récupération de la valeur de recherche
    $search = $_GET['search'];
    $value = md5($search);

    // Requête pour rechercher dans la colonne 'code'
    $sql = "SELECT * FROM code_and_id WHERE code = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $value);
    $stmt->execute();

    

    // Redirection vers index2.php si une occurrence est trouvée
     if ($stmt->fetch()) {
        $stmt->close();
        
        $deleteSql = "DELETE FROM code_and_id WHERE code = '$value'";
        $run = mysqli_query($conn,$deleteSql);  
        header("Location: ./right");
         // Succès
        exit();
        


    } else {
        $stmt->close();
        header("Location: ./wrong");
        // Échec
        exit();
    }


}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="shield.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golem - V0.0.9</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

    <div class="container">
        <div class="topnav" id="myTopnav">
                <a href="./index" class="active">Home</a>
                <a href="./info">Info</a>
                <a href="./price" >Prix</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                
        </div>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>
    <script>
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
            <h1 id="golem">GOLEM</h1>
            <div class="search-bar">
                <div class="instruction">
                    <h1>Entrez le code que vous venez de recevoir par sms ou email.</h1>
                    <div class="search">
                        <form method="GET" action="">
                            <input type="text" name="search" placeholder="Entrez le code" id="search">
                            <button type="submit" id="search-button" ><img width="23px" height="23px" src="images/check.png"></button>
                        </form>
                    </div>   
                    
                </div>
            </div>

            </div>
        </div>
        <div id="separateur"></div>
        <div class="stats">
            <h2 id="stats-title">Phishing Stats depuis que vous êtes venu</h2>
       
            
            <div class="phishing_site">
            <script>
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement( 'google_translate_element');
                    }

                // Fonction pour incrémenter les statistiques
                function incrementStats() {
                    incrementStat('phishingAttack', 11, 1); // Incrémentation toutes les 11 secondes
                    incrementStat('phishingSite', 20, 3);   // Incrémentation toutes les 20 secondes
                    incrementStat('moneyLoss', 11, 136);      // Incrémentation toutes les 11 secondes
                }

                // Fonction pour incrémenter une statistique spécifique
                function incrementStat(statName, interval, incrementValue) {
                    let currentDate = new Date();
                    let storedDate = localStorage.getItem(statName + 'Date');
                    
                    if (!storedDate || storedDate !== currentDate.toDateString()) {
                    localStorage.setItem(statName + 'Date', currentDate.toDateString());
                    localStorage.setItem(statName + 'Value', '1');
                    
                    document.getElementById(statName).textContent = '1';
                    } else {
                    let currentValue = parseInt(localStorage.getItem(statName + 'Value')) || 0;
                    currentValue += incrementValue;
                    localStorage.setItem(statName + 'Value', currentValue.toString());
                    document.getElementById(statName).textContent = currentValue;
                    }
                }

                // Fonction pour démarrer l'incrémentation automatique
                function startIncrement() {
                    incrementStats(); // Appeler la fonction une fois immédiatement
                    setInterval(incrementStats, 1000); // Appeler la fonction toutes les secondes
                }

                // Charger les valeurs au chargement de la page
                window.onload = function() {
                    let stats = ['phishingAttack', 'phishingSite', 'moneyLoss'];
                    
                    for (let i = 0; i < stats.length; i++) {
                    let currentValue = parseInt(localStorage.getItem(stats[i] + 'Value')) || 0;
                    document.getElementById(stats[i]).textContent = currentValue;
                    }
                    
                    startIncrement(); // Démarrer l'incrémentation automatique
                };
            </script>
            <div class="stats_values">
                <p id="values">Phishing Attaques: <span id="phishingAttack">0</span></p>
                <p id="values">Phishing Site: <span id="phishingSite">0</span></p>
                <p id="values">Argent perdu en $: <span id="moneyLoss">0</span></p>
                <p id="values">Argent perdu en 2022: 10,3 milliards.</p>
                <p id="values">Phishing attaques en 2022: 300,497</p>
                <p id="values">Secteurs les plus touchés : Crypto/Finance, Education, Gouvernement</p>
                <p id="values">Sur 4 200 email envoyés, un serait un email de phishing.</p>
            </div>
            </div>



           
        </div>
        <div id="separateur"></div>

        <div class="protection">
            <div class="email">
                <img src="email-protection.png" id="email" height="25%">
                <p id="info-email">Golem protège vos Email en authentifiant l'expediteur de l'email. Les arnaques par email deviennent donc plus simple à éviter.</p>
            </div>

            <div class="sms">
                <img src="sms-protection.png" id="sms" height="25%">
                <p id="info-sms">Il protège aussi vos sms contre les attaques de phishing.Ce code authentifie les vrais sociétés des pirates qui essaye d'usurper leur identitées afin de récupérer vos données privées.
                </p>
            </div>
        </div>

    </div>
    
</body>
</html>
