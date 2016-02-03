<?php
  $dblink=mysql_connect("localhost","root","")or die("you lose");
  mysql_select_db("talk");
 $account=$_POST['account'];
  $pwd=$_POST['password'];
$sql="select * from laod where account='$account'";
$sqll="select * from laod where pwd='$pwd'";
$rs=mysql_query($sql);
$test=mysql_fetch_array($rs);
$rsl=mysql_query($sqll);
$testl=mysql_fetch_array($rsl);
  if($test)
  {
   if($testl)
   {
  session_start();
   $_SESSION["admin"]=true;
    echo "OK";
	  $result=mysql_query("select * from information");
	   while($row=mysql_fetch_array($result)){
          echo $row['say'];
          echo "<br>";
}
$html = <<<HTML
    <form action="session.php" method="post">
      <p>you can delete your records</p>
        <input type="submit" value="delete" /><br />
    </form>
HTML;
   echo $html; 
   }
  else{echo "false";}
  }
  else {echo "fasle!";}
mysql_close($dblink);
?>
