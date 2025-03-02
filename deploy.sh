#!/bin/bash

# Stash any local changes
git stash

# Navigate to the project directory
cd /var/www/CameronFentonPorfolio

# Perform git pull
sudo -u $USER git pull

# Ensure correct ownership and permissions
sudo chown -R $USER:deploy /var/www/CameronFentonPorfolio
sudo chmod -R 775 /var/www/CameronFentonPorfolio
sudo chown -R www-data:deploy /var/www/CameronFentonPorfolio/storage
sudo chown -R www-data:deploy /var/www/CameronFentonPorfolio/bootstrap/cache
sudo chmod -R 775 /var/www/CameronFentonPorfolio/storage
sudo chmod -R 775 /var/www/CameronFentonPorfolio/bootstrap/cache

# Clear Laravel caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Restart services
sudo systemctl restart nginx

echo "Deployment and restart completed successfully!"
