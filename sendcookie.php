<?php
function getrand()
{
	$str=null;
	$strl="QWERTYUIOPASDFGHJKLZXCVBNM123456789qwertyuiopasdfghjklzxcvbnm";
	$max=strlen($strl)-1;
	for($i=0;$i<=15;$i++)
	{
		$str.=$strl[rand(0,$max)];
	}
	return $str;
}
  $dblink=mysql_connect("localhost","root","")or die("you lose");
  mysql_select_db("talk");
 for($i=1;$i<=200;$i++)
 {
   $binggan=getrand();
  $send="insert into cookie(binggan)
	  VALUES('$binggan')";
   $rs=mysql_query($send);
  if($rs) echo "ok";
  else echo "false";
 }
mysql_close($dblink);
?>
