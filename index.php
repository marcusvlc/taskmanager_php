<!DOCTYPE html>
<html>
<head>
	<title>Task Manager</title>
	<meta charset="utf-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/inicio.css"/>
    <link rel="stylesheet" type="text/css" href="css/materialize.css"/>
    <script type="javascript" src="js/materialize.js"></script>


</head>
<body background="imagens/fundo.jpg">

<div id="tudo">

        <div id = "topo">

            <?php
                include "topo.php";
            ?>

        </div>

    <div id = "menu">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Personal Tasks</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="badges.html">Login</a></li>
                    <li><a href="cadastro.php">Registre-se</a></li>
                </ul>
            </div>
        </nav>

    </div>


        <div id = "conteudo">
            <?php include "conteudo.php";
            
            ?>



        </div>

        <div id = "rodape">
        	<?php 
        		include "rodape.php";
        	?>

        </div>
</div>
</body>
</html>