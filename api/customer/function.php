<?php
require '../inc/dbcon.php';

function error422($message){
    $data=[
        "status"=> 422 ,
        "message"=> $message,
        
    ];
    header('HTTP/1.0 422 Unprocable Entity');
    echo json_encode($data);
    exit();
}
function storeCustomer($customerInput){
  
    global $conn;

    $name = mysqli_real_escape_string($conn,$customerInput['name']);
    $username = mysqli_real_escape_string($conn,$customerInput['username']);
    $password = mysqli_real_escape_string($conn,$customerInput['password']);

    if(empty(trim($name))){
        return error422('Enter your name');
    }elseif(empty(trim($username))){
        return error422('Enter your username');
    }elseif(empty(trim($password))){
        return error422('Enter your password');
    }else{
        $query = "Insert into user_details(name,username,password) values ('$name','$username','$password')";
        $result=mysqli_query($conn,$query);

        if($result)
        {
            $data=[
                "status"=> 201,
                "message"=> " Customer Created Successfully",
        
            ];
            header("HTTP/1.0 201 created");
            return json_encode($data);
        }
        else{
            $data=[
                "status"=> 500,
                "message"=> " Internal Server Error",
        
            ];
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }

    }
}

function getcustomerList() {    
    global $conn;

    $query = "Select * from user_details";      
    $queryrun = mysqli_query( $conn, $query );
    
    if($queryrun)
    {
        if(mysqli_num_rows($queryrun) > 0)
        {
            $res = mysqli_fetch_all($queryrun,MYSQLI_ASSOC);
            $data=[
                "status"=> 200 ,
                "message"=> "Customer List Fetched Successfully",
                "data"=> $res,
            ];
            header("HTTP/1.0 200 Customer List Fetched Successfully");
            return json_encode($data);
        }
        else    
        {
            $data=[
                "status"=> 404,
                "message"=> " No Customer Found",
        
            ];
            header("HTTP/1.0 404 No Customer Found");
            return json_encode($data);
        }

    }
    else
    {
        $data=[
            "status"=> 500,
            "message"=> " Internal Server Error",
    
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
    
    
}


function getCustomer($customerParms)
{
    global $conn;

    if($customerParms['username']==null){
        return error422('Enter customer username');
    }
    $customerUsername =mysqli_real_escape_string($conn, $customerParms['username']);    
    $query = "SELECT * FROM user_details where username='$customerUsername' limit 1";
    $result = mysqli_query( $conn,$query);

    if($result)
    {
        if(mysqli_num_rows($result) == 1)
        {
            $res = mysqli_fetch_assoc($result);
            $data=[
                "status"=> 200 ,
                "message"=> "Customer Fetched Successfully",
                "data"=> $res['username'],
            ];
            header("HTTP/1.0 200 Customer Fetched Successfully");
            return json_encode($data);
        }
        else
        {
            $data=[
                "status"=> 404,
                "message"=> " No Customer Found",
        
            ];
            header("HTTP/1.0 404 No Customer Found");
            return json_encode($data);
        }

    }
    else
    {
        $data=[         
            "status"=> 500,
            "message"=> "Internal Server Error",
            ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
}
function getCustomerbyid($customerParms){
    global $conn;

    if($customerParms['id']==null){
        return error422('Enter customer id');
    }
    $customerId =mysqli_real_escape_string($conn, $customerParms['id']);   
    
    $query = "SELECT * FROM user_details where u_id='$customerId' limit 1";
    $result = mysqli_query( $conn,$query);

    if($result)
    {
        if(mysqli_num_rows($result) == 1)
        {
            $res = mysqli_fetch_assoc($result);
            $data=[
                "status"=> 200 ,
                "message"=> "Customer Fetched Successfully",
                "data"=> $res,
            ];
            header("HTTP/1.0 200 Customer Fetched Successfully");
            return json_encode($data);
        }
        else
        {
            $data=[
                "status"=> 404,
                "message"=> " No Customer Found",
        
            ];
            header("HTTP/1.0 404 No Customer Found");
            return json_encode($data);
        }

    }
    else
    {
        $data=[         
            "status"=> 500,
            "message"=> "Internal Server Error",
            ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
}

function updateCustomer($customerInput,$customerParms){
    global $conn;

    if(!isset($customerParms['id']))
    {
        return error422('Customer id not found in URL');
    }
    elseif($customerParms['id'] == null){
        return error422("Enter Customer id");
    }
    $id = mysqli_real_escape_string($conn,$customerParms['id']);
    
    $name = mysqli_real_escape_string($conn,$customerInput['name']);
    $username = mysqli_real_escape_string($conn,$customerInput['username']);
    $password = mysqli_real_escape_string($conn,$customerInput['password']);
    $name=trim($name);
    $username=trim($username);
    $password=trim($password);
    $id=trim($id);
    if(empty(trim($name))){
        return error422('Enter your name');
    }elseif(empty(trim($username))){
        return error422('Enter your username');
    }elseif(empty(trim($password))){
        return error422('Enter your password');
    }else{
        $query = "UPDATE user_details SET name='$name',username='$username',password='$password' where u_id='$id'";
        $result=mysqli_query($conn,$query);

        if($result)
        {
            $data=[
                "status"=> 200,
                "message"=> " Customer Updated Successfully",
        
            ];
            header("HTTP/1.0 200 Success");
            return json_encode($data);
        }
        else{
            $data=[
                "status"=> 500,
                "message"=> " Internal Server Error",
        
            ];
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }

    }

}

function deleteCustomer($customerParms){
    global $conn;
    
    if(!isset($customerParms['id']))
    {
        return error422("Customer id not found in URL");
    }
    elseif($customerParms['id']==null)
    {
        return error422("Enter the customer id");
    }
    $id=mysqli_real_escape_string($conn, $customerParms["id"]); 
    $query="DELETE FROM user_details WHERE u_id='$id' LIMIT 1";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        $data=[
            "status"=> 200,
            "message"=> "Customer Deleted Successfully",
            ];
        header("HTTP/1.0 200 Deleted");
        return json_encode($data);
    }
    else{
        $data=[
            "status"=> 404,
            "message"=> "Customer Not Found",
            ];
        header("HTTP/1.0 404 Not Found");
        return json_encode($data);
    }
}
?>