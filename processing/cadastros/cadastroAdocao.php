
<?php
require_once '../animal.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $pelo = $_POST['pelo'];
    $cor_pelo = $_POST['cor_pelo'];
    $temperamento = $_POST['temperamento'];
    $situacao = $_POST['situacao'];
    $porte = $_POST['porte'];
    $raca = $_POST['raca'];
    $tipo = $_POST['tipo'];
    $observacao = $_POST['observacao'];

    // Verifica se os campos obrigatórios estão preenchidos
    if (!empty($nome) && !empty($sexo) && !empty($pelo) && !empty($cor_pelo) && !empty($temperamento) && !empty($situacao) &&!empty($porte) && !empty($raca) && !empty($observacao)) {

        $animal = new Animal();

        // Chama o método cadastrar da classe Animal
        if ($animal->cadastrarPetAdocao($nome, $sexo, $pelo, $cor_pelo, $temperamento, $situacao, $porte, $raca, $tipo, $observacao)) {
            echo "Animal registrado com sucesso!";
            header("location:../../pages/verAnimais.php");
            die();
        } else {
            echo "Falha ao registrar o animal.";
        }
    } else {
        echo "Por favor, preencha todos os campos obrigatórios.";
    }

}
?>
