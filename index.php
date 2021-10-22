<?php
session_start();
function view($nomeView){

    require('views/templates/header.php');
    require($nomeView);
    require('views/templates/footer.php');
}

require('rotas.php');