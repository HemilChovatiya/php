<?php
  session_start();
  include('admin/vendor/inc/config.php');
  
  //include('vendor/inc/checklogin.php');
  //check_login();
  //$aid=$_SESSION['a_id'];
?>
<!DOCTYPE html>
<html lang="en">
<!--Head-->
<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");
  if(isset($_POST['contactus']))
  {
          $name=$_POST['name'];
          $email = $_POST['email'];
          $tel=$_POST['tel'];
          $message=$_POST['message'];
          $query="insert into contact(name,mobile_no,email,message) values (?,?,?,?)";
          $stmt = $mysqli->prepare($query);
          $rc=$stmt->bind_param('ssss',$name , $tel,$email,$message );
          $stmt->execute();
              if($stmt)
              {
                  $succ = "Message Subitted";
                  echo '<!-- Modal toggle -->
                  <script>document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("successButton").click();
                  });</script>';
              }
              else 
              {
                  $err = "Please Try Again Later";
              }
          }
  
  ?>
<!--End Navigation-->

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('vendor/img/wheatgrain.jpg')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/redchilly.jpg')">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/ryegrain.jpg')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/dragon.jpg')">
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('vendor/img/saffron.jpg')">
        </div>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


  <div class="bg-white">
  <div class="px-4 py-16 mx-auto sm:max-w-7xl md:max-w-7xl lg:max-w-7xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-6 row-gap-10 lg:grid-cols-2" data-content="how-it-works">
      <div class="lg:py-6 lg:pr-16">
        <h2 class="mb-8 font-bold text-black text-4xl primary_text editable">How it works</h2>
        <div class="flex" data-subcontent="step_1">
          <div class="flex flex-col items-center mr-4">
            <div>
              <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                <svg class="w-4 text-green-600" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" viewBox="0 0 24 24">
                  <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                  <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                </svg>
              </div>
            </div>
            <div class="w-px h-full bg-gray-300"></div>
          </div>
          <div class="pt-1 pb-8 w-full">
            <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Sign up
              for Virtual APMC</p>
            <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">Enter your
              product information to get started with Virtual APMC.</p>
          </div>
        </div>
        <div class="flex" data-subcontent="step_2">
          <div class="flex flex-col items-center mr-4">
            <div>
              <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                <svg class="w-4 text-green-600" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" viewBox="0 0 24 24">
                  <line fill="none" stroke-miterlimit="10" x1="12" y1="2" x2="12" y2="22"></line>
                  <polyline fill="none" stroke-miterlimit="10" points="19,15 12,22 5,15"></polyline>
                </svg>
              </div>
            </div>
            <div class="w-px h-full bg-gray-300"></div>
          </div>
          <div class="pt-1 pb-8 w-full">
            <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Get
              Best pricing </p>
            <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">Receive best pricing
              from other buyer in the agriculture industry on the prices of your products.</p>
          </div>
        </div>
        <div class="flex" data-subcontent="step_3">
          <div class="flex flex-col items-center mr-4">
            <div>
              <div class="flex items-center justify-center w-10 h-10 border rounded-full">
                <svg class="w-6 text-green-600" stroke="currentColor" viewBox="0 0 24 24">
                  <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
                </svg>
              </div>
            </div>

          </div>
          <div class="pt-1 pb-0 w-full">
            <p class="mb-2 text-xl text-gray-900 font-bold primary_text editable" data-subcontent="step-title">Use
              Virtual APMC to your advantage</p>
            <p class="text-base text-gray-600 secondary_text editable" data-subcontent="step-content">Use the pricing
              of your own prices and stay competitive in the market.</p>
          </div>
        </div>
      </div>
      <div class="relative">
        <img class="inset-0 object-cover w-full rounded shadow-lg h-96 lg:absolute lg:h-full img-editable"
          src="vendor/img/nature.png" alt="chemicals">
        
      </div>
    </div>
  </div>
</div>


  <!-- Page Content -->
  
    
   


  <section>


    

      <!--sell with us-->
      <div class="bg-white">
        <br>
<div class="text-center w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
  <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl primary_text editable"
    data-content="cta">Sell your Product at Virtual APMC</h2>
  <h2 class="text-3xl font-extrabold text-gray-800 dark:text-white sm:text-4xl mt-1 primary_text editable">
    Start adding your product at free of cost
  </h2>
  <p class="text-xl mt-4 max-w-md mx-auto text-gray-400 secondary_text editable"
    data-content="website-subheadlines">Virtual APMC provides agriculture wholesaler/trader, sell at your price,
    helping to keep your business competitive.</p>
