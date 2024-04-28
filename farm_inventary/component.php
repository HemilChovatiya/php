<?php

//$con = mysqli_connect('localhost:3307', 'root', '','db_connect');
function getproduct($year,$TotalCustomer,$Totalkg,$TotalPrice)
{
	$element= 
    "<tr>
    <td id='year'><span> $year</span><br></td>
    <td id='TotalCustomer'><span> $TotalCustomer </span><br></td>
    <td id='Totalkg'><span> $Totalkg</span><br></td>
    <td id='TotalPrice'><span> $TotalPrice</span><br></td>
      </tr>  
	
    ";
    
    
    echo $element;
	
}




