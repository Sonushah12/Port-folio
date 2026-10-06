# Sonu Shah — Portfolio

A responsive PHP portfolio with self-hosted typography, a CSS orbital sculpture, real project links, an about section, native skill disclosures, and a database-backed contact form.

## Run locally

Requires PHP 8.1+ with `mysqli`, and MySQL or MariaDB. No Composer or npm packages are required by the website.

1. Create a database named `portfolio` and import `schema.sql`.
2. Set `DB_HOST`, `DB_USER`, `DB_PASSWORD`, and `DB_NAME` if your local database differs from the defaults (`localhost`, `root`, empty password, `portfolio`). Use a dedicated database account for deployed environments.
3. From this directory, run `php -S 127.0.0.1:8000`.

Contact submissions are saved to `user_master`; this website does not send email. A writable temporary directory is needed for PHP sessions. Validation, a session CSRF token, and prepared SQL statements protect form submissions. Keep database credentials out of source control.

### Prepared cloud environment

The existing cloud runtime is in `/workspace/.portfolio-runtime`. Run `bash /workspace/.portfolio-runtime/start.sh` to start PHP and the local MariaDB instance. For PHP commands, add `/workspace/.portfolio-runtime/bin` to `PATH`. The cloud development database uses a local Unix socket with database TCP networking disabled.

### Design and validation

See [design notes](docs/design-notes.md) for the palette, motion behavior, and researched UI/UX sources. Decorative motion respects reduced-motion preferences and can be paused. Content and form submission also work without JavaScript. `About.php` and `services.php` redirect to the corresponding homepage sections.

Validation includes PHP syntax checks, Chromium desktop/mobile layout and interaction checks, axe WCAG A/AA checks, and actual contact submissions verified in MariaDB. Automated accessibility checks do not replace manual assistive-technology testing.
