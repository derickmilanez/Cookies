<?php
if(isset($_POST["entrar"])){
setcookie("user",$_POST["usuario"],time()+3600);
}
else if (isset($_POST["sair"])){
	setcookie("user");
}
header("location:index.php");
?>