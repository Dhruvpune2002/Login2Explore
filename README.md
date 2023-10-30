This repository provides a step-by-step guide on how to connect PHP to a MySQL database using XAMPP and create a new database for your web application.

Before you begin, make sure you have the following installed:

- [XAMPP](https://www.apachefriends.org/index.html): A popular web development environment that includes Apache, MySQL, PHP, and phpMyAdmin.
- A code editor of your choice (e.g., Visual Studio Code, Sublime Text).
- Basic knowledge of PHP and MySQL.

## Getting Started

1. **Install XAMPP:**
   If you haven't already, download and install XAMPP from the official website. XAMPP will provide you with an Apache web server and MySQL database server for local development.

2. **Start XAMPP:**
   Open XAMPP and start the Apache and MySQL services from the XAMPP Control Panel. These services need to be running for your PHP application to connect to the database.

3. **Clone or Download this Repository:**
   Clone this repository to your local machine or download the ZIP file.

4. **Create a New Database:**
   - Open a web browser and navigate to `http://localhost/phpmyadmin`.
   - Log in with your MySQL credentials.
   - Click on "Databases" in the top menu and create a new database for your application. Choose a name and character set for your database.

5. **Configure Database Connection:**
   - Open the PHP file in your code editor where you want to connect to the database.
   - Update the database connection details in your PHP script:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = ""; // Your MySQL password (if set)
     $dbname = "your_database_name";

6. **Test the Connection:**
   Write a PHP script to test the database connection.


