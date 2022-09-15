<?php 
//include 'navbar.php';  
$conn = mysqli_connect("localhost", "root", "", "remas");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
$sql = "SELECT tijdstip FROM innames";
$result = $conn->query($sql);
if ($result-> num_rows > 0 ){
    while ($row = $result-> fetch_assoc()){
        echo  $row["tijdstip"];
    }
    echo "</table>";
}


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
        <h1>Inname in php </h1>
</div>
</body>
</html>