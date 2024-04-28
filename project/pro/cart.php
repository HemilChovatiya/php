<?php
$con = mysqli_connect('localhost:3307', 'root', '','chemx');
if(!$con){
    die("Database Connection Error");
}
$sql1 = "select * from product";
$result=mysqli_query($con,$sql1);



function getproduct($Featured,$name,$dayago,$discrip,$warranty,$complbox,$location,$SRC){
echo '


<div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
<div>
    <img alt="person capturing an image" src="'.$SRC.'" tabindex="0" class="focus:outline-none w-full h-44" />
</div>
<div class="bg-white">
    <div class="flex items-center justify-between px-4 pt-4">
        <div>
        ❤
        </div>
        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">'.$Featured.'</p>
        </div>
    </div>
    <div class="p-4">
        <div class="flex items-center">
            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">'.$name.'</h2>
            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">'.$dayago.'</p>
        </div>
        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">'.$discrip.'</p>
        <div class="flex mt-4">
            <div>
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">'.$warranty.'</p>
            </div>
            <div class="pl-2">
                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">'.$complbox.'</p>
            </div>
        </div>
        <div class="flex items-center justify-between py-4">
            <h2 tabindex="0" class="focus:outline-none text-red-700 text-xs font-semibold">'.$location.'</h2>
            <h3 tabindex="0" class="focus:outline-none text-red-700 text-xl font-semibold"></h3>
        </div>
        <form method="post" action="inquiry.php">
        <button  type="submit" class="md:w-full h-22  bg-red-600 hover:bg-red-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-red-500 transition ease-in-out duration-300">
        inquiry now chemical
    </button></form>
    </div>
</div>
</div>


';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://cdn.tailwindcss.com/'></script>
</head>
<body>


  <!-- component -->
   <div tabindex="0" class="focus:outline-none">
            <!-- Remove py-8 -->
            <div class="mx-auto container py-8">
                <div class="flex flex-wrap items-center lg:justify-between justify-center">
                    <?php 
                        while($row = mysqli_fetch_assoc($result))
                        {
                          getproduct($row['Featured'],$row['name'],$row['dayago'],$row['discrip'],$row['warranty'],$row['complbox'],$row['location'],$row['SRC']);
                        }
                    ?>
                </div>
            </div>
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        </div>




         <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
        <script>
            if (!window.ShadyDOM) window.ShadyDOM = { force: true, noPatch: true };
        </script>
</body>
</html>