# Security policy

## Supported versions

Azhura is in early development. Until the first stable release, only the latest commit on the default branch is considered for security fixes.

## Reporting a vulnerability

Do not publish exploitable vulnerability details in a public issue. Use GitHub's **Report a vulnerability** feature in the repository Security tab when available.

Include a concise impact description, affected component or commit, safe reproduction steps, and any suggested mitigation. The maintainers will coordinate acknowledgement, remediation and disclosure.

## Security expectations

- Never commit credentials, tokens, private keys or production data.
- Validate and authorize every tenant-scoped request.
- Treat workflow definitions and integration payloads as untrusted input.
- Encrypt integration secrets at rest and redact them from logs.
- Keep dependencies updated and review security advisories.
