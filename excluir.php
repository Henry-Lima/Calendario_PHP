<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/excluir.css">
</head>
<body>
  <header>
    <a href="index.php"><img id="img" src="voltar.png" alt=""></a>
    <h1> <center> Procure pelo evento para excluir:</center></h1>
  </header>

    

    <form method="POST">
    
    <label for="id">Digite o ID do evento:</label>
    <input type="text" name="id" id="excluir">
    <input type="submit" id="btn-enviar" value="Enviar">

    </form>
</body>
</html>
<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $id = $_POST["id"];
      // Conexão com banco
      $host  = "localhost:3306";
      $user  = "root";
      $pass  = "";
      $base  = "calendario";
      $conexao  = mysqli_connect($host, $user, $pass, $base);
      // Query
      $input = mysqli_query($conexao, "DELETE FROM eventos WHERE cod_id = '$id'");
      mysqli_close($conexao); // Encerrando a conexão com o banco
      echo "<center class='msg'><h1>Exclusão bem sucedida!!</h1></center>";
      // Script para redirecionar o user para a pagina de exibição da tablela
      echo 
      "<script>
        setTimeout(function() {
          window.location.href = \"http://localhost/caldendario_php/exibir.php\";
        }, 1000);
      </script>";
    }
  ?>