<html>
<body>
<?php
$nombre = $_REQUEST['nombre'];
$telefono = $_REQUEST['telefono'];
$ensenanza = $_REQUEST['ensenanza'];
$mostrar = $_REQUEST['mostrar'];

if (isset($_REQUEST['matriculado'])) {
    $texto = "El alumno $nombre, con teléfono $telefono, está matriculado en $ensenanza";
} else {
    $texto = "El alumno $nombre, con teléfono $telefono, no está matriculado";
}

if ($mostrar == "pantalla") {
    print($texto);
} else {
    $fich = fopen("datos.txt", "a");
    fputs($fich, $texto . "\n");
    fclose($fich);

    print("Datos guardados correctamente.<br>");
    print("<a href='mostrardatos.php'>mostrar archivo</a>");
}
?>
</body>
</html>