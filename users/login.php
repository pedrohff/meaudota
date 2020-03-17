<?php
if (!isset($_SESSION)) {
    session_start();
}
$_SESSION['id'] = session_id();

$pdo = new PDO('mysql:dbname=login_teste;host=localhost', 'root', 'root');

if (isset($_POST['acao']) && !empty($_POST['senha'])) {
    $senha = hash('sha256', addslashes($_POST['senha']));
    $email = addslashes($_POST['email']);
    $sql = $pdo->prepare('SELECT * FROM tb_cliente WHERE email = ? AND senha = ?');
    $sql->execute(array($email, $senha));
    $resultado = $sql->fetch(PDO::FETCH_ASSOC);
    if ($resultado) {
        $_SESSION['nome'] = $resultado['nome'];
        header('Location: ../index.php');
    } else {
        header('Location: cadastro.php');
    }

}

?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
     <link rel="stylesheet" href="../assets/css/main.css">
    <title>Me Audota! :P</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark text-white bg-danger fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">MeAudota!</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Sobre</a>
              </li>
            </ul>
              <ul class="navbar-nav justify-content-end">
                  <li class="nav-item ">
                    <a class="nav-link" href="cadastro.php">Criar Conta</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link disabled" href="#">Entrar</a>
                  </li>
              </ul>
          </div>
        </div>
      </nav>
    </header>

	<section id="login">
		<div class="container">
			<div class="row center-block mt-5">
				<div class="col">

					<form class="form-group" method='POST' action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'>
						<h1>Entrar</h1>
						<div>
							<label for="email">E-mail</label>
							<input type="email" name="email" id="email" placeholder="Seu E-Mail" class="form-control">
						</div>
						<div>
							<label for="senha">Senha</label>
							<input type="password" name="senha" id="senha" placeholder="Sua Senha" class="form-control">

						</div>
						<button type="submit" name="acao" value="Entrar" class="btn btn-danger btn-block mt-3">Entrar</button>
					</form>
				</div>
			</div>

		</div>
	</section>
<?php
require_once "../includes/footer.php";
?>