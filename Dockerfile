FROM ubuntu

RUN addgroup --gid 1000 www-data www-data

WORKDIR /var/www/

RUN chown -R $USER:www-data /var/www/

RUN apt-get update
RUN apt update

RUN apt-get -y install tzdata
RUN apt-get -y install apache2

RUN apt -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt -y install php php-gd php-imagick php-curl php-mysql php-json php-soap php-mbstring php-zip php-xml php-swoole php-dev wget php-cli
RUN apt -y install zip unzip
RUN apt -y install git
RUN apt-get -y install vim nano

RUN wget -O /home/composer-setup.php https://getcomposer.org/installer
RUN php /home/composer-setup.php --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite
RUN a2enmod ssl

COPY ../files/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN service apache2 restart

RUN echo "America/Sao_Paulo" > /etc/timezone
RUN dpkg-reconfigure -f noninteractive tzdata

RUN bash

CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]

EXPOSE 8080