# Getting started

This guide takes you from a fresh checkout to a running local environment.

## Requirements

| Tool | Version | Purpose |
| --- | --- | --- |
| PHP | 8.3+ | Runtime |
| Composer | 2.x | Dependencies |
| SQLite | PDO extension | Local database |
| PostgreSQL | 16+ recommended | Production database |
| Git | Recent | Source control |

Enable Laravel's required PHP extensions: Ctype, cURL, DOM, Fileinfo, Filter, Hash, Mbstring, OpenSSL, PCRE, PDO, Session, Tokenizer and XML.

## Install

```bash
git clone https://github.com/dyfiydkyckg-create/Azhura.git
cd Azhura
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Visit `http://127.0.0.1:8000/api/v1/health`.

## Quality commands

```bash
composer test
composer format
composer format:check
composer analyse
php artisan route:list
php artisan migrate
```

## Configuration

Environment-specific values belong in `.env`. Never commit secrets or production credentials. For PostgreSQL, set `DB_CONNECTION=pgsql` and configure `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD`.

## Workflow

1. Create a focused branch from `main`.
2. Make one coherent change.
3. Add or update tests.
4. Run formatting and tests.
5. Open a pull request with context and migration notes.

Read [Contributing](../CONTRIBUTING.md) and [Architecture](ARCHITECTURE.md) before adding a module.
