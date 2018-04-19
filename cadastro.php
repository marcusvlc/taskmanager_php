<!DOCTYPE html>
<html>
<head>
	<title>Task Manager</title>
	<link rel="stylesheet" type="text/css" href="css/inicio.css"/>
	<link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">

</head>
<body background="imagens/fundo.jpg">

	<div id="formulario_cadastro">

		<h1>Personal Tasks<h1>
		<h2>Registre-se</h2>

	<form action="cadastrar.php" method="POST">

		<input type="text" name="login" class="campos_cadastro" placeholder="Insira seu nome">
		<input type="email" name="email" class="campos_cadastro" placeholder="Insira seu email">
		<input type="password" name="senha" class="campos_cadastro" placeholder="Insira sua senha"> 
		<input type="password" name="repetirsenha" class="campos_cadastro" placeholder="Confirme sua senha">
		<input type="submit" name="cadastrar" class="botao_cadastro">
		<input type="reset" name="limpar" class="botao_cadastro">
	</form>

	</div>

</body>
</html>