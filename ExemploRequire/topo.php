			
<?php
			/*	Crie uma pasta e coloque os arquivos deste exemplo dentro dela;
			Crie cinco arquivos: rodape.php, topo.php, contato.php, pagina_inicial.php e sobre.php;
			Dentro do arquivo topo.php, crie uma estrutura HTML com links para as páginas pagina_inicial.php, sobre.php e contato.php;
			Dentro do arquivo rodape.php, termine a estrutura e coloque um paragrafo com a mensagem rodape;
			Dentro dos arquivos pagina_inicial.php,sobre.php e contato.php, faça o requerimento do arquivo de topo.php,
			escreva uma mensagem diferente em cada arquivo e depois faça o requerimento do arquivo de rodape.php;
			Ao final deste exemplo você deverá ter uma estrutura de navegação entre as três páginas pagina_inicial,
			sobre e contato, onde o topo e o rodape estarão aparecendo em todas;*/
					
		echo "<html>
					<head>
						<title> Exemplo de Require</title>
					</head>

					<body>
							<h1>Topo</h1>
							<a href ='pagina_inicial.php'>pagina inicial</a>
							<a href ='sobre.php'>sobre</a>
							<a href ='contato.php'>contato</a><br/><br/>";
		
?>
