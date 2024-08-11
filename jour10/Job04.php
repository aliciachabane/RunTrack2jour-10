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
$sql = "SELECT * FROM étudiants WHERE prénom LIKE 'T%'";
$req = $bdd->query($sql);

    echo "<table border='1'>";
    echo"<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nom</th>";
    echo "<th>Prenom</th>";
    echo "<th>naissance</th>";
    echo "<th>sexe</th>";
    echo "<th>email</th>";
    echo "</tr>";
    echo "</thead>";


   

    echo "<tbody>";
    while ($row = $req->fetch()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["prénom"] . "</td>";
        echo "<td>" . $row["naissance"] . "</td>";
        echo "<td>" . $row["sexe"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
   
    
   
    }
    echo "</tbody>";
    echo "</table>";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
 