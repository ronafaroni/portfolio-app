<div align="center">
  <img src="src="{{ asset('/assets/images/about/aboutme.webp') }}"" alt="Project Preview" width="600"/>
  <h1>Rona Faroni - Personal Portfolio</h1>
  <p>
    Website portofolio pribadi yang dibangun dengan Laravel untuk menampilkan profil, keahlian, proyek, dan layanan sebagai seorang Fullstack Developer & Digital Product Engineer.
  </p>
  <p>
    <a href="https://ronafaronie.my.id" target="_blank"><strong>Lihat Live Demo »</strong></a>
  </p>
</div>

<p align="center">
  <img src="https://img.shields.io/badge/Framework-Laravel-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3">
  <img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white" alt="jQuery">
</p>

## 🚀 Tentang Proyek Ini

Proyek ini adalah implementasi website portofolio modern yang dirancang untuk menjadi representasi digital dari **Rona Faroni**. Dibangun di atas framework **Laravel**, situs ini tidak hanya berfungsi sebagai CV online, tetapi juga sebagai pameran keahlian teknis dalam pengembangan web, mulai dari arsitektur backend yang solid hingga antarmuka frontend yang interaktif dan responsif.

Tujuan utamanya adalah untuk mengubah masalah kompleks menjadi produk digital yang sederhana, fungsional, dan elegan, dengan kode yang bersih dan pengalaman pengguna yang luar biasa.

## ✨ Fitur Utama

Berdasarkan analisis kode, berikut adalah fitur-fitur unggulan dari proyek ini:

-   **Header Interaktif**: Header memiliki efek _blur_ dan menjadi _fixed_ saat halaman di-scroll, memberikan nuansa modern. Logika ini diimplementasikan menggunakan jQuery di `public/assets/js/script.js` dan CSS kustom di `head.blade.php`.
-   **Desain Responsif**: Menggunakan Bootstrap sebagai basis, memastikan tampilan optimal di berbagai perangkat, dari desktop hingga mobile.
-   **Animasi On-Scroll**: Elemen-elemen halaman muncul dengan animasi halus saat di-scroll berkat pustaka `WOW.js`.
-   **Navigasi Smooth Scroll**: Klik pada menu navigasi akan mengarahkan pengguna ke bagian halaman yang sesuai dengan efek gulir yang mulus, diatur dalam `scripts.blade.php`.
-   **Integrasi WhatsApp**: Formulir kontak terintegrasi langsung dengan WhatsApp, memungkinkan pengunjung untuk mengirim pesan dengan mudah. Logika ini berada di `scripts.blade.php`.
-   **SEO & Social Media Optimized**: Dilengkapi dengan meta tags yang lengkap (termasuk Open Graph dan Twitter Cards) untuk optimisasi mesin pencari dan tampilan yang baik saat dibagikan di media sosial.
-   **Slider & Carousel Dinamis**:
    -   **Tools Slideshow**: Menampilkan logo teknologi yang dikuasai dalam format _infinite scrolling slideshow_, dibuat dengan CSS Keyframes.
    -   **Testimonials**: Menggunakan `Slick.js` untuk menampilkan testimoni dalam bentuk slider interaktif.
-   **Filter Proyek**: Bagian portofolio menggunakan `Isotope.js` untuk memfilter proyek berdasarkan kategori secara dinamis tanpa me-reload halaman.
-   **Struktur Data (Schema.org)**: Mengimplementasikan JSON-LD untuk data terstruktur (tipe `Person`), membantu mesin pencari seperti Google memahami konten tentang profil Rona Faroni.

## 🛠️ Teknologi yang Digunakan

Proyek ini dibangun dengan tumpukan teknologi yang solid dan modern:

### Backend

-   **Framework**: Laravel
-   **Bahasa**: PHP

### Frontend

-   **Templating**: Blade
-   **Styling**: CSS3, Bootstrap, Animate.css
-   **JavaScript**:
    -   **Library Utama**: jQuery
    -   **Animasi**: WOW.js
    -   **Slider/Carousel**: Slick.js, Swiper.js
    -   **Layout & Filtering**: Isotope.js
    -   **UI**: Nice Select

### Tools & Lainnya

-   **SEO**: JSON-LD, Open Graph, Twitter Cards
-   **Icon**: Font Awesome, Flaticon

## 📂 Struktur Proyek

Berikut adalah gambaran singkat tentang file dan direktori kunci dalam proyek ini:

```
portfolio-app/
├── public/
│   └── assets/
│       ├── css/style.css       # File CSS utama
│       └── js/script.js        # File JavaScript utama (jQuery)
├── resources/
│   └── views/
│       └── frontend/
│           ├── includes/
│           │   ├── partials/
│           │   │   ├── head.blade.php    # Meta tags, aset CSS, & CSS kustom
│           │   │   └── scripts.blade.php # Aset JS & skrip kustom
│           │   └── header.blade.php  # Struktur header & navigasi
│           └── index.blade.php     # Halaman utama yang menggabungkan semua bagian
├── README.md                   # Anda sedang membacanya
└── ... (file-file Laravel lainnya)
```

## ⚙️ Instalasi & Setup Lokal

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

1.  **Clone repository ini:**

    ```bash
    git clone https://github.com/username/portfolio-app.git
    cd portfolio-app
    ```

2.  **Install dependensi Composer:**

    ```bash
    composer install
    ```

3.  **Buat file environment:**
    Salin file `.env.example` menjadi `.env`.

    ```bash
    cp .env.example .env
    ```

4.  **Generate kunci aplikasi Laravel:**

    ```bash
    php artisan key:generate
    ```

5.  **Jalankan server pengembangan:**

    ```bash
    php artisan serve
    ```

6.  Buka `http://127.0.0.1:8000` di browser Anda.

## 🎨 Kustomisasi

-   **Perilaku Header**: Untuk mengubah ambang batas scroll atau efek blur, modifikasi CSS di `resources/views/frontend/includes/partials/head.blade.php` pada kelas `.main-header.fixed-header` dan JavaScript di `public/assets/js/script.js` dalam fungsi `headerStyle()`.
-   **Nomor WhatsApp**: Ganti nomor WhatsApp tujuan di `resources/views/frontend/includes/partials/scripts.blade.php` dalam fungsi `sendToWhatsApp()`.
-   **Konten Halaman**: Sebagian besar konten statis seperti teks, gambar, dan proyek dapat diubah langsung di file-file Blade yang relevan di dalam `resources/views/frontend/`.

## 📄 Lisensi

Proyek ini dilisensikan di bawah MIT License.

---

<div align="center">
  Dibuat dengan ❤️ oleh Rona Faroni
</div>
