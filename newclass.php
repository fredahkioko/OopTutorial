<?php
/*
class NewClass{
  //properties and methods go here
  public $info="This is a new class";
}


$object= new NewClass;//object instantiates a class
var_dump($object);
*/
class User{
  //the following are properties
  public $username;
  public $email;

/*to pass or insert variables in a class we use a constructor
-creates a new instance of an objectbased on the class
 hence it is called inside the class */
  public function __construct($username,$email){
    $this->username=$username;
    $this->email=$email;
  }

//the following is a method and is defined inside a class
  public function addFriend(){
    /*this is used to show what a property has done
  eg this->username added a new friend or this *whatever*/
    return "$this->username added a new friend";

  }

}
$userone = new User('Mario','mario@hotmail.com');
$usertwo = new User('Sasaka','Tonysas2020@ggmail.com');

//to access properties in a class
echo$userone->username.'<br>';
echo$userone->email.'<br>';
echo$userone->addFriend().'<br>';
/*
echo"<br>";
//how to insert variables into a class
$usertwo->username="Lydia";
$usertwo->email="lydia.kahurs@yahoo.com";
$usertwo->age=20;
*/
echo$usertwo->username.'<br>';
echo$usertwo->email.'<br>';
//echo$usertwo->age.'<br>';
echo$usertwo->addFriend().'<br';

 echo"<br>";
echo "this is a class ".get_class($userone);

 echo"<br>"; echo"<br>";
 print_r(get_class_vars('User'));//shows the properties and values
 echo'<br>';
  print_r(get_class_methods('User'));//to know the methods
