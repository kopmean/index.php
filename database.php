<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itf63.mysql.database.azure.com', 'kopsira@itf63', 'GQFvju56', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_GET['name'];
$weight = $_GET['weight'];
$height = $_GET['height'];
$bmi = $weight/$height


$sql = "INSERT INTO bmi (name , weight , height , bmi) VALUES ('$name', '$weight', '$height', '$bmi')";


if (mysqli_query($conn, $sql)) {
    header("location:fshow.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
