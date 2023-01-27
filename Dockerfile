FROM php:7.2-cli
# COPY . /usr/src/myapp
# WORKDIR /usr/src/myapp
COPY config /config
COPY models /models
COPY FetchVehicles /FetchVehicles
# CMD [ "php", "./index.php" ]
CMD php -S 0.0.0.0:8282
# , "./index.php" ]