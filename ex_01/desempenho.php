<?php require_once "header.php";

	if (isset($_POST['calcular'])) {
		$nota01 = $_POST['nota01'];
		$nota02 = $_POST['nota02'];
		$media = ($nota01 + $nota02)/2;
	switch ($media) {
		case ($media < 3):
			$desempenho = "Péssimo";
			$icon = "thumb_down";
			$color = "#ff5252";
			break;
		case ($media < 5):
			$desempenho = "Ruim";
			$icon = "sentiment_very_dissatisfied";
			$color = "#ff5252";
			break;
		case ($media < 7):
			$desempenho = "Médio";
			$icon = "sentiment_neutral";
			$color = "#616161";
			break;
		case ($media < 9):
			$desempenho = "Bom";
			$icon = "sentiment_very_satisfied";
			$color = "#4D8BB3";
			break;
		case ($media < 10.1):
			$desempenho = "Excelente";
			$icon = "thumb_up";
			$color = "#4D8BB3";
			break;
		}
	}
?>
<main>
	<div class="container" style="margin-top: 50px;">
		<p class="center"><i class="large material-icons tooltipped" style="color: <?=$color?>;" data-position="bottom" data-tooltip="<?=$desempenho?>"><?=$icon?></i></p>
		<p class="center" style="font-size: 16px; color: <?=$color?>;">Seu Desempenho Foi <?=$desempenho?></p>
	</div>
	<div class="row center">
		<a href="ex_01.php" class="btn waves-effect waves-light red accent-2">Nova Média</a>
	</div>
</main>
	<footer class="page-footer">
	<div class="footer-copyright">
		<div class="container white-text">
			 © 2019 Copyright Text
			<a href="ex_01.php" class="right">Média</a>
		</div>
	</div>
</footer>
	 <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
    	 $(document).ready(function(){
		    $('.sidenav').sidenav();
		    $('.tooltipped').tooltip();
		   });
	</script>