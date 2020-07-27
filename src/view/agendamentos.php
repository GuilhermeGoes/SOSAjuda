<?php
session_start();
if (! isset($_SESSION["email"]) || ! isset($_SESSION["senha"])) {
    echo "
            <script>
                alert('Para realizar agendamentos, você precisa estar logado!');
                window.location = '../view/login.html';
            </script>";
}
?>

<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="Img/favicon.ico" />
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
	crossorigin="anonymous">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
	crossorigin="anonymous"></script>
<script
	src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>

<title>SOS Ajuda- Agendamentos</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php"> <img
			src="Img/icon-removebg-preview.png" width="30" height="30"
			class="d-inline-block align-top" alt="Logo">SOS Ajuda
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarNav" aria-controls="navbarNav"
			aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active"><a class="nav-link" href="index.php">Inicio<span
						class="sr-only">(current)</span></a></li>
				<li class="nav-item"><a class="nav-link" href="agendamentos.php">Agendamentos</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="listaAgenda.php">Agendados</a>
				</li>
				<li class="nav-item"><a class="nav-link" href="contato.php">Contato</a>
				</li>
			</ul>
		</div>

		<form class="form-inline my-2 my-lg-0" method='post'
			action='../controller/ControllerAgenda.php'>
			<button type="submit" name="sair" class="btn btn-danger">Sair</button>
		</form>
	</nav>

	<div class="container mt-5">
		<div class="shadow-lg p-3 mb-5 bg-dark rounded">
			<h1 class="text-white" id="titulo">Faça seu Agendamento</h1>
			<div class="row">
				<div class="col-sm">
					<form action="../controller/ControllerAgenda.php" method="POST"
						id="conteudo">
						<div class="form-row ml-2">
							<div class="form-group col-md-6 ">
								<label class="text-white" for="inputtext">Nome do Paciente</label>
								<input type="text" class="form-control" name="paciente"
									placeholder="Nome">
							</div>
							<div class="form-group col-md-4">
								<label class="text-white" for="inputState">Turnos</label> <select
									id="inputState" class="form-control" name="turno">
									<option selected>Escolha o turno</option>
									<option>Matutino</option>
									<option>Vespertino</option>
									<option>Noturno</option>
								</select>
							</div>
						</div>
						<div class="form-group col-md-4">
							<label class="text-white" for="inputState">Medico: </label> <select
								id="inputState" class="form-control" name="especialista">
								<option selected>O que deseja agendar:</option>
								<option>Oftalmologista</option>
								<option>Dermatologista</option>
								<option>Ginecologista</option>
							</select>
						</div>
						<div class="form-group col-md-4">
							<label class="text-white" for="inputState">Data:</label><br> <input
								class="rounded" type="date" name="data">
						</div>
						<div class="form-group ml-3">
							<label class="text-white" for="exampleFormControlTextarea1">Motivo:
							</label>
							<textarea class="form-control" id="exampleFormControlTextarea1"
								rows="2" name="motivo" maxlength="100"></textarea>
						</div>
						<div class="form-inline my-2 my-lg-0 ml-3">
							<button type="submit" class="btn btn-primary" name="agendar">
								Agendar</button>
						</div>
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