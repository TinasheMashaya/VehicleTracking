FROM php:7.2-cli

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY config /config
COPY models /models
COPY FetchVehicles /FetchVehicles
# CMD [ "php", "./index.php" ]
CMD php -S 0.0.0.0:8282
# , "./index.php" ]