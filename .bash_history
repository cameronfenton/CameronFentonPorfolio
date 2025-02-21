service php8.0-fpm status~
exit
echo "<?php phpinfo(); ?>" > /var/www/public/info.ph~
docker-compose down
docker-compose up -d --build
exit
