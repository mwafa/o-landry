<!-- ```sql

SELECT 
MONTH(cucian.selesai) as bulan,
WEEK(cucian.selesai) as minggu,
paket.nama, SUM(cucian.jumlah) as cucian,
paket.harga * SUM(cucian.jumlah) as total,
AVG(TIMEDIFF(cucian.selesai, cucian.masuk)),
cucian.selesai, cucian.masuk
FROM `cucian` 
LEFT JOIN paket ON paket.id = cucian.paket

GROUP BY YEAR(cucian.selesai), MONTH(cucian.selesai), WEEK(cucian.selesai), paket.id

```


# Ambil data pelanggan 

```sql
SELECT 

pelanggan.*, 
DATE(MIN(cucian.masuk)) as bulan_masuk

FROM `pelanggan` 
LEFT JOIN cucian ON pelanggan.id = cucian.pelanggan
GROUP BY pelanggan.id
```

# penghasilan bulanan

```sql

SELECT DATE(cucian.masuk) as bulan,
paket.nama as paket,
sum(cucian.jumlah * paket.harga) as penghasilan
FROM `cucian` 
LEFT JOIN paket ON paket.id = cucian.paket
GROUP BY MONTH(cucian.masuk), paket.id

``` -->

# List Query penting yang digunakan
---

### Cari status cucian pelanggan

URL: `/core/api/cari?q=nama+pelanggan`

Query:
```sql
SELECT `cucian`.`id`, 
       `cucian`.`status`, 
       `pelanggan`.`nama`          AS `pelanggan`, 
       `paket`.`nama`              AS `paket`, 
       `jumlah`, 
       `paket`.`harga`             AS `harga`, 
       paket.harga * cucian.jumlah AS bayar, 
       `cucian`.`masuk`            AS `tanggal_masuk` 
FROM   `cucian` 
       LEFT JOIN `pelanggan` 
              ON `cucian`.`pelanggan` = `pelanggan`.`id` 
       LEFT JOIN `paket` 
              ON `cucian`.`paket` = `paket`.`id` 
WHERE  `cucian`.`status` != 'diambil' 
       AND ( `cucian`.`id` = 'nama pelanggan' 
              OR `pelanggan`.`nama` LIKE '%nama pelanggan%' escape '!' ) 
ORDER  BY `status` DESC 
```

### Cari list paket

URL : `/core/api/paket`

```sql
SELECT * FROM `paket`
```

---

## Input Data Cucian Baru

URL: `/core/cucian_baru`

### API
+ List Paket

  url: `/core/cucian_baru`

  query: 
    ```sql
    SELECT * FROM `paket`
    ```
+ List Pelanggan

  URl : `/core/cucian_baru/pelanggan`

  query:
  ```sql
  SELECT `nama`, `hp`, `email` FROM `pelanggan`
  ```

+ Invoice

  URL : `/core/cucian_baru/insert`\
  query:
  ```sql 
    SELECT  `cucian`.`id`               AS `kode`, 
            `pelanggan`.`nama`          AS `nama`, 
            `cucian`.`masuk`            AS `tgl_masuk`, 
            `paket`.`nama`              AS `paket`, 
            `paket`.`harga`             AS `harga`, 
            `cucian`.`jumlah`           AS `berat`, 
            cucian.jumlah * paket.harga AS bayar 
    FROM   `cucian` 
        LEFT JOIN `pelanggan` 
                ON `pelanggan`.`id` = `cucian`.`pelanggan` 
        LEFT JOIN `paket` 
                ON `paket`.`id` = `cucian`.`paket` 
    WHERE  `cucian`.`id` = 157 --> id cucian yang insert 
  ```
+ Insert Cucian\
  URL: `/core/cucian_baru/insert`\
  query:
  ```sql
  INSERT INTO `cucian` 
            (masuk, 
             `pelanggan`, 
             `jumlah`, 
             `paket`) 
    VALUES      (Now(), --> tanggal masuk sekarang
                '21',   --> id pelanggan
                '3',    --> jumlah yang dicuci
                '2')    --> Paket yang dipilih
    ```

---

## Penghasilan
URL : `/core/penghasilan`
+ Data bulan ini\
query:
```sql
SELECT Sum(cucian.jumlah * paket.harga)    AS penghasilan, 
       Sum(cucian.jumlah)                  AS cucian, 
       Count(DISTINCT( cucian.pelanggan )) AS pengguna 
FROM   `cucian` 
       LEFT JOIN `paket` 
              ON `paket`.`id` = `cucian`.`paket` 
WHERE  Month(cucian.keluar) = Month(Now()) 
       AND `cucian`.`status` = 'diambil' 
```
+ Data bulanan\
query:
```sql
SELECT Date(cucian.masuk)               AS bulan, 
       `paket`.`nama`                   AS `paket`, 
       Sum(cucian.jumlah * paket.harga) AS penghasilan, 
       Sum(cucian.jumlah)               AS cucian 
FROM   `cucian` 
       LEFT JOIN `paket` 
              ON `paket`.`id` = `cucian`.`paket` 
WHERE  `cucian`.`status` = 'diambil' 
GROUP  BY Month(cucian.masuk), 
          `paket`.`id` 
```

---

## Data Pelanggan
url: `/core/pelanggan`\
query:
```sql
SELECT `pelanggan`.*, 
       Date(Min(cucian.masuk)) AS bulan_masuk 
FROM   `pelanggan` 
       LEFT JOIN `cucian` 
              ON `cucian`.`pelanggan` = `pelanggan`.`id` 
GROUP  BY `pelanggan`.`id` 
```

---

## Data Cucian
url: `/core/cucian/`\
query: 
```sql
SELECT `cucian`.`id`, 
       `cucian`.`status`, 
       `pelanggan`.`nama`          AS `pelanggan`, 
       `paket`.`nama`              AS `paket`, 
       `jumlah`, 
       `paket`.`harga`             AS `harga`, 
       `cucian`.`masuk`            AS `tgl_masuk`, 
       paket.harga * cucian.jumlah AS bayar 
FROM   `cucian` 
       LEFT JOIN `pelanggan` 
              ON `cucian`.`pelanggan` = `pelanggan`.`id` 
       LEFT JOIN `paket` 
              ON `cucian`.`paket` = `paket`.`id` 
WHERE  `cucian`.`status` != 'diambil' --> ganti != menjadi = untuk melihat cucian yang telah diambil
ORDER  BY `status` DESC 
```