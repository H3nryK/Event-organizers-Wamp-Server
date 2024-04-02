# Project Title: Event Organizers Management System

## Introduction

The Event Organizers Management System is a web-based application designed to streamline the process of organizing and managing events. It provides a user-friendly interface for event organizers to create, and view details of various events they are managing.

## Prerequisites

Before getting started, ensure you have the following installed on your system:

- WampServer: Download and install WampServer to set up your local development environment.

## Key Features

1. **Database Connectivity:** The system connects to a MySQL database to store and retrieve event data.It utilizes PHP's MySQLi extension for database operations, ensuring secure and efficient data management.
2. **Event Management:** Event organizers can add new events by providing details such as title, description, date, time, location, and contact information. They can also view a list of existing events with relevant details displayed in a tabular format.
3. **Pagination:** To manage large datasets effectively, the system implements pagination, allowing users to navigate through multiple pages of event listings.Pagination enhances usability by breaking down large result sets into manageable chunks, improving page load times and overall performance.
4. **Search Functionality:** The system includes a search feature that enables users to search for specific events based on keywords. Users can search by event title, description, or location, facilitating quick and efficient retrieval of relevant information.

## Technologies Used

- Frontend: HTML, CSS
- Backend: PHP
- Database: MySQL

## Implementation

- The frontend of the application is built using HTML and styled using CSS to create a visually appealing and user-friendly interface.
- PHP is used on the backend to handle server-side logic, including database connectivity, event management, pagination, and search functionality.
- MySQL is used as the database management system to store event data in a structured format.
- The application is hosted on a web server that supports PHP and MySQL, such as Apache or Nginx.

## Conclusion

The Event Organizers Management System simplifies the task of managing events by providing a centralized platform for event organizers to create, update, and search for events. With features like pagination and search functionality, it offers enhanced usability and efficiency, making it an indispensable tool for event management professionals.

## Getting Started

1. Installation: Clone the repository to your local machine.

   ```bash
   git clone https://github.com/H3nryK/Event-organizers-Wamp-Server.git
   
2. Database Setup: Import the provided SQL file into your MySQL database using phpMyAdmin.
3. Configuration: Update the database connection details in the PHP files to match your local environment.

   ```bash
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "events";

4. Usage: Open the project in your preferred code editor and start customizing the event pages, form, and styles to meet your requirements.

## Usage

- WampServer: Launch WampServer and ensure that both Apache and MySQL services are running.
- Access the Project: Open your web browser and navigate to http://localhost/Database/index.php to access the project.
- Customization: Customize the event pages, form, and styles according to your requirements. The PHP files are located in the Database directory.

## License

This project is licensed under the MIT License - see the LICENSE file for details.