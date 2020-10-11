<?php 
    $sessionId = $_POST["sessionId"];
    $serviceCode = $_POST["serviceCode"];
    $phoneNumber = $_POST["phoneNumber"];
    $text = $_POST["text"];

    if($text == ""){
       
        $response = "Con what would you want to check \n";
        $response .= "1. my account No \n";
        $response .= "2. my phone number";

    }else if($text == "1"){
       
        $response = "CON chose account information you want to view \n";
        $response .= "1. Account Number \n";
        $response .= "2. Account Balance";

    }else if($text == "2"){

        $response = "END your phone number is".$phoneNumber;

    }else if($text == "1*1"){

        $accountNumber = "ACC1001";

        $response = "END your account number is" .$accountNumber;
    }else if($text == "1*2"){

        $balance = "KES 10.000";
        $response = "END your balance is ".$balance;
    }
    header('content-type; text/plain');
    echo $response;

?>