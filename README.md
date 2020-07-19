# WordPress Plugin Penghitung Kata

Repository ini berisi sebuah contoh plugin WordPress untuk menghitung jumlah kata di dalam sebuah post.

Untuk panduan lengkap silahkan merujuk pada artikel TeknoCerdas.com berikut.

- [Membuat Plugin WordPress: Penghitung Kata](https://teknocerdas.com/programming/membuat-plugin-wordpress-penghitung-kata/)

## Requirements

Anda membutuhkan perangkat lunak berikut untuk menjalankan tutorial ini. Perangkat lunak berikut harusnya otomatis terinstal ketika anda melakukan instalasi Docker Desktop pada komputer. 

- Docker Engine
- Docker Compose
- Git 

## How to Run

Download kode sumber terlebih dahulu dari GitHub.

```
$ git clone https://github.com/rioastamal-examples/wordpress-plugin-penghitung-kata.git
```

Masuk pada direktori kode sumber dan jalankan perintah lanjutan berikut.

```
$ cd wordpress-plugin-penghitung-kata
$ docker-compose up
```

Jika semuanya berjalan lancar maka WordPress dapat diakses lewat `http://localhost:8080`. Selesaikan proses instalasi kemudian lanjutkan dengan melakukan salin file plugin.

```
$ cp ./src/teknocerdas_word_counter.php ./wordpress/wp-content/plugins/
```

Aktifkan Plugin pada halaman administrasi Plugins. Kemudian kunjungi post "Hello World!" untuk melihat bagaimana plugin bekerja.

## License

Repository ini dilisensikan dibawah naungan [MIT License](https://opensource.org/licenses/MIT).
