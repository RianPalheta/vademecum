<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
        <meta charset="utf-8" />
        <title>Constituição Federal</title>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/style-codico.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/caixa.css" />
    </head>
    <body>
        <div id="texto">
            <div id="caixa">
                <ul>
                    <li><a href="#tituloi">Título I</a></li>
                    <li><a href="#tituloii">Título II</a></li>
                    <li><a href="#tituloiii">Título III</a></li>
                    <li><a href="#tituloiv">Título VI</a></li>
                    <li><a href="#titulov">Título V</a></li>
                    <li><a href="#titulovi">Título VI</a></li>
                    <li><a href="#titulovii">Título IIIX</a></li>
                    <li><a href="#tituloviii">Título IIX</a></li>
                    <li><a href="#tituloix">Título IX</a></li>
                    <li><a href="#adct">ADCT</a></li>
                </ul>
            </div>

            <?php
                $meta = '<div>"';
                $url = file_get_contents('https://www.meuvademecumonline.com.br/legislacao/constituicao_titulo/21/constituicao/');
                $limpaSite = explode($meta,$url);
                $limpaSite = explode('<div>',$limpaSite[0]);
                echo $limpaSite[0];
             ?>

        </div>
    </body>
</html>