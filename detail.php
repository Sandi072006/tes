<!DOCTYPE html>
<html lang="id">
<?php $pageTitle = 'Detail Supplier — StockMate'; require_once ROOT . '/views/layout/header.php'; ?>
<body>
<div class="layout">

    <?php $aktif = 'supplier'; require_once ROOT . '/views/layout/sidebar.php'; ?>

    <main class="main-content">
        <?php require_once ROOT . '/views/layout/topbar.php'; ?>

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <div class="breadcrumb">
                        <a href="<?= BASE_URL ?>/supplier">Supplier</a>
                        <span>›</span>
                        <span>Detail Supplier</span>
                    </div>
                    <h1>Detail Supplier</h1>
                    <p>Informasi lengkap data supplier</p>
                </div>
                <a href="<?= BASE_URL ?>/supplier" class="btn gray">← Kembali</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <h3>PT Maju Tak Gentar</h3>
                    <p>Terakhir diperbarui: 09 Mei 2026</p>
                </div>
                <div class="card-body">
                    <div class="detail-grid">
                        <div>
                            <div class="detail-row"><span class="detail-label">Nama Penanggung Jawab</span><span class="detail-value">Sandi Zuliansyah</span></div>
                            <div class="detail-row"><span class="detail-label">Nama Perusahaan</span><span class="detail-value">PT Maju Tak Gentar</span></div>
                            <div class="detail-row"><span class="detail-label">Kategori Produk</span><span class="detail-value">Makanan</span></div>
                            <div class="detail-row"><span class="detail-label">Status</span><span class="detail-value"><img src="<?= BASE_URL ?>/assets/img/check.svg" style="width:22px;height:22px;" alt="Aktif"></span></div>
                        </div>
                        <div>
                            <div class="detail-row"><span class="detail-label">Nomor Telepon</span><span class="detail-value">081234567890</span></div>
                            <div class="detail-row"><span class="detail-label">Email</span><span class="detail-value">sandi@majutakgentar.com</span></div>
                            <div class="detail-row"><span class="detail-label">Alamat</span><span class="detail-value">Jl. Merdeka No.1, Jakarta</span></div>
                            <div class="detail-row"><span class="detail-label">Catatan</span><span class="detail-value">Supplier utama untuk bahan makanan pokok.</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top:16px;">
                <div class="card-header">
                    <h3>Riwayat Pemasokan</h3>
                    <p>Transaksi pemasokan dari PT Maju Tak Gentar</p>
                </div>
                <div class="card-body">
                    <p class="empty">Belum ada riwayat pemasokan dari supplier ini</p>
                </div>
            </div>
        </div>
    </main>
</div>
<?php require_once ROOT . '/views/layout/footer.php'; ?>
</body>
</html>