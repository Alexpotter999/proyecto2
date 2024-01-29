<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Sistema de información escolar</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<style type="text/css">
	.primera-seccion {
		background: linear-gradient(rgba(2, 9, 34, 0.65),rgba(2, 78, 14, 0.46)),url(img/banner0.jpg) no-repeat center/cover;
		background-attachment: fixed;
		height: 60vh;
		color: whitesmoke;
	}
	.barra-navegacion{
		justify-content: space-between;
		margin: auto 5rem;
		padding-top: 2rem;
		padding-bottom: 2rem;
	}
	.navbar-toggler-icon{
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='3' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
	}
	.frase{
		text-align: center;
		margin-top: 5rem;
	}
</style>
</head>
<body style="background-color: lightgray;">
	<div class="primera-seccion">
		<nav class="navbar navbar-expand-lg bg-transparent barra-navegacion">
			<div class="container-fluid">
				<a href="index.php" class="navbar-brand link-light" style="font-weight: 900;">IGNACIO ZARAGOZA</a>
				<button class="navbar-toggler btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="box-shadow: none; border: none;">
				<span class="navbar-toggler-icon"></span><!--url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='3' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")-->
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle link-light" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 1.2rem; font-weight: bold;">
							Estudiantes
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="#">Calendario escolar</a></li>
							<li><a class="dropdown-item" href="#">Avisos importantes</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="{{ url('/login') }}">Sistema</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="#eventosdest" class="nav-link link-light" aria-current="page" style="font-size: 1.2rem; font-weight: bold;">Eventos destacados</a>
					</li>
				</ul>
			</div>
		</nav>
		<h1 class="frase">Descubriendo el mundo a través del
			conocimiento y los valores.</h1>
	</div>
	<br><br>
	<div class="container-xl" style="border-radius: 20px; background-color: white;">
		<p class="h2" align="center">EVENTOS DESTACADOS</p>
	</div>
	<br>
	<div class="container-fluid" id="eventosdest">
		<div class="row row-cols-1 row-cols-md-4 g-4">
			<div class="col">
				<div class="card" style="width: 18rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Titulo</h5>
						<p class="card-text">Descripcion</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<footer style="background-color: gray; text-align: center; color: white; padding-top: 1.2rem; padding-bottom: 1.2rem;">
		<p></p>
	</footer>
</body>
</html>
