FROM ubuntu:18.04

RUN apt-get update && \
	apt-get install -y language-pack-en-base && \
	export LC_ALL=en_US.UTF-8 && \
	export LANG=en_US.UTF-8 

RUN DEBIAN_FRONTEND="noninteractive" TZ="America/New_York" apt-get install -y tzdata

RUN apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php 

RUN apt-get update && \
	apt-get -y upgrade

RUN apt-get -y install \
	apache2 \
	php7.2\
	php7.2-mysql \
	supervisor \
	wget

RUN echo 'mysql-server mysql-server/root_password password root' | debconf-set-selections && \
	echo 'mysql-server mysql-server/root_password_again password root' | debconf-set-selections

RUN apt-get install -qqy mariadb-server

RUN wget http://wordpress.org/latest.tar.gz && \
	tar xzvf latest.tar.gz && \
	cp -R ./wordpress/* /var/www/html && \
	rm /var/www/html/index.html

RUN (/usr/bin/mysqld_safe &); sleep 5; mysqladmin -u root -proot create wordpress

COPY wp-config.php /var/www/html/wp-config.php
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord"]
