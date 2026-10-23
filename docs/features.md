# Features

An expanded overview of the Hostel Management System, based on the feature set described in the [README](../README.md).

## Tenant management

- Complete tenant lifecycle management, from onboarding to checkout
- Keeps tenant records in one place for administrators

## Room allocation

- Dynamic grid view of every room and its current status
- Room statuses: **Available**, **Occupied**, and **Maintenance**

## Billing and invoicing

- Automated fee generation for tenants
- Payment tracking so outstanding and settled fees are visible
- PDF support for generated documents (via `barryvdh/laravel-dompdf`)

## Admin dashboard

- High-level analytics and reporting for hostel management
- A single place to review rooms, tenants, and payments

## Technology

- Backend: Laravel 10 (PHP ^8.2), MVC architecture
- Database: MySQL (SQLite for local development)
- Frontend: Blade templates with HTML/CSS, assets built with Laravel Mix

See [installation.md](installation.md) for setup instructions.
