<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
     <link rel="stylesheet" href="assets/css/main.css">
    <title>Me Audota! :P</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark text-white bg-danger fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">MeAudota!</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Sobre</a>
              </li>
            </ul>
              <ul class="navbar-nav justify-content-end">

                  <?php
if (isset($_SESSION['id'])) {
    ?>
  <li class="nav-item ">
                       <a class="nav-link disabled" href="#"><?php echo 'Olá, ' . $_SESSION['nome']; ?></a>
                    </li>
                    <li class="nav-item ">
                       <a class="nav-link" href="users/logout.php">Sair</a>
                    </li>
  <?php
} else {
    ?>
    <li class="nav-item ">
                    <a class="nav-link" href="users/cadastro.php">Criar Conta</a>
                  </li>
    <li class="nav-item ">
                       <a class="nav-link" href="users/login.php">Entrar</a>
                    </li>
                  <?php
}
?>

              </ul>
          </div>
        </div>
      </nav>
    </header>
