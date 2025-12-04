#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

# 1. Database Setup
# Determine database path from env or default
DB_PATH=${DB_DATABASE:-/var/www/html/database/database.sqlite}
DB_DIR=$(dirname "${DB_PATH}")

# Create directory if it doesn't exist (e.g. if using a volume mounted at /var/www/html/storage)
if [ ! -d "$DB_DIR" ]; then
    echo "Creating database directory: $DB_DIR"
    mkdir -p "$DB_DIR"
    chown www-data:www-data "$DB_DIR"
fi

# Check if the SQLite database file exists. If not, create an empty one.
if [ ! -f "$DB_PATH" ]; then
    echo "Creating database file: $DB_PATH"
    touch "$DB_PATH"
    # Ensure the web server can write to it
    chown www-data:www-data "$DB_PATH"
fi

# 2. Environment Setup
# If .env is missing, copy from example and generate key
if [ ! -f /var/www/html/.env ]; then
    echo "Creating .env file..."
    cp /var/www/html/.env.example /var/www/html/.env
    php artisan key:generate
fi

# 3. Run Migrations
# --force is required to run migrations in production mode without confirmation
echo "Running migrations..."
php artisan migrate --force

# 3. Cache Configuration
# In production, we cache config, routes, and views for speed.
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 4. Start Apache
# Exec runs the command passed to the docker container (default: apache2-foreground)
# using 'exec' ensures Apache becomes PID 1, receiving signals correctly.
echo "Starting Apache..."
exec "$@"
