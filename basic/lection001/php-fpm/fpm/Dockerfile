# имя образа
FROM php:8.2-fpm

# 
COPY ./php.ini /usr/local/etc/php/conf.d/php-custom.ini

# 
WORKDIR /data

# 
VOLUME /data

# дополнительные команды
CMD ["php-fpm"]
