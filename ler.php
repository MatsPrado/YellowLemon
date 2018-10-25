<?php
	if (isset($_POST['nome'])){
		$nome=$_POST['nome'];
	}else {
		$nome="";
	}
	if (isset($_POST['sobrenome'])){
		$sobrenome=$_POST['sobrenome'];
	}else {
        $sobrenome="";
	}
	if (isset($_POST['senha'])){
		$senha=$_POST['senha'];
	}else{
		$senha="";
	}
	if (isset($_POST['check1'])){
		$check1=$_POST['check1'];
	}else{
		$check1="Esse ingresso não foi escolhido";
	}
	if (isset($_POST['check2'])){
		$check2=$_POST['check2'];
	}else{
		$check2="Esse ingresso não foi escolhido";
	}

	if (isset($_POST['check3'])){
		$check3=$_POST['check3'];
	}else{
		$check2="Esse ingresso não foi escolhido";
	}

	if (isset($_POST['cidade'])){
		$cidade=$_POST['cidade'];
	}else {
		$cidade="";
	}
	if (isset($_POST['dataagendamento'])){
		$dataagendamento=$_POST['dataagendamento'];
	}else{
		$datanascimento="Sem data selecionada";
	}
	if (isset($_POST['come'])){
		$come=$_POST['come'];
	}else{
		$come="Não disse nada";
	}
	if (isset($_POST['sexo'])){
		$sexo=$_POST['sexo'];
	}else {
		$sexo="";
	}


	 $cd = 'Nome:' . $nome . ', senha:' . $senha . 'checkbox'. $check1 . ', checkbnox:' . $check2 . ', checkbnox:' . $check3 .', Cidade:'. $cidade .', Data de agendamento:'. $dataagendamento . ', Comentario:' . $come .', Sexo:' .$sexo;

	$fp = fopen("Ingresso.txt", "a");

	$escreve = fwrite ( $fp , $cd); 

	fclose ($fp);
	
?>
<!DOCTYPE HTML>

<html>

<head>
	<title>Twenty by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="index is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1 id="logo">
				<a href="index.html">Fatec
					<span>Jundiai</span>
				</a>
			</h1>
			<nav id="nav">
				<ul>
				
					<li class="cadastro">
						<a href="index.html">tela Inicial</a>
					</li>
				
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">

				<header>
					<h2>Seu ingresso</h2>
				</header>
				
			</div>

		</section>

		
		<!-- Footer -->
		<footer id="footer">
		<p><u>Seus dados pessoais</u></p>
          <p>Nome: <?php echo $nome; ?></p>
		<p>Sobrenome: <?php echo $sobrenome; ?></p>
	<p>Sexo: <?php echo $sexo; ?></p>
		<p>Senha: <?php echo $senha; ?></p>
		<p>Ingresso escolhido: <?php echo $check1; ?></p>
		<p>Ingresso escolhido: <?php echo $check2; ?></p>
			<p>Ingresso escolhido: <?php echo $check3; ?></p>
		<p>Cidade: <?php echo $cidade; ?></p>
		<p>Data de nascimento: <?php echo $dataagendamento; ?></p>
		<p>Comentário: <?php echo $come; ?></p>
	
			
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
