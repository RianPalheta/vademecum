<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/cf.js"></script>
<?php
require '../config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
        <meta charset="utf-8" />
        <title>Constituição Federal</title>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style-codico.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/texto-lei.css" />
    </head>
    <body>
        <div id="texto">
            <div id="caixa">
                <ul>
                    <li><a class="link" href="#tituloi">Título I</a></li>
                    <li><a class="link" href="#tituloii">Título II</a></li>
                    <li><a class="link" href="#tituloiii">Título III</a></li>
                    <li><a class="link" href="#tituloiv">Título VI</a></li>
                    <li><a class="link" href="#titulov">Título V</a></li>
                    <li><a class="link" href="#titulovi">Título VI</a></li>
                    <li><a class="link" href="#titulovii">Título IIIX</a></li>
                    <li><a class="link" href="#tituloviii">Título IIX</a></li>
                    <li><a class="link" href="#tituloix">Título IX</a></li>
                    <li><a class="link" href="#adct">ADCT</a></li>
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