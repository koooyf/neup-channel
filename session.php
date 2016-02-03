<?php
 $dblink=mysql_connect("localhost","root","")or die("you lose");
 mysql_select_db("talk");
 $sql="delete from information";
 mysql_query($sql);
 mysql_close($dblink);
 echo "ok!record have been deleted!";
?>
