FROM php:7.2-cli
# COPY . /usr/src/myapp
# WORKDIR /usr/src/myapp
COPY config /config
COPY model /model
COPY FetchVehicles /FetchVehicles
# CMD [ "php", "./index.php" ]
RUN php -S 0.0.0.0:8280
# , "./index.php" ]