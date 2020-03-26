<?php
//open file to write
$fp = fopen("txt/data.php", "r+");
// clear content to 0 bits
ftruncate($fp, 0);
//close file
fclose($fp);
sleep(1);
header('Location: http://127.0.0.1/Sec_Ops/SERVER/Dashboard.html');
?>

