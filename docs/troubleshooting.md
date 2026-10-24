# Troubleshooting

Common setup problems and their fixes. For the install steps themselves, see
[installation.md](installation.md); for day-to-day use, see [usage.md](usage.md).

## "No application encryption key has been specified"

The `.env.example` file ships with an empty `APP_KEY`. Copy it to `.env` and generate a key:

```bash
cp .env.example .env
php artisan key:generate
```

## Database connection errors

- **Default is SQLite.** `.env.example` sets `DB_CONNECTION=sqlite` and recommends SQLite
  for development. Make sure the database file exists and is writable:

  ```bash
  touch database/database.sqlite
  php artisan migrate
  ```

- **Using MySQL instead:** uncomment the `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`,
  and `DB_PASSWORD` lines in `.env`, fill in real values, create the database first, then run
  `php artisan migrate`. A "Connection refused" error almost always means the database server
  is not running or the database name does not exist yet.
- After any `.env` database change, clear the cached config (next section) before retrying.

## Changes to `.env` seem to be ignored

Laravel caches configuration. After editing `.env`, run:

```bash
php artisan config:clear
php artisan cache:clear
```

The defaults in `.env.example` use `CACHE_DRIVER=file` and `SESSION_DRIVER=cookie`, so no
extra services are needed for a basic local setup.

## Blank page / HTTP 500 after install

1. Check `storage/logs/laravel.log` — the real error is recorded there.
2. Make sure `storage/` and `bootstrap/cache/` are writable by the web server user;
   permission errors on these folders are the most common cause of a 500 on a fresh clone.
3. Confirm the requirements from `composer.json` are met: **PHP ^8.2** and the Laravel 10
   dependency set installed with `composer install`.

## Frontend assets missing or unstyled pages

The frontend is built with Laravel Mix (see `package.json`). If pages load without styles
or scripts, the assets have not been built:

```bash
npm install
npm run dev        # development build
npm run prod       # production build (minified)
```

Use `npm run watch` while developing so assets rebuild on change.

**Known issue:** this project uses Laravel Mix 4 / webpack 4. On newer Node.js versions the
build can fail with `error:0308010C:digital envelope routines::unsupported`. Work around it
by using an LTS Node release from the Mix 4 era, or by running the build with
`NODE_OPTIONS=--openssl-legacy-provider`.

## Login works, but the admin account is missing

The admin account is configured through `ADMIN_EMAIL` in `.env` (the example value is
`admin@hostel.com`). If you changed it after seeding, re-run the seeders or update the user
record so the email matches, then clear the config cache as shown above.

## Password reset / notification emails never arrive

`.env.example` points mail at a Mailtrap test inbox (`MAIL_HOST=smtp.mailtrap.io`), so no
real email is delivered with the default settings. Set real `MAIL_HOST`, `MAIL_PORT`,
`MAIL_USERNAME`, `MAIL_PASSWORD`, and `MAIL_ENCRYPTION` values for your mail provider.

## PDF invoices fail to generate

Billing PDFs are produced with `barryvdh/laravel-dompdf` (see `composer.json`). If invoice
downloads error or come back blank, check `storage/logs/laravel.log` first, and make sure
the `storage/` folder is writable — dompdf needs it for temporary files and font caching.

## Running the tests

The project uses PHPUnit 10 (from `composer.json` require-dev):

```bash
php artisan test
```

If tests fail with database errors on a fresh clone, run them against a separate testing
database rather than your development data.

## Still stuck?

Open an issue with: your PHP version (`php -v`), the exact error from
`storage/logs/laravel.log`, and the steps you followed from
[installation.md](installation.md).
