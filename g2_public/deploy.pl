#!/bin/bash
echo "Content-type: text/plain\n";
echo '';
cd /var/www/domains/site.ru/ || exit > /dev/null
git reset --hard > /dev/null
git pull ssh_ссылка_на_репозитрий develop > /dev/null
chomod -R 755 /var/www/domains/site.ru/ 
