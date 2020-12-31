### Lakukan ini setelah update atau install lampp webserver

<ul>
  <li>
  Memulai database tanpa memuat tabel hibah atau mengaktifkan jaringan:

    $ mysqld_safe --skip-grant-tables --skip-networking &
  
  </li>
  <li>
  Sekarang Anda dapat terhubung ke database sebagai pengguna root, yang seharusnya tidak meminta kata sandi.

    $ mysql -u root
  
  </li>
  <li>
  Mengubah Kata Sandi Root

    $ mysql> FLUSH PRIVILEGES;
    
  </li>
  <li>
  Untuk MySQL 5.7.6 dan yang lebih baru serta MariaDB 10.1.20 dan yang lebih baru , gunakan perintah berikut:

    $ mysql> ALTER USER 'root'@'localhost' IDENTIFIED BY 'new_password';

  </li>
  <li>
  Untuk MySQL 5.7.5 dan yang lebih lama serta MariaDB 10.1.20 dan yang lebih lama , gunakan:

    $ mysql> SET PASSWORD FOR 'root'@'localhost' = PASSWORD('new_password');
    
  </li>
</ul>