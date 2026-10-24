FROM php:8.2.35-apache

# Actualizar almacén de certificados (eMudhra advisory) y limpiar caché de apt
RUN apt-get update \
    && apt-get install -y --no-install-recommends ca-certificates \
    && update-ca-certificates \
    && rm -rf /var/lib/apt/lists/*

# Endurecimiento de PHP (mitigación adicional para PHP2Shell CVE-2026-109618 / CVE-2026-109619)
RUN printf "file_uploads = Off\nsession.upload_progress.enabled = Off\npost_max_size = 1M\nexpose_php = Off\n" \
    > /usr/local/etc/php/conf.d/security-hardening.ini

COPY . /var/www/html/
RUN a2enmod rewrite

