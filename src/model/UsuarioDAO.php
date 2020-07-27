<?php

class UsuarioDAO
{
    function inserir($nome, $sobrenome, $dataNascimento, $email, $senha, 
                    $endereco, $cidade, $estado, $cep, $numContato)
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=sos_ajuda", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare('INSERT INTO usuarios (nome, sobrenome,dataNascimento, email, senha, endereco, cidade, estado, cep, numContato) VALUES(:nome, :sobrenome, :dataNascimento, :email, :senha, :endereco, :cidade, :estado, :cep, :numContato)');
            $stmt->execute(array(
                ':nome' => $nome,
                ':sobrenome' => $sobrenome,
                ':dataNascimento' => $dataNascimento,
                ':email' => $email,
                ':senha' => $senha,
                ':endereco' => $endereco,
                ':cidade' => $cidade,
                ':estado' => $estado,
                ':cep' => $cep,
                ':numContato' => $numContato
            ));
            echo "
                <script>
                    alert('" . $stmt->rowCount() . " Usuário cadastrado com sucesso!');
                    window.location = '../view/login.html';
                </script>";
            
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function iniciar_sessao($email, $senha)
    {
        $conn = new PDO('mysql: host=localhost;dbname=sos_ajuda', "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $log = $stmt->fetch();

        if (empty($_SESSION['email']) && empty($_SESSION['senha'])) {
            echo "
                <script>
                    alert('Digite um usuário e senha!');
                    window.location = '../view/login.html';
                </script>";
        }
        
        if(is_array($log))
        {
            $usuario_bd = $log['email'];
            $senha_bd = $log['senha'];
        }
        
        
        if (($_SESSION['email'] != $usuario_bd) || ($_SESSION['senha'] != $senha_bd)) {
            echo "
                <script>
                    alert('Usuário ou Senha inválidos!');
                    window.location = '../view/login.html';
                </script>";
        } else {
            echo "
                <script>
                    alert('Bem vindo(a) " . $log['nome'] . " !');
                    window.location = '../view/index.php';
                </script>";
        }
    }
}
