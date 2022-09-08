 <?php
require_once 'SQL-Connection/init.php';
// abre a conexão
$PDO = db_connect();

// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), 
// mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
$sql_count = "SELECT COUNT(*) AS total FROM users ORDER BY name ASC";

// SQL para selecionar os registros
$sql = "SELECT email, senha "
        . "FROM users ORDER BY email ASC";

// conta o total de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive fitness and gym website design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Style/style-Home.css">

</head>
<body>
    <header class="header">

        <a href="Home.php" class="logo"> <span>Boa</span>Forma </a>
    
        <div id="menu-btn" class="fas fa-bars"></div>
    
        <nav class="navbar">
            <a href="Planos.php">Planos</a>
            <a href="Sobre.php">Sobre</a>
            <a href="Contato.php">Contato</a>
            <a href="Login-Screen.php">Perfil</a>
        </nav>

    </header>

    
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
    
                <div class="swiper-slide slide" style="background: url(images/home-bg-1.jpg) no-repeat;">
                    <div class="content">
                        <span>Olá Aluno</span>
                        <h3>Vamos começar o treino de hoje!</h3>
                        <a href="#" class="btn">Começar Treino</a>
                    </div>
                </div>
    
                <div class="swiper-slide slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
                    <div class="content">
                        <span>Olá Aluno</span>
                        <h3>Vamos começar o treino de hoje!</h3>
                        <a href="#" class="btn">Começar Treino</a>
                    </div>
                </div>
    
                <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                    <div class="content">
                        <span>Olá Aluno</span>
                        <h3>Vamos começar o treino de hoje!</h3>
                        <a href="#" class="btn">Começar Treino</a>
                    </div>
                </div>
    
            </div>
    
            <div class="swiper-pagination"></div>
        </div>
    </section>
    

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="Script/script.js"></script>


</body>
</html>
            