FROM debian:buster

# && for cache busting
RUN apt-get update && apt-get install -y \
	php7.3-fpm \
	php-mbstring \
	php-mysql \
	wget

COPY ./tools/wp-config.php /tmp/
COPY ./tools/init.sh /tmp/

# EXPOSE 9000

CMD ["sh", "/tmp/init.sh"]
