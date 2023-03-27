FROM  php:8.1.17-fpm-bullseye

ARG   GITHUB_PROXY=https://ghproxy.com/
LABEL maintainer "wolf tan <wolf.tan@zbocloud.com>"

ENV  DOCUMENT_ROOT="/data/websites" \
      APCU_PECL=5.1.22 \
      MSMTP_VERSION=1.8.23 \
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

RUN set -eux;sed -i "s@http://deb.debian.org@https://repo.huaweicloud.com@g" /etc/apt/sources.list; \
   apt-get update; \
#   apt-get install apt-transport-https ca-certificates; \
	apt-get install -y --no-install-recommends \
           git \
            redis \
            vim \
            dialog \
            locales \
          default-mysql-client \
  && userdel  www-data \
  && mkdir -p ${DOCUMENT_ROOT} \
  && addgroup --system --gid $FPM_GID $FPM_GROUP \
  &&  adduser --system -u $FPM_UID --gid $FPM_GID --disabled-login --no-create-home $FPM_USER

RUN set -eux \
    && savedAptMark="$(apt-mark showmanual)";  \
    apt-get install -y --no-install-recommends \
    $PHPIZE_DEPS \
  libaspell-dev \
  libreadline-dev \
  libsasl2-dev \
  libfreetype6 \
  libjpeg-dev \
  libpng-dev \
  libldap2-dev \
  libfreetype6-dev \
  libgettextpo-dev \
  libgmp-dev \
  gnupg \
  libicu-dev \
  imagemagick \
  libmemcached-dev \
  libmagickwand-6.q16-dev \
  libmagickcore-6.q16-dev \
  gettext \
  cmake \
  automake \
  texinfo \
  libwebp-dev \
  libxml2-dev \
  libxpm-dev \
  libzip-dev \
  libcurl4-gnutls-dev \
  libxslt-dev \
  make \
  nghttp2 \
  libnghttp2-dev \
  libssl-dev \
  libpspell-dev \
  libpq-dev \
  libc-client-dev \
  libkrb5-dev \
  zlib1g-dev \
  tzdata \
  ; \
  \
	export \
		CFLAGS="$PHP_CFLAGS" \
		CPPFLAGS="$PHP_CPPFLAGS" \
		LDFLAGS="$PHP_LDFLAGS" \
	; \
   git clone ${GITHUB_PROXY}https://github.com/php/pecl-mail-mailparse \
  && cd pecl-mail-mailparse \
  && pecl install package.xml \
  && pecl channel-update pecl.php.net \
  && cd .. \
  && rm -r pecl-mail-mailparse \
  && pecl install igbinary-${IGBINARY_PECL} msgpack-${MSGPACK_PECL}  imagick-${IMAGICK_PECL} \
  && docker-php-ext-enable igbinary msgpack imagick mailparse \
  && pecl install redis-${REDIS_PECL} memcached-${MEMCACHED_PECL}  apcu-${APCU_PECL} \
  && pecl install --configureoptions 'enable-openssl="yes" enable-http2="yes"  enable-swoole-json="yes" enable-swoole-curl="yes"' swoole \
  && docker-php-ext-enable  memcached swoole redis apcu \
  && pecl clear-cache \
  && docker-php-ext-configure intl \
  && docker-php-ext-configure exif \
  && docker-php-ext-configure calendar  \
  && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
  && docker-php-ext-install -j 4 xsl gd exif gettext intl ldap opcache pcntl mysqli pdo pdo_mysql  pspell soap sockets zip bcmath gmp calendar \
  && docker-php-ext-configure imap --with-imap --with-imap-ssl --with-kerberos \
  && docker-php-ext-install -j 4 imap \
  && curl --silent --show-error https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer \
  && chmod +x /usr/local/bin/composer \
# add mstmp
  &&  mkdir -p /usr/src/msmtp; \
          cd /usr/src; \
           curl -fsSL "https://marlam.de/msmtp/releases/msmtp-${MSMTP_VERSION}.tar.xz" -o /usr/src/msmtp.tar.xz; \
          tar xf msmtp.tar.xz -C /usr/src/msmtp --strip-components=1; \
          cd /usr/src/msmtp; \
        ./configure; make; make install;rm -rf /usr/src/msmtp \
# reset apt-mark's "manual" list so that "purge --auto-remove" will remove all build dependencies
	apt-mark auto '.*' > /dev/null; \
	[ -z "$savedAptMark" ] || apt-mark manual $savedAptMark; \
	find /usr/local -type f -executable -exec ldd '{}' ';' \
		| awk '/=>/ { print $(NF-1) }' \
		| sort -u \
		| xargs -r dpkg-query --search \
		| cut -d: -f1 \
		| sort -u \
		| xargs -r apt-mark manual \
	; \
	apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false; \
	rm -rf /var/lib/apt/lists/*; \
	\
# update pecl channel definitions https://github.com/docker-library/php/issues/443
	pecl update-channels; \
	rm -rf /tmp/pear ~/.pearrc; \
	\
# smoke test
	php --version

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
