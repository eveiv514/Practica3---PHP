<html>
<body>
<?php
$fich = fopen("datos.txt", "r");
while (!feof($fich)) {
    $linea = fgets($fich);
    print($linea . "<br>");
}
fclose($fich);
?>
</body>
</html>