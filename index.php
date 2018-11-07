<?php

    require_once 'vendor/autoload.php';
    
    MercadoPago\SDK::setClientId("8131526712381965");
    MercadoPago\SDK::setClientSecret("N9WwN6Ru7ke9cBAS7F1ITtUCOToNgrKN");
    MercadoPago\SDK::setAccessToken("TEST-8131526712381965-100207-ecaccd3929d0adac787444c261282027-66839567");
    
$request =

$mp = new MP("TEST-8131526712381965-100207-ecaccd3929d0adac787444c261282027-66839567");

$request = array(
        "uri" => "/v1/account/bank_report",
        "data" => array(
            "begin_date" => "2015-05-01T00:00:00Z",
            "end_date" => "2015-06-01T00:00:00Z"
        )
    );

$mp->post($request);

  ?>
