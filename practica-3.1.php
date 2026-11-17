<html>
<body>
<form method="post" action="practica-3.1.php">
  <fieldset>
    <legend>Formulario</legend>
    Escriba el alto y ancho (0 &lt; números &le; 100) y mostraré un rectángulo de estrellas de ese tamaño.<br><br>
    Ancho: <input type="text" name="ancho"><br>
    Alto: <input type="text" name="alto"><br><br>
    <input type="submit" name="enviar" value="Dibujar">
    <input type="reset" value="Borrar">
  </fieldset>
</form>

<?php
if (isset($_REQUEST['enviar'])) {
    $ancho = $_REQUEST['ancho'];
    $alto = $_REQUEST['alto'];

    if ($ancho > 0 && $ancho <= 100 && $alto > 0 && $alto <= 100) {
        print("Alto: $alto<br>");
        print("Ancho: $ancho<br><br>");

        for ($i = 0; $i < $alto; $i++) {
            for ($j = 0; $j < $ancho; $j++) {
                print("* ");
            }
            print("<br>");
        }
    } else {
        print("Los números tienen que estar entre 1 y 100");
    }
}
?>
</body>
</html>