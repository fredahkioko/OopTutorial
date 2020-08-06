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
  protected $email;
  private $age;
  Public $role='member';

/*to pass or insert variables in a class we use a constructor
-creates a new instance of an objectbased on the class
 hence it is called inside the class */
  public function __construct($username,$email,$age){
    $this->username=$username;
    $this->email=$email;
    $this->age=$age;
  }

//the following is a method and is defined inside a class
  public function addFriend(){
    /*this is used to show what a property has done
  eg this->username added a new friend or this *whatever*/
    return "$this->username added a new friend";

  }
  public function message(){
    return "$this->email sent a new message";
  }

  //getter(used to acces private properties)

  public function getAge(){
    return $this->age;
  }
  public function getEmail(){
    return $this->email;
  }

  //setter(used to modify private properties)
  public function setEmail($email){
    if(strpos($email,'@')> -1){
    $this->email=$email;
    }

  }
}
  //inheritance
  class AdminUser extends User{

   public $role;//overide


   public function __construct($username,$email,$age,$role){
       $this->role=$role;
       //the parent keyword calls the properties from the parent class
       parent::__construct($username,$email,$age);
        }
        public function message(){
          return "$this->email,The admin sent this email";
        }

}
$userone = new User('Mario','mario@hotmail.com',20);
$usertwo = new User('Sasaka','Tonysas2020@ggmail.com',40);
$userthree = new AdminUser('Tony','Luvonga@gmail.com',21,'Manager');


echo $userthree->message().'<br>';

/*
 echo $userthree->username.'<br>';
 echo $userthree-> getEmail().'<br>';
 echo $userthree-> getAge().'<br>';
 echo $userthree->role.'<br>';


//to change we use set
$userone->setEmail('Lydia@strathmore.edu');

//to get we use get
 echo $userone-> getEmail().'<br>';
 echo $usertwo-> getAge().'<br>';

*/
/*

//to access properties in a class
echo$userone->username.'<br>';
echo$userone->email.'<br>';
echo$userone->age.'<br>';
echo$userone->addFriend().'<br>';
/*
echo"<br>";
//how to insert variables into a class
$usertwo->username="Lydia";
$usertwo->email="lydia.kahurs@yahoo.com";
$usertwo->age=20;

echo$usertwo->username.'<br>';
echo$usertwo->email.'<br>';
echo$usertwo->age.'<br>';
echo$usertwo->addFriend().'<br';

 echo"<br>";
echo "this is a class ".get_class($userone);

 echo"<br>"; echo"<br>";
 print_r(get_class_vars('User'));//shows the properties and values
 echo'<br>';
  print_r(get_class_methods('User'));//to know the methods

*/
