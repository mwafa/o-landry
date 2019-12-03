Proyek ini didedikasikan untuk menyelesaikan tugas matakuliah __Sistem Basis Data__.
<!-- Anggota Kelompok:
1. Muhammad Wafa (43515)
1. Muhammad Wafa () -->

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

