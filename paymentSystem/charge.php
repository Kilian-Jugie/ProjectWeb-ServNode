<?php
require_once('stripe-php-7.11.0/init.php');
\Stripe\Stripe::setApiKey('sk_test_UgvgEvUVRwLLM4Sacu8lrrLT00UW1cYZUo');
$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['mail'];
$token = $POST['stripeToken'];

$customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token
));

$charge = \Stripe\Charge::create(array(
    "amount" => $POST['price'],
    "currency" => "eur",
    "description" => "test",
    "customer" => $customer->id
));

header('Location: checkout.php?tid=' . $charge->id . "&product=" . $charge->description);
