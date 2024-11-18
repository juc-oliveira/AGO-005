<?php

require_once 'connect.php';
class Animal
{
    private $connection;
    public function __construct()
    {
        $dbConnection = new Connect('localhost', 'SimbasPetShop', 'root', '');
        $this->connection = $dbConnection;
    }

    public function cadastrarPetAdocao($nome, $idade, $sexo, $pelo, $cor_pelo, $temperamento, $situacao, $porte, $raca, $tipo, $observacao)
    {
        try {
            $stmt = $this->connection->Execute(array($nome, $sexo, $pelo, $cor_pelo, $temperamento, $situacao, $porte, $raca, $tipo, $observacao));

            return true;
        } catch (PDOException $e) {
            die('Falha ao registrar o pet para a adoção: ' . $e->getMessage());
        }
    }

    public function cadastrarPetCliente($nome, $sexo, $pelo, $cor_pelo, $temperamento, $porte, $raca, $tipo, $observacao, $FK_cliente_codigo)
    {
        try {
            $sql = "INSERT INTO petcliente (nome, sexo, pelo, cor_pelo, temperamento, porte, raca, tipo, observacao, FK_cliente_codigo) 
                    VALUES (:nome, :sexo, :pelo, :cor_pelo, :temperamento, :porte, :raca, :tipo, :observacao, :FK_cliente_codigo)";

            $params = array(
                ':nome' => $nome,
                ':sexo' => $sexo,
                ':pelo' => $pelo,
                ':cor_pelo' => $cor_pelo,
                ':temperamento' => $temperamento,
                ':porte' => $porte,
                ':raca' => $raca,
                ':tipo' => $tipo,
                ':observacao' => $observacao,
                ':FK_cliente_codigo' => $FK_cliente_codigo
            );

            $resultado = $this->connection->Execute2($sql, $params);
            return true;
        } catch (PDOException $e) {
            die('Falha ao registrar o pet do cliente: ' . $e->getMessage());
        }
    }


    public function receberDadosPetsAdocao()
    {
        $tabela = 'petadocao';
        try {
            $stmt = $this->connection->ReturnAll($tabela);
            if ($stmt !== false) {
                return $stmt;
            } else {
                return array(); // Retorna um array vazio se não houver resultados
            }
        } catch (PDOException $e) {
            die('Falha ao receber os dados dos pets para a adoção: ' . $e->getMessage());
        }
    }

    public function receberDadosPetEspecificoAdocao($PK_petadocao_codigo)
    {
        try {
            $sql = "SELECT * FROM petadocao WHERE PK_petadocao_codigo = ?";
            $params = array($PK_petadocao_codigo);
            $pet = $this->connection->Consult($sql, $params);

            if (!empty($pet)) {
                return $pet[0];
            } else {
                return null;
            }
        } catch (PDOException $e) {
            die('Falha ao receber os dados do pet específico para adoção: ' . $e->getMessage());
        }
    }

    public function receberPetsCliente($FK_cliente_codigo)
    {
        try {
            $sql = "SELECT * FROM petcliente WHERE FK_cliente_codigo = ?";
            $params = array($FK_cliente_codigo);
            $pets = $this->connection->Consult($sql, $params);

            if (!empty($pets)) {
                return $pets;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            die('Falha ao receber os dados dos pets de determinado usuário: ' . $e->getMessage());
        }
    }

}

?>