
    document.addEventListener("DOMContentLoaded", function () {
        const dataContainer = document.getElementById("data-container");
    
        // Define the API endpoint where you want to fetch data
        const apiUrl = "http://localhost:3000/api/customer/read.php"; // Replace with your API endpoint
    
        // Make an HTTP GET request to the API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Call a function to populate the table with the fetched data
                populateTable(data.data);
            })
            .catch(error => {
                console.error("Error fetching data:", error);
            });
    
        function populateTable(data) {
            const tbody = dataContainer;
            tbody.innerHTML = ''; // Clear any existing data in the table
    
            // Loop through the data and create table rows
            data.forEach(item => {
                const row = document.createElement("tr");
                // Create table cells for each property
                const nameCell = document.createElement("td");
                const usernameCell = document.createElement("td");
                const passwordCell = document.createElement("td");
                const userIdCell = document.createElement("td");
                // Set the cell content from the JSON data
                nameCell.textContent = item.name;
                usernameCell.textContent = item.username;
                passwordCell.textContent = item.password;
                userIdCell.textContent = item.u_id;
                // Append the cells to the row
                row.appendChild(nameCell);
                row.appendChild(usernameCell);
                row.appendChild(passwordCell);
                row.appendChild(userIdCell);
                // Append the row to the table
                tbody.appendChild(row);
            });
        }
    });
    