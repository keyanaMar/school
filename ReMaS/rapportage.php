<?php 

include 'navbar.php';

// Create connection
$conn = mysqli_connect("localhost", "root", "", "remas");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT Naam, Omschrijving, PrijsPerKg,VoorraadKg FROM onderdelen";
$result = $conn->query($sql);
if ($result-> num_rows > 0 ){
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row["Naam"] . "</td></td>" .  $row["Omschrijving"] ."</tr><td>" . $row["PrijsPerKg"] . "</tr></td>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}
$conn-> close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
h1{
    text-align: center;
    font-size:2em;
}
</style>
<body> 
<div class= 'container'> 
        <h1>rapportage in php </h1>
</div>
</body>
</html>