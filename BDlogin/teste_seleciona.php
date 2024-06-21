<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta de Usuários</title>
</head>
<body>
<form name="form1" method="post" action="teste_seleciona.php">
	<br>
	<?php  
     require_once("conn.php");
     $sql=mysqli_query($conn,"SELECT * FROM usuarios");

     while ($linha=mysqli_fetch_array($sql)) {
     	$id=$linha['id'];
     	$usuario=$linha['senha'];
     	$senha=$linha['senha'];
     	$nivel=$linha['nivel'];

     	echo "<br><br>";

     	echo "<table><tr><td>Id do Usuário</td><td>$id</td>";
     	echo "<tr><td>Usuário </td><td>$usuario</td>";
     	echo "<tr><td>Senha </td><td>$senha</td>";
     	echo "<tr><td>Nivel </td><td>$nivel</td></table>";
     }
	?>
</form>
</body>
</html>