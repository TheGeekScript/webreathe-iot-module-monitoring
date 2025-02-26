# IoT Module Monitoring System ![Visitors](https://api.visitorbadge.io/api/visitors?path=thegeekscript&label=Visitors&labelColor=%23d9e3f0&countColor=%23555555)

A Laravel-based web application for monitoring IoT modules.

## Technologies Used

- **PHP**: Backend logic.
- **Laravel**: PHP framework for web development.
- **MySQL**: Database for storing contacts.
- **Bootstrap**: Frontend framework for styling.
- **Blade**: Templating engine for views.

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP (>= 8.0)
- Composer
- MySQL
- Laravel CLI
  
## Installation

1. Clone the Repository
    ```bash
    git clone https://github.com/TheGeekScript/webreathe-iot-module-monitoring.git
    cd webreathe-iot-module-monitoring

2. Install Dependencies
   ```bash
   composer install

3. Set Up the Environment File
   ```bash
   cp .env.example .env
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=iot_monitoring
   DB_USERNAME=root
   DB_PASSWORD=your_password

4. Generate Application Key
   ```bash
   php artisan key:generate

5. Run Migrations
   ```bash
   php artisan migrate

6. Seed the Database
   ```bash
   php artisan db:seed --class=ModuleSeeder

7. Start the Development Server
   ```bash
   php artisan serve

8. Simulate Data Generation
   ```bash
   php artisan simulate:module-data

9. Access the Application
    
    Module Status Page: http://localhost:8000/modules

    Register New Module: Click the Register New Module button.

    View Module Data: Click the View Data button for a module.

