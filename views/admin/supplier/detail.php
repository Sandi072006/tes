<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Supplier — Admin StockMate</title>

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

            <a href="<?= BASE_URL ?>/admin/dashboard">
                Dashboard
            </a>

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

        <a href="<?= BASE_URL ?>/logout"
           class="logout">
            Logout
        </a>

    </aside>

    <!-- MAIN -->
    <main class="main-content">

        <!-- TOPBAR -->
        <div class="topbar">

            <div class="topbar-left">
                <span class="status-dot"></span>
                <span class="status-label">
                    System Active
                </span>
            </div>

            <div class="topbar-right">

                <span class="topbar-date">
                    Sabtu, 10 Mei 2026
                </span>

                <div class="topbar-divider"></div>

                <div class="topbar-user">

                    <div class="topbar-avatar">
                        A
                    </div>

                    <div class="topbar-user-info">
                        <div class="topbar-user-name">
                            Admin
                        </div>
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

                        <span>Detail Supplier</span>

                    </div>

                    <h1>Detail Supplier</h1>

                    <p>
                        Informasi lengkap data supplier
                    </p>
                </div>

                <!-- BUTTON -->
                <div style="display:flex;gap:10px;">

                    <a href="<?= BASE_URL ?>/admin/supplier/edit?id=1"
                       class="btn-edit">
                        Edit
                    </a>

                    <a href="#modal-hapus"
                       class="btn-delete">
                        Hapus
                    </a>

                    <a href="<?= BASE_URL ?>/admin/supplier"
                       class="btn gray">
                        Kembali
                    </a>

                </div>
            </div>

            <!-- DETAIL -->
            <div class="card">

                <div class="card-header">
                    <h3>PT Maju Tak Gentar</h3>

                    <p>
                        Terakhir diperbarui:
                        09 Mei 2026
                    </p>
                </div>

                <div class="card-body">

                    <div class="detail-grid">

                        <!-- KIRI -->
                        <div>

                            <div class="detail-row">
                                <span class="detail-label">
                                    Nama Penanggung Jawab
                                </span>

                                <span class="detail-value">
                                    Sandi Zuliansyah
                                </span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">
                                    Nama Perusahaan
                                </span>

                                <span class="detail-value">
                                    PT Maju Tak Gentar
                                </span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">
                                    Kategori Produk
                                </span>

                                <span class="detail-value">
                                    Makanan
                                </span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">
                                    Status
                                </span>

                                <span class="detail-value">
                                    Aktif
                                </span>
                            </div>

                        </div>

                        <!-- KANAN -->
                        <div>

                            <div class="detail-row">
                                <span class="detail-label">
                                    Nomor Telepon
                                </span>

                                <span class="detail-value">
                                    081234567890
                                </span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">
                                    Email
                                </span>

                                <span class="detail-value">
                                    sandi@majutakgentar.com
                                </span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">
                                    Alamat
                                </span>

                                <span class="detail-value">
                                    Jl. Merdeka No.1, Jakarta
                                </span>
                            </div>

                            <div class="detail-row">
                                <span class="detail-label">
                                    Catatan
                                </span>

                                <span class="detail-value">
                                    Supplier utama untuk bahan makanan pokok.
                                </span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- RIWAYAT -->
            <div class="card" style="margin-top:16px;">

                <div class="card-header">
                    <h3>Riwayat Pemasokan</h3>

                    <p>
                        Transaksi pemasokan dari PT Maju Tak Gentar
                    </p>
                </div>

                <div class="card-body">
                    <p class="empty">
                        Belum ada riwayat pemasokan dari supplier ini
                    </p>
                </div>

            </div>

        </div>
    </main>
</div>

<!-- MODAL -->
<div class="modal" id="modal-hapus">

    <div class="modal-box">

        <a href="#"
           class="close">
            &times;
        </a>

        <h2>Hapus Supplier</h2>

        <p>
            Apakah Anda yakin ingin menghapus
            <strong>PT Maju Tak Gentar</strong>?
            Tindakan ini tidak bisa dibatalkan.
        </p>

        <div style="
            display:flex;
            gap:10px;
            justify-content:flex-end;
        ">

            <a href="#"
               class="btn-secondary">
                Batal
            </a>

            <a href="<?= BASE_URL ?>/admin/supplier/hapus?id=1"
               class="btn-delete"
               style="padding:9px 16px;">
                Ya, Hapus
            </a>

        </div>

    </div>
</div>

<footer>
    <p>&copy; 2026 StockMate</p>
</footer>

</body>
</html>