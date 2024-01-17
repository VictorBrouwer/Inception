FROM debian:bullseye

RUN apt update -y
RUN apt install -y\
		mariadb-server\
		systemctl

RUN mkdir -p /var/run/mysqld &&\
	chmod 777 /var/run/mysqld /var/lib/mysql &&\
	chown -R mysql:mysql /var/run/mysqld && \
    chown -R mysql:mysql /etc/mysql

# copy the correct conf to the specific dir with listen set to anything (*) 
COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql

# copy the setup script
COPY ./tools/mysql_setup_script.sh /mysql_setup_script.sh
RUN chown mysql:mysql /mysql_setup_script.sh

# run the setup script
CMD ["/mysql_setup_script.sh"]
