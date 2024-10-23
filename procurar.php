<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/procurar.css">
    <title>Document</title>
</head>
<body>

    <header>
        <a href="index.php"><img class="img" src="voltar.png" alt=""></a>
        <h1>Consultar Evento</h1>
    </header>
    
    <form action="" method="post">
        <label for="id">Digite o id do Evento que deseja consultar:</label>
        <input type="number" name="id"/>
        <input type="submit"/>
    </form>
   
   <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST["id"];
      $conexao = mysqli_connect("localhost" ,"root", "", "calendario");
      $retornoQuery = mysqli_query($conexao, "SELECT * FROM eventos WHERE cod_id='$id'");
     
    
   
    while ($escrever=mysqli_fetch_array($retornoQuery)) {
        echo
        '
        <div class="tarefa">
            <p class="label">ID:</p>    <p class="tabela">' . $escrever["cod_id"] .'</p>
            <p class="label">Nome:</p>    <p class="tabela">' . $escrever["nom_eve"] .'</p>
            <p class="label">Data:</p>    <p class="tabela">' . $escrever["dt_event"] .'</p>
            <p class="label">Hora de início:</p>    <p class="tabela">' . $escrever["hr_ini"] .'</p>
            <p class="label">Hora de fim:</p>    <p class="tabela">' . $escrever["hr_fim"] .'</p>
            <p class="label">Descrição:</p>    <p class="tabela">' . $escrever["desc_eve"] .'</p>
            <p class="label">Local:</p>    <p class="tabela">' . $escrever["loc_eve"].'</p>
            <p>Responsável:</p>   <p class="tabela">' . $escrever["resp_eve"] .'</p>
        </div>
        ';
    }

    echo "</table></center>";
    echo "</br></br>";

    mysqli_close($conexao);
    };
  


?>
</body>
</html>