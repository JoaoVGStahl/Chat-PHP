<?php
  session_start();
// ! = Negar

  if (!isset($_SESSION["usuario"])){	
  
	  if (!isset($_POST["nick"])){
		  header("Location: index.php");
		  exit();
	  }
	 if (!empty($_POST["nick"])){
	   $_SESSION["usuario"] = $_POST["nick"];
	 }else{
		header("Location: index.php");
		 exit(); 
	 }
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WEBCHAT</title>
</head>

<body>
<center>
 <H1>WEBCHAT seja bem vindo <?php echo $_SESSION["usuario"]; ?> <a href="sair.php">Efetuar Logout</a></H1>
 <iframe src="Conversa.php" width="100%" height="200" frameborder="0"></iframe>
 <form method="post" action="">
 	<h3>Mensagem</h3>
 	<textarea name="mensagem" id="mensagem" rows="7" cols="60"></textarea><br>
 	<input type="submit" value="enviar">
 </form>
 <?php
  if (isset($_POST["mensagem"])){
	  $msg = $_POST["mensagem"];
	  $msgFormatada = $_SESSION["usuario"] . ' Diz:' . $msg . '&#10;';
	  if (trim($msg) == ''){   // " Trim remove espaços antes e depois da string "
		 echo "<font color='red'>Você precisa preencher o campo mensagem!</font>";
		 exit();
	  }
	  //Iniciamos a manipulação do arquivo
	  $arquivo = fopen("conversa.txt", "a");
	  fwrite($arquivo, $msgFormatada);
	  fclose($arquivo);
  	}			
?>
 </center>
</body>
</html>