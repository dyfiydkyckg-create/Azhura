# Roadmap

Azhura is developed in small, reviewable milestones. This roadmap describes direction, not delivery guarantees.

## Phase 0 — Foundation
- [x] Laravel application structure
- [x] Versioned health endpoint
- [x] Initial workspace, workflow, knowledge and audit persistence
- [x] Architecture and contributor documentation
- [ ] Validate first dependency install and CI run
- [ ] Add static-analysis baseline

## Phase 1 — Identity and workspaces
- [ ] Registration, login, password recovery and email verification
- [ ] Role and permission policies
- [ ] Workspace invitations and membership lifecycle
- [ ] Tenant isolation tests
- [ ] User and workspace settings

## Phase 2 — Workflow engine
- [ ] Typed workflow definition schema
- [ ] Definition validation and versioning
- [ ] Queue-backed execution
- [ ] Retry, timeout and cancellation semantics
- [ ] Run history and event timeline

## Phase 3 — Knowledge
- [ ] Page editor and revision history
- [ ] Publishing lifecycle
- [ ] Search abstraction
- [ ] Attachments and access policies

## Phase 4 — Connections
- [ ] Encrypted provider credential storage
- [ ] Webhook signature verification
- [ ] Delivery retries and dead-letter handling
- [ ] Integration health and observability

## Phase 5 — Production readiness
- [ ] Rate limiting and abuse controls
- [ ] Structured logs and operational dashboards
- [ ] Backup and restore runbooks
- [ ] Performance and security review
- [ ] Deployment reference architecture

Until a stable release is announced, APIs and schemas may change. Each milestone should include tests, migration notes and updated documentation.
