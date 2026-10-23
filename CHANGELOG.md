# Changelog

All notable changes to the Hostel Management System are documented here.

## 1.0.0 — Initial release

The first complete release of the hostel management platform, built on Laravel 10 (PHP ^8.2) with a MySQL database and Blade templates.

### Features

- **Tenant management** — complete tenant lifecycle, from onboarding to checkout
- **Room allocation** — dynamic grid view of room status: Available, Occupied, or Maintenance
- **Billing and invoicing** — automated fee generation and payment tracking
- **Admin dashboard** — high-level analytics and reporting for management
- **Authentication** — login scaffolding via `laravel/ui`
- **PDF generation** — via `barryvdh/laravel-dompdf`
- **Image handling** — via `intervention/image`

### Documentation

- Installation guide ([docs/installation.md](docs/installation.md))
- Expanded feature overview ([docs/features.md](docs/features.md))
- Contributor guide ([CONTRIBUTING.md](CONTRIBUTING.md))
