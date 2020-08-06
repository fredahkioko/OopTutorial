<?php

class Person{
  private $firstname="Fredah";
  private $lastname="Kioko";
  private $age="20";

  public function owner(){
    $a=$this ->firstname;
    return $a;
}
class Pet{
   public function owner(){
     $a="This belongs to you:)";
     return $a;
   }
}