</div>
<br>
<!-- Marketing Icons Section -->
<div class="item-center grid grid-cols-4 grid-rows-1 gap-4">
        <div></div>
        <div class="justify-center card h-100 w-fit">
          <a  class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:no-underline hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Why Us</h5>
              <p class="font-normal text-gray-700 dark:text-gray-400">We create accountability in the transport sector, enhance mobility and ease of accessing various transport modes</p>
          </a>          
        </div>
      
        <div class="justify-center card h-100 w-fit">
          <a  class="block max-w-sm p-6 h-100 bg-white border border-gray-200 rounded-lg shadow hover:no-underline hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Core Values</h5>
              <p class="font-normal text-gray-700 dark:text-gray-400">Excellence, Trust and Openness, Integrity, Take Responsibility, Customer Orientation</p>
          </a>    
        </div>
      </div>

<br>
</div>
    

   <!-- testinomial -->

<div class="w-full bg-green-50 sm:py-16 py-12 mt-2 md:py-20 relative">
  <div class="max-w-7xl mx-auto px-10">
    <div class="flex flex-col mb-7 sm:mb-16 items-start md:items-center justify-center">
      <p class="sm:tracking-widest sm:text-base text-sm uppercase font-medium text-green-600 primary_text editable">
        What people are saying about us</p>
      <h2
        class="text-gray-900 mt-2 text-2xl sm:text-4xl tracking-tight font-bold sm:font-extrabold md:text-5xl dark:text-white primary_text editable">
        Do not just take our word for it.</h2>
    </div>
    <div class="grid grid-cols-3 grid-rows-2 gap-4 h-auto">
      
      
      <?php

          $ret="SELECT * FROM tms_feedback where f_status ='Published' ORDER BY RAND() LIMIT 6 "; //get all feedbacks
          $stmt= $mysqli->prepare($ret) ;
          $stmt->execute() ;//ok
          $res=$stmt->get_result();
          $cnt=1;
          while($row=$res->fetch_object())
          {
          ?>
        <div class="h-auto bg-white rounded-xl shadow-sm p-6 relative bg-editable">
          <div class="flex items-center border-b relative border-gray-100 border-solid pb-5 mb-5">
            <img src="profile.png"
              class="object-cover is_avatar rounded-full border-solid mr-3 w-12 h-12 img-editable">
            <div class="relative">
              <p class="font-semibold capitalize text-gray-600 leading-none my-1"><?php echo $row->f_uname;?></p>
              <p class="font-medium text-sm text-gray-400">Buyer</p>
            </div>
          </div>
          <p class="text-gray-500 z-10 leading-6 capitalize text-base relative bg-transparent shadow-none p-0"
            data-content="testimonials"><?php echo $row->f_content;?></p>
          <svg class="h-auto absolute z-0 top-0 right-0 w-12 opacity-30 mt-6 mr-7 text-green-300" fill="currentColor"
            viewBox="0 0 32 32" aria-hidden="true">
            <path
              d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z">
            </path>
          </svg>
        </div>
       <?php } ?>
      

  </div>
  
</div>
<!-- <div class="bg-gradient-to-t from-green-50 h-80 w-full bottom-0 left-0 absolute z-20 flex items-end justify-center">
  </div> -->
</div>
  


<div class="relative flex items-top justify-center min-h-screen bg-white dark:bg-gray-900 sm:items-center sm:pt-0">
  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden">
          <div class="grid grid-cols-1 md:grid-cols-2">
              <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
                  <a href="#"
                  class="flex items-center order-first font-medium hover:no-underline text-gray-900 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center">
                  <span class="text-4xl font-black leading-none text-gray-900 select-none logo"><i class="fi fi-rr-wheat text-green-800"></i> Virtual APMC</span>
                  </a>
                  <br><hr><br>
                  <h1 class="text-center text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">
                      Get in touch
                  </h1>
                  <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">
                      Fill in the form to start a conversation
                  </p>

                  <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                      </svg>
                      <div class="ml-4 text-md tracking-wide font-semibold w-40">
                        Surat, Gujarat, India,
                        395006
                        
                        <!--  Acme Inc, Street, State,
                          Postal Code-->
                      </div>
                  </div>

                  <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                      </svg>
                      <div class="ml-4 text-md tracking-wide font-semibold w-40">
                          +91 9898989898
                      </div>
                  </div>

                  <div class="flex items-center mt-2 text-gray-600 dark:text-gray-400">
                      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                      </svg>
                      <div class="ml-4 text-md tracking-wide font-semibold w-40">
                          info@virtualapmc.com
                      </div>
                  </div>
              </div>

              <form class="p-6 flex flex-col justify-center" method="post">
                  <div class="flex flex-col">
                      <label for="name" class="hidden">Full Name</label>
                      <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-green-500 focus:outline-none">
                  </div>

                  <div class="flex flex-col mt-2">
                      <label for="email" class="hidden">Email</label>
                      <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-green-500 focus:outline-none">
                  </div>

                  <div class="flex flex-col mt-2">
                      <label for="tel" class="hidden">Number</label>
                      <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 font-semibold focus:border-green-500 focus:outline-none">
                  </div>

                  <div class="flex flex-col mt-3">
                    <label for="name" class="hidden">Message </label>
                    <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Write your Message here..."></textarea>
                   </div>

                   
                   <div class="flex flex-col items-center">
                   <button type="submit" name="contactus" class="md:w-32 bg-green-600 hover:bg-green-dark text-white font-bold py-3 px-6 rounded-lg mt-3 hover:bg-green-500 transition ease-in-out duration-300">
                      Submit
                  </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>


