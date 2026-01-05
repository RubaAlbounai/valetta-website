FROM php:8.1-apache

# تثبيت المتطلبات
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# تفعيل mod_rewrite
RUN a2enmod rewrite

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# نسخ ملفات المشروع
WORKDIR /var/www/html
COPY . .

# صلاحيات Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# تثبيت الحزم
RUN composer install --no-dev --optimize-autoloader

# إعداد Apache لـ Laravel
RUN sed -i 's|/var/www/html|/var/www/html/public|g' \
    /etc/apache2/sites-available/000-default.conf

EXPOSE 80
CMD ["apache2-foreground"]
