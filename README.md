# Electronix-CRM
This repository contains a web application for a customer relationship management system for the Electronix company- a hypothetical electrical engineering firm, to enable field engineers view and manage customer complaints with regards to faulty products or installation problems. 
The application was built using PHP, HTML, CSS, Bootstrap for the frontend, PHP for the backend, MySQL for database management, and Apache XAMPP web server. The application features a login and registration system, and pages for viewing and managing different states of customer complaints.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

- PHP
- MySQL
- Web Server (ex: Apache)

### Installing

1. Clone the repository to your local machine:

      git clone https://github.com/[your-username]/electronix.git


2. Import the database file located in the "db" folder to your MySQL server

3. Update the database credentials in the "includes/db_details.php" file

4. Place the files in your web server root directory

5. Open the application in your browser by visiting "http://localhost/electronix"

## File Structure

- The "assets" folder contains all the static files such as images, css, and javascript.
- The "includes" folder contains any files that are included in multiple pages, such as "db_details.php" (contains database connection details), "errors.php" (contains error handling functions), and "server.php" (contains server-side logic).
- The "pages" folder contains all the pages for the application, organized into subfolders by function. For example, "login" folder contains login and registration pages, "customer_complaints" folder contains pages for viewing and managing customer complaints and "logout" folder contains the logout page.
- The "index.php" file is the main entry point for the application.

## Built With

- PHP
- HTML
- CSS
- JavaScript
- MySQL

## Authors

- Daniella Omenogor


