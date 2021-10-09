<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funções</title>
</head>

<body>

  <?php
	
	  function SomaNumeros ($var1, $var2, $operador){
		  if ($operador == 'A'){
			$resultado = $var1 + $var2;  
		  }else if ($operador == 'S'){
			$resultado = $var1 - $var2;   
		  }else if ($operador == 'M'){
			$resultado = $var1 * $var2;  
		  }else{
			$resultado = $var1 / $var2; 
		  }
		  
		  return $resultado; 
	  }
		  
      
	 // echo  10 + 10 . "<br>";
	//  echo SomaNumeros(5,15,'S') . "<br>";
	 // echo SomaNumeros(5,5,'M') . "<br>";
	//  echo SomaNumeros(10,10,'D') . "<br>";
	
	
	 //Função que valida CPF	 
	 function ValidaCPF($cpf){
		 if (strlen($cpf) != '11'){
			 return "<font color='blue'><b>O CPF precisa de 11 Digitos</b></font>";
			 exit;
		 }
		 $n1 = $cpf[0];
		 $n2 = $cpf[1];
		 $n3 = $cpf[2];
		 $n4 = $cpf[3];
		 $n5 = $cpf[4];
		 $n6 = $cpf[5];
		 $n7 = $cpf[6];
		 $n8 = $cpf[7];
		 $n9 = $cpf[8];
		 $n10 = $cpf[9];
		 $n11 = $cpf[10];		 
		 
		 
		 switch ($cpf){
			 case '11111111111' : return "<font color='red'>Não pode repetir o número 1</font>"; break;
			 case '22222222222' : return "<font color='red'>Não pode repetir o número 2</font>"; break;
			 case '22222222222' : return "<font color='red'>Não pode repetir o número 3</font>"; break;
		 }
		  //Encontrando o Primeiro Digito Verificador
		 $multiplicacao = $n1 * 10 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2;

		 $resultado = $multiplicacao * 10 / 11 . "<br>";
		 $resto = $multiplicacao * 10 % 11;

		 if ($resto == 10){
			$resto = 0; 
		 }
		 if ($resto != $n10){
			 return "<font color='red'>Digito 1º Verificador Inválido</font>";
			 exit();
		 }
		//Encontrando o 3 Digito Verificador
		$multiplicacao = $n1 * 11 + $n2 * 10 + $n3 * 9 + $n4 * 8 + $n5 * 7 + $n6 * 6 + $n7 * 5 + $n8 * 4 + $n9 * 3 + $n10 * 2;

		 $resto = $multiplicacao * 10 % 11;
		 $resultado = $multiplicacao * 10 / 11 . "<br>";
		 $resto = $multiplicacao * 10 % 11;
		 if ($resto != $n11){
			 return "<font color='red'>Digito 2º Verificador Inválido</font>";
			 exit();
		 }

		 return "<font color='green'>CPF Válido</font>";
	 }
	
	 echo ValidaCPF('335') . "<br>";
	 echo ValidaCPF('52998224725') . "<br>";
	 echo ValidaCPF('11111111111') . "<br>";
	 echo ValidaCPF('22222222222') . "<br>";
	
	
	//Algoritmo do CPF https://dicasdeprogramacao.com.br/algoritmo-para-validar-cpf/
	//Algoritmo do CNPJ http://www.inf.ufpr.br/nicolui/grad/Programas/Curiosidades/Gerador-CPF/Algoritmo-CNPJ.txt
	
	?>


</body>
</html>