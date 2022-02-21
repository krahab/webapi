FROM php:7.4

RUN apt-get update -y &&  apt-get upgrade -y

RUN apt install -y\
    sudo\
    vim\
    nano\
    man\
    git\
    unzip

# Install the "php-extension-installer" tool, a recommended third-party tool to maintain any php:* image.
# Github: https://github.com/mlocati/docker-php-extension-installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && sync

# Installed missing PHP modules + composer + debug tools
RUN install-php-extensions\
    @composer\
    opcache\
    zip\
    pdo_mysql\
    exif\
    xdebug\
    gd

# Move PHP development configuration to actual configuration file
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# Edit sudoers file so user can use sudo without password
RUN sed -i "s/ALL=(ALL:ALL) ALL/ALL=(ALL:ALL) NOPASSWD:ALL/g" /etc/sudoers

# Create a normal user so file created in the environments can be accessed by the host user
RUN useradd -m -s /bin/bash -g sudo dev
USER dev
WORKDIR /home/dev/api

# Addind aliases
RUN echo 'alias hi="echo hello"' >> ~/.bashrc
RUN echo 'alias art="php artisan"' >> ~/.bashrc
RUN echo 'alias test="php artisan test"' >> ~/.bashrc
RUN echo 'alias log="tail -n 1000 /home/dev/api/storage/logs/laravel.log"' >> ~/.bashrc
RUN echo 'alias log.clear="echo "" > /home/dev/api/storage/logs/laravel.log"' >> ~/.bashrc
RUN echo 'alias tinker="php artisan tinker"' >> ~/.bashrc
RUN echo 'alias find.777="find / -perm 777"' >> ~/.bashrc


# Open port 8000 for `php artisan serve`
EXPOSE 8000