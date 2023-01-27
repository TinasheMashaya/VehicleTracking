FROM php:7.2-cli
# COPY . /usr/src/myapp
# WORKDIR /usr/src/myapp
COPY config /config
COPY models /model
COPY FetchVehicles /FetchVehicles
EXPOSE 8280
# CMD [ "php", "./index.php" ]
CMD [ "php", "-S 0.0.0.0:8280"]
# , "./index.php" ]