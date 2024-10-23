<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/alterar.css">
</head>
<body>

<header>
    <a href="index.php"><img id="img" src="voltar.png" alt=""></a>
    <h1><center>Atualizar Evento</center></h1>
  </header>

  
    <form id="form" action="" method="post">
        <label for="id">Digite o id do Evento que deseja atualizar:</label>
        <input type="number" name="id"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $conexao = mysqli_connect("localhost" ,"root", "", "calendario");
            $retornoQuery = mysqli_query($conexao, "SELECT * FROM eventos WHERE cod_id='$id'");
            while ($escrever=mysqli_fetch_array($retornoQuery)) {  
            $id = $escrever["cod_id"]; 
            $nomeEvento = $escrever["nom_eve"]; 
            $dataEvento = $escrever["dt_event"];
            $horaInicio = $escrever["hr_ini"];
            $horaFim = $escrever["hr_fim"];
            $descEvento = $escrever["desc_eve"];
            $localEvento = $escrever["loc_eve"];
            $responsavelEvento = $escrever["resp_eve"]; 
    
                
            echo 
            '<div class="div">
                <h2><center class="titulo">Informações do Evento:</center></h2>
                <form action="validaAtualizar.php" method="post">
                <label for="id">Id:</label>
                <input type="text" name="id" value="' . htmlspecialchars($id) . '" redonly/><br>
                
                <label for="nom_eve">Nome do Evento</label>
                <input id="nom_eve" name="nom_eve" type="text" value="' . htmlspecialchars($nomeEvento) . '" required><br> 
                
                <label for="dt_event">Data do Evento</label>
                <input id="dt_event" name="dt_eve" type="date" value="' . htmlspecialchars($dataEvento) . '" required> <br>
                
                <label for="hr_ini">Hora de Início do Evento</label>
                <input id="hr_ini" name="hr_ini" type="time" value="' . htmlspecialchars($horaInicio) . '" required><br> 
                
                <label for="hr_fim">Hora de Fim do Evento</label>
                <input id="hr_fim" name="hr_fim" type="time" value="' . htmlspecialchars($horaFim) . '" required><br> 
                
                <label for="desc_eve">Descrição do Evento</label>
                <input id="desc_eve" name="desc_eve" type="text" value="' . htmlspecialchars($descEvento) . '" required><br>
                
                <label for="loc_eve">Local do Evento</label>
                <input id="loc_eve" name="loc_eve" type="text" value="' . htmlspecialchars($localEvento) . '" required><br> 
                
                <label for="resp_eve">Responsável do Evento</label>
                <input id="resp_eve" name="resp_eve" type="text" value="' . htmlspecialchars($responsavelEvento) . '" required><br> 
                
                <input id="btn" type="submit" value="Atualizar">
                </form>
            </div>';
                
            };
            mysqli_close($conexao);
       
        }

?>
  </body>
</html>