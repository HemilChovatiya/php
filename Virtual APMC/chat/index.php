<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual APMC Chatbot</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .user {
            background-color: #DBEAFE;
            align-items: right;
            max-width: 80%;
            margin-bottom: 3px;
            padding: 13px;
            margin-left: 20%;
            border-radius: 20px 0px 20px 20px;
        }

        .bot {
            background-color:  #DBEAFE;
            max-width:80%;
            align-items: left;
            margin-bottom: 3px;
            padding: 13px;
            border-radius: 20px 20px 20px 0px;
        }

        /* Chat container style */
        .chat-container {
            display: none;
            position: fixed;
            bottom: 35px;
            right: 140px;
            width: auto;
            min-width: 450px;
            max-height: 750px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        #chat-messages {
            overflow-y: auto;
            max-height: 350px;
        }
    </style>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'></head>
<body class="bg-gray-100">
    

    <!-- Chatbot button -->
    <button id="open-chat-btn" class="fixed bottom-10 right-10 bg-green-700  text-3xl border-none shadow-lg text-white p-4 rounded-3xl"><i class="fi fi-rr-user-robot"></i></button>

    <!-- Chat container -->
    <div class="chat-container" id="chat-container">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-800 text-white font-bold">
                Virtual APMC Chatbot
            </div>
            <div class="chat-messages px-6 py-4 overflow-y: auto;" id="chat-messages">
                <div class='bot'>Welcome to Virtual APMC</div>
                <!-- Chat messages will be appended here -->
            </div>
            <div class="chat-input px-6 py-4 flex">
                <input type="text" id="user-input" class="flex-grow rounded-lg px-3 py-2 focus:outline-none focus:ring focus:border-green-700" placeholder="Type your message...">
                <button id="send-btn" class="bg-green-700 text-white px-4 py-2 rounded-lg ml-2">Send</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript code goes here (same as previous code)

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
            
            document.getElementById("send-btn").disabled = true;
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
        document.getElementById("send-btn").disabled = false;
    }



        
    </script>
</body>
</html>
