<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon" href="Img/favicon.ico" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
		crossorigin="anonymous">

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>

	<title>SOS Ajuda- Contato</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php"> <img src="Img/icon-removebg-preview.png" width="30" height="30"
				class="d-inline-block align-top" alt="Logo">SOS Ajuda
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active"><a class="nav-link" href="index.php">Inicio<span
							class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item"><a class="nav-link" href="agendamentos.php">Agendamentos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="listaAgenda.php">Agendados</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="contato.php">Contato</a>
				</li>
			</ul>
		</div>
		
		<?php 
		      session_start();
		      if (! isset($_SESSION["email"]) || ! isset($_SESSION["senha"])): 
		?>
  				<form class="form-inline my-2 my-lg-0">
				<a href="login.html" class="btn btn-success mr-2">Login</a> 
				<a href="cadastro.html" class="btn btn-info">Cadastrar</a>
				</form>
		<?php else: ?>
  			<form class="form-inline my-2 my-lg-0" method='post' action='../controller/ControllerAgenda.php'>
				<button type="submit" name="sair" class="btn btn-danger">Sair</button>
			</form>
		<?php endif; ?>

	</nav>
	<div class="container mt-5">
		<div class="shadow-lg p-3 mb-5 bg-dark rounded">
			<h1 class="text-white" id="titulo">Entre em contato conosco !</h1>
			<div class="row">
				<div class="col-sm">
					<form id="conteudo">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label class="text-white" for="inputtext">Nome</label> <input type="text"
									class="form-control" placeholder="Nome">
							</div>
							<div class="col">
								<label class="text-white" for="inputtext">Sobrenome</label> <input type="text"
									class="form-control" placeholder="Sobrenome">
							</div>
						</div>
						<div class="form-group">
							<label class="text-white" for="exampleInputEmail1">Endereço
								de email</label> <input type="email" class="form-control" id="exampleInputEmail1"
								aria-describedby="emailHelp" placeholder="Seu email"> <small id="emailHelp"
								class="form-text text-muted">Nunca vamos compartilhar
								seu email, com ninguém.</small>
						</div>
						<div class="form-group">
							<label class="text-white" for="exampleFormControlTextarea1">Deixe
								sua mensagem !</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer class="container border-top mt-2  bg-whitesmoke">
		<div class="row">
			<div class="col-100 ">
				<p class="text-muted">&copy 2020, SOS Ajuda. Todos os direitos
					reservados.</p>
			</div>
		</div>
	</footer>

</body>

</html>