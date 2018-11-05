<?php

    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-6883424594190986-071506-05714c036faa6ff245e70a42dba20d92__LB_LC__-66839567");

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
