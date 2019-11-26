```sql

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

```
