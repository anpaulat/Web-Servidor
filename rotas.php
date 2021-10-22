<?php
    // if(!isset($_SESSION['usuario'])){
    //     header('Location: index.php?rota=Login');
    //     return;
    // }

    require('controllers/usuarioController.php'); 
    if(!isset($_GET['rota'])){
        return view('views/pizzalian.php');
    }

    $rota = $_GET['rota'];
    $method = count($_POST) > 0 ? 'POST': 'GET'; 

    switch($rota){
        case 'cadastroUsuario':
            $usuController = new UsuarioController();
            if($method == 'GET'){
                $usuController->create();
            }else{
                $usuController->store();
            }
            break;
        case 'Login':
            $usuController = new UsuarioController();
            if($method == 'GET'){
                $usuController->loginForm();
            }else{
                $usuController->login();
            }
            break;
        case 'Logout':
            $usuController = new UsuarioController();
            $usuController->logout();
            break;
        default:
            view('views/pizzalian.php');
    }
