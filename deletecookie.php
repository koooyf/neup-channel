<?php
    $dblink=mysql_connect("localhost","root","")or die("you lose");
     mysql_select_db("talk");
   $sql="delete from binggan where cookie='$_POST[cookie]'";
   $result=mysql_query($sql);
if($result) echo "成功删除";
else echo "没有删除";
?>
<html>
<body>
<form action="index.php" meth="post">
<input type="submit" value="返回">
</form>
</body>
</html>
