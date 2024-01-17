#!/bin/bash

# Exit immediately on command error
set -e

if [ ! -d "/var/lib/mysql/$DB_NAME" ]; then
	echo "Bootstrapping mariadbd"
	{
		# echo "CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\`;"
		# echo "CREATE USER IF NOT EXISTS \`${DB_USER}\`@'localhost' IDENTIFIED BY '${DB_USER_PASSWORD}';"
		# echo "GRANT ALL PRIVILEGES ON \`${DB_NAME}\`.* TO \`${DB_USER}\`@'%' IDENTIFIED BY '${DB_USER_PASSWORD}';"
		# echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '${DB_ROOT_PASSWORD}';"
		# echo "FLUSH PRIVILEGES;"

		echo "FLUSH PRIVILEGES;"
		echo "CREATE DATABASE IF NOT EXISTS $DB_NAME;"
		echo "GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' IDENTIFIED VIA mysql_native_password USING PASSWORD('$DB_ROOT_PASSWORD') WITH GRANT OPTION;"
		echo "GRANT ALL ON $DB_NAME.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_USER_PASSWORD';"
		echo "FLUSH PRIVILEGES;"
	} | mariadbd --bootstrap
fi

echo "Starting mariadb"
mariadbd
