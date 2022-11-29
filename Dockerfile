FROM php:8-apache-buster

ARG ENV
ENV ENV $ENV

COPY ./docker/default.conf /etc/apache2/sites-enabled/
COPY ./docker/php.ini /usr/local/etc/php/php.ini

RUN apt-get update && apt-get install -y libzip-dev libfreetype6-dev zlib1g-dev libpq-dev\
  && docker-php-ext-install zip pdo_mysql mysqli bcmath \
  && docker-php-ext-enable mysqli

RUN apt-get install -y libmagick++-dev \
  libmagickwand-dev \
  libpq-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  libwebp-dev \
  libxpm-dev

RUN docker-php-ext-install opcache
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd

RUN cd ~
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer

RUN /usr/sbin/a2enmod rewrite.load
RUN /usr/sbin/a2enmod headers.load

WORKDIR /app
COPY . /app
RUN cp /app/.env.${ENV} /app/.env

RUN composer install
RUN chmod -R 777 /app/storage

RUN /bin/sh -c a2enmod rewrite

# 以下composer installが出来てないよというエラーが発生するので一旦コメントアウトで各自実行とする
# CMD php artisan cache:clear && \
#     php artisan config:clear && \
#     php artisan route:clear && \
#     php artisan config:cache && \
#     apache2-foreground

CMD apache2-foreground && \
    /usr/bin/supervisord
