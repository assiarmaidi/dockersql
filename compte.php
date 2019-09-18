<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idcompte, numerodecompte, solde, idclient FROM compte";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - idclient: " . $row["idclient"]. " - Le numéro de compte : " . $row["numerodecompte"]. " - solde: " . $row["solde"]. " - idcompte: " . $row["idcompte"]. "<br>";
        echo'<a href="mapage.php" > transaction </a>'. "<br>";
        echo'<a href="mapage.php" > Ajouter une transaction </a>'. "<br>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>