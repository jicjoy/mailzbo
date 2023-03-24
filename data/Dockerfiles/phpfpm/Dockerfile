FROM php:8.1.12-fpm-alpine3.16

LABEL maintainer "wolf tan <wolf.tan@zbocloud.com>"

ENV  DOCUMENT_ROOT="/data/websites" \
      APCU_PECL=5.1.22 \
      MSMTP_VERSION=1.8.22 \
      IMAGICK_PECL=3.7.0 \
      MEMCACHED_PECL=3.1.5 \
      REDIS_PECL=5.3.7 \
      IGBINARY_PECL=3.2.7 \
      MSGPACK_PECL=2.1.2 \
      FPM_USER="www-data" \
      FPM_GROUP="www-data" \
      NODE_VERSION=18.12.1 \
      GO_VERSION=1.19.3 \
      FPM_GID=82 \
      FPM_UID=82


RUN set -eux;sed -i "s@http://dl-cdn.alpinelinux.org/@https://mirrors.huaweicloud.com/@g" /etc/apk/repositories \
    && sed -i "s@https://dl-cdn.alpinelinux.org/@https://mirrors.huaweicloud.com/@g" /etc/apk/repositories \
    && apk add -U --no-cache \
        busybox-suid \
           shadow \
           git \
           proxychains-ng \
         bash \
           jq \
           nodejs \
           npm \
           yarn \
            redis \
          samba-client \
          mysql-client \
         mariadb-dev \
  && userdel  www-data \
  && mkdir -p ${DOCUMENT_ROOT} \
  && addgroup -g $FPM_GID -S $FPM_GROUP \
  &&  adduser -u $FPM_UID -S -D -H  -G $FPM_GROUP $FPM_USER

RUN set -eux \
    && apk add  --no-cache --virtual .build-ext-deps  \
     $PHPIZE_DEPS \
  aspell-dev \
  aspell-libs \
  c-client \
  cyrus-sasl-dev \
  freetype \
  freetype-dev \
  gettext-dev \
  gmp-dev \
  gnupg \
  icu-dev \
  icu-libs \
  imagemagick \
  imagemagick-dev \
  imap-dev \
  gettext \
  cmake \
  automake \
  texinfo \
  linux-headers \
  libjpeg-turbo \
  libjpeg-turbo-dev \
  libmemcached-dev \
  libpng \
  libpng-dev \
  libressl \
  libressl-dev \
  librsvg \
  libtool \
  libwebp-dev \
  libxml2-dev \
  libxpm-dev \
  libzip-dev \
  libxslt-dev \
  make \
  openldap-dev \
  pcre-dev \
  gnutls-dev \
  gnutls \
  re2c \
  nghttp2 \
  nghttp2-dev \
  openssl \
  openssl-dev \
  zlib-dev \
  tzdata


RUN set -eux \
  && git clone https://github.com/php/pecl-mail-mailparse \
  && cd pecl-mail-mailparse \
  && pecl install package.xml \
  && pecl channel-update pecl.php.net \
  && cd .. \
  && rm -r pecl-mail-mailparse \
  && pecl install igbinary-${IGBINARY_PECL} msgpack-${MSGPACK_PECL}  imagick-${IMAGICK_PECL} \
  && docker-php-ext-enable igbinary msgpack imagick mailparse \
  && pecl install redis-${REDIS_PECL} memcached-${MEMCACHED_PECL}  apcu-${APCU_PECL} \
  && docker-php-ext-enable  memcached  redis apcu \
  && pecl clear-cache \
  && docker-php-ext-configure intl \
  && docker-php-ext-configure exif \
  && docker-php-ext-configure calendar  \
  && docker-php-ext-configure gd --with-freetype=/usr/include/ \  
     --with-jpeg=/usr/include/ \
  && docker-php-ext-install -j 4 xsl gd exif gettext intl ldap opcache pcntl mysqli pdo pdo_mysql  pspell soap sockets zip bcmath gmp calendar \
  && docker-php-ext-configure imap --with-imap --with-imap-ssl  \
 # && docker-php-ext-enable calendar mysqli \
  && docker-php-ext-install -j 4 imap \
  && curl --silent --show-error https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && chmod +x /usr/local/bin/composer



RUN set -eux \
#add swoole
   pecl install --configureoptions 'enable-openssl="yes" enable-http2="yes"  enable-swoole-json="yes" enable-swoole-curl="yes"' swoole \
 # add msmtp
  &&  mkdir -p /usr/src/msmtp; \
          cd /usr/src; \
           curl -fsSL "https://marlam.de/msmtp/releases/msmtp-${MSMTP_VERSION}.tar.xz" -o /usr/src/msmtp.tar.xz; \
          tar xf msmtp.tar.xz -C /usr/src/msmtp --strip-components=1; \
          cd /usr/src/msmtp; \
        ./configure; make; make install;rm -rf /usr/src/msmtp \
  &&  runDeps="$( \
          scanelf --needed --nobanner --format '%n#p' --recursive /usr/local \
      | tr ',' '\n' \
      | sort -u \
      | awk 'system("[ -e /usr/local/lib/" $1 " ]") == 0 { next } { print "so:" $1 }' \
  )"; \
	apk add --no-cache $runDeps; \
	\
	apk del --no-network .build-ext-deps; \
	# update pecl channel definitions https://github.com/docker-library/php/issues/443
    	pecl update-channels; \
    	rm -rf /tmp/pear ~/.pearrc; \
    	php --version; \
    { \
  echo '#strict_chain'; \
  echo 'dynamic_chain'; \
  echo 'proxy_dns';     \
  echo 'remote_dns_subnet 224'; \
  echo 'tcp_read_time_out 15000'; \
  echo 'tcp_connect_time_out 8000'; \
  echo 'localnet 127.0.0.0/255.0.0.0'; \
  echo 'localnet 172.25.0.0/255.255.0.0'; \
  echo 'quiet_mode'; \
  echo ''; \
  echo '[ProxyList]'; \
  echo 'socks5  177.177.17.254 1880'; \
  } | tee > /etc/proxychains.conf

RUN set -eux \
  #add go
  && curl -fsSL "https://golang.google.cn/dl/go${GO_VERSION}.linux-amd64.tar.gz" -o /usr/src/go.tar.gz \
  &&  mkdir -p /usr/local/go \
  && tar zxf go.tar.gz -C /usr/local/go --strip-components=1 \
  &&  sed -i '/unset[[:space:]]*-f[[:space:]]*append_path/i append_path /usr/local/go/bin' /etc/profile; \
   cd /usr/src && rm -rf /usr/src/go.tar.gz

COPY ./docker-entrypoint.sh /

WORKDIR ${DOCUMENT_ROOT}

ENTRYPOINT ["/docker-entrypoint.sh"]

CMD ["php-fpm"]
