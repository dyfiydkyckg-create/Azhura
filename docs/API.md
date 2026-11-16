# API reference

Azhura exposes a versioned JSON API.

## Base URL

Local: `http://127.0.0.1:8000/api/v1`

## Response envelope

```json
{
  "success": true,
  "data": {},
  "meta": {
    "timestamp": "2026-01-01T00:00:00.000000Z"
  }
}
```

Errors will use a stable machine-readable code, safe human-readable message and request correlation identifier. Internal exception details must never be returned to clients.

## Health

`GET /api/v1/health`

Returns service status and application version without exposing secrets or environment configuration.

```bash
curl --fail http://127.0.0.1:8000/api/v1/health
```

## Versioning policy

- Breaking changes require a new API major version.
- Additive fields may be introduced within a version.
- Deprecations are documented before removal.
- Pagination, filtering and sorting will be consistent across collections.
- Authentication and authorization requirements are documented per endpoint.

## Planned resource groups

| Resource | Purpose | Status |
| --- | --- | --- |
| Workspaces | Tenant and membership management | Foundation |
| Workflows | Definitions and execution history | Schema foundation |
| Knowledge pages | Workspace content | Schema foundation |
| Connections | Provider and webhook management | Planned |
| Audit events | Activity history | Schema foundation |
