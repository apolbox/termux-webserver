#!/usr/bin/env bash
# Updater
#
# @author Ayus Irfang Filaras <ayus.sahabat@gmail.com>
# @since version v1.1-beta
# @license MIT
url=(
  "https://raw.githubusercontent.com/apolbox/termux-webserver/master/etc/config/lighttpd.conf"
  "https://raw.githubusercontent.com/apolbox/termux-webserver/master/src/app/lampp.android.class"
  "https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.zip"
  "https://raw.githubusercontent.com/apolbox/termux-webserver/dev/opt/phpMyAdmin/config.inc.php"
)

for i in ${!url[@]} ; do
  wget ${url[$i]}
done

# override config lighttpd
mv lighttpd.conf $PREFIX/lampp_sources/etc/config/

# extrak phpMyAdmin
unzip $(ls | grep '[a-zA-Z].*.zip') && rm $(ls | grep '[a-zA-Z].*.zip')
sleep 1
mv $(ls | grep 'phpMyAdmin.*') $PREFIX/lampp_sources/
sleep 1
if [[ -d $PREFIX/lampp_sources/phpMyAdmin ]]; then
  rm -rf $PREFIX/lampp_sources/phpMyAdmin
fi
mv $PREFIX/lampp_sources/$(ls $PREFIX/lampp_sources | grep 'phpMyAdmin.*') $PREFIX/lampp_sources/phpMyAdmin
sleep 1
# override config.inc.php phpMyAdmin
mv config.inc.php $PREFIX/lampp_sources/phpMyAdmin/
sleep 1
mv lampp.android.class $PREFIX/lampp_sources/src/app/
sleep 1
echo "1.1-stable" > $PREFIX/lampp_sources/version.txt
sleep 1
printf "\n\e[32;m💡 %s\e[0m\n" "Update selesai."