
<?php
require_once 'init.php';
// abre a conexão
$PDO = db_connect(); 

// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), 
// mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
$sql_count = "SELECT COUNT(*) AS total FROM dados ORDER BY nome ASC";

// SQL para selecionar os registros
$sql = "SELECT id, nome, eps, nota, banner "
        . "FROM dados ORDER BY nome ASC";

// conta o total de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>

<html>

<head>
  <meta name="0.1" content="with=device-width, initial-scale=1.0">
  <title>Web Site de Teste II</title>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>



  <header>
    <div class="nav-bar">


      <nav>
        <img class="logo" src="images/logo.png">

      </nav>


      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>

      <body>
        <div id="carouselExampleControls" class="carousel_slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/fix/img001_onepiece.jpg?auto=yes&bg=777&fg=555&text=Primeiro Slide"
                alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"
                src="images/fix/img002_kimetsunoyaiba.jpg?auto=yes&bg=777&fg=555&text=Segundo Slide"
                alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"
                src="images/fix/img003_shingekinokyojin.jpg?auto=yes&bg=777&fg=555&text=Terceiro Slide"
                alt="Terceiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100"
                src="images/fix/img004_kobayashisanchinomaiddragon.jpg?auto=yes&bg=777&fg=555&text=Quarto Slide"
                alt="Quarto Slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>



    </div>
  </header>

  
  <ul id="autoWidth" class="cs-hidden">
    <div class="container" style="margin-left: 0px;">
      <p class="legenda-lista">
        <span style="color: #E7322F; font-size: 80px;">|</span><span class="Lista">Lista de Desejos</span>
      <span class="form-btn" ><a href="form-add.php" class="link-form"><img src="images/btnAdd.png" class="btn-form" alt="Add" ></a></span>
</p>
    </div>

    <div class="container-fluid">
      <li class="item-a">
        <div class="box">
          <div class="slide-img">
            <img src="images/slide/slide001_shingekinokyojin.jpg" alt="1">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover</a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#">Attack on Titan</a>
              <span>Kimetsu no Yaba</span>
            </div>
            <a href="#" class="favorite">TREND</a>
          </div>
        </div>
      </li>

      <li class="item-b">
        <div class="box">
          <div class="slide-img">
            <img src="images/slide/slide002_kimetsunoyaiba.jpg" alt="2">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover
            </a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#">Demon Slayer</a>
              <span>Attack on Titan</span>
            </div>
            <a href="#" class="favorite">TREND</a>
          </div>
        </div>
      </li>

      <li class="item-c">
        <div class="box">
          <div class="slide-img">
            <img src="images/slide/slide003_naruto.jpg" alt="3">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover</a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#">Naruto</a>
              <span>One Piece</span>
            </div>
            <a href="#" class="favorite">TREND</a>
          </div>
        </div>
      </li>

      <li class="item-d">
        <div class="box">
          <div class="slide-img">
            <img src="images/slide/slide004_onepiece.jpg" alt="4">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover</a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#">One Piece</a>
              <span>Naruto</span>
            </div>
            <a href="#" class="favorite">TREND</a>
          </div>
        </div>
      </li>

      <li class="item-e">
        <div class="box">
          <div class="slide-img">
            <img src="images/slide/slide005_kobayashisanchinomaiddragon.jpg" alt="4">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover</a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#">Maid Dragon</a>
              <span>Maid Dragon</span>
            </div>
            <a href="#" class="favorite">TREND</a>
          </div>
        </div>
      </li>

      <li class="item-f">
        <div class="box">
          <div class="slide-img">
            <img src="images/slide/slide006_dragonballz.jpg" alt="4">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover</a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#">Dragon Ball</a>
              <span>Dragon Ball</span>
            </div>
            <a href="#" class="favorite">TREND</a>
          </div>
        </div>
      </li>

      <li class="item-g">
        <div class="box">
          <div class="slide-img">
            <img src="images/slide/slide007_SK8_the_Infinity.jpg" alt="4">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover</a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#">SK8: The Infinity</a>
              <span>SK8: The Infinity</span>
            </div>
            <a href="#" class="favorite">TREND</a>
          </div>
        </div>
      </li>

      <li class="item-h">
        <div class="box">
          <div class="slide-img">
            <img src="images/slide/slide008_pokemon.jpg" alt="4">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover</a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#">Pokémon</a>
              <span>Pokémon</span>
            </div>
            <a href="#" class="favorite">TREND</a>
          </div>
        </div>
      </li>

        <?php while ($dados = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
        
        <li class="item-j">
        <div class="box">
          <div class="slide-img">
            <img src="<?=$dados['banner']?>" alt="img">
            <div class="overlay">
              <a href="delete.php?id=<?=$dados['id'] ?>" class="edit">Remover</a>

            </div>
          </div>
          <div class="detail-box">
            <div class="type">
              <a href="#"><?php echo $dados['nome']?></a>

            </div>
            <a href="#" class="favorite"><?php $dados['eps']?>TREND</a>
          </div>
        </div>
      </li>
      <?php endwhile; ?>

    </div>
    
  </ul>






  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</body>

</html>