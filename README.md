# IBIF Project

A modern Laravel 12 + Livewire application with Flux UI components.

## 📋 Requirements

- PHP 8.1 or higher  
- Composer  
- Node.js 16 or higher & npm/Yarn  
- MySQL (or compatible database)  

## 🔧 Installation

1. **Clone the repository**  
   git clone git@github.com:YourUser/ibif-project.git
   cd ibif-project
Copy and configure environment

Open .env and set at minimum:

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ibif_project
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

# Mail (for contact form)
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_smtp_username
MAIL_PASSWORD=your_smtp_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_from_address@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

# Admin account (used by UserSeeder)
ADMIN_EMAIL=admin@example.com
ADMIN_PASSWORD=ChangeMe123!


🚀 Database Setup
Run migrations

php artisan migrate
Seed initial data

This project includes two seeders:
UserSeeder (creates the admin account using ADMIN_EMAIL + ADMIN_PASSWORD)
PostSeeder (inserts sample posts with tech quotes)

To run all seeders:
php artisan db:seed
Or individually:
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=PostSeeder


📄 License
This project is licensed under the MIT License. See LICENSE for details.
