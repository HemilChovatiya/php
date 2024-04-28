<?PHP

$name = $_POST['myname'];
$email = $_POST['myemail'];
$gender = $_POST['mygender'];
$age = $_POST['myage'];
$car = $_POST['mycar'];

  if (!empty($name) || !empty($email) || !empty($gender) || !empty($age) || !empty($car) )
     {
         //create connection
 
        $conn = new mysqli('localhost:3307','root','','register');
          if (mysqli_connect_error())
            { echo '1';
           die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
            }
          else
             {
           $SELECT = "SELECT NAME FROM car WHERE NAME = ? Limit 1";
	         $INSERT = "INSERT INTO car(NAME,EMAIL,GENDER,AGE,CAR) VALUES (?,?,?,?,?)";

           //prepare statement
           $stmt = $conn->prepare($SELECT);
           $stmt->bind_param("s",$name);
           $stmt->execute();
           $stmt->bind_result($name);
           $stmt->store_result();
           $rnum = $stmt->num_rows;
           echo '2';
               if ($rnum==0)
                  {
                 $stmt->close();
                 $stmt = $conn->prepare($INSERT);
                 $stmt->bind_param("sssis",$name,$email,$gender,$age,$car);
 		             $stmt->execute();
                  echo "New Record inserted successfully";
                   }
               else
                {
                  echo "Someone Alreaady Registered throught this name";
                }
               $stmt->close();
               $conn->close(); 
             }
     }
     else
      {
        echo "All field are Rerquired"; 
        die();
      }


?>