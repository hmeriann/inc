FROM debian:buster

# Update System and Install Tools
RUN apt-get update && apt-get upgrade -y
RUN apt-get install nginx openssl -y

EXPOSE 443
# RUN mkdir /var/www/wordpress && chown -R $USER:$USER /var/www/wordpress \
# && touch /etc/nginx/sites-enabled/wordpress && chmod 777 /etc/nginx/sites-enabled/wordpress

COPY ./conf/nginx.conf /etc/nginx/sites-enabled/default

RUN mkdir /etc/nginx/ssl/
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -keyout /etc/ssl/private/nginx.key \
        -out /etc/ssl/certs/nginx.crt \
        -subj "/C=RU/ST=Tatarstan/L=Kazan/O=wordpress/CN=hmeriann.42.fr"

CMD ["nginx", "-g", "daemon off;"]