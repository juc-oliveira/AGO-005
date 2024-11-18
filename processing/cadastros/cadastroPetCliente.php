<?php
session_start();
require "../user.php";
require_once '../animal.php';
$cliente = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se a variável de sessão está definida
    if (isset($_SESSION['PK_cliente_codigo'])) {
        $FK_cliente_codigo = $_SESSION['PK_cliente_codigo'];

        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $pelo = $_POST['pelo'];
        $cor_pelo = $_POST['cor_pelo'];
        $temperamento = $_POST['temperamento'];
        $porte = $_POST['porte'];
        $raca = $_POST['raca'];
        $tipo = $_POST['tipo'];
        $observacao = $_POST['observacao'];

        // Verifica se os campos obrigatórios estão preenchidos
        if (!empty($nome) && !empty($sexo) && !empty($pelo) && !empty($cor_pelo) && !empty($temperamento) && !empty($porte) && !empty($raca) && !empty($observacao) && !empty($tipo) && !empty($FK_cliente_codigo)) {

            $animal = new Animal();

            // Chama o método cadastrar da classe Animal
            if ($animal->cadastrarPetCliente($nome, $sexo, $pelo, $cor_pelo, $temperamento, $porte, $raca, $tipo, $observacao, $FK_cliente_codigo)) {
                echo "Animal registrado com sucesso!";
                header("location:../../pages/perfil.php");
                die();
            } else {
                echo "Falha ao registrar o animal.";
            }
        } else {
            echo "Por favor, preencha todos os campos obrigatórios.";
        }
    } else {
        echo "Usuário precisa fazer login para cadastrar um pet.";
    }
}
?>