FROM debian:bullseye

ENV DEBIAN_FRONTEND=noninteractive

# 1) Pacotes básicos
RUN apt-get update && apt-get install -y --no-install-recommends \
    curl \
    git \
    unzip \
    nano \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    ca-certificates \
    gnupg \
    && update-ca-certificates

# Repositório Sury
RUN curl -fsSL https://packages.sury.org/php/apt.gpg \
    | gpg --dearmor \
    | tee /usr/share/keyrings/sury.gpg > /dev/null \
    && echo "deb [signed-by=/usr/share/keyrings/sury.gpg] https://packages.sury.org/php/ bullseye main" \
    > /etc/apt/sources.list.d/php.list

# PHP 8.4 + dependências
RUN apt-get update && apt-get install -y --no-install-recommends \
    php8.4 \
    php8.4-cli \
    php8.4-fpm \
    php8.4-mbstring \
    php8.4-xml \
    php8.4-curl \
    php8.4-gd \
    php8.4-mysql \
    php8.4-zip \
    php8.4-intl \
    php8.4-bcmath \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# habilitando o pdo_mysql (FUNDAMENTAL)
RUN echo "extension=pdo_mysql.so" > /etc/php/8.4/cli/conf.d/20-pdo_mysql.ini && \
    echo "extension=pdo_mysql.so" > /etc/php/8.4/fpm/conf.d/20-pdo_mysql.ini

# 3) Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 4) Node 20 (recomendado para Laravel + Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm

WORKDIR /var/www/html

COPY . .

RUN chmod -R 777 storage bootstrap/cache

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
