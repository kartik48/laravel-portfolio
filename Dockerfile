# 1. Base Image: Use the official PHP 8.2 image with Apache web server
# This gives us a Linux environment with PHP and Apache pre-installed.
FROM php:8.2-apache

# 2. Install System Dependencies
# We need:
# - zip/unzip: for Composer to extract packages
# - sqlite3 & libsqlite3-dev: for our SQLite database
# - libzip-dev: needed for the PHP zip extension
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev \
    libzip-dev \
    && docker-php-ext-install zip pdo_sqlite

# 3. Enable Apache mod_rewrite
# Laravel requires this to handle clean URLs (routing)
RUN a2enmod rewrite

# 4. Configure Apache DocumentRoot
# Apache looks at /var/www/html by default. Laravel needs /var/www/html/public.
# We use 'sed' to find and replace the path in Apache's config files.
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Allow .htaccess files to override configuration (needed for Laravel routing)
RUN sed -i '/<Directory \${APACHE_DOCUMENT_ROOT}>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# 5. Set Working Directory
# All subsequent commands will run from this folder
WORKDIR /var/www/html

# 6. Install Composer
# Copy the Composer binary from the official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 7. Copy Dependency Files
# We copy these first to leverage Docker's cache. If these files haven't changed,
# Docker won't re-run 'composer install', speeding up builds.
COPY composer.json composer.lock ./

# 8. Install PHP Dependencies
# --no-scripts: Don't run post-install scripts (like artisan) yet because code isn't copied
RUN composer install --no-dev --optimize-autoloader --no-scripts

# 9. Copy Application Code
# Now copy the rest of your application into the container
COPY . .

# 10. Run Composer Scripts
# Now that code is copied, we can run the scripts (like package discovery)
RUN composer dump-autoload --optimize

# 10. Set Permissions
# Apache runs as the 'www-data' user. It needs write access to:
# - storage/: for logs, cache, and uploaded images
# - bootstrap/cache/: for framework optimization files
# - database/: to create/write to the sqlite file
# - public/: so it can serve assets (and we fix ownership here just in case)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database /var/www/html/public
# Ensure public files are readable by everyone (fixes 403 Forbidden on some files)
RUN chmod -R 755 /var/www/html/public

# 11. Expose Port
# Tell Docker that this container listens on port 80
EXPOSE 80

# 12. Entrypoint Script
# Copy the entrypoint script into the container
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
# Make it executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Set the entrypoint
ENTRYPOINT ["entrypoint.sh"]

# 13. Start Command
# This is the argument passed to the entrypoint script
CMD ["apache2-foreground"]
