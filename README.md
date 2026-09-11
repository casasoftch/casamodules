# Casamodules

Casamodules are shared modules consumed by both Zend and Laminas services. To support both frameworks, this repository maintains two active branches:

- **`master`** — Zend-compatible code
- **`laminas`** — Laminas-compatible code

## Versioning

Releases use **branch-scoped semver tags** so Composer consumers always get the correct framework line.

Composer requires full `major.minor.patch` versions. The branch line is encoded as **semver build metadata** (`+laminas` / `+zend`):

| Branch | Tag format | Example | Composer constraint |
|--------|------------|---------|-------------------|
| `laminas` | `{major}.{minor}.{patch}+laminas` | `1.2.0+laminas` | `"casasoft/casamodules": "1.2.0+laminas"` |
| `master` | `{major}.{minor}.{patch}+zend` | `1.2.0+zend` | `"casasoft/casamodules": "1.2.0+zend"` |

The `1.2` release line starts at patch `0` (`1.2.0+…`). Bump `{patch}` for fixes, `{minor}` for features, `{major}` for breaking changes on that line.

Rules:

- Tag **`laminas`** releases only from the `laminas` branch.
- Tag **`zend`** releases only from the `master` branch.
- Quote tags in shell when pushing (`git tag '1.2.0+laminas'`).
- Do **not** use `{major}.{minor}-laminas` — Composer rejects it as an invalid version string.
- Legacy bare `1.1.x` and invalid `1.2-laminas` / `1.2-zend` tags are deprecated.

### Creating a release

```bash
# On laminas (after merging to origin/laminas):
git tag '1.2.0+laminas' && git push origin '1.2.0+laminas'

# On master (after merging to origin/master):
git tag '1.2.0+zend' && git push origin '1.2.0+zend'
```

### Consumers

| Service | Branch line | Typical constraint |
|---------|-------------|-------------------|
| `casaone` api (API 1) | `laminas` | `"1.2.0+laminas"` |
| `casaone-project` | `master` (Zend) | `"1.2.0+zend"` |

Avoid `dev-master` / `dev-laminas` in production; pin to a tagged release instead.
