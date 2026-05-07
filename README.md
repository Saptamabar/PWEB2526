# Template kelas PWEB CRUD Produk dan Kategori

Aplikasi web sederhana untuk mengelola produk dan kategori menggunakan Laravel dan Tailwind CSS. Aplikasi ini menyediakan interface CRUD (Create, Read, Update, Delete) yang responsive untuk produk dan kategori.

## Prerequisites

Sebelum menjalankan aplikasi ini, pastikan Anda memiliki:

- PHP >= 8.1
- Composer
- Node.js & npm (untuk build assets)
- Git

## Installation

Ikuti langkah-langkah berikut untuk meng-clone dan menjalankan project ini:

### 1. Clone Repository

```bash
git clone https://github.com/Saptamabar/PWEB2526.git
cd PWEB2526
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node.js Dependencies

```bash
npm install
```

### 4. Setup Environment

Copy file `.env.example` ke `.env`:

```bash
cp .env.example .env
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Build Assets

```bash
npm run dev
```

### 7. Jalankan Server

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://127.0.0.1:8000`

## Usage

### Navigasi Aplikasi

- **Home**: Halaman utama dengan informasi aplikasi
- **Kelola Produk**: Halaman untuk CRUD produk
- **Kelola Kategori**: Halaman untuk CRUD kategori

### Fitur CRUD

1. **Create**: Klik tombol "Tambah" untuk menambah data baru
2. **Read**: Lihat daftar data di halaman index
3. **Update**: Klik "Edit" pada baris data untuk mengubah
4. **Delete**: Klik "Hapus" untuk menghapus data

## Struktur Project

```
├── app/
│   ├── Http/Controllers/
│   │   ├── ProductController.php
│   │   ├── CategoryController.php
│   │   └── LandingPageController.php
├── resources/views/
│   ├── products/          # Views untuk produk
│   ├── categories/        # Views untuk kategori
│   ├── component/         # Komponen navbar
│   ├── layout.blade.php   # Layout utama
│   └── welcome.blade.php  # Halaman home
├── routes/
│   └── web.php            # Route definitions
└── public/                # Static assets
```

## Teknologi yang Digunakan

- **Laravel**: Framework PHP untuk backend
- **Tailwind CSS**: Framework CSS untuk styling
- **Blade**: Template engine Laravel
- **Vite**: Build tool untuk assets
