# ADR 0001: Start with a modular monolith

- **Status:** Accepted
- **Date:** 2026-11-16

## Context

Azhura contains related domains: identity, workspaces, workflows, knowledge, connections and audit. Separate services would introduce distributed transactions and operational overhead before boundaries are understood.

## Decision

Build one Laravel application organized around bounded contexts and explicit application contracts. Each module owns its business rules and persistence responsibilities. Cross-module interactions use contracts, application services or domain events.

## Consequences

**Benefits**
- One deployment unit and local development workflow.
- Straightforward transactions for cohesive use cases.
- Easier refactoring while boundaries evolve.
- Modules remain candidates for extraction when justified.

**Trade-offs**
- Boundaries must be enforced through conventions and tests.
- Shared database tables need clear ownership.
- Shared models must not become an uncontrolled dependency graph.

## Revisit when

A module has a stable boundary, independent scaling needs, distinct operational ownership and a measurable reason to become a separate service.
