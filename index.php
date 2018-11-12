<?php

    require_once 'vendor/autoload.php';
    
 
    MercadoPago\SDK::setAccessToken("APP_USR-8131526712381965-111216-5be425ff72d5a9d7a55caf06bac51a18-66839567");
    

$request =

$mp = new MP("APP_USR-8131526712381965-111216-5be425ff72d5a9d7a55caf06bac51a18-66839567");

$request = array(
        "uri" => "/v1/account/bank_report",
        "data" => array(
            "begin_date" => "2018-05-01T00:00:00Z",
            "end_date" => "2018-06-01T00:00:00Z"
        )
    );

$mp->post($request);

  ?>
