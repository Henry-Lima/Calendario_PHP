<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Document</title>
</head>
<body>

<header>
    <a href="index.php"><img id="img" src="voltar.png" alt=""></a>
    <h1> <center> Cadastrar Evento</center></h1>
  </header>

    <form action="validaCadastro.php" method="POST">
        
    <label class="label" for="cod_id">Código do Evento</label>
        <input class="input" name="cod_id" id="cod_id" type="number">
    
    <label class="label" for="nom_eve">Nome do Evento</label>
        <input class="input" name="nom_eve" id="nom_eve" type="text">
    
    <label class="label" for="dt_event">Data do Evento</label>
        <input class="input" name="dt_event" id="dt_event" type="date">
    
    <label class="label" for="hr_ini">Hora de Início do Evento</label>
        <input class="input" name="hr_ini" id="hr_ini" type="time">
    
    <label class="label" for="hr_fim">Hora de Fim do Evento</label>
        <input class="input" name="hr_fim" id="hr_fim" type="time">

    <label class="label" for="desc_eve">Descrição do Evento</label>
        <input class="input" name="desc_eve" id="desc_eve" type="text">
    
    <label class="label" for="loc_eve">Local do Evento</label>
        <input class="input" name="loc_eve" id="loc_eve" type="text">
    
    <label class="label" for="resp_eve">Responsável do Evento</label>
        <input class="input" name="resp_eve" id="resp_eve" type="text">

    <input id="btn" type="submit" value="Enviar">


    </form>
</body>
</html>

<?php


?>