<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
//khai báo biến
$x=2020; //kiểu in
var_dump($x);//var_dump trả về kiểu dữ liệu và giá trị
 ?>	
 <?php 
$x="2018";//$x đang ử dạng chuỗi
$x=(int)$x;
var_dump($x);
  ?>
  <?php 
  $x="3.14128";//$x đang ở dạng chuỗi
  $x= is_int($s);
  var_dump($x);
   ?>
  <?php 
  $x= 3.14128;
  var_dump($x);
   ?>
   <?php 
   $x="3.14128";//$x đang ở dạng chuỗi
   $x = (float)$x;
   var_dump($x);
    ?>
    <?php 
    $x = "3.14128"; //$x đang ở dạng chuỗi
    $x= is_float($x);
    var_dump($x);
    ?>
<?php 
$message1 = "lập trình web";
$message2 = 'lập trình web';
var_dump($message1);
echo "<br>";
var_dump($message2); 
?>
<?php 
$x=233214;//$x đang ở dạng interger
$x=(string)$x;
var_dump($x);
 ?>
 <?php 
 $x="3.12412";//$x đang ở dạng chuỗi
 $x= is_string($x);
 var_dump($x);
  ?>
  <?php 
  $hwc=array("html","css","jquery",1024);
var_dump($hwc);
 ?>
  <?php 
  $hwc= array("html","css","jquery",1024);
  echo $hwc[0];
  ?>
  <?php 
  $hwc = array("html","css","jquery",1024);//$hwc đang ở dạng array
  $hwc = is_array($hwc);
  var_dump($hwc);
   ?>
   <?php 
   $x = true;
   var_dump($x);
    ?>
    <?php 
    $x=1234562345;//$x đang ở dạng interger
    $x = (boolean)$x;
    var_dump($x);
     ?>
     <?php 
     $hwc= array("html","css","jquery",1024);//$hwc đang ở dạng arry
     $hwc=is_bool($hwc);
     var_dump($hwc);
      ?>
      <?php 
      class myClass
      {
      	function do_myClass(){
      		echo "Doing here";
      	}
      }
      $obj = new myClass;//Khai báo đối tượng
      $obj -> do_myClass();//Thực hiện đối tượng cụ thể
       ?>
       <?php 
       $x="2020";// đang ở dạng chuỗi cụ thể
       $x= null;
       var_dump($x);
        ?>
</body>
</html>
