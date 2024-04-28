<?php

//$con = mysqli_connect('localhost:3307', 'root', '','db_connect');
/*function getproduct($id,$name,$email,$phone,$message)
{
    $element1="<div class='grid-item'>
    
    <div class='card'>
     <img src='https://i.imgur.com/SZmPJ7W.jpg'>
     <img src='data:image/png;base64,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' 
     class='bottom-right' style='max-height:29px; max-width:39px;'>
     <br>
     <span>$id</span><br>
     <span>$name</span><br>
     <span>$email</span><br>
     <span>$phone</span><br>
     <span>$message</span><br>    
     </div>
     </div>
     ";
     echo $element1;
	
	
}
*/
function getproduct($id,$name,$email,$phone,$message)
{
    $element1="
    <section class='text-gray-600 body-font'>
  <div class='container px-5 py-24 mx-auto'>
    <div class='flex flex-wrap -m-4'>
      <div class='p-4 md:w-1/3'>
        <div class='h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden'>
          <img class='lg:h-48 md:h-36 w-full object-cover object-center' src='https://dummyimage.com/720x400' alt='blog'>
          <div class='p-6'>
            <h2 class='tracking-widest text-xs title-font font-medium text-gray-400 mb-1'>$id</h2>
            <h1 class='title-font text-lg font-medium text-gray-900 mb-3'>$name</h1>
            <p class='leading-relaxed mb-3'>$message</p>
            <div class='flex items-center flex-wrap '>
              <a class='text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0'>Learn More
                <svg class='w-4 h-4 ml-2' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                  <path d='M5 12h14'></path>
                  <path d='M12 5l7 7-7 7'></path>
                </svg>
              </a>
              <span class='text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200'>
                <svg class='w-4 h-4 mr-1' stroke='currentColor' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round' viewBox='0 0 24 24'>
                  <path d='M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z'></path>
                  <circle cx='12' cy='12' r='3'></circle>
                </svg>1.2K
              </span>
              <span class='text-gray-400 inline-flex items-center leading-none text-sm'>
                <svg class='w-4 h-4 mr-1' stroke='currentColor' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round' viewBox='0 0 24 24'>
                  <path d='M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z'></path>
                </svg>6
              </span>
            </div>
          </div>
        </div>
      </div>
</section>
    
    
    
    
     ";
     echo $element1;
	
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


