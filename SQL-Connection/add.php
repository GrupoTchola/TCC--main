<?php
require_once 'init.php';

//Pegando os dados do formulário
$id = isset($_POST['Nome']) ? $_POST['Nome'] : null;
$nome = isset($_POST['Sobrenome']) ? $_POST['Sobrenome'] : null;
$eps = isset($_POST['email']) ? $_POST['email'] : null;
$nota = isset($_POST['Senha']) ? $_POST['Senha'] : null;
$banner = isset($_POST['Celular']) ? $_POST['Celular'] : null;
$banner = isset($_POST['Data_nascimento']) ? $_POST['Data_nascimento'] : null;
$banner = isset($_POST['CPF']) ? $_POST['CPF'] : null;

//validação (Evitando os dados vazios )
if (empty($Nome) || empty($Sobrenome) || empty($email) || empty($Senha) || empty($Celular) || empty($Data_nascimento) || empty($CPF)){

    echo "Volte e preencha todos os campos";
    exit; 
}

$PDO = db_connect();
$sql = "INSERT INTO dados(Nome, Sebrenome, email, Senha, Celular, Data_nascimento, CPF) VALUES(:Nome, :Sebrenome, :email, :Senha, :Celular, :Data_nascimento, :CPF)"; 
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':Nome', $Nome);
$stmt->bindParam(':Sobrenome', $Sobrenome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':Senha', $Senha);
$stmt->bindParam(':Celular', $Celular);
$stmt->bindParam(':Data_nascimento', $Data_nascimento);
$stmt->bindParam(':CPF', $CPF);

if($stmt->execute()){

    header('Location: Exercise.php');
}
else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>