<div class="flex justify-center m-5">
                        <button id="successButton" data-modal-toggle="successModal" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                        Show success message
                        </button>
                    </div>
                    
                    <!-- Main modal -->
                    <div id="successModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="successModal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="w-12 h-12 rounded-full bg-green-100 dark:bg-green-900 p-2 flex items-center justify-center mx-auto mb-3.5">
                                    <svg aria-hidden="true" class="w-8 h-8 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Success</span>
                                </div>
                                <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Successfully Message Sent.</p>
                                <button data-modal-toggle="successModal" type="button" class="py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:focus:ring-primary-900">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </div>
  <!-- /.container -->
 </section>




           <!-- Chatbot button -->
    <button id="open-chat-btn" class="fixed bottom-10 right-10 bg-green-700  text-xl border-none shadow-lg text-white p-3 rounded-xl focus:outline-none"><i class="fi fi-rr-user-robot"></i></button>

<!-- Chat container -->
<div class="chat-container" id="chat-container">
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="px-6 py-4 bg-green-800 text-white font-bold">
            Virtual APMC Chatbot
        </div>
        <div class="chat-messages px-6 py-4 overflow-y: auto;" id="chat-messages">
            <div class='bot'>Welcome to Virtual APMC</div>
            <!-- Chat messages will be appended here -->
        </div>
        <div class="chat-input px-6 py-4 flex">
            <input type="text" id="user-input" class="flex-grow rounded-lg px-3 py-2 focus:outline-none" placeholder="Type your message...">
            <button id="send-btn" class="bg-green-700 text-white px-4 py-2 hover:bg-green-800 rounded-lg ml-2">Send</button>
        </div>
    </div>
</div>

  <!-- Footer -->
    <?php include("vendor/inc/footer.php");?>
  <!--.Footer-->
  <script>
    
        // Toggle chat container visibility when clicking the chatbot button
        const openChatBtn = document.getElementById("open-chat-btn");
        const chatContainer = document.getElementById('chat-container');

        openChatBtn.addEventListener('click', () => {
            chatContainer.style.display = chatContainer.style.display === 'block' ? 'none' : 'block';
        });

        const chatMessages = document.getElementById('chat-messages');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');

        sendBtn.addEventListener('click', () => {
            const userMessage = userInput.value.trim();

            if (userMessage !== '') {
                appendMessage('user', userMessage);
                userInput.value = '';

                // Send user message to the chatbot backend
                fetch('chatbot.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `userInput=${encodeURIComponent(userMessage)}`,
                })
                .then(response => response.json())
                .then(data => {
                    const botResponse = data.botResponse;
                    appendMessage('bot', botResponse);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
     
        userInput.addEventListener("keypress", function(event) {
            // If the user presses the "Enter" key on the keyboard
            if (event.key === "Enter") {
                // Cancel the default action, if needed
                event.preventDefault();
                // Trigger the button element with a click
                document.getElementById("send-btn").click();
            }
            });
        function appendMessage(sender, message) {
            
          if(sender=='user'){

console.log(sender);
const messageDiv = document.createElement('div');
messageDiv.classList.add('message', sender);
messageDiv.textContent = message;
chatMessages.appendChild(messageDiv);
// Scroll to the bottom of the chat container
chatMessages.scrollTop = chatMessages.scrollHeight;
}
else{


const messageDiv = document.createElement('div');
messageDiv.classList.add('message', sender);
// messageDiv.textContent = message;
chatMessages.appendChild(messageDiv);

function printLetterByLetter(destination, message, speed){
    var i = 0;
    var interval = setInterval(function(){
        messageDiv.innerHTML += message.charAt(i);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        i++;
        if (i > message.length){
            clearInterval(interval);
        }
    }, speed);
    
    
}
printLetterByLetter(messageDiv,message, 30);
// Scroll to the bottom of the chat container

chatMessages.scrollTop = chatMessages.scrollHeight;



}
        }
  </script>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>

</body>

</html>
