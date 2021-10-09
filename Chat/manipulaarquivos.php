<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manipulação de Arquivos</title>
</head>

<body>
<center>
 <H1>Manipulação de Arquivos</H1>
 
 <form method="post" action="">
 	Mensagem:
 	<textarea name="mensagem" id="mensagem" rows="7" cols="60"> 		
 	</textarea><br>
 	<input type="submit" value="enviar">
 </form>
 <?php
  if (isset($_POST["mensagem"])){
	  $msg = $_POST["mensagem"];
	  
	  if (trim($msg) == ''){   // " Trim remove espaços antes e depois da string "
		 echo "<font color='red'>Você precisa preencher o campo mensagem!</font>";
		 exit();
	  }
	  //Iniciamos a manipulação do arquivo
	  $arquivo = fopen("conversa.txt", "a");
	  fwrite($arquivo, $msg);
	  fclose($arquivo);
	  
  }	
	//Aqui iremos ler o conteúdo do Arquivo criado
	  $arquivo = fopen("conversa.txt", "r");
	  $mensagem = fread($arquivo, filesize("conversa.txt"));
	  fclose($arquivo);
	  
	  echo $mensagem;
?>
 
 </center>
</body>
</html>