<?php

$szamok = array([5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200']);
print_r($szamok);
foreach ($szamok as $i){
    if(is_numeric(gettype($i))){
        echo "Igen" . "<br>";
    } else{
        echo "Nem" . "<br>";
    }
}

?>

<?php

$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
    "Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");

foreach ($orszagok as $fel => $value){
    print $fel . " Fovarosa " . $value . "<br>";
}

?>

<?php

$napok = array(
    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);

echo "<pre>";
print_r($napok);
echo "</pre>";

?>

<?php

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');

function kisbetus($tomb){
    foreach ($tomb as $key => $value){
        echo strtolower($key);
        echo strtolower($value);
        echo "<br>";
    }
}
function nagybetus($tomb){
    foreach ($tomb as $key => $value){
        echo strtoupper($key);
        echo strtoupper($value);
        echo "<br>";
    }
}
print_r($szinek);
echo "<br>";
kisbetus($szinek);
nagybetus($szinek);
