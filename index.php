<?php include 'nameGenerator.php';?>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>';
 $name = new NameGenerator();
 for ($x = 0; $x <= 1000; $x++) {
    echo $name -> generateName();
    echo " ";
}

 ?>
 </body>
</html>
