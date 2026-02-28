# Haulix Core

The core application for Haulix, built with [Laravel](https://laravel.com), [Inertia.js](https://inertiajs.com), and [React](https://react.dev).

## Tech Stack

| Layer               | Technology                             |
| ------------------- | -------------------------------------- |
| **Backend**         | PHP 8.5+ / Laravel 12                  |
| **Frontend**        | TypeScript / React 19 / Tailwind CSS 4 |
| **Bridge**          | Inertia.js (server-driven SPA)         |
| **Package Manager** | Composer (PHP) / Bun (JS)              |

## Getting Started

> **Requires [PHP 8.5+](https://php.net/releases/) and [Bun](https://bun.sh).**

```bash
# Install dependencies and bootstrap the app
composer setup

# Start the development server (Laravel, queue, logs, Vite)
composer dev
```

## Code Quality Tooling

### PHP

| Tool                                       | Purpose                  | Command           |
| ------------------------------------------ | ------------------------ | ----------------- |
| [PHPStan](https://phpstan.org/) (Larastan) | Static analysis          | `phpstan`         |
| [Rector](https://getrector.com/)           | Automated refactoring    | `rector`          |
| [Pint](https://laravel.com/docs/pint)      | Code style (PSR/Laravel) | `pint --parallel` |
| [Pest](https://pestphp.com/)               | Testing (100% coverage)  | `pest`            |

### Frontend

| Tool                                                 | Purpose                    | Command                     |
| ---------------------------------------------------- | -------------------------- | --------------------------- |
| [OXC Lint](https://oxc.rs/docs/guide/usage/linter)   | TypeScript / React linting | `oxlint --fix --type-aware` |
| [OXC Fmt](https://oxc.rs/docs/guide/usage/formatter) | Code formatting            | `oxfmt resources/`          |
| [TypeScript](https://www.typescriptlang.org/)        | Type checking              | via `oxlint --type-check`   |

### Git Hooks

[Lefthook](https://github.com/evilmartians/lefthook) runs the following on every commit against staged files:

| Hook         | Tools                           |
| ------------ | ------------------------------- |
| `pre-commit` | OXC Lint, OXC Fmt, Rector, Pint |

## Available Commands

### Development

- `composer dev` — Starts Laravel server, queue worker, log tail, and Vite concurrently

### Linting & Formatting (auto-fix)

- `composer lint` — Runs type checks, OXC Lint + Fmt, Rector, and Pint

### Testing & CI

- `composer test` — Full suite: type coverage, unit tests, lint checks, static analysis
- `composer test:lint` — Dry-run lint checks (no auto-fix, for CI)
- `composer test:types` — PHPStan + OXC type checking
- `composer test:unit` — Pest with 100% coverage requirement
- `composer test:type-coverage` — Pest type coverage (100% minimum)

### Maintenance

- `composer update:requirements` — Bumps all PHP and Bun dependencies

## License

Proprietary — All rights reserved.
