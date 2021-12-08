<?php
session_start();


if (isset($_POST['Game'])) {
   $_SESSION['RandNum'] = rand(1, 5);
}


if (isset($_POST['Send'])) {
   metodus($_POST['Tip_Num'], $_SESSION['RandNum']);
}


function metodus($Tip_Num, $RandNum)
{
    if ($_POST['Tip_Num'] >= 1 && $_POST['Tip_Num'] <= 5) {
      
        if ($tip_Num > $RandNum) {
            echo "A generált szám kisebb!";
        } elseif ($Tip_Num < $RandNum) {
            echo "A generált szám nagyobb!";
        } else{
            echo "Eltalálta a generált számot!";
        }
    
    } else {
        echo "Hiba!  Irjon 1 és 5 közötti számot!";
    }
}


?>


<h2>Gondoljon egy 1 és 5 közötti számra.</h2>

<br>

<form method="POST" action="">
    <input type="hidden" name="Game" value="true">
    <input type="submit" value="Új játék (szám generálása)">
</form>

<br>

<form method="POST" action="">
    <input type="hidden" name="Send" value="true">
    <label>Irja be a számot:</label>
    <input name="Tip_Num" type="text">
    <input type="submit" value="Küldés">
</form>
