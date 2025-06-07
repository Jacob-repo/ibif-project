# IBIF Project

A modern Laravel 12 + Livewire application with Flux UI components.

---

## 📋 Requirements

* **PHP** 8.1 or higher
* **Composer**
* **Node.js** 16 or higher & **npm**/Yarn
* **MySQL** (or compatible database)

---

## 🔧 Quick Installation & Setup

1. **Clone the repository**

   ```bash
   git clone https://github.com/Jacob-repo/ibif-project.git
   cd ibif-project
   ```

2. **Prepare environment**

   * Copy the example file:

     ```bash
     cp .env.example .env
     ```
   * Open `.env` in your editor and set at minimum:

     ```dotenv
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
     MAIL_FROM_ADDRESS=your_from_address@example.com
     MAIL_FROM_NAME="${APP_NAME}"

     # Admin account (used by UserSeeder)
     ADMIN_EMAIL=admin@example.com
     ADMIN_PASSWORD=ChangeMe123!
     ```

3. **Install dependencies & generate app key**

   ```bash
   composer install        # install PHP packages
   php artisan key:generate # generate application key
   npm install             # install JS dependencies
   ```

4. **Run migrations & seeders**

   * **Migrate database**:

     ```bash
     php artisan migrate
     ```
   * **Seed initial data** (admin account + sample posts):

     ```bash
     php artisan db:seed AdminSeeder
     php artisan db:seed PostSeeder
     ```

5. **Build frontend assets**

   * **Production**:

     ```bash
     npm run build
     ```


---

## 📄 License

This project is licensed under the **MIT License**. See [LICENSE](LICENSE) for details.
