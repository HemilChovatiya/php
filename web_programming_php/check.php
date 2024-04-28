<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="post">
    <input placeholder="Enter Number" name="number" type="number" class="no">
    <input type='submit'>
     </form>
</body>
</html>
<?php
if($_POST)
{
$a=$_POST["number"]; 
$p=0;
for($i=1;$i<=$a;$i++)
  {
    if($a % $i == 0)
     {
       $p++;
     }
  }
if($p==2)
    {
       echo "<br>".$a." is a Prime Number";
    }
else 
    {
        echo "<br>".$a." is not a Prime Number";
    }
} ?>