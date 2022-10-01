<?php

$titulo = strtoupper($_POST['tituloNoticia']);
$cuerpo = ucfirst($_POST['cuerpoNoticia']);
$categoria = $_POST['categoriaNoticia'];

$fecha = date('d-m-Y');

$nombreCarpeta = $categoria; // El nombre de la carpeta tendra el siguiente formato: Categoria.
$nombreArchivo = str_replace(" ", "-", $titulo); // El nombre de archivo tendra el siguiente formato: Titulo_de_la_noticia.
$ruta = "$nombreCarpeta/$nombreArchivo.txt"; // Ruta donde se creará el archivo y su extensión.

echo "Titulo: $titulo, Cuerpo: $cuerpo, Categoria: $categoria";
$insertar = "$titulo\n$cuerpo\n$fecha";

if (file_exists("$nombreCarpeta") == true) {
    # Solo crear el archivo y dentro insertar el contenido.
    $archivo = fopen($ruta, "w+") or die ("El archivo no se puede leer.");
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