FROM debian:bullseye
RUN apt update -y
RUN apt install -y\
				nginx\
				openssl

RUN apt install curl -y
RUN mkdir -p /etc/nginx/ssl

RUN rm -rf /etc/nginx/sites-enabled/*
COPY conf/nginx.conf /etc/nginx/sites-enabled/nginx.conf

# Generate the certificate and key for a secure connection
RUN mkdir -p /etc/nginx/ssl &&\
	openssl req\
	-x509\
	-nodes\
	-out\
	/etc/nginx/ssl/inception.crt\
	-keyout /etc/nginx/ssl/inception.key\
	-subj "/C=NL/ST=Noord-Holland/L=Amsterdam/O=Codam/OU=Me/CN=vbrouwer"


CMD [ "nginx", "-g", "daemon off;" ]