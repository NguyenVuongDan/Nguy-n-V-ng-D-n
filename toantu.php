<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Toán tử</title>
</head>
<body>
	<?php 
	$x = 5;
	$y = 2;
	echo $x +$y;
	echo "<br>";

	echo $x - $y;
	echo "<br>";
	
	echo $x * $y;
	echo "<br>";
	
	echo $x / $y;
	echo "<br>";
	
	echo $x % $y;
	echo "<br>";
	
	echo $x ** $y;
	echo "<br>";
	
	 ?>
	 <?php 
	 $x = 50;
	 echo $x;
	 echo "<br>";
	  ?>
	  <?php 
	  $x = 50;
	  echo $x +=20;
	   ?>
	   <?php  
	   $x = 50;
	  echo $x -=20;
	  echo "<br>";

	   ?>
	   <?php 
	    $x = 50;
	  echo $x *=2;
	  echo "<br>";
	    ?>
	     ?>
	   <?php 
	    $x = 50;
	  echo $x /=2;
	  echo "<br>";
	    ?>
	     ?>
	   <?php 
	    $x = 50;
	  echo $x %=3;
	  echo "<br>";
	    ?>
	    <?php 
	    $x = 50;
	    $y = 20;
	    var_dump($x == $y);
	    echo "<br>";
	     ?>
	     <?php 
	    $x = 50;
	    $y = "50";
	    var_dump($x === $y);
	    echo "<br>";
	     ?>
	     <?php 
	    $x = 50;
	    $y = 20;
	    var_dump($x != $y);
	    echo "<br>";
	     ?>
	     <?php 
	    $x = 50;
	    $y = 20;
	    var_dump($x <> $y);
	    echo "<br>";
	     ?>
	      <?php 
	    $x = 50;
	    $y = "Hello";
	    var_dump($x !== $y);
	    echo "<br>";
	     ?>
	      <?php 
	    $x = 50;
	    $y = 40;
	    var_dump($x > $y);
	    echo "<br>";
	     ?>
	      <?php 
	    $x = 50;
	    $y = 40;
	    var_dump($x < $y);
	    echo "<br>";
	     ?>
	      <?php 
	    $x = 50;
	    $y = 40;
	    var_dump($x >= $y);
	    echo "<br>";
	     ?>
	        <?php 
	    $x = 50;
	    $y = 40;
	    var_dump($x <= $y);
	    echo "<br>";
	     ?>
	     <?php 
	     $x=5;
	     echo ++$x;
	     echo "<br>";
	      ?>
	     <?php 
	     $x=5;
	     echo $x++;
	     echo "<br>";
	      ?>
	      ?>
	     <?php 
	     $x=5;
	     echo --$x;
	     echo "<br>";
	      ?>
	      ?>
	     <?php 
	     $x=5;
	     echo $x--;
	     echo "<br>";
	      ?>
	      <?php 
	      $string1 = "Hello";
	      $string2 = "World!";
	      echo $string1." ".$string2;
	       ?>
	       <?php 
	      $string1 = "Hello";
	      $string2 = "World!";
	      echo $string1.=$string2;
	       ?>
</body>
</html>