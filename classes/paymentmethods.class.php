//interfaces group classes together and tell them how to behave
<?
interface PaymentInterface{
  public function payNow()
}
interface PaymentProcess{
  public function login(){

  }
}
class Mpesa implements PaymentInterface{
 public function payNow(){}
}
class Visa implements PaymentInterface{
 public function payNow(){}
}
class Cash implements PaymentInterface{
 public function payNow(){}
}
class BuyProduct implements PaymentProcess{
 public function pay($paymentType){
   $paymentType->payNow();
  $paymentType->login();
 }
}
$paymentType=new cash();
$buyproduct=new BuyProduct();
$buyproduct->pay($paymentType)
