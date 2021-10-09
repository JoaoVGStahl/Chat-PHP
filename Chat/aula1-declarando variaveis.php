<html>
  <head>
    <title>Esse Arquivo será interpretado</title>
  </head>

  <body>

   <?php
       
      $numero1 = 10;  // Toda variavel é iniciada com o simbolo de Cifrão $
      // $1numero = 10; //Uma Variavel em php não pode ser iniciada por um número
      //$@numero = 10;  //Uma variavel PHP não pode ser iniciada com um simbolo salvo a exceção do underline
      $_numero1 = 10;
      $nome = 'André';
      $NOME = 'Luiz';
      $Nome = 'Gonçalves de';
      $nOme = 'Macedo';  //Neste exemplo criamos 4 variaveis diferentes utilizando variações de letras maiusculas e minusculas
      //o PHP é uma linguagem case sensitive
       
      //PHP é uma linguagem fracamente tipada
	  
	  // =  Simbolo de atribuição
	  // == Serve para comparar valores
	  if ($numero1 == $_numero1){
		  echo "São Iguais<br>";
	  }
	  // === Serve para comparar valores e tipos
	  // . Que serve para concatenar valores
	  if ($numero1 === $_numero1){
		  echo "São Iguais<br>";
	  }
	  // + Adição
	  // - Subtração
	  // * Multiplicação
	  // / Divisão
	  // % Pegar o resto da divisão
	  //9%2 = 1;
	  //9/2 = 4; 
	  $soma = 10 + 10;
	  $divisao = 9/2;
	  $resto = 9%2;
	  $mult = 2 * 10;
	  $sub = 10 - 5;
	  echo "Resultado Soma: $soma Divisão: $divisao Resto: $resto Multiplicação: $mult Subtração : $sub <br><br>";
	  
	  $nome = 'André';
	  echo "Nome: $nome <br>";
	  echo 'Nome: $nome <br>';
	  echo 'Nome:'. $nome;
	  
	  
	  
	  
   ?>

  </body>
  </html>