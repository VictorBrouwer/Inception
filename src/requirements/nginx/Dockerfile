FROM debian:bullseye
RUN apt update
RUN apt install nginx -y
RUN apt install vim -y
RUN apt install curl -y
RUN mkdir -p /etc/nginx/ssl
RUN apt install OpenSSL -y
RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key
COPY conf/nginx.conf /etc/nginx/nginx.conf