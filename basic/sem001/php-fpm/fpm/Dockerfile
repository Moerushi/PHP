FROM php:8.2-fpm 

COPY ./php.ini /usr/local/etc/php/conf.d/php-custom.ini
COPY ./zz-socket.conf /usr/local/etc/php-fpm.d/zz-socket.conf

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN pecl install -o -f xdebug && docker-php-ext-enable xdebug

WORKDIR /data

VOLUME /data

CMD ["php-fpm"]
