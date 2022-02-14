FROM php:8.1-apache

COPY src/ /var/www/html/

COPY flag.c /flag.c
COPY php.ini $PHP_INI_DIR/php.ini

RUN gcc /flag.c -o /flag
RUN chmod 711 /flag
RUN rm /flag.c

RUN chown -R root:www-data /var/www/
RUN chmod -R 755 /var/www/
