<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css"/>
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

<title>SOS Ajuda- Home</title>
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
				<li class="nav-item active"><a class="nav-link"
					href="index.php">Inicio<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item"><a class="nav-link"
					href="agendamentos.php">Agendamentos</a>
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
	<div class="container">
		<div class="col-12">
			<div id="carouselExampleCaptions" class="carousel slide mt-5 mb-5"
				data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0"
						class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="Img/medico.jpg" class="d-block w-100" alt="medico">
						<div class="carousel-caption d-none d-md-block">
							<h5 class="text-primary">O Melhor atendimento</h5>
							<p class="text-primary">Mantenha sua saúde em dia!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="Img/consulta2.jpg" class="d-block w-100"
							alt="prancheta consulta">
						<div class="carousel-caption d-none d-md-block ">
							<h5 class="text-primary">Praticidade</h5>
							<p class="text-primary">Agende suas consultas de maneira
								rapida e fácil.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions"
					role="button" data-slide="prev"> <span
					class="carousel-control-prev-icon" aria-hidden="true"></span> <span
					class="sr-only">Anterior</span>
				</a> <a class="carousel-control-next" href="#carouselExampleCaptions"
					role="button" data-slide="next"> <span
					class="carousel-control-next-icon" aria-hidden="true"></span> <span
					class="sr-only">Próximo</span>
				</a>
			</div>
		</div>

		<div class="shadow p-3 mb-5 bg-white rounded">
			<div class="container-fluid mb-10"
				style="background-color: whitesmoke;">
				<div class="row align-items-start">
					<div class="col">
						<div class="card shadow-none p-3 mt-5 mb-5" style="width: 16rem;">
							<img src="Img/time.PNG" class="card-img-top" alt="tempo">
							<div class="card-body">
								<p class="card-text">Aproveite mais o seu dia! Agendamentos
									rapidos e práticos!</p>
							</div>
						</div>

					</div>
					<div class="col">
						<div class="card shadow-none p-3 mt-5 mb-5" style="width: 16rem;">
							<img src="Img/business.png" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">A melhor solução para suas consultas.</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-none p-3 mt-5 mb-5" style="width: 16rem;">
							<img src="Img/compass.png" class="card-img-top" alt="mapa">
							<div class="card-body">
								<p class="card-text">
									<a href="https://www.google.com.br/maps/"
										class="btn btn-secondary">Localize-se</a> com o o hospital
									mais próximo.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col">
						<div class="card shadow-none p-3 mb-5" style="width: 16rem;">
							<img src="Img/drop.png" class="card-img-top" alt="bequer">
							<div class="card-body">
								<p class="card-text">Exames, checkups e consultas.</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-none p-3 mb-5" style="width: 16rem;">
							<img src="Img/bacteria.png" class="card-img-top" alt="prancheta">
							<div class="card-body">
								<p class="card-text">Receba seus resultados por email.</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card shadow-none p-3 mb-5" style="width: 16rem;">
							<img src="Img/icon-removebg-preview.png" class="card-img-top"
								alt="Logo SOS ajuda">
							<div class="card-body">
								<p class="card-text">Agende conosco.</p>
							</div>
						</div>
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