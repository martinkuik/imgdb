<?php
mysql_connect('localhost','root','root');
mysql_select_db('img');
if ($_POST['submit']){
  $tmp = $_FILES["img"]["tmp_name"];   
  $img = mysql_real_escape_string(file_get_contents($tmp));
  //die($img);
  $sql = "insert into pictures values(null,'$img','jpg','female')";
  mysql_query($sql) or die('Bad Query at 12');
}
?>
<html>
<head>
<title> IMG App </title>
</head>
<body>

<form method="post" action="index.php" name="img_form" id="img_form" enctype="multipart/form-data">
<input type="text" name="name" >
<input type="file" name="img">
<input type="submit" name="submit">
</form>

</body>
</html>
