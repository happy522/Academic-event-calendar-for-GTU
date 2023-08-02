# Academic Event Calendar for GTU's (Gujarat Technological University) - Using JS, PHP, Frontend, and Backend Technologies

![Event Calendar](https://user-images.githubusercontent.com/12345678/example.png)

This project aims to create an Academic Event Calendar for GTU (Gujarat Technological University) to manage and display various academic events, workshops, seminars, and important dates for students, faculty, and staff. The system utilizes JavaScript (JS) and PHP for the frontend and backend, respectively, along with HTML and CSS for user interface design.

## Features

1. **Event Management:** Administrators can add, edit, and delete academic events through the web-based interface.

2. **User Authentication:** The system provides user authentication and access control for administrators to manage events securely.

3. **Event Display:** The calendar displays academic events, workshop schedules, and other important dates for easy reference.

4. **Event Details:** Users can view event details by clicking on the respective event in the calendar.

5. **Search and Filters:** The calendar provides search and filter options to find specific events based on various criteria.

6. **Reminders and Notifications:** Optionally, the system can send reminders and notifications to registered users about upcoming events.

## Frontend Technologies

- **HTML:** Used for building the structure and layout of the web application.

- **CSS:** Used for styling the user interface and making the calendar visually appealing.

- **JavaScript (JS):** Enables dynamic interactions on the frontend, such as displaying events on the calendar and handling user interactions.

- **jQuery:** A JS library that simplifies DOM manipulation and AJAX requests.

- **FullCalendar:** An open-source JS library for building interactive calendars, used to display events.

## Backend Technologies

- **PHP:** The server-side scripting language used for backend development.

- **MySQL:** The relational database management system (RDBMS) used to store event data.

- **PHPMyAdmin:** A popular web-based interface for managing MySQL databases.

- **RESTful API:** The backend exposes RESTful API endpoints to interact with event data (e.g., add, edit, delete events).

## Setup and Installation

1. **Clone the Repository:** Clone the repository to your server or local development environment.

2. **Database Setup:** Set up a MySQL database and import the provided SQL schema to create the necessary tables.

3. **Configure Backend:** Update the database connection details in the PHP files to connect to the MySQL database.

4. **Frontend Configuration:** Modify the frontend JS files to set the appropriate API endpoints for data retrieval.

5. **Web Server:** Host the project on a web server with PHP support.

## Usage

1. **Login/Register:** Users (administrators) can log in to access the event management interface. New users can register for an account.

2. **Add Events:** Administrators can add new academic events, specifying the title, description, date, and other relevant details.

3. **Edit and Delete Events:** Administrators can edit or delete existing events through the event management interface.

4. **View Events:** Users can view academic events on the calendar, color-coded for easy identification.

5. **Event Details:** By clicking on an event in the calendar, users can view detailed information about the event.

6. **Search and Filters:** Users can use the search and filter options to find specific events based on their preferences.

## Acknowledgments

This project is built with the help of various open-source libraries, including FullCalendar, jQuery, and PHPMyAdmin, which greatly simplify the development process.

## Disclaimer

The event calendar is intended for academic purposes at GTU and should be used responsibly. The system should be deployed securely to protect user data and prevent unauthorized access. It is the responsibility of administrators to maintain the integrity and security of the application.
