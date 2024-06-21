<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Excluir Usuário</title>
</head>
<body>
<form name="form1" method="post" action="teste_excluir.php">
	<p>
		<input type="text" name="txt_cod">
	</p>
	<p>
		<input type="submit" name="bt" value="Confirma">
	</p>

	<?php  
      error_reporting(0);
      ini_set("display_errors", 0);

      $cons=$_POST['txt_cod'];
      $bt=$_POST['bt'];

      require_once("conn.php");

      $sql=mysqli_query($conn,"SELECT * FROM usuarios");

      while ($linha=mysqli_fetch_array($sql)) {
      	$id=$linha['id'];
      	$usuario=$linha['usuario'];
      	$senha=$linha['senha'];
      	$nivel=$linha['nivel'];

      	echo "<p>";

      	echo "<table><tr><td>Id do Usuário </td><td>$id</td>";
      	echo "<table><tr><td>Usuário </td><td>$usuario</td>";
      	echo "<table><tr><td>Senha </td><td>$senha</td>";
      	echo "<table><tr><td>Nível0 </td><td>$nivel</td>";

      }

      if ($bt!='') {
      	
      	mysqli_query($conn,"DELETE FROM usuarios WHERE id='$cons'") or die("Erro na Exclusão");

      	echo "Excluido";
      	echo "<meta http-equiv='refresh'content='0'>";
      }

	?>
</form>
</body>
</html>