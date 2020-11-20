<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf63.mysql.database.azure.com', 'kopsira@itf63', 'GQFvju56', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$ID = $_GET['ID'];
$aaa = mysqli_query($conn ,"Select * From guestbook where ID = $ID");
$row = mysqli_fetch_assoc($aaa);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment Form</title>
</head>
<body>
  <form action = "" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?php = $row["Name"]; ?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" value="<?php = $row["Comment"]; ?>"></textarea><br>  
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?php = $row["Link"]; ?>"> <br><br>
    <input type="submit" id="commentBtn">
  </form> 
</body>
</html>
