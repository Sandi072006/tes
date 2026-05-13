<!DOCTYPE html>
<html lang="id">
<?php $pageTitle = 'Pemasokan — StockMate'; require_once ROOT . '/views/layout/header.php'; ?>
<body>
<div class="layout">

    <?php $aktif = 'pemasokan'; require_once ROOT . '/views/layout/sidebar.php'; ?>

    <main class="main-content">
        <?php require_once ROOT . '/views/layout/topbar.php'; ?>

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>Data Pemasokan</h1>
                    <p>Lihat riwayat pemasokan barang</p>
                </div>
            </div>

            <div class="card">
                <div class="toolbar">
                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Cari tanggal, supplier, atau barang..." />
                    </div>
                    <select class="select-filter">
                        <option value="">Semua Supplier</option>
                        <option>PT Maju Tak Gentar</option>
                        <option>CV Sumber Rejeki</option>
                        <option>CV Berkah Jaya</option>
                    </select>
                </div>

                <div class="table-wrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Supplier</th>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th>Catatan</th>
                                <th>Petugas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>05 Mei 2026</td><td>PT Sumber Makmur</td><td>Beras Premium 5kg</td><td>200</td><td>Pengiriman tepat waktu</td><td>Admin</td>
                                <td><a href="<?= BASE_URL ?>/pemasokan/detail?id=1" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>06 Mei 2026</td><td>CV Berkah Jaya</td><td>Minyak Goreng 1L</td><td>150</td><td>Stok tambahan bulanan</td><td>Admin</td>
                                <td><a href="<?= BASE_URL ?>/pemasokan/detail?id=2" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>07 Mei 2026</td><td>Toko Sejahtera</td><td>Gula Pasir 1kg</td><td>300</td><td>-</td><td>Admin</td>
                                <td><a href="<?= BASE_URL ?>/pemasokan/detail?id=3" class="link">Lihat</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
<?php require_once ROOT . '/views/layout/footer.php'; ?>
</body>
</html>