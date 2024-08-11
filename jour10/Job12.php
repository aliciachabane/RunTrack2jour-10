<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
// Requête SQL pour récupérer toutes les informations de la table "etudiants"
$sql = "SELECT prénom,nom,naissance  FROM étudiants WHERE naissance BETWEEN'1998-01-01' AND '2018-12-31'";
$req = $bdd->query($sql);

    echo "<table border='1'>";
    echo"<thead>";
    echo "<tr>";
    echo "<th>prenom</th>";
    echo "<th>nom</th>";
    echo "<th>naissance</th>";
    echo "</tr>";
    echo "</thead>";


   

    echo "<tbody>";
    while ($row = $req->fetch()) {
        echo "<tr>";
   
        echo "<td>" . $row["prénom"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["naissance"] . "</td>";
       
       
         
         
        echo "</tr>";
   
    
   
    }
    echo "</tbody>";
    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
