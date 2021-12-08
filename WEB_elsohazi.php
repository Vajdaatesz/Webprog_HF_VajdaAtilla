<!DOCTYPE html>
<html>
<body>


    
 <h2>1. Feladat</h2>
    
    
<?php
 
 
if(date("l")=="Monday"){
	echo "Ma hétfő.";
}
else if (date("l")=="Tuesday"){
	echo "Ma kedd.";
}
else if (date("l")=="Wednesday"){
	echo "Ma szerda.";
}
else if (date("l")=="Thursday"){
	echo "Ma csütörtök.";
}
else if (date("l")=="Friday"){
	echo "Ma péntek.";
}
else if (date("l")=="Saturday"){
	echo "Ma szombat.";
}
else if (date("l")=="Sunday"){
	echo "Ma vasárnap.";
}


?>
    
    

	
 <br><br>
 <h2>2. Feladat</h2>
    
    
  <form method="post">
    <label>Első szám:</label>
    <input type="number" name="szam1">
    <br><br>
    <label>Másadik szám:</label>
    <input type="number" name="szam2">
    <br><br>
	<label>Operátor:</label>
    <select name="operator">      
               <option>+</option>
               <option>-</option>
               <option>*</option>
               <option>/</option>
              
      </select>
     <button type="submit" name="submit" value="submit">Számitás</button>
    
  </form>      
    
    
    
    
<?php
        
 
  if (isset($_POST['submit'])) {
              $szam1 = $_POST['szam1'];
              $szam2 = $_POST['szam2'];
              $operator = $_POST['operator'];
    
     
             if($operator=='+'){
                 
                 $eredmeny=$szam1+$szam2;
             } 
			 else if($operator=='-'){
                 
                 $eredmeny=$szam1-$szam2;
             } 
			 else if($operator=='*'){
                 
                 $eredmeny=$szam1*$szam2;
             } 
			  else if($operator=='/'){
                 
                 $eredmeny=$szam1/$szam2;
             }
              
       
echo "<h3>Az eredmeny: $eredmeny</h3>";

    
  }
 ?>
 
 
 <br><br>
 <h2>3. Feladat</h2>
 
 
 <form method="post">
    <label>Adja meg mely számra szeretné látni az osztótáblát:</label>
    <br><br>
	<label>Szám:</label>
    <select name="szamok">      
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
			   <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
			   <option>9</option>
               <option>10</option>
              
      </select>
     <button type="submit" name="submit2" value="submit2">Oké</button>
	 <br><br>
    
  </form>      
 
 
 
 
 
 <?php
 
 
   if (isset($_POST['submit2'])) {
	   
	$a = $_POST['szamok'];
               
 
 for ($x = 1; $x <= 10; $x++) {
  
   echo $a*$x." / ".$a." = ".$x."<br>";
  
  
  
	}

}
?>
 
 <br><br>
 <h2>4. Feladat</h2>
 
 <table width="300px" height="300px" border="1px">
  <?php
      for($row=1;$row<=4;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=4;$col++)
		  {
			  
          $ossz=$row+$col;
          if($ossz%2==0)
		  {
			echo "<td bgcolor=black></td>";
          }
		  else
		  {
			echo "<td bgcolor=white></td>";
          }
          }
          echo "</tr>";
    }
          ?>
 </table>
 
 
 
 

</body>
</html>