Dear Hiring Team,

I am excited to share with you the solution I have developed for the task at hand. Below, I’ll describe the process and steps I followed to build the project, providing insight into how I approached the problem and the technologies I used.

**Project Overview** 📂

To tackle this task, I created a simple web application using PHP, JavaScript, and CSS to display data dynamically fetched from a remote API. The application ensures that the information stays up-to-date, is easily searchable, and is presented in a user-friendly format.

**Process and Steps** ⚙

The project consists of four key files:

**api.php**

I started by creating the api.php file, which is responsible for connecting to the API and downloading a dataset. To enhance the usability of the project, I ensured that if any data fetched is null or unavailable, the color of the corresponding field is set to white. This improves the clarity of the interface when data is missing.

**index.php**

In the index.php file, I created the structure of the page, which includes a table to display the dataset. Additionally, I included a search field to allow users to filter through the data and a modal button as required.

**script.js**

For the frontend functionality, I added a script.js file. This file includes the JavaScript logic to handle interactions, such as the search functionality, as well as a key feature that ensures the page auto-refreshes every 60 minutes. To ensure this feature works as expected, I added console logs to test and confirm that the refresh happens correctly, and the data is updated every hour (I already test it with 60 seconds).

**style.css**

Finally, I designed the application’s look and feel with style.css. The goal was to make the user experience smooth and visually appealing. The styling ensures that the table and other components are presented in a clean, responsive layout.

**Resume** 🌟

The web page connects to a remote API, downloads a dataset, displays a table with the downloaded dataset.
A search field is included to filter the displayed data.
The page auto-refreshes every 60 minutes to ensure up-to-date data is always available.
A clean and user-friendly design that enhances usability.

I hope this solution meets the task requirements effectively.
