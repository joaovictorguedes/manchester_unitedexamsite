<?php
session_start();

if (empty($_SESSION['id'])) {
	session_start();
	session_destroy();
	header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/prova.css" rel="stylesheet">
	<link rel="icon" href="../img/icon.ico" type="image/x-icon" />
	<title>Prova</title>
</head>

<body>

	<header>
		<div class="logo_header">
			<a href="../index.php">
				<img src="../img/header_logo.png" class="logo">
			</a>
		</div>

		<nav>
			<ul class="nav-menu">
				<li>PROVA</a></li>
			</ul>
		</nav>
	</header>

	<div>

		<form action="salvarnota.php" method="POST">
			<label for="question_1">Qual foi o responsável por fazer a maior contratação do Manchester United? É que jogador foi esse?</label><br><br>
			<input type="radio" id="questions" name="r_question_1" value="incorrect">Zidane, Lionel Messi <br>
			<input type="radio" id="questions" name="r_question_1" value="correct">João Mourinho, Paul Pogba <br>
			<input type="radio" id="questions" name="r_question_1" value="incorrect">Pepe Guardiola, Neymar <br>
			<input type="radio" id="questions" name="r_question_1" value="incorrect">Tite, Gabriel Jesus <br><br>

			<label for="question_2">Qual liga o Manchester United Compete? (2019)</label><br><br>
			<input type="radio" id="questions" name="r_question_2" value="correct">Premier League, Primeira Divisão da Inglaterra<br>
			<input type="radio" id="questions" name="r_question_2" value="incorrect">Primeira Liga, Primeira Divisão de Portugal<br>
			<input type="radio" id="questions" name="r_question_2" value="incorrect">Campeonato Brasileiro Série D, Quarta Divisão do Brasil<br>
			<input type="radio" id="questions" name="r_question_2" value="incorrect">La Liga, Primeira Divisão da Espanha<br><br>

			<label for="question_3">Qual é o Estádio do Manchester United?</label><br><br>
			<input type="radio" id="questions" name="r_question_3" value="incorrect">Santiago Bernabéu<br>
			<input type="radio" id="questions" name="r_question_3" value="correct">Old Trafford<br><br>

			<label for="question_4">2019, Qual foi o time que eliminou eles das Quartas de Finais da UEFA Champions League?</label><br><br>
			<input type="radio" id="questions" name="r_question_4" value="correct">Barcelona<br>
			<input type="radio" id="questions" name="r_question_4" value="incorrect">Ajax<br>
			<input type="radio" id="questions" name="r_question_4" value="incorrect">PSG<br>
			<input type="radio" id="questions" name="r_question_4" value="incorrect">Real Madrid<br><br>

			<label for="question_5">Quem é o Atual Camisa 9 do Manchester United?</label><br><br>
			<input type="radio" id="questions" name="r_question_5" value="correct">Anthony Martial<br>
			<input type="radio" id="questions" name="r_question_5" value="incorrect">Neymar<br>
			<input type="radio" id="questions" name="r_question_5" value="incorrect">Lukaku<br>
			<input type="radio" id="questions" name="r_question_5" value="incorrect">Cristiano Ronaldo<br><br>

			<label for="question_6">Em que ano, Foi Fundado o Manchester United?</label><br><br>
			<input type="radio" id="questions" name="r_question_6" value="incorrect">1992<br>
			<input type="radio" id="questions" name="r_question_6" value="incorrect">1871<br>
			<input type="radio" id="questions" name="r_question_6" value="incorrect">1820<br>
			<input type="radio" id="questions" name="r_question_6" value="correct">1878<br><br>

			<label for="question_7">Qual é o maior rival do Manchester United?</label><br><br>
			<input type="radio" id="questions" name="r_question_7" value="incorrect">Flamengo<br>
			<input type="radio" id="questions" name="r_question_7" value="incorrect">Liverpool<br>
			<input type="radio" id="questions" name="r_question_7" value="incorrect">PSG<br>
			<input type="radio" id="questions" name="r_question_7" value="correct">Manchester City<br><br>

			<label for="question_8">Atualmente, Qual é o Goleiro do Manchester United?</label><br><br>
			<input type="radio" id="questions" name="r_question_8" value="incorrect">Buffon<br>
			<input type="radio" id="questions" name="r_question_8" value="incorrect">Navas<br>
			<input type="radio" id="questions" name="r_question_8" value="correct">David De Gea<br>
			<input type="radio" id="questions" name="r_question_8" value="incorrect">Cássio<br><br>

			<label for="question_9">Quantas Champions ganhou o Manchester United?</label><br><br>
			<input type="radio" id="questions" name="r_question_9" value="correct">3<br>
			<input type="radio" id="questions" name="r_question_9" value="incorrect">Nenhuma<br>
			<input type="radio" id="questions" name="r_question_9" value="incorrect">2<br>
			<input type="radio" id="questions" name="r_question_9" value="incorrect">6<br><br>

			<label for="question_10">Qual é o Mascote do Manchester United?</label><br><br>
			<input type="radio" id="questions" name="r_question_10" value="incorrect">Manequinho<br>
			<input type="radio" id="questions" name="r_question_10" value="correct">Fred The Red<br>
			<input type="radio" id="questions" name="r_question_10" value="incorrect">Red's Good<br>
			<input type="radio" id="questions" name="r_question_10" value="incorrect">Blu's Red's<br><br>

			<input type="submit" onclick="alert('Prova Concluída!')">

		</form>

	</div>
</body>

</html>