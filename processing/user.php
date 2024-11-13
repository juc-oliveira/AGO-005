<?php

require_once 'connect.php';
class User
{
    private $connection;
    public function __construct()
    {
        $dbConnection = new Connect('localhost', 'SimbasPetShop', 'root', '');
        $this->connection = $dbConnection;
    }

    public function cadastrar($nome, $email, $telefone, $senha)
    {
        try {
            // Verificar se o email já existe
            $sql = "SELECT * FROM Cliente WHERE email = ?";
            $user = $this->connection->Consult($sql, array($email));

            if (count($user) > 0) {
                echo "Email já cadastrado.";
                return false;
            }

            // Se o email não existir, insira o novo usuário
            $sql = "INSERT INTO Cliente (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";
            $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = $this->connection->Execute($sql, array($nome, $email, $telefone, $hashedSenha));

            return true;

        } catch (PDOException $e) {
            die('Falha ao registrar o usuário: ' . $e->getMessage());
        }
    }

    public function logar($email, $senha)
    {
        try {
            // Verificar se o email existe na tabela
            $sql = "SELECT * FROM Cliente WHERE email = ?";
            $user = $this->connection->Consult($sql, array($email));

            if (count($user) > 0) {
                // Verificar se a senha corresponde à senha armazenada no banco de dados
                $senha_hash = $user[0]['senha'];
                if (password_verify($senha, $senha_hash)) {
                    // A senha está correta, o login é bem-sucedido
                    // Inicia a sessão
                    session_start();

                    // Armazena o PK_cliente_codigo na variável de sessão
                    $_SESSION['PK_cliente_codigo'] = $user[0]['PK_cliente_codigo'];

                    return true;
                } else {
                    // Senha incorreta
                    echo "Senha incorreta.";
                    return false;
                }
            } else {
                // Email não encontrado na tabela
                echo "Email não cadastrado.";
                return false;
            }
        } catch (PDOException $e) {
            die('Falha ao fazer login: ' . $e->getMessage());
        }
    }

    public function receberDadosClienteEspecifico($PK_cliente_codigo)
    {
        try {
            $sql = "SELECT * FROM cliente WHERE PK_cliente_codigo = ?";
            $params = array($PK_cliente_codigo);
            $cliente = $this->connection->Consult($sql, $params);

            if (!empty($cliente)) {
                return $cliente[0];
            } else {
                return null;
            }
        } catch (PDOException $e) {
            die('Falha ao receber os dados do cliente: ' . $e->getMessage());
        }
    }

    public function enviarFormularioAdocao($nome, $email, $telefone, $descricao)
    {
        try {
            $sql = "INSERT INTO Adocoes (nome, email, telefone, descricao) VALUES (?, ?, ?, ?)";
            $stmt = $this->connection->Execute($sql, array($nome, $email, $telefone, $descricao));
            return true;
            
        } catch (PDOException $e) {
            die('Não foi possível enviar o formulário de adoção: '. $e->getMessage());
        }
    }
}
?>