FROM caddy:2.6.4-builder-alpine as builder

ENV GOPROXY=https://proxy.golang.com.cn,direct

RUN  xcaddy build \
    --with github.com/jicjoy/caddy-dns@v1.1.0
    
FROM caddy:2.6.4-alpine

ENV GOPROXY=https://proxy.golang.com.cn,direct

RUN apk add --no-cache \
   openssl3 \
   openssl3-dev \
   nss-tools \ 
   && mkdir -p /data/web/config && mkdir -p /data/web/caddy
   
COPY --from=builder /usr/bin/caddy /usr/bin/caddy

ENV XDG_CONFIG_HOME /data/web
ENV XDG_DATA_HOME /data/web
