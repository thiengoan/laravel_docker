FROM php:8.2-apache

# 1. Cài đặt các thư viện hệ thống cần thiết và extension cho PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    git \
    unzip \
    zip \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# 2. Kích hoạt mod_rewrite của Apache (bắt buộc cho Laravel)
RUN a2enmod rewrite

# 3. Cấu hình Document Root của Apache trỏ vào thư mục public của Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 4. Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Thiết lập thư mục làm việc
WORKDIR /var/www/html

# 6. Cấp quyền cho user hiện tại (tùy chọn nhưng giúp tránh lỗi permission)
RUN chown -R www-data:www-data /var/www/html