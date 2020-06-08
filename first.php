<?php
 echo "<h1>Hello</h1>";
 $name= 12345;
 $firstname = 'Mahesh';
 echo gettype($name); // echo gettype(int($name));
  echo "<br>$name";
  echo '<br>$name'.$name.'hello';
  // we can also use print();
  // print return a value but echo doesn't
  $a=30;
  $b=20;
  $c=10;
  echo "<br>Answer : ";
  echo ($a>$b)?(($a>$c)?$c:$a):(($b>$c)?$c:$b);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Test PHP</title>
   </head>
   <body>
     <h2><?php echo "Hello HTML" ?></h2>
     <p><?php echo $firstname ?></p>
     <hr>
   </body>
 </html>
<?php
// constant
  define('GOOGLE_KEY', "I am Constant");
  echo GOOGLE_KEY;

 ?>
