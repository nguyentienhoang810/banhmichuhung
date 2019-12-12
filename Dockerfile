FROM php:7.3-apache

docker run -d -p 9999:80 -v /Users/nguyentienhoang/Sites/PHP/banhmichuhung:/var/www/html --name banhmi-container phpapache2:v1
