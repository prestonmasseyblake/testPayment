
<?php


require_once('./stripe-php/init.php');

$stripe = new \Stripe\StripeClient(
  'sk_test_51GykVOL0FoRfFSl3s6QVaa3ttDgpWniCq7qJAkace4uN5qzLVLSExIWyWEUdO8h1ZiwrUPOMW6OzmGYxV9tGLO2j00Lmtflx8O'
);
$stripe->customers->create([
  'description' => 'My First Test Customer (created for API docs)',
]);


// \Stripe\Stripe::setApiKey('sk_test_51GykVOL0FoRfFSl3s6QVaa3ttDgpWniCq7qJAkace4uN5qzLVLSExIWyWEUdO8h1ZiwrUPOMW6OzmGYxV9tGLO2j00Lmtflx8O');


//$email =  $_POST['email'] ;
//$fullName = $_POST['name'];
//$phone	= $_POST['phone'];

//$key = \Stripe\Customer::create([
//  'description' => 'testing','email'=>"$email",'phone'=>"$phone", 'name'=>$fullName
//]);


echo json_encode($stripe);

?>
