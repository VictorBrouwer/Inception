FROM debian:bullseye
RUN apt update -y
RUN apt install -y wget
RUN apt install -y\
				php\
				php-fpm\
				php-mysql\
				mariadb-client\
				systemctl

RUN wget https://wordpress.org/latest.tar.gz -P /var/www
RUN cd /var/www && tar -xzf latest.tar.gz && rm latest.tar.gz

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN mkdir /run/php

RUN sed 's/listen = .*/listen = wordpress:9000/' -i /etc/php/7.4/fpm/pool.d/www.conf

COPY ./tools/config.sh /home/

CMD ["/home/config.sh"]
# CMD ["/usr/sbin/php-fpm7.4", "-F"]