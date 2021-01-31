#!/bin/bash
# Install and update software
printf $DIVIDER
printf "INSTALL AND UPDATE SOFTWARE\n"
printf "Now the script will update and install all the necessary software.\n"
read -p "Please ENTER to continue "
apt-get -y update -y
apt-get -y upgrade -y
apt install nmap zip dnsutils net-tools tzdata lynx curl git screen -y -f
apt install apache2
a2enmod ssl
a2ensite default-ssl
systemctl reload apache2 
openssl req $@ -new -x509 -days 3560 -nodes -out /etc/apache2/apache.pem -keyout /etc/apache2/apache.pem
a2enmod rewrite
systemctl reload apache2
cp /autowordpress/000-default.conf /etc/apache2/sites-available/000-default.conf
cp /autowordpress/default-ssl.conf  /etc/apache2/sites-available/default-ssl.conf
cp /autowordpress/apache2.conf  /etc/apache2/apache2.conf
systemctl reload apache2
mkdir /home/debian/www
sudo chown -R www-data:www-data /home/debian/www
usermod -a -G www-data debian
chmod -R 775 /home/debian/www
apt update
apt install mariadb-server mariadb-client
mysql_secure_installation
apt install php php-json php-mbstring php-zip php-gd php-xml php-curl php-mysql -y
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.zip
unzip phpMyAdmin-5.0.4-all-languages.zip  -d /opt
mv -v /opt/phpMyAdmin-4.9.0.1-all-languages /opt/phpMyAdmin
chown -Rfv www-data:www-data /opt/phpMyAdmin
cp /autowordpress/phpmyadmin.conf  /etc/apache2/sites-available/phpmyadmin.conf
cp /autowordpress/ports.conf   /etc/apache2/ports.conf 
sudo a2ensite phpmyadmin.conf
systemctl restart apache2
apt install vsftpd 
cp /etc/vsftpd.conf /etc/vsftpd.bak
rm /etc/vsftpd.conf
cp /autowordpress/vsftpd.conf nano /etc/vsftpd.conf
service vsftpd restart
curl -O https://wordpress.org/latest.tar.gz
echo "Extracting tarball wordpress..."
tar -zxvf latest.tar.gz
cp -rf wordpress/*  /home/debian/www
rm -R wordpress
chmod +x firewall
cp firewall /etc/init.d
cd /etc/init.d
./firewall
update-rc.d firewall defaults
apt install postfix
cp /project/ /etc/postfix/main.cf
service postfix restart
apt install mailutils -y
sudo  apt install fail2ban
cp /project/jail.local /etc/fail2ban
sudo  fail2ban-client reload









