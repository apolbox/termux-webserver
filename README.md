# termux-webserver
Paket instalasi webserver

Bagi yang ingin install webserver di android

# Syarat:
1. Termux app
2. Internet

# Panduan:
Buka aplikasi termux terlebih dahulu, setelah itu install paket git.
Untuk menginstal paket git gunakan perintah dibawah ini:

    $ apt install git

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

* phpMyAdmin (unrelease)
* mariadb (release)

# Fitur yang telah ditambahkan

* mariadb

# Kontak kami

* facebook	: https://www.facebook.com/ayus.filla
* email		: ayus.sahabat@gmail.com
* whatsapp	: 088221990408
