<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Dados</title>
</head>
<body>
	<?php  
	error_reporting(0);
	ini_set("display errors",0);

	$id= $_GET['id']; // Recebendo o valor vindo do link

	require_once("conn.php");

	$resultado = mysqli_query($conn,"SELECT * FROM usuarios WHERE id = '".$id."'"); // Há variavel $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
	while ($linha = mysqli_fetch_array($resultado))//Já a instrução faz um loop entre todos os registros e armazena seus valores na variavel $linha
	{ 
		?>
		<form method="post" action="editar_dados2.php">
			<input type="hidden" name="idCli" value="<php echo $linha['id']; ?>" /> <!-- passando o valor da id em um campo oculto -->
				<table>
					<tr><td>Usuario:</td><td> <input type="text" name="usuario" value="<?php echo $linha['usuario']; ?>" /> </td><!-- mostrando dentro do form o valor do campo nome-->
						<tr><td>Senha:</td><td> <input type="text" name="senha" value="<?php echo $linha['senha']; ?>" /> </td><!-- mostrando dentro do for o valor do campo do email -->
						<tr><td>Nivel:</td><td> <input type="text" name="nivel" value="<?php echo $linha['nivel']; ?>" /> </td>	
				</table>
				<input type="submit" name="Editor"/>

		</form>
		<?php 

	}

	?>
</body>
</html>