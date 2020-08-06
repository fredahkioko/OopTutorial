<?
include 'include/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kirathis</title>
  </head>
  <body>

      <?php

      $person1=new Person("Daniel","Tutorial",28);
        echo $person1->getPerson();
      ?>

  </body>
</html>
