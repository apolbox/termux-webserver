#!/usr/bin/env bash
#
#
clear

# Proses menghapus lampp dari sistem termux
rm $PREFIX/bin/lampp
rm -rf $PREFIX/lampp_sources

# Hapus paket
requirement=(php lighttpd mariadb)
for i in ${!requirement[@]}; do
  apt remove ${requirement[i]}
  apt purge ${requirement[i]}
done

apt update

echo -e "\e[32;mBerhasil menghapus lampp.\e0m\n";
