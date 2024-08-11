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
$sql = "SELECT SUM(capacite)as total FROM salles";
$req = $bdd->query($sql);

    echo "<table border='1'>";
    echo"<thead>";
    echo "<tr>";
    echo "<th>capacité total</th>";
    echo "</tr>";
    echo "</thead>";


   

    echo "<tbody>";
    while ($row = $req->fetch()) {
        echo "<tr>";
        echo "<td>" . $row["total"] . "</td>";
        echo "</tr>";
   
    
   
    }
    echo "</tbody>";
    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
