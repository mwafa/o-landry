Proyek ini didedikasikan untuk menyelesaikan tugas matakuliah __Sistem Basis Data__.\
Anggota Kelompok:
1. Muhammad Wafa (43515)
1. Andi Fathy Ahmad Fahrezy (43270)
1. M. Try Agung Saputra R (43033)
1. Monita Prysacy Melanti (44594)

# Cara Install

1. Mengubah konfigurasi base url pada file `/core/application/config/config.php` sesuai dengan host yang digunakan.

```php
$config['base_url'] = 'http://loman.localhost/core/';

```

2. Mengubak konfigurasi database pada file `/core/application/config/database.php` sesuai dengan konfigurasi database yang digunakan.

```php
    ...
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
    'database' => 'londri_manager',
    ...
```

3. Jika menggunakan server yang bisa mengirim email, maka kamu bisa merubah file `/core/application/controllers/Cucian.php` dan merubahnya menjadi `true`

```php
    $this->issendEmail = false; // change true if server can send email.
```
4. Default user admin

> + Username: __admin__
> + Password: __dienteraja__
# Halaman

1. __/core__ : Halaman admin
2. __/user__ : Halaman user untuk cek cucian

# Github Project:
URL: `https://github.com/mwafa/o-landry`

List Query: [Klik Disini](querys.md)