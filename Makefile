NAME = inception

LIST_CONTAINTERS := $(shell docker ps -a -q

LIST_VOLUMES := $(shell docker volume ls -q)

all:
    mkdir -p /home/vbrouwer/data/mariadb
    mkdir -p /home/vbrouwer/data/wordpress
    docker-compose -f srcs/docker-compose.yml up --build -d