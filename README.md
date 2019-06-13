# termux-webserver
Paket instalasi webserver

Bagi yang ingin install webserver di android

# Syarat:
1. Termux app
2. Internet

# Panduan:
Buka aplikasi termux terlebih dahulu, setelah itu install paket yang dibutuhkan.
Untuk menginstal paket yang dibutuhkan gunakan perintah dibawah ini:

    $ apt install git figlet toilet curl wget -y

Dan masukan perintah dibawah ini:

    $ git clone https://github.com/apolbox/termux-webserver.git
    $ cd termux-webserver
    $ chmod +x ./install
    $ ./install

Tunggu sampai selesai dan untuk menjalankan webserver ketikan perintah berikut:

    $ lampp [option]

Untuk menggunakan database silahkan ikuti perintah dibawah ini:
    
    $ lampp-db install

Tunggu sampai proses instalasi selesai, untuk menjalankan gunakan perintah berikut:

    $ lampp-db [option]

Untuk menguninstall webserver masukan perintah berikut:

    $ ./uninstall

# Fitur yang akan datang

* phpMyAdmin (release)
* mariadb (release)

# Fitur yang telah ditambahkan

* mariadb
* phpMyAdmin

# Update lampp server
Untuk melakukan update lampp server gunakan perintah berikut:
    $ curl -s https://raw.githubusercontent.com/apolbox/termux-webserver/dev/update > ./update
    $ chmod +x ./update
    $ ./update

# Kontak kami

* facebook	: https://www.facebook.com/ayus.filla
* email		: ayus.sahabat@gmail.com
* whatsapp	: 088221990408
