FROM php:7.3.3-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli
RUN apt-get update && apt-get upgrade -y
COPY . /var/www/html/
EXPOSE 80
