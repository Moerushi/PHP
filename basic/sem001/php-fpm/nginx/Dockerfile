# образ, который собираем
FROM nginx:latest

# конфигурация сервера
COPY ./hosts/myfirstphp.site.conf /etc/nginx/conf.d/myfirstphp.site.conf

WORKDIR /data  

# имя
VOLUME /data  

EXPOSE 80

# дополнительные команды
CMD ["nginx", "-g", "daemon off;"]