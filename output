<?php
 $shuru=mysql_connect("localhost","root","");
  if(!$shuru)
  {
	  die('Could not connect:'.mysql_error());
  }
	  mysql_select_db("talk",$shuru);
	  $result=mysql_query("select * from information");
	   while($row=mysql_fetch_array($result)){
          echo $row['say'];
          echo "<br>";
   }
   mysql_free_result($result);
  mysql_close($shuru);
?>          
