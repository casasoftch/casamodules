# Casamodules

Casamodules are shared modules consumed by both Zend and Laminas services. To support both frameworks, this repository maintains two active branches:

- **`master`** — Zend-compatible code
- **`laminas`** — Laminas-compatible code

## Versioning

Releases use **branch-scoped version tags** so Composer consumers always get the correct framework line:

| Branch | Tag format | Example | Composer constraint |
|--------|------------|---------|-------------------|
| `laminas` | `{major}.{minor}-laminas` | `1.2-laminas` | `"casasoft/casamodules": "1.2-laminas"` |
| `master` | `{major}.{minor}-zend` | `1.2-zend` | `"casasoft/casamodules": "1.2-zend"` |

Rules:

- Tag **`laminas`** releases only from the `laminas` branch.
- Tag **`zend`** releases only from the `master` branch.
- Bump `{minor}` for shared or branch-specific releases; bump `{major}` for breaking changes on that line.
- Do not reuse bare `1.x` tags — legacy `1.1.x` tags predate this scheme and may point at the wrong branch.

### Creating a release

```bash
# On laminas (after merging to origin/laminas):
git tag 1.2-laminas && git push origin 1.2-laminas

# On master (after merging to origin/master):
git tag 1.2-zend && git push origin 1.2-zend
```

### Consumers

| Service | Branch line | Typical constraint |
|---------|-------------|-------------------|
| `casaone` api (API 1) | `laminas` | `"1.2-laminas"` |
| `casaone-project` | `master` (Zend) | `"1.2-zend"` |

Avoid `dev-master` / `dev-laminas` in production; pin to a tagged release instead.
