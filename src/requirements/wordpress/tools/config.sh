#!/bin/bash

# wp config create	--allow-root \
# --dbname=$SQL_DATABASE \
# --dbuser=$SQL_USER \
# --dbpass=$SQL_PASSWORD \
# --dbhost=mariadb:3306 --path='/var/www/wordpress'

echo "Creating config"
wp-cli config create\
	--allow-root\
	--path=/var/www\
	--dbname="$DB_NAME"\
	--dbuser="$DB_USER"\
	--dbpass="$DB_USER_PASSWORD"
	--dbhost="$DB_HOST"\

echo "Running wp core install"
wp-cli core install\
	--allow-root\
	--path=/var/www\
	--skip-email\
	--title="$WP_ADMIN_TITLE"\
	--admin_name="$WP_ADMIN_NAME"\
	--admin_password="$WP_ADMIN_PASSWORD"\
	--admin_email="$WP_ADMIN_EMAIL"\
	--url="$WP_ADMIN_URL"

echo "Running wp user create"
wp-cli user create\
	"$WP_USER_NAME"\
	"$WP_USER_EMAIL"\
	--allow-root\
	--path=/var/www\
	--role="$WP_USER_ROLE"\
	--user_pass="$WP_USER_PASSWORD"

echo "Running fpm"
/usr/sbin/php-fpm7.4 -F