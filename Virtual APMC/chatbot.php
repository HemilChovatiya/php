
<?php
/*
// Define intents and their corresponding responses
$intents = [
    'greeting' => "Hello! How can I assist you today?",
    'market_prices' => "The current market prices for various crops are...",
    'crop_advice' => "For crop cultivation advice, I recommend...",
    'documents' => "To sell at the APMC, you need to prepare the following documents...",
    'hi' => 'Hello! Welcome to the Virtual APMC chatbot. How can I assist you today?',
    'market prices' => 'Sure! The current market prices for various crops are as follows: [Provide recent price information for different crops].',
    'crop advice' => 'Absolutely! For growing tomatoes, consider these tips: [Provide advice on soil, water, sunlight, etc.].',
    'selling procedures' => 'To sell your produce at the APMC, you\'ll need to follow these steps: [Provide a step-by-step guide on selling procedures and required documents].',
    'transportation and logistics' => 'Transporting your crops can be done through [mention available transportation options and logistics].',
    'government schemes' => 'Certainly! There are several government schemes and subsidies available for farmers. Some of them include [mention specific schemes and their benefits].',
    'weather updates' => 'I can provide you with the latest weather updates. Where are you located?',
    'market regulations' => 'The APMC has certain regulations in place, including [mention key regulations and guidelines].',
    'financial assistance' => 'You can explore financial assistance options such as [mention available financial support, loans, and credit opportunities].',
    'commodity rates' => 'The current rates for wheat are [mention price]. For rice, the rate is [mention price].',
    'crop diseases' => 'Be on the lookout for common crop diseases like [mention diseases] and take preventive measures such as [mention preventive techniques].',
    'organic farming' => 'Organic farming practices involve [mention practices] which can help enhance soil fertility and produce healthier crops.',
    'irrigation methods' => 'Different irrigation methods such as [mention methods] can be used to efficiently water your crops and maximize yield.',
    'storage tips' => 'Proper storage of harvested crops is crucial. For example, [mention tips] can help extend the shelf life of your produce.',
    'pest control' => 'Integrated pest management (IPM) involves [mention IPM strategies] to control pests and minimize chemical use.',
    'best time to plant' => 'The ideal planting time for [mention crops] is usually [mention timeframe] to ensure optimal growth and yield.',
    'soil testing' => 'Regular soil testing is recommended to determine soil nutrient levels and pH. This helps in [mention benefits].',
    'market trends' => 'Recent market trends indicate [mention trends] which can influence your selling decisions.',
    'crop rotation' => 'Crop rotation, such as [mention rotation patterns], can improve soil health and reduce pest problems.',
    'government subsidies' => 'Government offers subsidies for [mention specific subsidies] which can reduce your farming expenses.',
    'fertilizer usage' => 'Applying the right type and amount of fertilizers, like [mention fertilizers], can enhance crop growth and yield.',
    'harvesting techniques' => 'Proper harvesting techniques, such as [mention techniques], ensure that your crops are picked at the right time for quality produce.',
    'post-harvest handling' => 'After harvesting, it\'s important to [mention post-harvest practices] to maintain the freshness and quality of your crops.',
    'quality standards' => 'APMC adheres to quality standards that include [mention specific standards] to ensure fair and consistent trade.',
    'market demand' => 'Understanding market demand for [mention crops] can help you plan your production and make informed decisions.',
    'seasonal crops' => 'Certain crops like [mention crops] are seasonal and have specific planting and harvesting periods.',
    'record keeping' => 'Maintaining accurate records of your farming activities and transactions is important for [mention benefits].',
    'pesticide usage' => 'Using pesticides like [mention pesticides] should be done responsibly and following recommended guidelines.',
    'market opportunities' => 'Exploring diverse market opportunities, such as [mention opportunities], can expand your sales and profit potential.',
    'resource management' => 'Efficient management of resources like water, energy, and labor is key to sustainable and profitable farming.',
    'certification programs' => 'Consider participating in certification programs like [mention programs] to enhance the value of your produce.',
    'farm diversification' => 'Diversifying your farm products, for example by [mention diversification strategies], can help mitigate risks and boost income.',
    'organic certification' => 'Obtaining organic certification, like [mention certification processes], can add value to your organic produce.',
    'market forecasts' => 'Predicted market trends for [mention crops] indicate [mention forecasts], which can help you make informed decisions.',
    'water conservation' => 'Implementing water conservation methods, such as [mention techniques], is crucial for sustainable farming.',
    'crop insurance' => 'Crop insurance programs like [mention programs] can provide financial protection against unexpected losses.',
    'land preparation' => 'Proper land preparation techniques, such as [mention techniques], create a favorable environment for crop growth.',
    'seed selection' => 'Choosing the right seeds, like [mention seed varieties], is essential for achieving high-quality and productive crops.',
    'market access' => 'Improving your market access through [mention strategies], can help you reach a wider customer base.',
    'soil amendments' => 'Using soil amendments, like [mention amendments], can enhance soil fertility and nutrient levels.',
    'entrepreneurship' => 'Exploring agricultural entrepreneurship, such as [mention opportunities], can open new avenues for income.',
    'compliance guidelines' => 'Adhering to APMC compliance guidelines, such as [mention guidelines], ensures fair trade and transparency.',
    'farming technology' => 'Adopting modern farming technologies, like [mention technologies], can increase efficiency and yield.',
   'crop storage' => 'Proper crop storage methods, such as [mention storage techniques], can help prevent spoilage and maintain quality.',
    'pest identification' => 'Identifying and managing pests, such as [mention common pests], is essential for healthy crop growth.',
    'fertilizer application' => 'Applying fertilizers correctly, like [mention application methods], ensures optimal nutrient supply to your crops.',
    'crop selection' => 'Choosing suitable crops based on [mention factors], like climate and soil, is crucial for successful cultivation.',
    'market diversification' => 'Diversifying your market outlets, such as [mention strategies], reduces dependency on a single sales channel.',
    'livestock integration' => 'Integrating livestock, like [mention livestock types], with your crops can enhance farm sustainability.',
    'record management' => 'Organizing farm records electronically using tools like [mention software], streamlines your management process.',
    'agricultural education' => 'Continuously educating yourself about modern farming practices, like [mention resources], is beneficial for growth.',
    'sustainable practices' => 'Adopting sustainable practices, such as [mention practices], contributes to long-term environmental and economic health.',
    'harvest optimization' => 'Optimizing harvest timing, such as [mention strategies], maximizes yield and quality.',
    'market networking' => 'Building a strong network of market contacts, such as [mention organizations], can facilitate smoother trade.',
    'crop varieties' => 'There are various crop varieties available for [mention crops], including [mention popular varieties].',
    'planting techniques' => 'Optimal planting techniques, like [mention techniques], contribute to successful crop establishment.',
    'crop diseases' => 'Common crop diseases affecting [mention crops] include [mention diseases]. Applying [mention disease management] can help prevent them.',
    'product labeling' => 'Proper product labeling, including [mention labeling requirements], ensures clear and accurate information for consumers.',
    'harvesting guidelines' => 'Follow proper harvesting guidelines, such as [mention practices], to avoid damage and maintain product quality.',
    'product packaging' => 'Effective product packaging, like [mention packaging options], enhances market appeal and protects your produce.',
    'certified seeds' => 'Using certified seeds, like [mention certified seed sources], ensures consistent crop quality and performance.',
    'post-harvest treatments' => 'Implementing post-harvest treatments, like [mention treatments], extends the shelf life and freshness of your products.',
    'quality assurance' => 'Adhering to quality assurance standards, such as [mention standards], guarantees that your products meet industry norms.',
    'product differentiation' => 'Highlighting unique qualities, such as [mention qualities], can set your products apart and attract discerning buyers.',
    'product traceability' => 'Implementing product traceability systems, like [mention tracking methods], enhances transparency and consumer trust.',
    'how are you' => 'I\'m here to assist you with any agricultural queries you have. How can I help you today?',
    'good morning' => 'Good morning! How can I assist you on this fine day?',
    'good afternoon' => 'Good afternoon! How may I be of service to you?',
    'good evening' => 'Good evening! I\'m here to provide information and support.',
    'welcome back' => 'Welcome back! How can I assist you further?',
    'how\'s the day' => 'The day is going well, and I\'m here to help you with any agricultural-related questions.',
    'how\'s it going' => 'It\'s going well, thank you! How can I assist you with your farming needs?',
    'nice to see you' => 'It\'s always a pleasure to be of service. How can I support you today?',
    'hello again' => 'Hello again! How can I provide you with guidance and information?',
    'greetings' => 'Greetings! I\'m ready to help you with any inquiries you may have about farming and markets.',
    'how\'s your day' => 'My day is dedicated to assisting you. How can I assist you today?',
    'thank you' => 'You\'re welcome! If you have any more questions or need assistance, feel free to ask.',
    'thanks a lot' => 'You\'re welcome! It\'s my pleasure to help. If you need further support, don\'t hesitate to ask.',
    'thanks so much' => 'You\'re welcome! If there\'s anything else you need, feel free to reach out.',
    'thank you very much' => 'You\'re very welcome! I\'m here to assist you whenever you need information or guidance.',
    'appreciate it' => 'You\'re welcome! If there\'s anything else I can do for you, just let me know.',
    'grateful' => 'I\'m here to help, and I\'m glad I could assist you. Feel free to ask if you have more questions.',
    'much obliged' => 'I\'m always here to help. If you need anything else, don\'t hesitate to ask.',
    'thank you for your help' => 'You\'re welcome! Helping you is what I\'m here for. If you have more inquiries, feel free to ask.',
    'thanks for the information' => 'You\'re welcome! If you require any more information, don\'t hesitate to get in touch.',
    'thank you for your support' => 'You\'re welcome! I\'m here to support you in any way I can. If you need assistance, just ask.',
    'current market trends' => 'The current market trends for [mention crops] suggest [mention trends], which can impact your farming decisions.',
    'emerging agricultural technologies' => 'Emerging technologies like [mention technologies] are shaping the future of agriculture, offering [mention benefits].',
    'sustainable farming practices' => 'Sustainable farming practices, such as [mention practices], are gaining traction due to their positive environmental impact.',
    'market demand shifts' => 'Market demand is shifting towards [mention trends], creating opportunities for farmers to diversify their produce.',
    'digital agriculture advancements' => 'Digital agriculture advancements, like [mention advancements], are transforming how farmers manage their operations.',
    'local and organic movement' => 'Consumers are increasingly demanding [mention products] due to the growing interest in local and organic produce.',
    'agritech startups' => 'Agritech startups, such as [mention startups], are introducing innovative solutions to address challenges in the agricultural sector.',
    'alternative farming methods' => 'Alternative farming methods like [mention methods] are gaining attention for their potential to boost yields and conserve resources.',
    'climate-resilient practices' => 'Climate-resilient practices, like [mention practices], are becoming essential as farmers adapt to changing weather patterns.',
    'market shifts due to COVID-19' => 'The COVID-19 pandemic has influenced market dynamics, with [mention changes] impacting supply chains and consumer preferences.',
    'agricultural sustainability trends' => 'Agricultural sustainability trends focus on [mention key areas], contributing to long-term environmental and economic viability.',
    'booking a market stall' => 'To book a market stall at APMC, please follow these steps: [mention booking process] or visit our website for online booking options.',
    'appointment with an expert' => 'You can schedule an appointment with our agricultural expert by [mention appointment scheduling options]. They can provide personalized guidance for your farming needs.',
    'market visit reservation' => 'If you plan to visit the APMC market, you can reserve your visit by [mention reservation process]. This ensures a smooth experience during your visit.',
    'farm equipment rental' => 'Need to rent farm equipment? You can book equipment such as [mention equipment] by [mention booking process] to help with your agricultural tasks.',
    'booking a training workshop' => 'Interested in attending a training workshop? You can secure your spot by [mention workshop booking options]. Learn valuable skills for your farm.',
    'consultation appointment' => 'Book a consultation appointment to discuss your specific farming challenges and goals. [mention booking process] to get started.',
    'crop inspection request' => 'Schedule a crop inspection for your farm by [mention inspection booking options]. Our experts will assess your crops and provide recommendations.',
    'virtual market tour' => 'Explore the APMC market through a virtual tour. Book your virtual tour slot by [mention booking process] to learn about market operations.',
    'product showcase space' => 'Interested in showcasing your products at the APMC market? Reserve your product showcase space by [mention booking options].',
    'agricultural event registration' => 'Register for upcoming agricultural events by [mention event registration process]. Stay informed about industry developments and networking opportunities.',
    'market orientation session' => 'New to the APMC market? Attend a market orientation session. Book your session by [mention booking process] to learn about market procedures.',
    'agricultural consulting services' => 'Our agricultural consulting services offer expertise in [mention consulting areas]. We can provide tailored advice to help optimize your farming practices.',
    'expert consultation request' => 'Looking for expert advice? You can request a consultation with our agricultural expert by [mention consultation request process].',
    'crop disease consultation' => 'Experiencing crop diseases? Our experts can provide consultations on diagnosing and managing [mention crop diseases].',
    'soil fertility consultation' => 'Optimize your soil fertility with our consultation services. Learn about soil testing, nutrient management, and [mention consulting details].',
    'market strategy consultation' => 'Develop a market strategy for your produce. Our consultants can guide you in [mention market strategy areas] to enhance your sales.',
    'sustainable farming consultation' => 'Explore sustainable farming practices with our consultation. Discover methods for [mention sustainable farming practices] to benefit your farm.',
    'business planning consultation' => 'Planning to expand your agricultural business? Our consultants can assist in [mention business planning areas] to ensure successful growth.',
    'crop rotation consultation' => 'Learn about effective crop rotation practices. Our consultants can advise on [mention crop rotation benefits and strategies].',
    'livestock management consultation' => 'Enhance your livestock management skills. Our consultants offer insights into [mention livestock management areas] for healthier livestock.',
    'financial consulting for farmers' => 'Get financial guidance tailored for farmers. Our consultants can help with [mention financial consulting areas] to improve your financial well-being.',
    'pest control consultation' => 'Facing pest challenges? Our consultants can recommend integrated pest management strategies for [mention pest control areas].',
    'advantages of using the chatbot' => 'Using our chatbot offers several advantages, including [mention advantages]. It\'s a convenient way to access information and support.',
    'time-saving benefits' => 'Our chatbot saves you time by quickly providing answers to your agricultural queries, allowing you to focus more on farming.',
    '24/7 availability' => 'The chatbot is available 24/7, ensuring you can get assistance and information whenever you need it, day or night.',
    'personalized recommendations' => 'Receive personalized crop advice, market insights, and recommendations tailored to your specific farming needs.',
    'up-to-date information' => 'Stay informed with the latest market prices, trends, and news in the agricultural industry, helping you make informed decisions.',
    'easy access to resources' => 'Access a wealth of resources, such as guides, tutorials, and documents, to enhance your farming knowledge and skills.',
    'cost-effective support' => 'Our chatbot offers cost-effective support by providing valuable information and guidance without the need for additional expenses.',
    'increased market visibility' => 'Showcase your products to a wider audience through the chatbot, increasing your market visibility and potential sales.',
    'expert advice at your fingertips' => 'Get expert advice and insights from agricultural specialists without the need for in-person consultations.',
    'real-time market insights' => 'Receive real-time updates on market trends, demand, and supply, helping you make strategic decisions for your produce.',
    'environmental sustainability benefits' => 'Implementing sustainable farming practices based on chatbot recommendations contributes to long-term environmental well-being.',
    'awareness about sustainable farming' => 'Learn about the benefits of sustainable farming practices, such as [mention benefits], and how they contribute to a healthier environment.',
    'promoting local produce' => 'Discover the importance of supporting local produce and its positive impact on local economies and communities.',
    'water conservation awareness' => 'Understand the significance of water conservation in agriculture and learn practical methods to conserve water on your farm.',
    'climate change and farming' => 'Explore the effects of climate change on agriculture and discover adaptive strategies to mitigate its impact on your crops.',
    'reducing food waste' => 'Learn about the importance of reducing food waste and how you can minimize waste in your farming and post-harvest practices.',
    'benefits of organic farming' => 'Discover the advantages of organic farming, including improved soil health, reduced chemical exposure, and healthier produce.',
    'market diversification benefits' => 'Explore the benefits of diversifying your market outlets and how it can help you reach new customers and enhance your sales.',
    'innovative farming technologies' => 'Stay informed about innovative farming technologies, such as [mention technologies], and their potential to revolutionize agriculture.',
    'empowering women in agriculture' => 'Learn about the role of women in agriculture, their contributions, and the importance of empowering women farmers.',
    'impact of sustainable packaging' => 'Understand the environmental impact of packaging materials and explore sustainable packaging options for your produce.',
    'benefits of crop rotation' => 'Discover the advantages of crop rotation, including improved soil fertility, reduced pest pressure, and higher yields.',
    'greeting' => 'Hello! Welcome to the Virtual APMC chatbot. How can I assist you today?',
    'market prices' => 'Sure! The current market prices for various crops are as follows: [Provide recent price information for different crops].',
    'crop advice' => 'Absolutely! For growing tomatoes, consider these tips: [Provide advice on soil, water, sunlight, etc.].',
    'selling procedures' => 'To sell your produce at the APMC, you\'ll need to follow these steps: [Provide a step-by-step guide on selling procedures and required documents].',
    'transportation and logistics' => 'Transporting your crops can be done through [mention available transportation options and logistics].',
    'government schemes' => 'Certainly! There are several government schemes and subsidies available for farmers. Some of them include [mention specific schemes and their benefits].',
    'current market trends' => 'The current market trends for [mention crops] suggest [mention trends], which can impact your farming decisions.',
    'booking a market stall' => 'To book a market stall at APMC, please follow these steps: [mention booking process] or visit our website for online booking options.',
    'agricultural consulting services' => 'Our agricultural consulting services offer expertise in [mention consulting areas]. We can provide tailored advice to help optimize your farming practices.',
    'advantages of using the chatbot' => 'Using our chatbot offers several advantages, including [mention advantages]. It\'s a convenient way to access information and support.',
    'awareness about sustainable farming' => 'Learn about the benefits of sustainable farming practices, such as [mention benefits], and how they contribute to a healthier environment.',
    
    
];

// Get user input from POST request
$userInput = isset($_POST['userInput']) ? strtolower($_POST['userInput']) : '';

// Default response if intent is not recognized
$botResponse = "I'm sorry, I couldn't understand your request. Can you please rephrase it?";

// Check if the user's input matches any intent
foreach ($intents as $intent => $response) {
    if (strpos($userInput, $intent) !== false) {
        $botResponse = $response;
        break;
    }
}

// Return the bot's response as JSON
$response = [
    'botResponse' => $botResponse
];

header('Content-Type: application/json');
echo json_encode($response);
*/?>

