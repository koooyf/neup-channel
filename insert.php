<?php
  $shuru=mysql_connect("localhost","root","");
  if(!$shuru)
  {
	  die('Could not connect: '.mysql_error());
  }
  mysql_select_db("talk", $shuru);
 $sql="select * from binggan where cookie='$_COOKIE[mycookie]'";
 $rs=mysql_fetch_array($sql);
if($rs)
{
  $hh="insert into information(say)
	  VALUES('$_COOKIE[mycookie]:$_POST[user]')";
  if(!mysql_query($hh,$shuru))
    {
    die('error :'.mysql_error()); 
    }
}
else echo "你没有饼干快去领饼干";
  mysql_close($shuru);
 ?>
<form action="input.php" method="post">
<input type="submit" value="look your records"/>
</form>
<form action="index.php" meth="post">
<input type="submit" value="返回">
</form>
