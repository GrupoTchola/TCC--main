<?php
require_once 'init.php';

// pega os dados do formuário
$id = isset($_POST['id']) ? $_POST['id'] : null;
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$eps = isset($_POST['eps']) ? $_POST['eps'] : null;
$nota = isset($_POST['nota']) ? $_POST['nota'] : null;
$banner = isset($_POST['banner']) ? $_POST['banner'] : null;

 
// validação (bem simples, só pra evitar dados vazios)
if (empty($id) || empty($nome) || empty($eps) || empty($nota) || empty($banner))
{
    echo "Volte e preencha todos os campos";
    exit;
}


$PDO = db_connect();
$sql = "INSERT INTO dados(id, nome, eps, nota, banner) VALUES(:id, :nome, :eps, :nota, :banner)"; 
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':eps', $eps);
$stmt->bindParam(':nota', $nota);
$stmt->bindParam(':banner', $banner);



if ($stmt->execute())
{
    header('Location: main.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}