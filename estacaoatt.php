<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Twenty by HTML5 UP</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
	<link rel="stylesheet" href="assets/css/estacao.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="index is-preload">
	<div id="page-wrapper">

        <?php $today = date("Y-m-d");
        echo date('Y-m-d', strtotime("+1 days")); ?>


		<article id="main">

			<header class="special container">

				<span class="badge badge-pill badge-primary form-group " style="width: 100%; align-content: center;">cadastro de passagem</span>
				<br></br>

				<form action="ler.php" style="text-align: center" method="post">

					<p> Nome:
						<input type="text" style="border: solid;" name="nome" /> </p>
					<p> Sobrenome:
						<input type="text" style="border: solid; " name="sobrenome" /> </p>
					<p> Senha
						<input type="password" style="border: solid; " name="senha" /> </p>
					<p>SEXO:
						<input type="radio" name="sexo" value="Masculino" />Masculino
						<input type="radio" name="sexo" value="Feminino" />Feminino
					</p>
					<p> Ingresso:</p>
						<input type="checkbox" name="check1" class="form-check-input" value="Ingresso1">Almoço de segunda a sexta R$45,90
						<br></br>
						<input type="checkbox" name="check2" value="Ingresso2">Rodízio de Pizza R$31,90
						<br></br>
						<input type="checkbox" name="check3" value="Ingresso3">Rodízio comida Japonesa R$42,90 </p>
					<p> Escolha sua Cidade:
						<Select name="cidade">
							<option value=""></option>
							<option value="Itupeva">Itupeva</option>
							<option value="Cabreúva">Cabreúva</option>
							<option value="Jundiaí">Jundiaí</option>
							<option value="Várzea Paulista">Várzea Paulista</option>
							<option value="Campo Limpo Paulista">Campo Limpo Paulista</option>
							<option value="Jarinu">Jarinu</option>
							<option value="Cajamar">Cajamar</option>
							<option value="Louveira">Louveira</option>
							<option value="Vinhedo">Vinhedo</option>

						</Select>
					</p>

					<label for="dataagendamento">Data Nascimento: </label>
					<input type="date" min = "<?php echo $today ?>" name="dataagendamento" max = "2099-10-20" class="form-control" value="dataagendamento" aria-describedby="DatanascimentoHelp" placeholder="Digite a data de nascimento">
					<p>
						<textarea name="come" cols="40" style="margin-top:2%" rows="3">Deixe um comentário!!!</textarea>
					</p>


					<p>
						<input type="submit" name="enviar" value="Enviar" />
					</p>
					<p>
						<input type="reset" name="resetar" value="Limpar" />
					</p>
					<!--<p>
						<input type="button" name="botao" value="BOTÃO" />
					</p>-->
				</form>

				<h4>Após a confirmação do cadasto ele será salvo como ingresso.txt</h4>

			</header>



		</article>

		<section id="cta">

			<footer>


			</footer>

		</section>

		<!-- Footer
		<footer id="footer">


		</footer> -->

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