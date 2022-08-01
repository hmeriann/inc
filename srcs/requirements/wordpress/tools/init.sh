echo "WP: Creating folders for WP...";
if [ ! -f /tmp/html ]; then
mkdir -p /var/www/html
mkdir -p /run/php
mv /tmp/wp-config.php /var/www/html/wp-config.php
touch /tmp/html
fi

#		installing wordpress
echo "WP: Install WORDPESS...";
if [ ! -d /usr/local/bin/wp-cli.phar ]; then
wget -P /usr/local/bin https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x /usr/local/bin/wp-cli.phar
mv /usr/local/bin/wp-cli.phar /usr/local/bin/wp 
cd /var/www/html
wp core download --allow-root
chmod 744 /var/www/html/wp-config.php
fi

#		listening port 9000 
echo "WP: Listen port 9000...";
if [ ! -f /tmp/w_conf ]; then
sed -i 's/;daemonize = yes/daemonize = no/g' /etc/php/7.3/fpm/pool.d/www.conf
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
touch /tmp/w_conf
fi

#		changing data inside container for nginx.conf
echo "WP: Setup folders for NGNIX...";
if [ ! -f /tmp/c_wp_conf ]; then
sed -i "s|R_MARIADB_DATABASE|'$MARIADB_DATABASE'|g" /var/www/html/wp-config.php
sed -i "s|R_MARIADB_USER|'$MARIADB_USER'|g" /var/www/html/wp-config.php
sed -i "s|R_MARIADB_PASSWORD|'$MARIADB_PASSWORD'|g" /var/www/html/wp-config.php
sed -i "s|R_MARIADB_HOST|'$MARIADB_HOST'|g" /var/www/html/wp-config.php
wp core install --allow-root         \
	--url=$WORDPRESS_URL                    \
	--title=$WORDPRESS_TITLE                \
	--admin_user=$WORDPRESS_ADMIN      \
	--admin_password=$WORDPRESS_ADMIN_PASSWORD  \
	--admin_email=$WORDPRESS_ADMIN_EMAIL
wp user create --allow-root $WORDPRESS_URL $WORDPRESS_ADMIN_EMAIL --user_pass=$WORDPRESS_ADMIN_PASSWORD
touch /tmp/c_wp_conf
fi

#		starting php-fpm(fastCGI)
/usr/sbin/$(ls /usr/sbin | grep php | grep fpm) --nodaemonize