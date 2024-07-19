Laravel API with Job Queue, Database, and Event Handling

This project is a simple Laravel API that demonstrates proficiency with Laravel's job queues, database operations, migrations, and event handling.

Features
API Endpoint: /api/submit
Job Queue: Dispatches a job to process and save data.
Database: Uses MySQL and migrations to manage data.
Event Handling: Triggers an event after saving data.
Installation
Follow these steps to set up and run the project locally.

Prerequisites
PHP (7.4 or higher)
Composer
MySQL
Laravel

Clone the Repository

===============
git clone https://github.com/OJLDev/Laravel-Job-Queue-API.git
cd path/Laravel-Job-Queue-API
===============

Install Dependencies

===============
composer install
===============

Configure Environment

Copy the .env.example file to .env:

===============
cp .env.example .env
===============

Edit the .env file to set up your database and other environment variables. Ensure APP_ENV is set to local for development.

Example .env configuration:

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:YourAppKeyHere
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

QUEUE_CONNECTION=sync

Run Migrations
Create the necessary database tables:

===============
php artisan migrate
===============

Start the Laravel Development Server

===============
php artisan serve
===============

The application should now be running at http://localhost:8000.

API Endpoint
POST /api/submit
Accepts JSON payload:

{
"name": "John Doe",
"email": "john.doe@example.com",
"message": "This is a test message."
}

Response Codes:

202 Accepted: When the submission is received and is being processed.
422 Unprocessable Entity: If validation fails.

Example Request Using curl:

===============
curl -X POST http://localhost:8000/api/submit \
 -H "Content-Type: application/json" \
 -d '{"name": "John Doe", "email": "john.doe@example.com", "message": "This is a test message."}'
===============

Testing
To run the tests:

===============
php artisan test
===============

Documentation
Event Handling
The project includes an event SubmissionSaved that is triggered after data is saved. The event has a listener that logs a message indicating a successful save.

Job Handling
The ProcessSubmission job handles the saving of data and dispatches an event upon completion.

Contributing
Feel free to submit issues and pull requests. Please ensure your code follows the coding standards used in this project.

License
This project is licensed under the MIT License - see the LICENSE file for details.
