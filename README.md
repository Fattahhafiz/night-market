# Night Market

A Laravel web application.

## Run after cloning

1. Install PHP dependencies:

```bash
composer install
```

2. Create environment file and generate app key:

```bash
cp .env.example .env
php artisan key:generate
```

3. Create the SQLite database and run migrations:

```bash
touch database/database.sqlite
php artisan migrate --force
```

4. Install JS dependencies and build assets:

```bash
npm install --ignore-scripts
npm run build
```

5. Start the app (server, queue, Vite):

```bash
composer dev
```

The app will be available at http://127.0.0.1:8000.

## Testing

```bash
composer test
```

## License

MIT

## Team

| Name | Role |
|------|------|
| Fattah | |
| Syarif | |
| Kimi |Repository & Documentation Management|
