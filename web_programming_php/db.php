<?php 
  $host = "localhost:3307";
  $user = "root";
  $pass = "";
  $db = "db_connect";

  $con = mysqli_connect($host,$user,$pass,$db);

  if(!$con){
      die("Database Connection Error");
      die("Connection failed: " . mysqli_connect_error());
  }
else{
    // sql to create table
$sql = "CREATE TABLE contact(
  Id VARCHAR(80) NOT NULL,
  name VARCHAR(80) NOT NULL,
  email VARCHAR(80) NOT NULL,
  phone VARCHAR(80) NOT NULL,
  message VARCHAR(80) NOT NULL,
  iid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  );";
  
  if (mysqli_query($con, $sql)) {
    echo "Database Connection success and Table Contact created successfully :";
  } else {
    if(mysqli_error($con) == "Table 'contact' already exists")
    {
      echo 'Database Connection Success :';
    }
    else{
    echo "Error creating table: " . mysqli_error($con);
      }
  }
   
}


function gettbdata($id,$name,$email,$phone,$message)
{
  $element= 
  "
  
  <tr><td>$id</td>
  <td>$name</td>
  <td>$email</td>
  <td>$phone</td>
  <td>$message</td></tr>
  ";
    echo $element;
    
}

  $msg='';
  if(isset($_POST['insert'])){
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $message = $_POST['message'];
    
    
    $res = mysqli_query($con," INSERT INTO contact(Id,name,email,phone,message) VALUES('$id','$name','$email','$phone','$message') ");
    

    if($res==1){
           $msg = " inserted data Successfully";
           
    echo $msg;

    }
    else{
      $msg = " Please Enter valid details";
      
    echo $msg;
    }
  }
  $msg='';
  if(isset($_POST['delete'])){
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $message = $_POST['message'];
    
    
    $res = mysqli_query($con,"delete from contact where Id='$id' or name='$name' or email='$email' or phone='$phone' or message='$message';");
    

    if($res==1){
           $msg = " Deleted data Successfully";
           
    echo $msg;

    }
    else{
      $msg = " Please Enter valid details to delete";
      
    echo $msg;
    }
  }
	

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
    * {
        font-size: 15px;
    }

    input {
        width: 200px;
        height: 35px;
        padding: 5px;
        margin: 5px;
        font-family: 'Roboto', sans-serif;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 9px;
        box-shadow: 6px 8px 15px rgba(0, 0, 0, .2);
        transition: all 0.3s ease 0s;
        outline: solid 1px rgb(255, 255, 255);
    }

    input[type="submit"] {
        color: #fff;
        background-color: #000;
        border: none;
        border-radius: 9px;
        box-shadow: 6px 8px 15px rgba(0, 0, 0, .2);
        transition: all 0.3s ease 0s;
        outline: solid 1px rgb(255, 255, 255);
    }
  
    table,td {
      font-family: 'Roboto', sans-serif;
        font-size: 13px;
        text-transform:uppercase;
        letter-spacing: 1.5px;
        padding: 8px;
        margin: 3px;
    }
    </style>
</head>


<body>

    <form method="post">

        <input type="text" name="id" placeholder="id" />

        <input type="text" name="name" placeholder="Name" />
        <input type="email" name="email" placeholder="Email" />
        <input type="number" name="number" placeholder="number" />

        <input type="text" name="message" placeholder="message" />
        <h4>Insert Data</h4>
        <input type="submit" value="insert data" name="insert" placeholder="insert" />
        <h4>Delete Data</h4>
        <input type="submit" value="delete data" name="delete" placeholder="delete" />
    </form>

    <?php 
		$sql1 = "select * from contact;";
		
			echo ' <table width="900" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="100" height="30" bgcolor="lavender">id</td>
				<td width="1800" bgcolor="lavender">name</td>
				<td width="800" bgcolor="lavender">email</td>
				<td width="350" bgcolor="lavender">phone</td>
				<td width="1950" bgcolor="lavender">message</td>
			</tr>';
		$result=mysqli_query($con,$sql1);
		while($row = mysqli_fetch_assoc($result))
		{
			gettbdata($row['Id'],$row['name'],$row['email'],$row['phone'],$row['message']);
		}
     	?>

    </table>

</body>

</html>