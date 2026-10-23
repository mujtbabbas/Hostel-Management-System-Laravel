# Installation

Step-by-step setup for the Hostel Management System.

## Requirements

- PHP ^8.2 (see `composer.json`)
- Composer
- Node.js and npm (for the frontend assets, built with Laravel Mix)
- SQLite for local development (recommended in `.env.example`), or MySQL for production

The application is built on Laravel 10 and uses `laravel/ui` for authentication scaffolding and `barryvdh/laravel-dompdf` for PDF generation.

## Steps

1. Clone the repository and install the PHP dependencies:

   ```bash
   git clone https://github.com/mujtbabbas/Hostel-Management-System-Laravel.git
   cd Hostel-Management-System-Laravel
   composer install
   ```

2. Create your environment file and generate an application key:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Configure the database in `.env`. For development, the shipped `.env.example` already defaults to SQLite:

   ```ini
   DB_CONNECTION=sqlite
   ```

   For MySQL, uncomment and fill in the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` lines instead.

4. Run the migrations:

   ```bash
   php artisan migrate
   ```

5. Set the admin email in `.env` (the shipped example uses a placeholder):

   ```ini
   ADMIN_EMAIL=admin@hostel.com
   ```

6. Install and build the frontend assets:

   ```bash
   npm install
   npm run dev
   ```

7. Start the development server:

   ```bash
   php artisan serve
   ```

   The app runs at `http://localhost:8000` by default (the `APP_URL` in `.env.example`).

## Running tests

The test suite uses PHPUnit 10 (see `phpunit.xml` and the `tests` directory):

```bash
php artisan test
```
