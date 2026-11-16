# Contributing to Azhura

Thank you for considering a contribution.

## Before you start

- Read the [Architecture Guide](docs/ARCHITECTURE.md).
- Check existing issues and pull requests.
- For significant changes, open an issue or discussion to align on scope.

## Development setup

Follow [Getting Started](docs/GETTING_STARTED.md), then run:

```bash
composer test
composer format:check
composer analyse
```

## Pull requests

- Keep each pull request focused.
- Include tests for behavior changes and bug fixes.
- Document new configuration and API behavior.
- Include migration notes for schema changes.
- Never commit secrets, generated dependencies or local environment files.
- Explain security and tenant-isolation implications.

## Commit messages

Conventional Commit prefixes are encouraged: `feat:`, `fix:`, `docs:`, `test:`, `refactor:`, and `chore:`.

All changes are reviewed for correctness, maintainability, accessibility where relevant, security and architectural consistency. Passing automated checks is necessary but does not replace review.
