<?php

class UsuarioController
{

    public function create()
    {
        view('views/cadUsu.php');
    }

    public function store()
    {
        $validado = $this->validaCampos();
        if (!$validado) {
            header('Location: index.php?rota=cadastroUsuario');
            return;
        }

        $_SESSION['mensagem'] = 'Usuário cadastrado com sucesso!';
        header('Location: index.php');
    }

    private function validaCampos()
    {
        $campoCad = ["nome", "email", "cpf", "senha", "senha2", "idade", "cep", "numero", "endereco", "bairro", "cidade", "uf"];

        foreach ($campoCad as $campo) {
            if (empty($_POST[$campo])) {
                return false;
            }
        }

        return true;
    }

    public function loginForm()
    {
        view('views/login.php');
    }

    public function login()
    {
        if (isset($_POST['usuario'], $_POST['senha'])) {
            if ($_POST['usuario'] == 'admin' && $_POST['senha'] == '123') {
                $_SESSION['usuario'] = $_POST['usuario'];
                header('Location: index.php');
            }else{
                $_SESSION['mensagem'] = 'Login ou senha incorretos!';
                header('Location: index.php?rota=Login');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: index.php');
    }
}
