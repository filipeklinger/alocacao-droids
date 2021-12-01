<?php

namespace Droids\backend\control;

use Droids\backend\control\classes\Usuario;
use Droids\backend\model\UsuarioBanco;

class UsuarioControl
{
    private $usuario;
    private $usuarioBanco;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->usuarioBanco = new UsuarioBanco();
    }

    public function CriarUsuario()
    {
        $this->PostUsuario();
        $salvo = $this->usuarioBanco->Salvar($this->usuario);

        if ($salvo) {
            echo "
            <h4>Usuario '{$this->usuario->GetNome()}' Adicionado com sucesso!</h4>
            <br/>
            <a href='../?r=login'>Ir Para Login</a>
            ";
        } else {
            echo "Erro ao salvar usuario <br/> <a href='../?r=cadastro_usuario'>Voltar</a>";
        }
    }

    public function FazerLogin()
    {
        $this->PostUsuario();
        $resultado = $this->usuarioBanco->Buscar($this->usuario);
        if (isset($resultado)) {
            $this->VereficaCredencial($resultado);
        }
    }

    private function PostUsuario()
    {
        $this->usuario->SetNome($this->post('nome'));
        $this->usuario->SetUsuario($this->post('usuario'));
        $this->usuario->SetSenha($this->post('senha'));
    }

    private function post($parametro)
    {
        //tenta obter um parametro por post se nao existir retorna string vazia
        return isset($_POST[$parametro]) ? $_POST[$parametro] : '';
    }

    private function VereficaCredencial($resultado)
    {
        //o resultado aqui é um vetor com todos os atributos da tabela usuario
        $usuarioIgual = $resultado['usuario'] == $this->usuario->GetUsuario();
        $senhaIgual = $resultado['senha'] == $this->usuario->GetSenha();

        if ($usuarioIgual && $senhaIgual) {
            $this->RegistraLogin();
            //sucesso redireciona para pagina inicial
            header("Location: ../?r=inicio");
            die();
        } else {
            //falha redireciona para login
            echo "<pre>";
            print_r($resultado);
            echo "</pre><br/><br/><br/>";
            echo "<pre>";
            print_r($this->usuario);
            echo "</pre>";
        }
    }

    private function RegistraLogin()
    {
        session_start();
        $_SESSION["usuario"] = $this->usuario->GetNome();
        $_SESSION["usuario_id"] = $this->usuario->GetId();
    }
}
