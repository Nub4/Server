FROM debian:buster

COPY ./srcs/init.sh .
COPY ./srcs/default ./etc/nginx/conf.d/
COPY ./srcs/config.inc.php .
COPY ./srcs/wp-config.php .

RUN apt-get update && apt-get install -y \
	nginx \
	wget \
	mariadb-server \
	php php-mysql php-fpm php-curl php-gd php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip mariadb-server mariadb-client

CMD bash init.sh
