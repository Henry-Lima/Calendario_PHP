<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $id = $_POST["cod_id"];   
      $nome = $_POST["nom_eve"];
      $data = $_POST["dt_event"];
      $hr_ini = $_POST["hr_ini"];
      $hr_fim = $_POST["hr_fim"];
      $descricao = $_POST["desc_eve"];
      $local = $_POST["loc_eve"];
      $responsavel = $_POST["resp_eve"];
      

      // Conexão com banco
      $host  = "localhost:3306";
      $user  = "root";
      $pass  = "";
      $base  = "calendario";
      $conexao  = mysqli_connect($host, $user, $pass, $base);
      // Query
      $input = mysqli_query($conexao, "
        INSERT INTO eventos (cod_id, nom_eve, dt_event, hr_ini, hr_fim, desc_eve, loc_eve, resp_eve  ) 
            VALUES ('$id', '$nome', '$data', '$hr_ini', '$hr_fim', '$descricao', '$local', '$responsavel');");

      mysqli_close($conexao); // Encerrando conexão com o banco
      echo "<center><h1>Cadastro realizado</h1></center>";
      // script para redirecionar o user para a pagina de exibição da tablela
      echo 
      "<script>
          setTimeout(function() {
          window.location.href = \"http://localhost/caldendario_php/exibir.php\";
          }, 1000);
      </script>";
    }
  ?>
</body>
</html>