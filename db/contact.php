<?php
include('db.php');
require_once("component.php");

/*// get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];*/

// database insert SQL code
/*$sql = "INSERT INTO `contact` (`Id`, `name`, `email`, `Phone`, `Message`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    * {
        box-sizing: border-box;
    }

    html {
        background-color: #f5f5f5;
        text-transform: capitalize;
        letter-spacing: 1.5px;
    }

    table {
        border: none;
        border-color: white;
        box-shadow: 2px 4px 7px rgba(0, 0, 0.1, 0.1);
        transition: all 0.3s ease 0s;
    }


    .bottom-right {
        position: absolute;
        bottom: 8px;
        right: 16px;
    }

    .bottom-right:hover {

        background-color: red;
    }

    .grid-container {

        display: grid;
        grid-template-columns: auto auto auto auto auto;
        background-color: white;

    }


    .grid-item {
        background-color: white;

    }

    .card {
        position: relative;
        margin: 2em auto;
        font-family: Arial, Helvetica, sans-serif;
        width: min-content;
        text-align: center;
        border-radius: .5rem;
        box-shadow: 1px 1px 10px #111;
        padding: 1em 1.5em;
    }

    .card>span {
        font-weight: 800;
        font-size: 14;
    }

    .card img {
        max-width: 150px;

    }
</style>

<body>
   
        <div class='grid-container'>
    	<?php 
		$sql1 = "select * from contact limit 3";
		$result=mysqli_query($con,$sql1);
        echo " <section class='text-gray-600 body-font'>";
		while($row = mysqli_fetch_assoc($result))
		{
			getproduct($row['Id'],$row['name'],$row['email'],$row['phone'],$row['message']);
		}
			echo " </section'><table>
			<tr>
				<td>id</td>
				<td>name</td>
				<td>email</td>
				<td>phone</td>
				<td>message</td>
			</tr>";
		$result=mysqli_query($con,$sql1);
		while($row = mysqli_fetch_assoc($result))
		{
			gettbdata($row['Id'],$row['name'],$row['email'],$row['phone'],$row['message']);
		}
     	?>
        
    </table>

    <script>

    </script>
</body>

</html>