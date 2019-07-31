<?php error_reporting(0); ?>
<!--DOCTYPE html-->
<html>
<head lang="pt-br">
	<title>Média</title>
   <?php require_once "header.php"; ?>
   <style type="text/css">
   	nav {
   		background-color: #4D8BB3;
   	}
   	body {
   		color: #616161;
   	}
   	/*MESMA COISA QUE O ANTERIOR POREM QUANDO NAO ESTA EM FOCO PELOS TIPOS DE INPUT*/
	.input-field input[type=text]:focus:not([readonly]) + label, .input-field input[type=email]:focus:not([readonly]) + label, textarea.materialize-textarea:focus:not([readonly]) + label, .input-field input[type=password]:focus:not([readonly]) + label  {
	    color: #ff5252;
	 }
	/* label underline focus color */
	.input-field input[type=text]:focus:not([readonly]), .input-field input[type=email]:focus:not([readonly]), .input-field input[type=password]:focus:not([readonly]) {
	    border-bottom: 1px solid #ff5252;
	    box-shadow: 0 1px 0 0 #ff5252;
	 }
	/* icon prefix focus color */
	.input-field .prefix.active {
	    color: #ff5252;
	}
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #ff5252;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #ff5252;
     box-shadow: 0 1px 0 0 #ff5252;
   }
   /* valid color */
   .input-field input[type=text].valid {
     border-bottom: 1px solid #ff5252;
     box-shadow: 0 1px 0 0 #ff5252;
   }
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #ff5252;
     box-shadow: 0 1px 0 0 #ff5252;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #ff5252;
   }
   .large.material-icons {
   	cursor: pointer;
   }
   </style>
<div class="container">
	<form action="desempenho.php" method="post" name="media">
		<h4 class="center">Média</h4>
		<div class="row">
			<div class="input-field col s6">
				<i class="material-icons prefix">filter_1</i>
					<input type="text" id="nota01" name="nota01" class="money" required placeholder="Digite o Valor da Primeira Nota">
				<label>Nota</label>
			</div>
			<div class="input-field col s6">
				<i class="material-icons prefix">filter_2</i>
					<input type="text" name="nota02" id="nota02" class="money" required placeholder="Digite o Valor da Segunda Nota">
				<label>Nota</label>
			</div>
		</div>
		<div class="center">
			<button type="submit" onclick="return validar()" name="calcular"  class="btn waves-effect waves-light red accent-2">Calcular</button>
		</div>
	</form>
</div>




    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="jquery.mask.js"></script>

    <script type="text/javascript">
    	 $(document).ready(function(){
		    $('.sidenav').sidenav();
		    $('.tooltipped').tooltip();
		   	$('.money').mask('00.00', {reverse: true});
		  });
    	 function validar()
    	 {
    	 	var nota01 = media.nota01.value;
    	 	var nota02 = media.nota02.value;
    	 	if (nota01 < 0 || nota01 > 10) {
    	 		M.toast({html: 'Campo deve conter uma nota válida entre 0 e 10'});
    	 		media.nota01.focus();
    	 		return false;
    	 	}
    	 	if (nota02 < 0 || nota02 > 10) {
    	 		M.toast({html: 'Campo deve conter uma nota válida entre 0 e 10'});
    	 		media.nota02.focus();
    	 		return false;
    	 	}
    	 	if (nota02 == "" || nota01 == "") {
    	 		M.toast({html: 'Campo deve conter uma nota válida entre 0 e 10'});
    	 		media.nota02.focus();
    	 		return false;
    	 	}
    	 }
    	
    </script>
</body>
</html>