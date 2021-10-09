<?php
  session_start();
  if (isset($_SESSION["usuario"])){
	  header("Location: chat.php");
	  exit();
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Escolha o seu NickName</title>
</head>

<body>
<center>
   <h1>CHATWEB PHP</h1>
	<form method="post" action="chat.php">
		Informe seu Nick <input type="text" name="nick">
		<input type="submit" value="Entrar">
	</form>
</center>
</body>
</html>