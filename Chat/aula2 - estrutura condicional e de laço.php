<html>
  <head>
    <title>Esse Arquivo será interpretado</title>
    <link rel="stylesheet" href="css/estilos/estilo.css" type="text/css">   
    <style>
		body{
			margin:0 !important;
			padding:0;
		}
		h1 {
			font-size: 20px;
			color
		}
	  </style>
  </head>

  <body>

     <h1>Meu Estilo</h1>
  
   <?php
	  
      //Estrutura Condicional
	  $media = 2;
	  
	  //If = Se verdadeiro
	  if ($media >= 7 ){  //Simples
		  echo "Aluno Aprovado! <br>";  //Se for verdade executa esse bloco
		  echo "Mostrou esse bloco de comandos";
	  }else if ($media == 6){ //else = senão for verdadeiro
		 echo "Aluno de recuperação"; 
	  }else{
		  echo "Aluno Reprovado";
	  }
	
	 
	  //Switch Case
	  switch ($media){
		  case 1 : echo "Você está péssimo!"; break; 
		  case 2 : echo "Você está Ruim!"; break; 
		  case 3 : echo "Você está mais ou menos!"; break; 
		  case 4 : echo "Você está péssimo!"; break;
		  case 5 : echo "Você está Bom!"; break; 
		  default : echo "Você é o melhor";
	  }
	  
	   
	  //Estrutura de Laço
	  $inicio = 1;
	  $fim    = 100;
	  while ($inicio <= $fim){ //Enquanto
		 if ($inicio == 5){
			echo "<font color='red'>Número = $inicio </font><br />"; 
		 }else{
			echo "Número = $inicio <br />"; 
		 }
		 
		 $inicio = $inicio + 1;
	  }
	  
	  for ($i = 1; $i < 10; $i++) {
           if ($i == 10){
			echo "<font color='red'>Número = $i </font><br />"; 
		 }else{
			echo "Número = $i <br />"; 
		 }
       }  
	  
   ?>

  </body>
  </html>