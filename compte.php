<?php
if(isset($_GET['idc'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet";

    echo "<table>";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT idcompte, numerodecompte, solde, idclient FROM compte where idclient=" . $_GET['idc'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";

            echo "<td>" . $row["idclient"] . " </td><td>" . $row["numerodecompte"] . " </td> <td> " . $row["solde"] . " </td> ";

            echo "</tr>";
        }
        echo "</table>";

    } else {
        echo "Ce client n'a pas de compte actuellement";
    }
    $conn->close();
} else {
    echo "Pas de client";
}

?>
