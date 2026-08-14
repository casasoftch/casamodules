# AGENTS.md

Guidance for AI coding agents and harnesses working in this repository.

## Parallel branch strategy

Casamodules are shared modules consumed by both Zend and Laminas services. This repository maintains **two active parallel branches**:

| Branch | Purpose |
|--------|---------|
| `master` | Zend-compatible code |
| `laminas` | Laminas-compatible code; **release tags are created from this branch** |

Treat these as sibling long-lived lines, not a short-lived feature branch and its base.

## Before changing code

1. Identify which branch you are on (`master` or `laminas`).
2. Decide whether the change is **shared** (applies to both frameworks) or **branch-specific** (framework/API differences only).
3. If the change is shared, plan the equivalent change on the **sibling branch** before finishing the PR.

## Shared vs branch-specific changes

- **Shared code** (business logic, translations, helpers, standards, behavior that both consumers need): land the change on **both** `master` and `laminas`.
- **Branch-specific code** (Zend vs Laminas APIs, dependency wiring, framework-only shims): keep it on the branch it belongs to, and say so explicitly.

When in doubt, prefer applying the change to both branches and calling out any intentional divergence.

## Pull request requirements

Every PR description **must** state whether the sibling branch is affected. Use one of:

- **Sibling affected: yes** — include the sibling PR link, branch name, or a clear follow-up plan (and do not merge until the sibling work is tracked).
- **Sibling affected: no** — briefly explain why (framework-only / branch-specific).

Harnesses and reviewers should block or flag PRs that omit this statement.

## Agent checklist

Before proposing or opening a PR:

- [ ] Confirm current branch (`master` or `laminas`).
- [ ] Classify the change as shared or branch-specific.
- [ ] If shared, prepare or note the matching change on the sibling branch.
- [ ] Ensure the PR states sibling impact (`yes` + pointer, or `no` + reason).
- [ ] Remember: releases are tagged from `laminas`.
