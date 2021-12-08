<!DOCTYPE html>
<html>
<body>

<h2>1. Feladat</h2>

<?php

$tomb = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');


    	foreach($tomb as $value)
        {
 			if(is_float($value)){
				echo "Igen. - Az érték float."."<br>";			
			}
			else if(is_string($value)){
				echo "Nem. - Az érték string."."<br>";			
			}
			else if(is_integer($value)){
				echo "Igen. - Az érték integer."."<br>";			
			}
			else if(is_double($value)){
				echo "Igen. - Az érték double."."<br>";			
			}
			else if(is_numeric($value)){
				echo "Igen. - Az érték numerikus."."<br>";			
			}
			else{
				echo "Nem. - Az érték egyéb tipusú."."<br>";
			}
        }

?>



<br><br>
<h2>2. Feladat</h2>

<?php

$orszagok = array( " Magyarország "=>" Budapest", " Románia"=>" Bukarest",
"Belgium"=> "Brussels", "Austria" => "Vienna", "Poland"=>"Warsaw");


foreach($orszagok as $x => $x_value) {
  echo $x . " fővárosa " . $x_value;
  echo "<br>";
}
?>


<br><br>
<h2>3. Feladat</h2>



<?php

$napok = array(
 "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
"EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
"DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
);

foreach ($napok as $obj_key =>$v)
{
echo "$obj_key : ";
	foreach ($v as $value){
 		 echo "$value, ";
	}
echo "<br>";
}
?>



<br><br>
<h2>4. Feladat</h2>


<?php

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');



function atalakit($szinek, $a){
	if($a=="kisbetus"){
    	foreach($szinek as &$value)
        {
 			 $value = strtolower($value);
        }
    }
    else if($a=="nagybetus"){
    	foreach($szinek as &$value)
        {
 			 $value = strtoupper($value);
        }
    }
    else{
    	echo "Hiba! Rossz szavat adott meg!";
    }



foreach($szinek as $x => $x_value) {
  echo $x . " => " . $x_value;
  echo "<br>";
	}

}


atalakit($szinek, "nagybetus");


?>

</body>
</html>
