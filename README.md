# V-Tracker

Sistem Pemesanan Kendaraan dengan multi level persetujuan

## Informasi

-   Laravel 11
-   PHP Version 8.3.13
-   Database : Mysql
-   UI : Bootstrap

## Installation

Lakukan clone terlebih dahulu, lalu masuk ke dalam project

```bash
  git clone https://github.com/Maulidin-Ilham/v-tracker.git
  cd v-tracker
```

Composer install

```bash
composer install
```

Copy .env.example ke .env dengan command dibawah

```bash
  cp .env.example.env
```

Buat database bernama db_v-tracker

Konfigurasi file .env seperti mengganti nama database, nama tabel

Lakukan command dibawah untuk mendapatkan key

```bash
  php artisan key:generate
```

Lakukan migration

```bash
  php artisan migrate
```

Lakukan seeder

```bash
  php artisan db:seed
```

Langkah terakhir jalankan program

```bash
  php artisan serve
```

# Data User

## Login Admin

email: admin@gmail.com

password : password

## Login Approver

name: nanang

email : nanang@gmail.com

password : password

## Login Approver

name: maya

email : maya@gmail.com

password : password

## Login Approver

name: ucup

email : ucup@gmail.com

password : password

## Login Driver

name: rendi

email : rendi@gmail.com

password : password

## Login Driver

name: heru

email : heru@gmail.com

password : password
