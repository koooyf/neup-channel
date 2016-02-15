<?php
    $dblink=mysql_connect("localhost","root","")or die("you lose");
     mysql_select_db("talk");
   $come="select * from cookie order by rand() limit 1";
   $rs=mysql_query($come);
   $row=mysql_fetch_array($rs);
   setcookie("mycookie","$row[1]",time()+3600*48);
   $sql="delete from cookie where binggan='$row[1]'";
   $result=mysql_query($sql);
?>
<html>
<body>
<form action="index.php" meth="post">
<input type="submit" value="返回">
</form>
</body>
</html>
