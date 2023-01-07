<?php

echo "<h1>1. Feladat</h1>";

$datum = date("l");
echo "Ma " . $datum . " van!";
?>

<?php

echo "<h1>2. Feladat</h1>";

$szam1 = rand(1,9);
$szam2 = rand(1,9);
echo "Az elso szam: " . $szam1 . " es a masodik szam: " . $szam2;

echo "<br>" . "A ket szam osszege : " . $szam1 + $szam2;
echo "<br>" . "A ket szam kulonbsege : " . $szam1 - $szam2;
echo "<br>" . "A ket szam szorzata : " . $szam1 * $szam2;
echo "<br>" . "A ket szam hanyadosa : " . $szam1 / $szam2;

?>

<?php
echo "<h1>Osztotabla</h1>";

print("<table border=\"1\">\n");
for($i=1; $i<11; $i++){
    print("<tr>\n");
    for($j=1; $j<11; $j++){
        print("<td>\n");
        print($i / $j);
        print("</td>\n");
    }
    print("</tr>\n");
}
print("</table>\n");

echo "<h1>Szorzotabla</h1>";

print("<table border=\"1\">\n");
for($i=1; $i<11; $i++){
    print("<tr>\n");
    for($j=1; $j<11; $j++){
        print("<td>\n");
        print($i * $j);
        print("</td>\n");
    }
    print("</tr>\n");
}
print("</table>\n");
