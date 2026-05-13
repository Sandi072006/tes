<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Supplier — Admin StockMate</title>
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

    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- TOPBAR -->
        <div class="topbar">
            <div class="topbar-left">
                <span class="status-dot"></span>
                <span class="status-label">System Active</span>
            </div>

            <div class="topbar-right">
                <span class="topbar-date">
                    <?= date('d F Y') ?>
                </span>

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

            <!-- PAGE HEADER -->
            <div class="page-header">
                <div class="page-title">

                    <div class="breadcrumb">
                        <a href="<?= BASE_URL ?>/admin/supplier">
                            Supplier
                        </a>

                        <span>›</span>

                        <span>Tambah Supplier</span>
                    </div>

                    <h1>Tambah Supplier</h1>
                    <p>Tambahkan data supplier baru ke sistem</p>
                </div>

                <a href="<?= BASE_URL ?>/admin/supplier" class="btn gray">
                    Kembali
                </a>
            </div>

            <!-- CARD -->
            <div class="card">

                <div class="card-header">
                    <h3>Form Tambah Supplier</h3>
                    <p>Isi semua field yang diperlukan</p>
                </div>

                <div class="card-body">

                    <form action="<?= BASE_URL ?>/admin/supplier/simpan" method="POST">

                        <div class="form-grid">

                            <!-- Nama PJ -->
                            <div class="form-group">
                                <label for="nama_supplier">
                                    Nama Penanggung Jawab
                                </label>

                                <input
                                    type="text"
                                    id="nama_supplier"
                                    name="nama_supplier"
                                    placeholder="cth. Budi Santoso"
                                    required
                                >
                            </div>

                            <!-- Nama Perusahaan -->
                            <div class="form-group">
                                <label for="perusahaan">
                                    Nama Perusahaan
                                </label>

                                <input
                                    type="text"
                                    id="perusahaan"
                                    name="perusahaan"
                                    placeholder="cth. PT Maju Bersama"
                                    required
                                >
                            </div>

                            <!-- Telepon -->
                            <div class="form-group">
                                <label for="telepon">
                                    Nomor Telepon
                                </label>

                                <input
                                    type="tel"
                                    id="telepon"
                                    name="telepon"
                                    placeholder="cth. 08123456789"
                                    required
                                >
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="cth. supplier@email.com"
                                >
                            </div>

                            <!-- Kategori -->
                            <div class="form-group">
                                <label for="kategori">
                                    Kategori Produk
                                </label>

                                <select
                                    id="kategori"
                                    name="kategori"
                                    required
                                >
                                    <option value="">
                                        -- Pilih Kategori --
                                    </option>

                                    <option value="Makanan">
                                        Makanan
                                    </option>

                                    <option value="Minuman">
                                        Minuman
                                    </option>

                                    <option value="Kebersihan">
                                        Kebersihan
                                    </option>

                                    <option value="Bumbu & Rempah">
                                        Bumbu &amp; Rempah
                                    </option>

                                    <option value="Snack">
                                        Snack
                                    </option>

                                    <option value="Lainnya">
                                        Lainnya
                                    </option>
                                </select>
                            </div>

                            <!-- Status -->
                            <div class="form-group">
                                <label for="status">
                                    Status
                                </label>

                                <select
                                    id="status"
                                    name="status"
                                    required
                                >
                                    <option value="aktif" selected>
                                        Aktif
                                    </option>

                                    <option value="nonaktif">
                                        Nonaktif
                                    </option>
                                </select>
                            </div>

                            <!-- Alamat -->
                            <div class="form-group form-full">
                                <label for="alamat">
                                    Alamat
                                </label>

                                <input
                                    type="text"
                                    id="alamat"
                                    name="alamat"
                                    placeholder="cth. Jl. Sudirman No.45, Jakarta"
                                >
                            </div>

                            <!-- Catatan -->
                            <div class="form-group form-full">
                                <label for="catatan">
                                    Catatan
                                    <span class="label-optional">
                                        (opsional)
                                    </span>
                                </label>

                                <textarea
                                    id="catatan"
                                    name="catatan"
                                    rows="3"
                                    placeholder="Catatan tambahan mengenai supplier..."
                                ></textarea>
                            </div>

                        </div>

                        <!-- FOOTER BUTTON -->
                        <div class="card-footer"
                             style="padding:20px 0 0; border-top:1px solid #e2e8f0; margin-top:20px; display:flex; justify-content:flex-end; gap:10px;">

                            <a href="<?= BASE_URL ?>/admin/supplier"
                               class="btn-secondary">
                                Batal
                            </a>

                            <button type="submit" class="btn-primary">
                                Simpan Supplier
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </main>
</div>

<footer>
    <p>&copy; <?= date('Y') ?> StockMate</p>
</footer>

</body>
</html>