# Laravel Application

This is a Laravel-based web application. Follow the steps below to set up and run the app locally.

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10.x
- MySQL or PostgreSQL
- Node.js & NPM (for frontend assets)

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/naderelsayedd/products-task.git
   cd products-task
   ```

2. **Install PHP dependencies via Composer:**

   ```bash
   composer install
   ```

3. **Copy the example environment file and set your configuration:**

   ```bash
   cp .env.example .env
   ```

4. **Generate the application key:**

   ```bash
   php artisan key:generate
   ```

5. **Configure your `.env` file:**

   Set the database name, user, and password:
   ```dotenv
   DB_DATABASE=your_db_name
   DB_USERNAME=your_db_user
   DB_PASSWORD=your_db_password
   ```

6. **Run database migrations (and seeders if available):**

   ```bash
   php artisan migrate --seed
   ```

7. **Install frontend dependencies and compile assets:**

   ```bash
   npm install
   npm run dev
   ```

8. **Serve the application:**

   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`.

## Additional Commands

- Run tests:
  ```bash
  php artisan test
  ```

- Compile assets for production:
  ```bash
  npm run build
  ```

## License

This project is open-sourced under the [MIT license](LICENSE).