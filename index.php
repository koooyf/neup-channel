<title>koooyf</title>
<?php
error_reporting(E_ALL);
$aa=$_POST['user'];
?>
<body>
<form name="input" action="" method="post">
Word: <br/>
<textarea type="text" name="user"></textarea><br/><br/>
<input type="submit" value="Submit" />
</form>
<h1> There is your record</h1>
<ul>
<?php
echo "<li>$aa</li>";
?>
</ul>
