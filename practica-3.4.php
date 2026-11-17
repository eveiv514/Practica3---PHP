<html>
<body>
<h1>Agenda Virtual PHP</h1>
<h2>Dar de alta un contacto</h2>
<form method="post" action="practica-3.4.php">
  Nombre: <input type="text" name="nombre"><br>
  Trabajo: <input type="text" name="trabajo"><br>
  Teléfono: <input type="text" name="telefono"><br>
  Dirección: <input type="text" name="direccion"><br>
  Otras: <input type="text" name="otras"><br>
  <input type="submit" name="guardar" value="Guardar!">
  <input type="reset" value="Reset">
</form>
<h2>Buscar contacto</h2>
<form method="post" action="practica-3.4.php">
  Nombre: <input type="text" name="buscar">
  <input type="submit" name="buscando" value="Buscar">
</form>

<?php
if (isset($_REQUEST['guardar'])) {
    $linea = $_REQUEST['nombre'] . ";" . $_REQUEST['trabajo'] . ";" . $_REQUEST['telefono'] . ";" . $_REQUEST['direccion'] . ";" . $_REQUEST['otras'];

    $fich = fopen("agenda.txt", "a");
    fputs($fich, $linea . "\n");
    fclose($fich);

    print("<p>Contacto guardado.</p>");
}

if (isset($_REQUEST['buscando'])) {
    $buscar = strtolower($_REQUEST['buscar']);
    $encontrado = false;

    print("<h2>Resultado de la búsqueda</h2>");
    $fich = fopen("agenda.txt", "r");
    while (!feof($fich)) {
        $linea = trim(fgets($fich));
        if ($linea != "") {
            $datos = explode(";", $linea);
            if (strtolower($datos[0]) == $buscar) {
                print("Contacto: $datos[0] $datos[1] $datos[2] $datos[3] $datos[4]<br>");
                $encontrado = true;
            }
        }
    }
    fclose($fich);

    if ($encontrado == false) {
        print("No se ha encontrado ese contacto.");
    }
}

print("<h2>Contactos</h2>");
if (file_exists("agenda.txt")) {
    $fich = fopen("agenda.txt", "r");
    while (!feof($fich)) {
        $linea = trim(fgets($fich));
        if ($linea != "") {
            $datos = explode(";", $linea);
            print("Contacto: $datos[0] $datos[1] $datos[2] $datos[3] $datos[4]<br>");
        }
    }
    fclose($fich);
} else {
    print("Todavía no hay contactos.");
}
?>
</body>
</html>