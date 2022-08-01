echo "NGINX: Copying NGNIX config...";
if [ ! -f /tmp/ng_link ]; then
ln -s /etc/nginx/sites-available/nginx.conf /ect/nginx/sites-enabled/html.conf
rm -rf /ect/nginx/sites-enabled/default
touch /tmp/ng_link
fi

echo "NGINX: Creating SSL certificate...";
if [ ! -d /etc/nginx/ssl ]; then
mkdir /etc/nginx/ssl
openssl req -newkey rsa:2048 -x509 -sha256 -days 365 -nodes \
	-out /etc/ngnix/ssl/private.pem \
	-keyout /etc/ngnix/ssl/public.key \
	-subj "/C=RU/ST=Tatarstan/L=Kazan/O=wordpress/CN=hmeriann.42.fr" 
openssl rsa -noout -text -in /etc/nginx/ssl/public.key
fi

echo "NGINX: Giving permissions...";
if [ ! -f /tmp/perm ]; then
chown -R www-data /var/www/*
chown -R 744 /var/www/*
touch /tmp/perm
fi
