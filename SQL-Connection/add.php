<?php
require_once 'init.php';

//Pegando os dados do formulário
$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

//validação (Evitando os dados vazios )
if (empty($email) || empty($senha)){

    echo "Volte e preencha todos os campos";
    exit; 
}

$PDO = db2_connect();
$sql = "INSERT INTO dadosusuario(email, senha) VALUES(:email, :senha)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senh);

if($stmt->execute()){

    header('Location: index2.html');
}
else{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}
?>