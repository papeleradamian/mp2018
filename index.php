<?php

    require_once 'vendor/autoload.php';
    
    MercadoPago\SDK::setClientId("8131526712381965");
    MercadoPago\SDK::setClientSecret("N9WwN6Ru7ke9cBAS7F1ITtUCOToNgrKN");
    MercadoPago\SDK::setAccessToken("TEST-8131526712381965-100207-ecaccd3929d0adac787444c261282027-66839567");
    
$payment = new MercadoPago\Payment();

    $payment->transaction_amount = 141;
    $payment->token = "YOUR_CARD_TOKEN";
    $payment->description = "Ergonomic Silk Shirt";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
      "email" => "larue.nienow@hotmail.com"
    );

    $payment->save();

    echo $payment->status;
  ?>
