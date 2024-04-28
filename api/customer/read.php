<?php

header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json");
header("Access-Control-Allow-Method: GET");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With");

include("function.php");

// Define your API key here (replace 'your-api-key' with your actual API key)
$validApiKey = "your-api-key";

// Check if an API key is provided in the query parameters
if(isset($_GET["api_key"]) && $_GET["api_key"] === $validApiKey) {
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    if ($requestMethod == "GET") {   
        if(isset($_GET["username"])) {
            $customer = getCustomer($_GET);
            echo $customer;
        } elseif(isset($_GET["id"])) {
            $customer = getCustomerbyid($_GET);
            echo $customer;
        } else {
            $customerList = getcustomerList();
            echo $customerList;
        }
    } else {
        $data = [
            "status" => 405,
            "message" => $requestMethod . " Method Not allowed",
        ];
        header("HTTP/1.0 405 Method Not Allowed");
        echo json_encode($data);
    }
} else {
    $data = [
        "status" => 401,
        "message" => "Unauthorized: Invalid API key",
    ];
    header("HTTP/1.0 401 Unauthorized");
    echo json_encode($data);
}
?>





<?php
/*
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json");
header("Access-Control-Allow-Method: GET");
header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With");

include("function.php");

$requestMethod=$_SERVER["REQUEST_METHOD"];
if ($requestMethod == "GET") 
{   
    if(isset($_GET["username"]))
    {
       $customer =getCustomer($_GET);
       echo $customer;
    }
    elseif(isset($_GET["id"]))
    {
       $customer =getCustomerbyid($_GET);
       echo $customer;
    }
    else 
    {
        $customerList =  getcustomerList();
        echo $customerList;
    }
    
} 
else 
{
    $data=[
        "status"=> 405,
        "message"=> $requestMethod." Method Not allowed",

    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);    
    
}*/
?>