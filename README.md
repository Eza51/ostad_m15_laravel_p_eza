# Ostad M15 Laravel Contact Form Project

## 📌 Project Overview

This Laravel-based project implements a contact form with the following features:

- **Form Fields**: Name, Email, Phone, Message, and File Upload.
- **File Handling**: Uploaded files are stored in the `storage/app/uploads` directory.
- **Success Message**: A session-based success message is displayed upon form submission.
- **Cookie**: A `file_uploaded` cookie is set if a file is uploaded.
- **Confirmation Page**: Displays submitted data and uploaded file link.

## 🔗 Demo Video

Watch the project demonstration video here:

[Project Demo Video]
(https://drive.google.com/file/d/1xTpby4hObh9N8b44se0fI4b-8_tLSm1M/view?usp=sharing)
(https://youtu.be/DQOWHX8r31E)


## 🛠️ Setup Instructions

### 1. Clone the Repository

1.```bash
git clone https://github.com/Eza51/ostad_m15_laravel_p_eza.git
cd ostad_m15_laravel_p_eza
2.Install Dependencies
composer install
npm install

3. Configure Environment

Copy the example environment file:

cp .env.example .env


Generate the application key:

php artisan key:generate

4. Set Up Database

Import the provided SQL file into your MySQL database:

mysql -u username -p database_name < ostad_m15_project_eza.sql

5. Run Migrations (Optional)

If you prefer to use Laravel migrations:

php artisan migrate

6. Serve the Application
php artisan serve


Access the application at http://localhost:8000.

📁 Project Structure

app/: Contains the core application logic.

config/: Configuration files.

database/: Database migrations and seeds.

public/: Publicly accessible files like assets and index.php.

resources/: Views and raw assets.

routes/: Web and API route definitions.

storage/: File uploads and logs.

tests/: Automated tests.
📄 SQL File

The database schema is provided in the ostad_m15_project_eza.sql file located in the root directory.
