<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formularios</title>
</head>

<body>
  
  <form action="" method="post" enctype="multipart/form-data" name="frmCadastro" id="frmCadastro">
  	Informe seu nome<input type="text" name="nome" id="nome" value="Digite Seu Nome"><br>
  	Informe o nome do seu namorado(a)<input type="text" name="namorada" id="namorada" value="Digite Seu Nome"><br>
  	Escreva, qual é o seu maior desejo<textarea name="desejo" id="desejo"></textarea><br>
  	<select name="idade" id="idade">
  		<option value="menor">Menos de 18 anos</option>
  		<option value="maior">Mais de 18 anos</option>
  	</select>
  	<input type="submit" name="enviouForm" value="Enviar Dados">
  	<input type="reset" value="Limpar Dados">
  </form>
  <a href="?enviouForm&nome=Ricardo&namorada=Adriana&desejo=Ganhar%20Na%20Loteria&idade=maior">Clique aqui</a>
  
  <?php
	if (isset($_REQUEST["enviouForm"])){
		$nome     = $_REQUEST["nome"];
		$namorada = $_REQUEST["namorada"];
		$desejo   = $_REQUEST["desejo"];
		$idade    = $_REQUEST["idade"];
		
		if ($idade == 'maior'){
		echo "Olá $nome você já tem mais de 18 anos e enquanto você fica ai sonhando com $desejo  $namorada está se divertindo as suas custas :)";
		}else{
			echo "Olá $nome você é muito novo para namorar $namorada e sonhar com $desejo";
		}
	}
  ?>

</body>
</html>