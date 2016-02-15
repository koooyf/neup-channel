<?php
 session_start();
$_SESSION["admin"]=null;
?><title>koooyf</title>
<body>
<form  action="laod.php" method="post">
<p>输入你的管理员账号和密码</p>
account:
<input type="text" name="account">
<br/><br/>
password:
<input type="text" name="password">
<input type="submit" value="Log in">
<br/><br/>
</form>
<form  action="insert.php" method="post">
留言框： <br/>
<textarea type="text" name="user"></textarea><br/><br/>
<input type="submit" value="Submit" />
</form>
<br/>
<form action="cookie.php" method="post">
<input type="submit" value="点我获取饼干">
</form>
