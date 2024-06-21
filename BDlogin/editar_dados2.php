<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Documento sem título</title>
</head>
<body>
<?php  
$id = $_POST['idCli']; // Recebendo o valor id do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

require_once("conn.php");

mysqli_query($conn,"UPDATE usuario SET usuario='$usuario', senha='$senha', nivel='$nivel' WHERE id='".$id."'") or die("erro");

echo "Cadastro atualizado com sucesso";
?>
<p><a href="teste_consulta.php">Voltar<a/>
</body>
</html>