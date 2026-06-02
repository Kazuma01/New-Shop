FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    git unzip curl libpq-dev libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

RUN a2enmod rewrite
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY backend/ /var/www/html/

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html

COPY start.sh /start.sh
RUN chmod +x /start.sh
CMD ["/start.sh"]