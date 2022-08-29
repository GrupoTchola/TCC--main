<html>

    <head>
        <meta name="Formulario" content="with=device-width, initial-scale=1.0">
        <title>Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style-form.css">
    </head>

<body>
<section class="novo-anime">
<h1 class="titulo">Novo Anime</h1>

<div class="container">
    <form class="formulario-anime row" method="POST" action="add.php">
        <div class="formulario col-lg-6">
            <input id="id" class="text" type="int" name="id">
                <label for="id" class="label">Id</label>
        </div>
        <div class="formulario col-lg-6">
            <input id="nome" class="text" type="text" name="nome">
                <label for="nome" class="label">Nome</label>
        </div>
        <div class="formulario col-lg-6">
            <input id="eps" class="text" type="text" name="eps">
                <label for="eps" class="label">Quantidade de Episódios</label>
        </div>
        <div class="formulario col-lg-6">
            <input id="nota" class="text" type="text" name="nota">
                <label for="nota" class="label">Nota</label>
        </div>
        <div class="formulario col-lg-12">
        <input id="banner" class="text" type="text" name="banner">
                <label for="banner" class="label">Banner</label>
        </div>
                

        <div class="formulario col-lg-12">
            <input class="submit" type="submit" value="submit" name="">
        </div>
    </form>
</div>
</section>

</body>
</html>