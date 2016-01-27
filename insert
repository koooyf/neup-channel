<?php
  $shuru=mysql_connect("localhost","root","");
  if(!$shuru)
  {
	  die('Could not connect: '.mysql_error());
  }
  mysql_select_db("talk", $shuru);
  $hh="insert into information(say)
	  VALUES('$_POST[user]')";
  if(!mysql_query($hh,$shuru))
    {
    die('error :'.mysql_error()); 
    }
  mysql_close($shuru)
 ?>
<form action="input.php" method="post">
<input type="submit" value="look your records"/>
</form>
