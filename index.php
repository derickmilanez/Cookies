<html>
<head>
</head>
<body>
<h1> Manipulando Cookies </h1><br>
<form method="post" action="cookie.php">
Usuario:<input type="text" name="usuario"><br>
<input type="submit" name="entrar" value="Entrar"><br>
</form>
<br><br>
<?php
if (isset($_COOKIE["user"])){
$usuario=$_COOKIE["user"];
echo "
<form method='post' action='cookie.php'>
Usuario: <span style='color:#0000FF;'>$usuario</span><br>
<input type='submit' name='sair' value='Sair'><br>
</form>";
}
?>
</body>
</html>