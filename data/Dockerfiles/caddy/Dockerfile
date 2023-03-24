FROM caddy:2.6.4-builder-alpine as builder



RUN  xcaddy build \
    --with github.com/jicjoy/caddy-dns@v1.1.0
    
FROM caddy:2.6.4-alpine

RUN apk add --no-cache \
   openssl3 \
   openssl3-dev \
   nss-tools \ 
   && mkdir -p /data/web/{config,caddy}
   
COPY --from=builder /usr/bin/caddy /usr/bin/caddy

ENV XDG_CONFIG_HOME /data/web
ENV XDG_DATA_HOME /data/web