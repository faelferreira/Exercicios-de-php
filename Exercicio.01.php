<?php
// Crie uma função que receba dois argumentos e retorne a soma dos mesmos.
	echo soma(5,7);
	echo "<hr>";
	function soma($a,$b){
		return $a+$b;
	}
//*********************************************
/* Declare uma variável que receba a invocação da função criada acima, 
passando dois números quaisquer por argumento, e somando `5` ao resultado retornado da função.*/
	$x = soma2(10,12);
	echo $x;
	echo "<hr>";
	
	function soma2 ($a,$b){
		return $a + $b + 5;
	}
//**********************************************
// Declare uma nova variável, sem valor.
	$x;
/*
  Crie uma função que adicione um valor à variável criada acima, e retorne a string:
      O valor da variável agora é VALOR.
  Onde VALOR é o novo valor da variável.
  */
	function valor ($a){
		$x = $a;
		return 'O valor é'+ $x;
	}
 // Invoque a função criada acima.
	valor (10);
 // Qual o retorno da função? (Use comentários de bloco).
	echo "O valor da funçãp é ". valor(10);
	echo "<hr>";
  //*********************************************8
  
/*
  Crie uma função com as seguintes características:
      Preencha todos os valores corretamente!
  3. O retorno da função deve ser a multiplicação dos 3 argumentos, somando `2` ao resultado da multiplicação.
  */
	function valor33($a,$b,$c){
		if($a == null || $b==null ||$c==null){
			echo "vazio! Por favor preencha todos os valores!";
		}else{
		return ($a*$b*$c)+2;
		}
	}
// Invoque a função criada acima, passando só dois números como argumento.
		echo valor33(1,2,null)."<br/>";
// Qual o resultado da invocação acima? (Use comentários para mostrar o valor retornado).
//"vazio! Por favor preencha todos os valores!";

// Agora invoque novamente a função criada acima, mas passando todos os três argumentos necessários.
	echo valor33(1,2,10)."<hr>";
//***************************************************
/*
Crie uma função com as seguintes características:
  5. Se nenhum argumento for passado, retorne o valor booleano `false`.
  6. E ainda, se nenhuma das condições acima forem atendidas, retorne `null`. */

	function ninja($a,$b,$c){
		
			if($a != null && $b == null){
				return $a;
			} else if ($c == null){
				return $a+$b;
			} else if ($a != null && $b != null & $c !== null){
			return (($a + $b) / $c );
			} else if ($a == null ){
				return false;
			} else {
				return null;		
			}
	}
	print_r (ninja(null,null,null)."<br/>");
//**********************************************************

/*Monte uma estrutura que analise as duas variáveis e seguindo a seguinte condição imprima algo na tela;
  > * Se nota maior ou igual a 7 e frequencia maior ou igual a 8 -> Imprima aprovado;
  > * Se nota maior ou igual a 5 ou nota menor que 7 e frequencia maior ou igual a 8 -> Imprima recuperação;
 -> * Se nota menor que 5 ou frequencia menor que 8 -> Imprima reprovado;
 +> * Se nota menor que 5 ou frequencia menor que 8 -> Imprima reprovado;
 +*/
 
 
// Crie uma variável num1 e atribua um valor númerico a ela;
	$num1 = 10; 
//Utilizando a estrutura de controle IF, verifique se esse número é par, caso seja, imprima O número num1 é par;
//Utilizando a estrutura de controle IF, verifique se esse número é ímpar, caso seja, imprima O número num1 é ímpar;

/*Crie uma variável num2 e atribua um valor númerico a ela;
Utilizando a estrutura de controle IF e ELSE, verifique se esse número é par, caso seja,
 imprima O número num2 é par, caso não seja, imprima O número num2 é ímpar;*/
	
	if($num1 % 2 == 0){
		echo $num1 ." è par";
	}else{
		echo $num ." è impar";
	}
	echo "<br/><hr>";
//******************************************************************
/*	Crie duas variáveis nota e frequencia e atribua valores a elas;
Monte uma estrutura que analise as duas variáveis e seguindo a seguinte condição imprima algo na tela;
Se nota maior ou igual a 7 e frequencia maior ou igual a 8 -> Imprima aprovado;
Se nota maior ou igual a 5 ou nota menor que 7 e frequencia maior ou igual a 8 -> Imprima recuperação;
Se nota menor que 5 ou frequencia menor que 8 -> Imprima reprovado;*/
	$nota = 10;
	$frequencia = 8;
	if($nota>=7 && $frequencia>= 8 ){
		echo "Aprovado!<br/><hr>";
	}else if($nota>=5 || $nota <=7 & frequencia>=8){
		echo "Recuperação!<br/><hr>";
	}else{
		echo "Reprovado!<br/><hr>";
	}
//***********************************************************************
//Utilize o exemplo do exercício anterior e monte a estrutura utilizando SWITCH e CASE;
	switch($nota){
		case ($nota>=7 && $frequencia>= 8 ):
			echo "Aprovado!<br/><hr>";
			break;
		case ($nota>=5 || $nota <=7 & frequencia>=8):
			echo "Recuperação!<br/><hr>";
			break;
		default:
			echo "Reprovado!<br/><hr>";
			break;
		}
//**************************************************************************

	/*Crie três arquivos: pessoa.php, cargo.php e empresa.php;
Dentro do arquivo cargo.php, crie uma variável chamada cargo e atribua um valor à ela;
Dentro do arquivo pessoa.php, inclua o arquivo anterior e crie duas variáveis chamadas nome e idade;
Dentro do arquivo empresa.php, inclua o arquivo anterior e cria uma variável chamada empresa;
Cria um arquivo chamado view.php e inclua o arquivo anterior.
Ainda no arquivo view.php, exiba a mensagem: Olá, meu nome é {nome}, tenho {idade}, atualmente trabalho como {cargo} na empresa {empresa};*/


	
	$nome = "Rafael da Conceição Ferreira";
	$idade = 29;
 
 
 
?>