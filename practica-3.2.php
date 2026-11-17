<html>
<body>
<?php
$suma1 = 0;
$suma2 = 0;

print("<h3>Jugador 1</h3>");
for ($i = 0; $i < 5; $i++) {
    $dados1[$i] = mt_rand(1, 6);
    $suma1 = $suma1 + $dados1[$i];
    print("<img src='" . $dados1[$i] . ".jpg' width='80'> ");
}

print("<h3>Jugador 2</h3>");
for ($i = 0; $i < 5; $i++) {
    $dados2[$i] = mt_rand(1, 6);
    $suma2 = $suma2 + $dados2[$i];
    print("<img src='" . $dados2[$i] . ".jpg' width='80'> ");
}

print("<h3>Resultado</h3>");
print("Jugador 1: $suma1 puntos<br>");
print("Jugador 2: $suma2 puntos<br><br>");

if ($suma1 > $suma2) {
    print("En conjunto, ha ganado el jugador <b>1</b>.");
} elseif ($suma2 > $suma1) {
    print("En conjunto, ha ganado el jugador <b>2</b>.");
} else {
    print("Ha habido un empate.");
}
?>
</body>
</html>