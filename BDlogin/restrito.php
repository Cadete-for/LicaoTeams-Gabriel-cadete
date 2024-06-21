<?php
    
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
    
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID'])) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: index.php"); 
      exit;
  }
    
  ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
    </head>
    <body>

      <h1>Página restrita</h1>
      <p>Olá, <?php echo $_SESSION['UsuarioNome']; ?>!</p>
      <p>O seu nível de acesso é: <?php echo $_SESSION['UsuarioNivel']; ?>!</p>
  

  
      <?php

        if( $_SESSION['UsuarioNivel']==1)
        {
          echo"<a href='cadUsuario.php'>Cadastrar Usuário</a><br>
          <a href='teste_excluir.php'>Excluir Usuário</a><br>";
        }
      ?>

        <a href='teste_seleciona.php'>Consultar Usuário</a><br>
        <a href='teste_consulta.php'>Editar Usuário</a><br>
        <a href="sair.php">sair</a>
    
    </body>
    </html>
  