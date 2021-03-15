service php7.3-fpm start

# Allow to read, modify, execute
chown -R www-data /var/www/html/*
chmod -R 755 /var/www/html/*

# Create website folder
mkdir /var/www/html/website

# SSL
mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=BE/ST=Brussels/L=Brussels/O=Ecole 19/OU=minummin/CN=localhost"
openssl rsa -noout -text -in /etc/nginx/ssl/localhost.key

# Nginx configuration
rm -rf /etc/nginx/sites-available/default
mv /etc/nginx/conf.d/default /etc/nginx/sites-available/
service nginx start

# MySQL
service mysql start
echo "CREATE DATABASE wordpress;"| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'username'@'localhost' IDENTIFIED BY 'password'"| mysql -u root --skip-password
echo "FLUSH PRIVILEGES;"| mysql -u root --skip-password

# Wordpress
wget -c https://wordpress.org/latest.tar.gz
mv latest.tar.gz /var/www/html/website/
cd /var/www/html/website
tar -xvf latest.tar.gz
rm -f latest.tar.gz
cd /
mv /wp-config.php /var/www/html/website/wordpress/

# phpMyAdmin
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz
mv phpMyAdmin-4.9.7-all-languages.tar.gz /var/www/html/website/
cd /var/www/html/website
tar -xvf phpMyAdmin-4.9.7-all-languages.tar.gz
mv phpMyAdmin-4.9.7-all-languages phpMyAdmin
rm -f phpMyAdmin-4.9.7-all-languages.tar.gz
cd /
mv /config.inc.php /var/www/html/website/phpMyAdmin/

bash
