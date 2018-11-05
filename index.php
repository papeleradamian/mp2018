<?php

    require_once 'vendor/autoload.php';
    MercadoPago\SDK::setClientId("8131526712381965");
MercadoPago\SDK::setClientSecret("N9WwN6Ru7ke9cBAS7F1ITtUCOToNgrKN");
    // SDK Version >= 0.5.0

$mp = new MP("ACCESS_TOKEN");

$request = array(
        "uri" => "/v1/account/settlement_report",
        "data" => array(
            "begin_date" => "2018-11-01T00:00:00Z",
            "end_date" => "2018-11-04T00:00:00Z"
        )
    );

$mp->post($request);

  ?>
