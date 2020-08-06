<?php
spl_autoloadregister();

function myAutoloader($className){
  $path="class/";
  $extension=".class.php"
  $fullpath=$path.$className.$extension;



  include_once $fullpath;
}
