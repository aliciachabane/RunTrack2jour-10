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


$sql = "SELECT salles.nom AS nom_salles,etage.nom AS nom_etage FROM salles JOIN etage ON salles.id_etage=etage.id";

 
$req = $bdd->query($sql);  




    echo "<table border='1'>";
    echo"<thead>";
    echo "<tr>";
    echo "<th>salles</th>";
    echo "<th>etage</th>";
    echo "</tr>";
    echo "</thead>";

    
   

    echo "<tbody>";
    while ($row = $req->fetch()) {
        echo "<tr>";
        
        echo "<td>" . $row["nom_salles"] . "</td>";
        echo "<td>" . $row["nom_etage"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>