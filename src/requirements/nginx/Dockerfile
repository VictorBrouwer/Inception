FROM debian:bullseye
RUN apt update
RUN apt install nginx -y
RUN apt install vim -y
RUN apt install curl -y
RUN mkdir -p /etc/nginx/ssl
RUN apt install openssl -y
RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key -subj "/C=NL/ST=Noord-Holland/L=Amsterdam/O=42/OU=42/CN=vbrouwer.42.fr/UID=vbrouwer"
COPY conf/nginx.conf /etc/nginx/nginx.conf