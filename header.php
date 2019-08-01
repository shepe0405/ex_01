<?php error_reporting(0); ?>
<!--DOCTYPE html-->
<html>
<head lang="pt-br">
	<title>Média</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<nav>
	    <div class="nav-wrapper container">
	      <a href="#!" class="brand-logo center">Logo</a>
	      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	      <ul class="right hide-on-med-and-down">
	        <li><a href="ex_01.php">Média</a></li>
	      </ul>
	    </div>
	  </nav>

	  <ul class="sidenav" id="mobile-demo">
	   	<li><a href="ex_01.php">Média</a></li>
	  </ul>
   <style type="text/css">
   	nav {
   		background-color: #4D8BB3;
   	}
   	body {
   		color: #616161;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
   	}
    main {
      flex: 1 0 auto;
    }
    footer.page-footer  {
      background-color: #4d8bb3;
      color: white;
    }
    .footer-copyright a {
      color: white;
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