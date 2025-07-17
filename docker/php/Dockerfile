# docker/php/Dockerfile

FROM php:8.2-fpm

# نصب وابستگی‌ها و ابزارها
RUN apt-get update && apt-get install -y \
    nano \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    libzip-dev libpq-dev libcurl4-openssl-dev supervisor \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && pecl install redis \
    && docker-php-ext-enable redis

# نصب Node.js و yarn
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install --global yarn

# نصب Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# کپی کانفیگ‌های supervisor
COPY docker/supervisor/ /etc/supervisor/conf.d/

# تنظیم مالکیت
RUN chown -R www-data:www-data /var/www

RUN echo "Asia/Tehran" > /etc/timezone \
    && dpkg-reconfigure -f noninteractive tzdata

COPY package.json package-lock.json* ./
RUN npm install

COPY vite.config.js ./

# اجرای supervisor به عنوان فرمان پیش‌فرض کانتینر
CMD ["supervisord", "-n"]
