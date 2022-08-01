FROM debian:buster

RUN apt-get clean && apt-get update && apt-get upgrade -y && apt-get install -y openssl
RUN apt-get install -qy nginx

# COPY ./conf/nginx.conf /ect/nginx/sites-available/nginx.conf
COPY ./tools/init.sh /tmp/

# EXPOSE 443

RUN sh /tmp/init.sh

ENTRYPOINT ngnix -g deamon off;