<?php

// Define a list of pattern-response pairs for the chatbot
 $pairs = array(
    array(
        "hello",
        array("Hello! Welcome to the Virtual APMC chatbot. How can I assist you today?")
    ),
    array(
        "hi",
        array("Hi! Welcome to the Virtual APMC chatbot. How can I assist you today?")
    ),
    array(
        "how are you|how's it going",
        array("I'm just a chatbot, but I'm here to assist you.", "I'm doing well, thank you!")
    ),
    array(
        "bye|goodbye",
        array("Goodbye! Have a great day.", "See you later!", "Take care!")
    ),
    array(
        "greeting",
        array("Hello! Welcome to the Virtual APMC chatbot. How can I assist you today?")
    ),
    array(
        "market prices",
        array("Sure! The current market prices for various crops are as follows: [Provide recent price information for different crops].")
    ),
    array(
        "crop advice",
        array("Absolutely! For growing tomatoes, consider these tips: [Provide advice on soil, water, sunlight, etc.].")
    ),
    array(
        "selling procedures",
        array("To sell your produce at the APMC, you'll need to follow these steps: [Provide a step-by-step guide on selling procedures and required documents].")
    ),
    array(
        "transportation and logistics",
        array("Transporting your crops can be done through [mention available transportation options and logistics].")
    ),
    array(
        "government schemes",
        array("Certainly! There are several government schemes and subsidies available for farmers. Some of them include [mention specific schemes and their benefits].")
    ),
    array(
        "weather updates",
        array("I can provide you with the latest weather updates. Where are you located?")
    ),
    array(
        "market regulations",
        array("The APMC has certain regulations in place, including [mention key regulations and guidelines].")
    ),
    array(
        "financial assistance",
        array("You can explore financial assistance options such as [mention available financial support, loans, and credit opportunities].")
    ),
    array(
        "commodity rates",
        array("The current rates for wheat are [mention price]. For rice, the rate is [mention price].")
    ),
    array(
        "crop diseases",
        array("Be on the lookout for common crop diseases like [mention diseases] and take preventive measures such as [mention preventive techniques].")
    ),
    array(
        "organic farming",
        array("Organic farming practices involve [mention practices] which can help enhance soil fertility and produce healthier crops.")
    ),
    array(
        "irrigation methods",
        array("Different irrigation methods such as [mention methods] can be used to efficiently water your crops and maximize yield.")
    ),
    array(
        "storage tips",
        array("Proper storage of harvested crops is crucial. For example, [mention tips] can help extend the shelf life of your produce.")
    ),
    array(
        "pest control",
        array("Integrated pest management (IPM) involves [mention IPM strategies] to control pests and minimize chemical use.")
    ),
    array(
        "best time to plant",
        array("The ideal planting time for [mention crops] is usually [mention timeframe] to ensure optimal growth and yield.")
    ),
    array(
        "soil testing",
        array("Regular soil testing is recommended to determine soil nutrient levels and pH. This helps in [mention benefits].")
    ),
    array(
        "market trends",
        array("Recent market trends indicate [mention trends] which can influence your selling decisions.")
    ),
    array(
        "crop rotation",
        array("Crop rotation, such as [mention rotation patterns], can improve soil health and reduce pest problems.")
    ),
    array(
        "government subsidies",
        array("Government offers subsidies for [mention specific subsidies] which can reduce your farming expenses.")
    ),
    array(
        "fertilizer usage",
        array("Applying the right type and amount of fertilizers, like [mention fertilizers], can enhance crop growth and yield.")
    ),
    array(
        "harvesting techniques",
        array("Proper harvesting techniques, such as [mention techniques], ensure that your crops are picked at the right time for quality produce.")
    ),
    array(
        "post-harvest handling",
        array("After harvesting, it's important to [mention post-harvest practices] to maintain the freshness and quality of your crops.")
    ),
    array(
        "quality standards",
        array("APMC adheres to quality standards that include [mention specific standards] to ensure fair and consistent trade.")
    ),
    array(
        "market demand",
        array("Understanding market demand for [mention crops] can help you plan your production and make informed decisions.")
    ),
    array(
        "seasonal crops",
        array("Certain crops like [mention crops] are seasonal and have specific planting and harvesting periods.")
    ),
    array(
        "record keeping",
        array("Maintaining accurate records of your farming activities and transactions is important for [mention benefits].")
    ),
    array(
        "pesticide usage",
        array("Using pesticides like [mention pesticides] should be done responsibly and following recommended guidelines.")
    ),
    array(
        "market opportunities",
        array("Exploring diverse market opportunities, such as [mention opportunities], can expand your sales and profit potential.")
    ),
    array(
        "resource management",
        array("Efficient management of resources like water, energy, and labor is key to sustainable and profitable farming.")
    ),
    array(
        "certification programs",
        array("Consider participating in certification programs like [mention programs] to enhance the value of your produce.")
    ),
    array(
        "farm diversification",
        array("Diversifying your farm products, for example by [mention diversification strategies], can help mitigate risks and boost income.")
    ),
    array(
        "organic certification",
        array("Obtaining organic certification, like [mention certification processes], can add value to your organic produce.")
    ),
    array(
        "market forecasts",
        array("Predicted market trends for [mention crops] indicate [mention forecasts], which can help you make informed decisions.")
    ),
    array(
        "water conservation",
        array("Implementing water conservation methods, such as [mention techniques], is crucial for sustainable farming.")
    ),
    array(
        "crop insurance",
        array("Crop insurance programs like [mention programs] can provide financial protection against unexpected losses.")
    ),
    array(
        "land preparation",
        array("Proper land preparation techniques, such as [mention techniques], create a favorable environment for crop growth.")
    ),
    array(
        "market access",
        array("Improving your market access through [mention strategies], can help you reach a wider customer base.")
    ),
    array(
        "soil amendments",
        array("Using soil amendments, like [mention amendments], can enhance soil fertility and nutrient levels.")
    ),
    array(
        "entrepreneurship",
        array("Exploring agricultural entrepreneurship, such as [mention opportunities], can open new avenues for income.")
    ),
    array(
        "compliance guidelines",
        array("Adhering to APMC compliance guidelines, such as [mention guidelines], ensures fair trade and transparency.")
    ),
    array(
        "farming technology",
        array("Adopting modern farming technologies, like [mention technologies], can increase efficiency and yield.")
    ),
    array(
        "crop storage",
        array("Proper crop storage methods, such as [mention storage techniques], can help prevent spoilage and maintain quality.")
    ),
    array(
        "pest identification",
        array("Identifying and managing pests, such as [mention common pests], is essential for healthy crop growth.")
    ),
    array(
        "fertilizer application",
        array("Applying fertilizers correctly, like [mention application methods], ensures optimal nutrient supply to your crops.")
    ),
    array(
        "crop selection",
        array("Choosing suitable crops based on [mention factors], like climate and soil, is crucial for successful cultivation.")
    ),
    array(
        "market diversification",
        array("Diversifying your market outlets, such as [mention strategies], reduces dependency on a single sales channel.")
    ),
    array(
        "livestock integration",
        array("Integrating livestock, like [mention livestock types], with your crops can enhance farm sustainability.")
    ),
    array(
        "record management",
        array("Organizing farm records electronically using tools like [mention software], streamlines your management process.")
    ),
    array(
        "agricultural education",
        array("Continuously educating yourself about modern farming practices, like [mention resources], is beneficial for growth.")
    ),
    array(
        "sustainable practices",
        array("Adopting sustainable practices, such as [mention practices], contributes to long-term environmental and economic health.")
    ),
    array(
        "harvest optimization",
        array("Optimizing harvest timing, such as [mention strategies], maximizes yield and quality.")
    ),
    array(
        "market networking",
        array("Building a strong network of market contacts, such as [mention organizations], can facilitate smoother trade.")
    ),
    array(
        "crop varieties",
        array("There are various crop varieties available for [mention crops], including [mention popular varieties].")
    ),
    array(
        "planting techniques",
        array("Optimal planting techniques, like [mention techniques], contribute to successful crop establishment.")
    ),
    array(
        "crop diseases",
        array("Common crop diseases affecting [mention crops] include [mention diseases]. Applying [mention disease management] can help prevent them.")
    ),
    array(
        "product labeling",
        array("Proper product labeling, including [mention labeling requirements], ensures clear and accurate information for consumers.")
    ),
    array(
        "harvesting guidelines",
        array("Follow proper harvesting guidelines, such as [mention practices], to avoid damage and maintain product quality.")
    ),
    array(
        "product packaging",
        array("Effective product packaging, like [mention packaging options], enhances market appeal and protects your produce.")
    ),
    array(
        "certified seeds",
        array("Using certified seeds, like [mention certified seed sources], ensures consistent crop quality and performance.")
    ),
    array(
        "post-harvest treatments",
        array("Implementing post-harvest treatments, like [mention treatments], extends the shelf life and freshness of your products.")
    ),
    array(
        "quality assurance",
        array("Adhering to quality assurance standards, such as [mention standards], guarantees that your products meet industry norms.")
    ),
    array(
        "product differentiation",
        array("Highlighting unique qualities, such as [mention qualities], can set your products apart and attract discerning buyers.")
    ),
    array(
        "product traceability",
        array("Implementing product traceability systems, like [mention tracking methods], enhances transparency and consumer trust.")
    ),
    array(
        "impact of sustainable packaging",
        array("Understand the environmental impact of packaging materials and explore sustainable packaging options for your produce.")
    ),
    array(
        "benefits of crop rotation",
        array("Discover the advantages of crop rotation, including improved soil fertility, reduced pest pressure, and higher yields.")
    ),
    array(
        "agricultural events",
        array("Participating in agricultural events and expos, such as [mention events], provides opportunities for learning and networking.")
    ),
    array(
        "digital tools for farmers",
        array("Explore digital tools like [mention tools] designed to assist farmers in managing their operations more efficiently.")
    ),
    array(
        "importance of soil health",
        array("Maintaining soil health through practices like [mention practices] is crucial for sustainable and productive farming.")
    ),
    array(
        "best time to plant",
        array("The ideal planting time for [mention crops] is usually [mention timeframe] to ensure optimal growth and yield.")
    ),
    array(
        "soil testing",
        array("Regular soil testing is recommended to determine soil nutrient levels and pH. This helps in [mention benefits].")
    ),
    array(
        "market trends",
        array("Recent market trends indicate [mention trends] which can influence your selling decisions.")
    ),
    array(
        "crop rotation",
        array("Crop rotation, such as [mention rotation patterns], can improve soil health and reduce pest problems.")
    ),
    array(
        "government subsidies",
        array("Government offers subsidies for [mention specific subsidies] which can reduce your farming expenses.")
    ),
    array(
        "fertilizer usage",
        array("Applying the right type and amount of fertilizers, like [mention fertilizers], can enhance crop growth and yield.")
    ),
    array(
        "harvesting techniques",
        array("Proper harvesting techniques, such as [mention techniques], ensure that your crops are picked at the right time for quality produce.")
    ),
    array(
        "post-harvest handling",
        array("After harvesting, it's important to [mention post-harvest practices] to maintain the freshness and quality of your crops.")
    ),
    array(
        "seasonal crops",
        array("Certain crops like [mention crops] are seasonal and have specific planting and harvesting periods.")
    ),
    array(
        "crop selection",
        array("Choosing suitable crops based on [mention factors], like climate and soil, is crucial for successful cultivation.")
    ),
    array(
        "crop diseases",
        array("Common crop diseases affecting [mention crops] include [mention diseases]. Applying [mention disease management] can help prevent them.")
    ),
    array(
        "crop varieties",
        array("There are various crop varieties available for [mention crops], including [mention popular varieties].")
    ),
    array(
        "planting techniques",
        array("Optimal planting techniques, like [mention techniques], contribute to successful crop establishment.")
    ),
    array(
        "fertilizer application",
        array("Applying fertilizers correctly, like [mention application methods], ensures optimal nutrient supply to your crops.")
    ),
    array(
        "harvesting guidelines",
        array("Follow proper harvesting guidelines, such as [mention practices], to avoid damage and maintain product quality.")
    ),
    array(
        "selling procedures",
        array("To sell your produce at the APMC, you'll need to follow these steps: [Provide a step-by-step guide on selling procedures and required documents].")
    ),
    array(
        "market access",
        array("Improving your market access through [mention strategies], can help you reach a wider customer base.")
    ),
    array(
        "product showcase space",
        array("Interested in showcasing your products at the APMC market? Reserve your product showcase space by [mention booking options].")
    ),
    array(
        "market networking",
        array("Building a strong network of market contacts, such as [mention organizations], can facilitate smoother trade.")
    ),
    array(
        "market demand",
        array("Understanding market demand for [mention crops] can help you plan your production and make informed decisions.")
    ),
    array(
        "market prices",
        array("Sure! The current market prices for various crops are as follows: [Provide recent price information for different crops].")
    ),
    array(
        "market trends",
        array("Recent market trends indicate [mention trends] which can influence your selling decisions.")
    ),
    array(
        "market regulations",
        array("The APMC has certain regulations in place, including [mention key regulations and guidelines].")
    ),
    array(
        "market opportunities",
        array("Exploring diverse market opportunities, such as [mention opportunities], can expand your sales and profit potential.")
    ),
    array(
        "certification programs",
        array("Consider participating in certification programs like [mention programs] to enhance the value of your produce.")
    ),
    array(
        "market forecasts",
        array("Predicted market trends for [mention crops] indicate [mention forecasts], which can help you make informed decisions.")
    ),
    array(
        "crop storage",
        array("Proper crop storage methods, such as [mention storage techniques], can help prevent spoilage and maintain quality.")
    ),
    array(
        "product labeling",
        array("Proper product labeling, including [mention labeling requirements], ensures clear and accurate information for consumers.")
    ),
    array(
        "quality standards",
        array("APMC adheres to quality standards that include [mention specific standards] to ensure fair and consistent trade.")
    ),
    array(
        "product traceability",
        array("Implementing product traceability systems, like [mention tracking methods], enhances transparency and consumer trust.")
    ),
    array(
        "storage tips",
        array("Proper storage of harvested crops is crucial. For example, [mention tips] can help extend the shelf life of your produce.")
    ),
    array(
        "crop storage",
        array("Proper crop storage methods, such as [mention storage techniques], can help prevent spoilage and maintain quality.")
    ),
    array(
        "post-harvest handling",
        array("After harvesting, it's important to [mention post-harvest practices] to maintain the freshness and quality of your crops.")
    ),
    array(
        "cold storage benefits",
        array("Cold storage offers several benefits, including [mention benefits], which help preserve the quality and shelf life of your produce.")
    ),
    array(
        "types of cold storage",
        array("There are different types of cold storage facilities, such as [mention types], each suitable for specific produce and storage durations.")
    ),
    array(
        "temperature control",
        array("Maintaining proper temperature control in cold storage is essential to prevent spoilage and maintain the freshness of your agricultural products.")
    ),
    array(
        "humidity management",
        array("Managing humidity levels in cold storage is crucial, as it helps prevent mold growth and maintain the quality of your produce.")
    ),
    array(
        "packaging for cold storage",
        array("Choosing appropriate packaging materials for cold storage, such as [mention materials], can help protect your produce from damage and moisture.")
    ),
    array(
        "cold storage maintenance",
        array("Regular maintenance of cold storage facilities, including [mention maintenance tasks], ensures optimal performance and product quality.")
    ),
    array(
        "duration of storage",
        array("The recommended storage duration for different crops varies. [Mention storage durations] to ensure product quality and freshness.")
    ),
    array(
        "cold storage for perishables",
        array("Perishable crops like [mention crops] benefit from cold storage to slow down deterioration and extend their shelf life.")
    ),
    array(
        "cold storage technology",
        array("Modern cold storage technologies, like [mention technologies], offer advanced temperature and humidity control for optimal produce preservation.")
    ),
    array(
        "market prices",
        array("Sure! The current market prices for various crops are as follows: [Provide recent price information for different crops].")
    ),
    array(
        "price fluctuations",
        array("Market prices for agricultural produce can fluctuate based on factors such as [mention factors]. Staying informed about these fluctuations is important for making informed selling decisions.")
    ),
    array(
        "price forecasting",
        array("Utilizing price forecasting methods, such as [mention methods], can help you anticipate market trends and plan your selling strategies accordingly.")
    ),
    array(
        "price negotiation",
        array("When negotiating prices for your produce, consider factors like [mention factors] to ensure a fair and profitable transaction.")
    ),
    array(
        "premium pricing",
        array("Premium pricing strategies, such as [mention strategies], can help you position your high-quality produce at a higher price point.")
    ),
    array(
        "price transparency",
        array("Maintaining price transparency with buyers and customers builds trust and fosters long-term relationships in the market.")
    ),
    array(
        "competitive pricing",
        array("Analyzing competitors' prices and offering competitive pricing can help you attract customers while maintaining profitability.")
    ),
    array(
        "value-added pricing",
        array("Consider value-added strategies, such as [mention strategies], to justify higher prices by offering additional benefits to customers.")
    ),
    array(
        "price negotiation tips",
        array("When negotiating prices, listen to buyers' needs and present the value of your produce to justify your pricing.")
    ),
    array(
        "price and quality correlation",
        array("Quality produce often commands higher prices in the market. Focus on producing high-quality crops to justify better pricing.")
    ),
    array(
        "market demand impact on prices",
        array("Understanding how market demand affects prices is crucial. During high demand periods, prices may increase, while surplus supply can lead to lower prices.")
    ),
    array(
        "price information sources",
        array("Stay informed about market prices by using reliable sources such as [mention sources] to make well-informed pricing decisions.")
    ),
    array(
        "pricing strategy",
        array("Develop a pricing strategy that aligns with your production costs, market trends, and customer expectations to optimize your profitability.")
    ),
    array(
        "organic farming",
        array("Organic farming practices involve [mention practices] which can help enhance soil fertility and produce healthier crops.")
    ),
    array(
        "benefits of organic farming",
        array("Organic farming offers several benefits, including [mention benefits], which contribute to sustainable agriculture and reduced environmental impact.")
    ),
    array(
        "organic certification",
        array("Obtaining organic certification, like [mention certification processes], can add value to your organic produce.")
    ),
    array(
        "organic pest control",
        array("Organic pest control methods, such as [mention methods], minimize chemical use and maintain ecological balance.")
    ),
    array(
        "organic soil management",
        array("Organic soil management practices, including [mention practices], promote healthy soil structure and microbial activity.")
    ),
    array(
        "conventional farming",
        array("Conventional farming involves using synthetic fertilizers and pesticides to maximize crop yields and manage pests.")
    ),
    array(
        "benefits of conventional farming",
        array("Conventional farming practices can lead to higher yields and increased production efficiency, helping meet high demand for food.")
    ),
    array(
        "sustainability comparison",
        array("Organic farming prioritizes sustainability and environmental health, while conventional farming focuses on productivity and meeting demand.")
    ),
    array(
        "conventional pesticides",
        array("Conventional farming uses chemical pesticides to control pests, but their use can raise concerns about environmental impact and residues.")
    ),
    array(
        "GMO crops",
        array("Conventional farming sometimes involves genetically modified organisms (GMOs) to enhance crop traits, which can have both benefits and controversies.")
    ),
    array(
        "organic market demand",
        array("Growing consumer awareness and demand for organic produce create opportunities for farmers to tap into premium markets.")
    ),
    array(
        "regulations and standards",
        array("Organic farming adheres to strict regulations and standards to ensure practices align with organic principles and minimize synthetic inputs.")
    ),
    array(
        "nutrient management",
        array("Organic farming emphasizes natural nutrient management through practices like composting, cover cropping, and crop rotation.")
    ),
    array(
        "pesticide residues",
        array("Organic produce is typically lower in pesticide residues, as organic farming restricts the use of synthetic pesticides.")
    ),
    array(
        "best time to plant",
        array("The ideal planting time for [mention crops] is usually [mention timeframe] to ensure optimal growth and yield.")
    ),
    array(
        "crop rotation timing",
        array("Crop rotation, such as [mention rotation patterns], can improve soil health and reduce pest problems.")
    ),
    array(
        "harvesting timing",
        array("Proper harvesting timing, such as [mention techniques], ensures that your crops are picked at the right time for quality produce.")
    ),
    array(
        "seasonal crops",
        array("Certain crops like [mention crops] are seasonal and have specific planting and harvesting periods.")
    ),
    array(
        "weather considerations",
        array("Consider weather conditions when planning planting and harvesting times to optimize yield and minimize risks.")
    ),
    array(
        "optimal irrigation timings",
        array("Implementing optimal irrigation timings, such as [mention methods], ensures efficient water usage and healthy crop growth.")
    ),
    array(
        "time-saving practices",
        array("Adopting time-saving practices, like [mention practices], can help you manage your farm efficiently and maximize productivity.")
    ),
    array(
        "timing for pest control",
        array("Timely pest control measures, such as [mention strategies], can help prevent infestations and minimize damage to your crops.")
    ),
    array(
        "planning for market timing",
        array("Plan your harvests to coincide with peak market demand periods for [mention crops] to achieve better prices and sales.")
    ),
    array(
        "timing for organic practices",
        array("Timing is important in organic practices, such as [mention practices], to effectively manage pests and diseases without synthetic inputs.")
    ),
    array(
        "crop maturity timing",
        array("Harvesting crops at their peak maturity, determined by [mention signs], ensures the best flavor and nutritional value.")
    ),
    array(
        "timing for soil preparation",
        array("Proper timing for soil preparation, such as [mention techniques], creates an ideal environment for planting and crop establishment.")
    ),
    array(
        "predicting timing with technology",
        array("Modern technologies, like [mention technologies], help predict optimal planting, harvesting, and irrigation timings for better outcomes.")
    ),
    array(
        "time allocation for tasks",
        array("Allocate time efficiently for tasks like planting, weeding, and harvesting to maintain a balanced workflow and optimize yield.")
    ),
    array(
        "fruit market at APMC",
        array("The APMC features a bustling fruit market where a variety of fresh and seasonal fruits are bought and sold by traders and farmers.")
    ),
    array(
        "popular fruits at APMC",
        array("Some of the popular fruits available at the APMC market include [mention fruits], known for their freshness and quality.")
    ),
    array(
        "fruit quality standards",
        array("Fruits at the APMC market adhere to stringent quality standards, ensuring that only fresh and high-quality produce is available to consumers.")
    ),
    array(
        "fruit price trends",
        array("The APMC fruit market reflects price trends influenced by factors such as supply, demand, seasonality, and external market conditions.")
    ),
    array(
        "fruit storage and handling",
        array("Maintaining proper storage and handling practices is crucial for preserving the freshness and shelf life of fruits in the APMC market.")
    ),
    array(
        "market opportunities for fruit farmers",
        array("Fruit farmers have the opportunity to tap into the growing demand for fresh, locally-grown fruits at the APMC market.")
    ),
    array(
        "fruit trade logistics",
        array("Logistics play a key role in the timely transportation of fruits from farms to the APMC market, ensuring freshness and quality.")
    ),
    array(
        "exotic fruits",
        array("In addition to traditional fruits, the APMC market may also feature exotic fruits from around the world, offering consumers a diverse selection.")
    ),
    array(
        "fruit grading and sorting",
        array("Fruits undergo grading and sorting processes at the APMC market to categorize them based on size, quality, and appearance.")
    ),
    array(
        "fruit packaging options",
        array("Effective fruit packaging is essential to prevent damage during transportation and display, enhancing the appeal of fruits in the market.")
    ),
    array(
        "seasonal fruit availability",
        array("The availability of fruits at the APMC market varies with seasons, offering consumers a wide range of fresh, locally-grown options.")
    ),
    array(
        "export opportunities",
        array("Quality fruits at the APMC market can attract export opportunities, contributing to the local economy and agriculture sector.")
    ),
    array(
        "fruit market regulations",
        array("The APMC enforces regulations to ensure fair trade practices, quality standards, and transparency in the fruit market operations.")
    ),
    array(
        "market trends for fruits",
        array("Market trends for fruits can impact pricing, demand, and consumer preferences, influencing the choices of both traders and farmers.")
    ),
    array(
        "fruit grading systems",
        array("Fruits are often graded using standardized systems based on factors like size, color, shape, and blemishes to ensure consistent quality.")
    ),
    array(
        "health benefits of fruits",
        array("Fruits are rich in essential nutrients, vitamins, and antioxidants that contribute to overall health and well-being.")
    ),
    array(
        "nutritional value of fruits",
        array("Different fruits offer unique nutritional profiles. For example, [mention fruit] is high in [mention nutrients], which support various bodily functions.")
    ),
    array(
        "variety of fruit flavors",
        array("Fruits come in a diverse range of flavors, from sweet and tangy to tropical and citrusy, providing options to suit various taste preferences.")
    ),
    array(
        "freshness indicators",
        array("When choosing fruits, look for signs of freshness such as vibrant color, firm texture, and a pleasant aroma.")
    ),
    array(
        "culinary uses of fruits",
        array("Fruits can be enjoyed in various ways, including fresh consumption, smoothies, desserts, salads, and as ingredients in savory dishes.")
    ),
    array(
        "seasonal fruit recommendations",
        array("During [mention season], fruits like [mention seasonal fruits] are at their peak freshness and offer the best flavor and nutritional value.")
    ),
    array(
        "fruit preservation methods",
        array("To enjoy fruits beyond their peak season, you can explore methods such as canning, freezing, and drying to preserve their goodness.")
    ),
    array(
        "exotic fruit options",
        array("Exotic fruits like [mention exotic fruits] introduce unique flavors and textures that can elevate culinary experiences.")
    ),
    array(
        "fruit-inspired recipes",
        array("Discover creative recipes that incorporate fruits, such as [mention recipe ideas], to add a burst of flavor to your meals.")
    ),
    array(
        "fruit diversity in agriculture",
        array("Agriculture benefits from a wide variety of fruit crops, contributing to biodiversity, environmental sustainability, and food security.")
    ),
    array(
        "promoting fruit consumption",
        array("Promoting fruit consumption supports a balanced diet, providing essential nutrients and contributing to a healthy lifestyle.")
    ),
    array(
        "local vs. imported fruits",
        array("Choosing local fruits supports the local economy, reduces carbon footprint, and often guarantees fresher produce.")
    ),
    array(
        "culinary innovations with fruits",
        array("Chefs and culinary enthusiasts continue to experiment with fruits to create innovative dishes, desserts, and beverages.")
    ),
    array(
        "benefits of fruit diversity",
        array("Eating a diverse range of fruits ensures a broad spectrum of nutrients, promoting overall health and preventing nutritional deficiencies.")
    ),
    array(
        "fruit-related festivals",
        array("Many cultures celebrate fruit-related festivals to honor the harvest season and showcase the variety and cultural significance of fruits.")
    ),
    array(
        "fruit symbolism",
        array("Fruits often carry cultural and symbolic meanings, representing fertility, abundance, prosperity, and natural beauty in various societies.")
    ),
    // Add more pattern-response pairs here
);


 // Get user input from POST request
 $user_input = isset($_POST['userInput']) ? strtolower($_POST['userInput']) : '';
  

// Function to process user input and generate responses
function chatbot_response($user_input, $pairs) {
    foreach ($pairs as $pair) {
        $pattern = $pair[0];
        $responses = $pair[1];
        
        if (preg_match("/$pattern/i", $user_input)) {
            
            return $responses[array_rand($responses)];
             // Randomly select a response
        }
    }
    
    // If no pattern matches, provide a default response
    return "I'm sorry, I'm not sure how to respond to that.";
}

 
        $botResponse = chatbot_response($user_input, $pairs);
    
// Return the bot's response as JSON
$response = [
    'botResponse' => $botResponse
];

header('Content-Type: application/json');
echo json_encode($response);

?>
