<!DOCTYPE html>
<html lang="es">
	<head>
		<title>ChileNoticias!</title>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="container-fluid">
			<div class="row navbar">
				<!-- Navbar -->
				<nav class="navbar navbar-expand-lg navbar-component">
					<div class="container-fluid">
						<a class="navbar-brand link-light" href="index.html"
							>ChileNoticias!</a
						>
						<button
							class="navbar-toggler"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarNavAltMarkup"
							aria-controls="navbarNavAltMarkup"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon"></span>
						</button>
						<div
							class="collapse navbar-collapse"
							id="navbarNavAltMarkup"
						>
							<div class="navbar-nav">
								<a
									class="nav-link link-light active"
									aria-current="page"
									href="index.html"
									>Inicio</a
								>
								<a
									class="nav-link link-light"
									href="ver_noticias.html"
									>Ver noticias</a
								>
							</div>
						</div>
					</div>
				</nav>
			</div>
            <br>
			<div class="row ver-noticias"> <!-- Ver noticias -->
                <div class="card-group">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center">Policial</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php include "noticias.php"; ?></h6>
                        <p class="card-text">Cuerpo</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Fecha</small>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center">Deportes</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Titulo</h6>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center">Espectáculo</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Titulo</h6>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                      </div>
                    </div>
                  </div>
			</div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	</body>
</html>
