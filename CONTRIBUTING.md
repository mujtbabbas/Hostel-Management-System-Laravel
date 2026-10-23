# Contributing

Contributions to the Hostel Management System are welcome. This guide covers the local workflow.

## Setup

Follow [docs/installation.md](docs/installation.md) to get the app running locally (PHP ^8.2, Laravel 10, SQLite for development).

## Workflow

1. Fork the repository and create a branch for your change.
2. Keep each pull request focused on one change (one feature or one fix).
3. Follow the existing code style; the repository ships a `.styleci.yml` configuration.
4. Build the frontend assets while you work:

   ```bash
   npm run dev
   ```

5. Run the test suite before submitting:

   ```bash
   php artisan test
   ```

   The suite is PHPUnit 10 (see `phpunit.xml`); tests live in the `tests` directory. Add or update tests when your change affects behaviour.

6. Describe what you changed and why in the pull request body. If your change alters setup or configuration, update [docs/installation.md](docs/installation.md) or `.env.example` in the same pull request.

## Reporting issues

Open an issue with your PHP and Laravel versions, the steps to reproduce the problem, and any error output from `storage/logs`.
