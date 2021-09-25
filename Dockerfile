FROM alpine:3.14
LABEL maintainer="erik.soderblom@gmail.com"
LABEL description="Alpine based image with apache2 and php8."

# Setup apache and php
RUN apk --update add wget \ 
             apache2 \
             apache2-ssl \
             php7-apache2 \
		     curl \
		     git \
		     php7 \
		     php7-curl \
		     php7-openssl \
		     php7-iconv \
		     php7-json \
		     php7-mbstring \
		     php7-phar \
		     php7-dom --repository http://nl.alpinelinux.org/alpine/edge/testing/ && rm /var/cache/apk/* \
            && mkdir /htdocs

EXPOSE 80 443

ADD docker-entrypoint.sh /

HEALTHCHECK CMD wget -q --no-cache --spider localhost

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer 
RUN mkdir -p /htdocs
RUN chown -R www-data:www-data /htdocs
RUN chmod -R 755 /htdocs
WORKDIR /htdocs
COPY composer.json composer.lock  ./
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist
COPY ./data ./


ENTRYPOINT ["/docker-entrypoint.sh"]
