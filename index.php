<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = ".1954432:ala/GA---!/395sméç";
$dbname = "code_verification";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Vérification si le formulaire de recherche a été soumis
if (isset($_GET['search'])) {
    // Récupération de la valeur de recherche
    $search = $_GET['search'];
    //

    // Requête pour rechercher dans la colonne 'code'
    $sql = "SELECT * FROM code_and_id WHERE code = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $search);
    $stmt->execute();

    

    // Redirection vers index2.php si une occurrence est trouvée
     if ($stmt->fetch()) {
        $stmt->close();
        header("Location: index3.php");
        // Succès
        exit();
    } else {
        $stmt->close();
        header("Location: index2.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golem - V0.0.6</title>
    
</head>
<body>

    <div class="container">
    </div>


        <div class="center">
            <div class="search-bar">
                <div class="instruction">
                    <h1>Entrez le code que vous venez de recevoir par sms ou email.</h1>
                    <div class="search">
                        <form method="GET" action="">
                            <input type="text" name="search" placeholder="Enter the code" id="search">
                            <button type="submit" id="search-button" ><img width="23px" height="23px" src="search.png"></button>
                        </form>
                    </div>   
                </div>
            </div>

            </div>
        </div>

    </div>
    
</body>
</html>