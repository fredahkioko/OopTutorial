<?php
spl_autoloadregister(

function myAutoloader($className){
  $path="class/";
  $extension=".class.php"
  $fullpath=$path.$className.$extension;
if(!$className){
  return false;
}


  include_once $fullpath;
}
);
//spl_autoload_register()
