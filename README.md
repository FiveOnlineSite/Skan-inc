# Skan Inc. Website

PHP website for Skan Inc., including product and service pages and an SMTP-powered contact form.

## Requirements

- PHP with the OpenSSL extension enabled
- [Composer](https://getcomposer.org/)
- Apache or another PHP-compatible web server
- SMTP credentials if the contact form will be used

## Local setup with XAMPP

1. Place the project at `C:\xampp\htdocs\skaninc`.
2. Open a terminal in the project directory and install dependencies:

   ```bash
   composer install
   ```

3. Start Apache from the XAMPP Control Panel.
4. Visit `http://localhost/skaninc/`.

## Contact form configuration

The contact form sends email through PHPMailer. Create the local configuration from the safe example:

```powershell
Copy-Item includes/mail-config.local.example.php includes/mail-config.local.php
```

Edit `includes/mail-config.local.php` and enter the SMTP sender, password, and recipient details. For Gmail, use an App Password instead of the normal account password.

The local configuration is excluded by `.gitignore` and must never be committed. The tracked `includes/mail-config.local.example.php` file must contain sample values only.

For hosted environments, you can use these environment variables instead:

- `SKAN_SMTP_HOST`
- `SKAN_SMTP_PORT`
- `SKAN_SMTP_USERNAME`
- `SKAN_SMTP_PASSWORD`
- `SKAN_SMTP_FROM_EMAIL`
- `SKAN_SMTP_FROM_NAME`
- `SKAN_CONTACT_RECIPIENT`
- `SKAN_CONTACT_RECIPIENT_NAME`

Values in `includes/mail-config.local.php` override environment variables when the file exists.

## Project structure

```text
skaninc/
|-- css/                 Stylesheets
|-- images/              Website images and icons
|-- includes/            Shared layout, contact handler, and mail configuration
|-- js/                  Front-end JavaScript
|-- index.php            Home page
|-- contact.php          Contact page
|-- product-detail.php   Product detail page
|-- composer.json        PHP dependencies
`-- README.md            Project documentation
```

The other PHP files in the root are individual service and product pages.

## Git and deployment notes

These paths are intentionally excluded from Git:

- `includes/mail-config.local.php` because it contains private SMTP credentials
- `vendor/` because Composer restores dependencies
- `Skan-inc/` because it is a leftover duplicate directory and is not part of the website

After cloning on a server, run:

```bash
composer install --no-dev --optimize-autoloader
```

Then configure SMTP through environment variables or the ignored local configuration file, and point the web server at the project root.

Never commit passwords, API keys, or production credentials.
