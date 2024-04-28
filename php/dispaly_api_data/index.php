<!DOCTYPE html>
<html>
<head>
    <title>API Data Display</title>
</head>
<body>
    <h1>Data from API</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            <!-- <?php include('display.php'); ?> -->
        </tbody>
        <div id='data-container'></div>
    </table>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const dataContainer = document.getElementById("data-container");
    
    // Define the API endpoint and authentication key
    const apiUrl = "http://localhost:3000/api/customer/read.php?api_key=your-api-key"; // Replace with your API endpoint
    const apiKey = "your-api-key"; // Replace with your API authentication key

    // Create the request options
    const requestOptions = {
        method: "GET",
        headers: {
            "Authorization": `Bearer ${apiKey}`, // Modify the header based on your API's requirements
        },
    };

    // Make an HTTP GET request to the API with authentication
    fetch(apiUrl, requestOptions)
        .then(response => response.json())
        .then(data => {
            // Call a function to populate the page with the fetched data
            populatePage(data);
        })
        .catch(error => {
            console.error("Error fetching data:", error);
        });

    function populatePage(data) {
        // Process the data and update the HTML content
        if (data && data.data) {
            const items = data.data;

            // Assuming you have an element with the id "data-container" where you want to display the data
            const container = document.getElementById("data-container");

            // Create an HTML element for each item
            const itemList = items.map(item => {
                return `
                    <div class="item">
                        <p>Name: ${item.name}</p>
                        <p>Username: ${item.username}</p>
                        <p>Password: ${item.password}</p>
                        <p>User ID: ${item.u_id}</p>
                    </div>
                `;
            }).join(''); // Join the HTML elements into a single string

            // Update the container with the generated HTML
            container.innerHTML = itemList;
        } else {
            console.error("Invalid data format or no data returned from the API.");
        }
    }
});

    </script>
</body>
</html>
