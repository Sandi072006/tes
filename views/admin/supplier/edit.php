<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier — Admin StockMate</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>

<body>
<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="logo">
            <h2>StockMate</h2>
            <p>Smart Supplier System</p>
        </div>

        <nav class="menu">
            <a href="<?= BASE_URL ?>/admin/dashboard">Dashboard</a>

            <a href="<?= BASE_URL ?>/admin/barang">
                Data Barang
            </a>

            <a href="<?= BASE_URL ?>/admin/supplier" class="active">
                Supplier
            </a>

            <a href="<?= BASE_URL ?>/admin/pemasokan">
                Pemasokan
            </a>

            <a href="<?= BASE_URL ?>/admin/laporan">
                Laporan
            </a>
        </nav>

        <div class="user-box">
            <p>Logged in as</p>
            <h4>Admin</h4>
            <span>Administrator</span>
        </div>

        <a href="<?= BASE_URL ?>/logout" class="logout">
            Logout
        </a>
    </aside>

    <!-- MAIN -->
    <main class="main-content">

        <!-- TOPBAR -->
        <div class="topbar">
            <div class="topbar-left">
                <span class="status-dot"></span>
                <span class="status-label">System Active</span>
            </div>

            <div class="topbar-right">
                <span class="topbar-date">Sabtu, 10 Mei 2026</span>

                <div class="topbar-divider"></div>

                <div class="topbar-user">
                    <div class="topbar-avatar">A</div>

                    <div class="topbar-user-info">
                        <div class="topbar-user-name">Admin</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="content">

            <!-- HEADER -->
            <div class="page-header">

                <div class="page-title">
                    <div class="breadcrumb">
                        <a href="<?= BASE_URL ?>/admin/supplier">
                            Supplier
                        </a>

                        <span>›</span>

                        <span>Edit Supplier</span>
                    </div>

                    <h1>Edit Supplier</h1>
                    <p>Ubah data supplier yang sudah ada</p>
                </div>

                <a href="<?= BASE_URL ?>/admin/supplier" class="btn gray">
                    Kembali
                </a>

            </div>

            <!-- CARD -->
            <div class="card">

                <div class="card-header">
                    <h3>Form Edit Supplier</h3>
                    <p>Field sudah terisi otomatis dari data yang dipilih</p>
                </div>

                <div class="card-body">

                    <form action="<?= BASE_URL ?>/admin/supplier/update" method="POST">

                        <!-- ID -->
                        <input type="hidden" name="id_supplier" value="1">

                        <div class="form-grid">

                            <div class="form-group">
                                <label>Nama Penanggung Jawab</label>

                                <input
                                    type="text"
                                    name="nama_penanggung_jawab"
                                    value="Sandi Zuliansyah"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label>Nama Perusahaan</label>

                                <input
                                    type="text"
                                    name="nama_perusahaan"
                                    value="PT Maju Tak Gentar"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label>Nomor Telepon</label>

                                <input
                                    type="tel"
                                    name="telepon"
                                    value="081234567890"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label>Email</label>

                                <input
                                    type="email"
                                    name="email"
                                    value="sandi@majutakgentar.com"
                                >
                            </div>

                            <div class="form-group">
                                <label>Kategori Produk</label>

                                <select name="kategori_produk">
                                    <option value="">-- Pilih Kategori --</option>

                                    <option selected>
                                        Makanan
                                    </option>

                                    <option>
                                        Minuman
                                    </option>

                                    <option>
                                        Kebersihan
                                    </option>

                                    <option>
                                        Bumbu &amp; Rempah
                                    </option>

                                    <option>
                                        Snack
                                    </option>

                                    <option>
                                        Lainnya
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Status</label>

                                <select name="status">
                                    <option value="aktif" selected>
                                        Aktif
                                    </option>

                                    <option value="nonaktif">
                                        Nonaktif
                                    </option>
                                </select>
                            </div>

                            <div class="form-group form-full">
                                <label>Alamat</label>

                                <input
                                    type="text"
                                    name="alamat"
                                    value="Jl. Merdeka No.1, Jakarta"
                                >
                            </div>

                            <div class="form-group form-full">
                                <label>
                                    Catatan
                                    <span class="label-optional">(opsional)</span>
                                </label>

                                <textarea
                                    rows="3"
                                    name="catatan"
                                >Supplier utama untuk kebutuhan bahan makanan pokok.</textarea>
                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div style="
                            padding:20px 0 0;
                            border-top:1px solid #e2e8f0;
                            margin-top:20px;
                            display:flex;
                            justify-content:flex-end;
                            gap:10px;
                        ">

                            <a href="<?= BASE_URL ?>/admin/supplier"
                               class="btn-secondary">
                                Batal
                            </a>

                            <button type="submit" class="btn-primary">
                                Simpan Perubahan
                            </button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </main>
</div>

<footer>
    <p>&copy; 2026 StockMate</p>
</footer>

</body>
</html>