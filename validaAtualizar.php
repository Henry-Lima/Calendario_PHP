<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST["id"]; 
            $nomeEvento = $_POST["nom_eve"];
            $dataEvento = $_POST["dt_eve"];
            $horaInicio = $_POST["hr_ini"];
            $horaFim = $_POST["hr_fim"];
            $descEvento = $_POST["desc_eve"];
            $localEvento = $_POST["loc_eve"];
            $responsavelEvento = $_POST["resp_eve"];
            
            $conexao = mysqli_connect("localhost" ,"root", "", "calendario");
            $retornoQuery = mysqli_query($conexao, "UPDATE eventos SET 
                nom_eve='$nomeEvento',
                dt_event='$dataEvento',
                hr_ini='$horaInicio',
                hr_fim='$horaFim',
                desc_eve='$descEvento',
                loc_eve='$localEvento',
                resp_eve='$responsavelEvento'
                WHERE cod_id='$id';");
            mysqli_close($conexao); 
            }

    echo 
      "<script>
        setTimeout(function() {
          window.location.href = \"http://localhost/caldendario_php/exibir.php\";
        }, 1000);
      </script>";
    

?>