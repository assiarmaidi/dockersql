<?php
if(isset($_SERVER['WINDIR'])){
    //je suis sur windows
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";
}
else {
    $servername = "172.17.0.2";
    $username = "root";
    $password = "";
    $dbname = "projet";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idclient, Nom, datedenaissance FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - le id " . $row["idclient"]. " - le nom: " . $row["Nom"]. " - la date de naissance " . $row["datedenaissance"]. "<br>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>