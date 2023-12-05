FROM php:8.1-cli-alpine3.18

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && install-php-extensions \
    opcache

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer && composer clear-cache

RUN mkdir -p /var/app && chown 1000:1000 /var/app

WORKDIR /var/app

COPY --chown=1000:1000 composer.json composer.json
COPY --chown=1000:1000 composer.lock composer.lock
COPY --chown=1000:1000 src /var/app/src

USER 1000

RUN composer install
