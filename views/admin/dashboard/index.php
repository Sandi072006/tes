<!DOCTYPE html>
<html lang="id">
<?php $pageTitle = 'Dashboard Admin — StockMate'; require_once ROOT . '/views/layout/header.php'; ?>
<body>
<div class="layout">

    <?php $aktif = 'dashboard'; require_once ROOT . '/views/layout/sidebar_admin.php'; ?>

    <main class="main-content">
        <?php require_once ROOT . '/views/layout/topbar.php'; ?>

        <div class="content">

            <div class="page-header">
                <div class="page-title">
                    <h1>Dashboard</h1>
                    <p>Ringkasan sistem manajemen stok — Admin</p>
                </div>
                <div class="qa-grid">
                   
                </div>
            </div>

            <div class="cards">
                <div class="stat-card">
                    <p>Total Supplier</p>
                    <h2><?= $data['total_supplier'] ?? 5 ?></h2>
                    <span>Supplier terdaftar</span>
                </div>
                <div class="stat-card">
                    <p>Total Barang</p>
                    <h2><?= $data['total_barang'] ?? 14 ?></h2>
                    <span>Item produk</span>
                </div>
                <div class="stat-card">
                    <p>Total Pemasokan</p>
                    <h2><?= $data['total_pemasokan'] ?? 0 ?></h2>
                    <span>Transaksi tercatat</span>
                </div>
                <div class="stat-card">
                    <p>Stok Rendah</p>
                    <h2><?= count($data['stok_rendah'] ?? []) ?></h2>
                    <span>Perlu restock</span>
                </div>
            </div>

            <div class="bottom">
                <div class="box">
                    <h3>Barang Stok Rendah</h3>
                    <div class="table-wrap">
                        <table class="table">
                            <thead>
                                <tr><th>Barang</th><th>Stok</th><th>Status</th><th>Aksi</th></tr>
                            </thead>
                            <tbody>
                                <tr><td>Minyak Goreng 2L</td><td>30 botol</td><td><span class="badge stok-rendah">Stok Rendah</span></td><td><a href="<?= BASE_URL ?>/admin/barang" class="link">Kelola</a></td></tr>
                                <tr><td>Sabun Mandi Batang</td><td>25 pcs</td><td><span class="badge stok-rendah">Stok Rendah</span></td><td><a href="<?= BASE_URL ?>/admin/barang" class="link">Kelola</a></td></tr>
                                <tr><td>Saus Sambal 340ml</td><td>18 botol</td><td><span class="badge stok-rendah">Stok Rendah</span></td><td><a href="<?= BASE_URL ?>/admin/barang" class="link">Kelola</a></td></tr>
                                <tr><td>Susu UHT Full Cream 1L</td><td>0 karton</td><td><span class="badge habis">Habis</span></td><td><a href="<?= BASE_URL ?>/admin/barang" class="link">Kelola</a></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="box">
                    <h3>Pemasokan Terbaru</h3>
                    <p class="empty">Belum ada pemasokan</p>
                </div>
            </div>

        </div>
    </main>
</div>
<?php require_once ROOT . '/views/layout/footer.php'; ?>
</body>
</html>