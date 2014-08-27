<?php
mysql_connect('localhost','root','root');
mysql_select_db('img');

$getresults = mysql_query("SELECT * FROM `pictures` LIMIT 1");
while ($item = mysql_fetch_array($getresults) ){
$img = $item['pics'];
 header('Content-Length: '.strlen($img));
 header("Content-type: image/png");
echo $img;
}


?>
