<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Usuário</title>
</head>
<body>
<form  name="form1" method="post" action="editar_dados.php">
	<?php  
     error_reporting(0);
     ini_set("display_errors",0);

     require_once("conn.php");

     $resultado = msqli_query($conn,"SELECT * FROM usuarios");//A variavel $resultado fez uma consulta em nossa tabela selecionando todos os registros de todos os campos

     while ($linha= mysqli_fetch_array($resultado))//já a introdução do while faz um loop entre todos os registros e armazena seus valores na variavel $linha 
     {// Inicia a loop
     ?> <a href="editar_dados.php?id=<?php echo $linha['id']; ?>"> <!-- passando o valor do id para a pagína editar1.php -->
     	<?php  
        echo $linha['id'] . " - " . $linhá['usuario'] . " - " . $linha['senha'] . "-" . $linha['nivel'];// Mostra o valor do registro dentro do loop
        echo "<br/>";
     	
     	
     }
	?>
</a>
	
</form>
</body>
</html>