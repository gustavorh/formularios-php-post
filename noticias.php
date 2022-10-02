<?php

error_reporting(0);

$titulo = strtoupper($_POST['tituloNoticia']);
$cuerpo = ucfirst($_POST['cuerpoNoticia']);
$categoria = $_POST['categoriaNoticia'];

$fecha = date('d-m-Y');

$nombreCarpeta = $categoria; // El nombre de la carpeta tendra el siguiente formato: Categoria.
$nombreArchivo = $categoria; // El nombre de archivo tendra el siguiente formato: Titulo_de_la_noticia.
$ruta = "$nombreCarpeta/$nombreArchivo.txt"; // Ruta donde se creará el archivo y su extensión.

#echo "Titulo: $titulo, Cuerpo: $cuerpo, Categoria: $categoria";
$insertar = "$titulo <br/>\n$categoria <br />\n$cuerpo <br />\n$fecha <br /><br />\n\n";

if (file_exists("$nombreCarpeta") == true) {
    # Solo crear el archivo y dentro insertar el contenido.
    $archivo = fopen($ruta, "a+") or die ("El archivo no se puede leer.");
    fputs($archivo, $insertar);
    fclose($archivo);
} else {
    # Crear la carpeta con la categoria seleccionada.
    mkdir("$nombreCarpeta");

    # Insertar en archivo titulo, cuerpo y fecha
    $archivo = fopen($ruta, "w+") or die ("El archivo no se puede leer.");
    fputs($archivo, $insertar);
    fclose($archivo);
}

?>

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
									href="noticias.php"
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
						<hr>
                        <h6 class="card-text">
                            <?php
                            if (file_exists("policial")) { // Si la carpeta existe, mostrar el contenido.
                                $lineas = file("policial/policial.txt"); // Abre el archivo y guarda las lineas en un array.
								foreach($lineas as $linea) { // Por cada linea del array, mostrarla.
									echo $linea;
								}
                            } else { // Si no existe, mostrar mensaje.
								echo "No hay noticias de esta categoria.";
							}
                            ?>
                        </h6>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center">Deportes</h5>
						<hr>
                        <h6 class="card-text">
                            <?php
                            if (file_exists("deportes")) { // Si la carpeta existe, mostrar el contenido.
                                $lineas = file("deportes/deportes.txt"); // Abre el archivo y guarda las lineas en un array.
								foreach($lineas as $linea) { // Por cada linea del array, mostrarla.
									echo $linea;
								}
                            } else { // Si no existe, mostrar mensaje.
								echo "No hay noticias de esta categoria.";
							}
                            ?>
                        </h6>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title text-center">Espectáculo</h5>
						<hr>
                        <h6 class="card-text">
                            <?php
                            if (file_exists("espectaculo")) { // Si la carpeta existe, mostrar el contenido.
                                $lineas = file("espectaculo/espectaculo.txt"); // Abre el archivo y guarda las lineas en un array.
								foreach($lineas as $linea) { // Por cada linea del array, mostrarla.
									echo $linea;
								}
                            } else { // Si no existe, mostrar mensaje.
								echo "No hay noticias de esta categoria.";
							}
                            ?>
                        </h6>
                      </div>
                  </div>
			</div>
			<div class="row footer">
				<!-- Crear un footer -->
				<footer class="footer mt-auto py-3 fixed-bottom">
					<div class="container">
						<span class="text-muted">Todos los derechos reservados. ChileNoticias! &copy; 2022.</span>
					</div>
			</div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	</body>
</html>
