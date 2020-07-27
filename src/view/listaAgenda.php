﻿<?php
session_start();

if (! isset($_SESSION["email"]) || ! isset($_SESSION["senha"]))
{
    echo "
            <script>
                alert('Você NÃO está Logado!');
                window.location = '../view/login.html';
            </script>";
} else {
    include ('../model/conexao.php');
    $consulta = $conn->query("SELECT * FROM agendamento");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="UTF-8">
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

<title>SOS Ajuda - Lista de Agendamentos</title>
</head>

<body>
	<!-- NAVBAR -->
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
				<li class="nav-item"><a class="nav-link" href="agendamentos.php">Agendamentos</a></li>
				<li class="nav-item"><a class="nav-link" href="listaAgenda.php">Agendados</a></li>
				<li class="nav-item"><a class="nav-link" href="contato.php">Contato</a>
				</li>
			</ul>
		</div>

		<form class="form-inline my-2 my-lg-0" method='post' action='../controller/ControllerAgenda.php'>
			<button type="submit" name="sair" class="btn btn-danger">Sair</button>
		</form>
	</nav>

	<div class="container mt-5">
		<div class="shadow-lg p-3 mb-5 bg-dark rounded">
			<h1 class="text-white" id="titulo">Consultas Agendadas</h1>
			<!-- TABLE -->
			<table class="table table-bordered table-striped table-dark"
				id="tabela">
				<tr>
					<th scope="col">Identificação</th>
					<th scope="col">Paciente</th>
					<th scope="col">Turno</th>
					<th scope="col">Especialista</th>
					<th scope="col">Data</th>
					<th scope="col">Motivo</th>
					<th scope="col"></th>
				</tr>
				
				<?php
				while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $linha['id'] . "</td>";
                echo "<td>" . $linha['paciente'] . "</td>";
                echo "<td>" . $linha['turno'] . "</td>";
                echo "<td>" . $linha['especialista'] . "</td>";
                echo "<td>" . $linha['data'] . "</td>";
                echo "<td>" . $linha['motivo'] . "</td>";
                echo "<td> " . "<form method='post' action='../controller/ControllerAgenda.php'>" 
                             . "<input class='btn btn-outline-danger' type='submit' name='botao_excluir' value='Cancelar'>" 
                             . "<input type='hidden' name='id_excluir' value = '" . $linha['id'] . "'/>" . "</form>" . "</td>";
                echo "</tr>";
                }
                ?>

			</table>
		</div>
	</div>

	<!-- FOOTER -->
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