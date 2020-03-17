<?php
if (!isset($_SESSION)) {
    session_start();
}
$showAlert = false;
$pdo = new PDO('mysql:dbname=login_teste;host=localhost', 'root', '');

if (isset($_POST['acao']) && !empty($_POST['senha'])) {
    if (strlen($_POST['senha']) < 6) {
        $showAlert = true;
        $message = "A senha deve ter mais de 6 caracteres!";
    }

    $nome = addslashes($_POST['nome']);
    $sobrenome = addslashes($_POST['sobrenome']);
    $email = addslashes($_POST['email']);
    $senha = hash('sha256', addslashes($_POST['senha']));
    $senha2 = hash('sha256', addslashes($_POST['senha2']));
    $rua = addslashes($_POST['rua']);
    $bairro = addslashes($_POST['bairro']);
    $uf = addslashes($_POST['uf']);
    $cep = addslashes($_POST['cep']);

    if ($senha != $senha2) {
        $showAlert = true;
        $message = "As senhas devem ser iguais!";
    }
    if (empty($_POST['nome'])) {
        $showAlert = true;
        $message = "O nome não pode estar vazio!";
    }

    $sql = $pdo->prepare("INSERT INTO tb_cliente VALUES (null, ?,?,?,?,?,?,?,?)");
    $sql = $sql->execute(array(
        $email, $senha, $rua, $bairro, $uf, $cep, $nome, $sobrenome,
    ));

    header("Location: login.php");

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
          <a class="navbar-brand" href="../index.php">MeAudota!</a>
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
                    <a class="nav-link" href="login.php">Entrar</a>
                  </li>
              </ul>
          </div>
        </div>
      </nav>
    </header>

	<section id="login">
		<div class="container">
			<div class="row center-block" >
				<div class="col mb-5">
                <?php
if ($showAlert) {
    ?>
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $message; ?>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                 <?php
}
?>

					<form class="form-group" method='POST' action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'>
						<h1>Crie sua conta gratuita!</h1>
                        <div>
							<label for="nome">Nome</label>
							<input type="text" name="nome" id="nome" placeholder="Seu Nome" required class="form-control">
						</div>
                        <div>
							<label for="sobrenome">Sobrenome</label>
							<input type="text" name="sobrenome" id="sobrenome" placeholder="Seu Sobrenome" required class="form-control">
						</div>
						<div>
							<label for="email">E-mail</label>
							<input type="email" name="email" id="email" placeholder="Seu E-Mail" required class="form-control">
						</div>
						<div>
							<label for="senha">Senha</label>
							<input type="password" name="senha" id="senha" placeholder="Sua Senha"  required class="form-control">

						</div>
                        <div>
							<label for="senha2">Confirme sua senha:</label>
							<input type="password" name="senha2" id="senha2"  placeholder="Confirme sua senha" required class="form-control">
						</div>
                        <div>
							<label for="cep">CEP:</label>
							<input type="number" name="cep" id="cep" placeholder="Formato 96212660 sem traços."  required class="form-control">
						</div>
                        <div>
							<label for="rua">Rua</label>
							<input type="rua" name="rua" id="rua" placeholder="Rua" class="form-control">
						</div>
                        <div>
							<label for="bairro">Bairro</label>
							<input type="bairro" name="bairro" id="bairro" placeholder="Bairro" class="form-control">
						</div>
                        <div>
							<label for="localidade">Localidade</label>
							<input type="localidade" name="localidade" id="localidade" placeholder="Estado" class="form-control">
						</div>
                        <div>
							<label for="uf">UF</label>
							<input type="uf" name="uf" id="uf" placeholder="UF" class="form-control">
						</div>
						<button type="submit" name="acao" value="Criar conta" class="btn btn-danger btn-block mt-3">Criar conta</button>
					</form>
				</div>
			</div>

		</div>
	</section>


  <!-- Adicionando JQuery -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#localidade").val("");
                $("#uf").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#localidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#localidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
  <script>
   const alertDiv = document.querySelector(".alert");
   console.log(alertDiv);
   setTimeout(() => {
        alertDiv.style.display = 'none';
   }, 5000);
  </script>