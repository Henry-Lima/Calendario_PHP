<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/exibir.css">
</head>
<body>

<header>
    <a href="index.php"><img id="img" src="voltar.png" alt=""></a>
  </header>

  <h1><center>Eventos</center></h1>
    <?php

$host  = "localhost:3306";
$user  = "root";
$pass  = "";
$base  = "calendario";
$conexao  = mysqli_connect($host, $user, $pass, $base);
$resultadoQueryMySQL = mysqli_query($conexao, "Select * from eventos");
    
     
        
    while ($escrever=mysqli_fetch_array($resultadoQueryMySQL)) {
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
    ?>

</div>

</body>
</html>

