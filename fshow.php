<html>
<head>
<style>
table {
  background-color: lightblue;
}
body {
  background-image: url("banner.jpg");
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<title>ITF Lab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Hello</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf63.mysql.database.azure.com', 'kopsira@itf63', 'GQFvju56', 'itflab', 3306);
if (mysqli_query($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM bmi');
?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">ชื่อ</div></th>
    <th width="100"> <div align="center">น้ำหนัก </div></th>
    <th width="100"> <div align="center">ส่วนสูง </div></th>
    <th width="100"> <div align="center">bmi </div></th>
    <button class="btn btn-primary" type="submit">Button</button>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['weight'];?></td>
    <td><?php echo $Result['height'];?></td>
    <td><?php echo $Result['bmi'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<a href="insert.html" class="btn btn-primary">back</a>
</body>
</html>
