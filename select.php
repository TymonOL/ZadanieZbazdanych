<?php

$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "zadbazydanych";    

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Połączenie nie powiodło się: " . $conn->connect_error);
}

$sql = "SELECT dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    echo "<table class='dane'>
            <tr>
                <th>Data Wyjazdu</th>
                <th>Cel</th>
                <th>Cena</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["dataWyjazdu"] . "</td>
                <td>" . $row["cel"] . "</td>
                <td>" . $row["cena"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "Brak wyników.";
}

$conn->close();
?>
 <link rel="stylesheet" href="style.css">
<h1 class="tytul">Wycieczki</h1>
