<!DOCTYPE html>
<html lang="id">
<?php $pageTitle = 'Data Barang — StockMate'; require_once ROOT . '/views/layout/header.php'; ?>
<body>
<div class="layout">

    <?php $aktif = 'barang'; require_once ROOT . '/views/layout/sidebar.php'; ?>

    <main class="main-content">
        <?php require_once ROOT . '/views/layout/topbar.php'; ?>

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>Data Barang</h1>
                    <p>Lihat data barang supermarket</p>
                </div>
            </div>

            <div class="card">
                <div class="toolbar">
                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Cari barang, kategori, atau merek..." />
                    </div>
                    <select class="select-filter">
                        <option value="">Semua Kategori</option>
                        <option>Makanan</option>
                        <option>Minuman</option>
                        <option>Kebersihan</option>
                        <option>Bumbu</option>
                        <option>Snack</option>
                    </select>
                </div>

                <div class="table-wrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Merek</th>
                                <th>Supplier</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BRG001</td><td>Beras Premium 5kg</td><td>Makanan</td><td>Ramos</td><td>PT Maju Tak Gentar</td><td>150 pcs</td><td>Rp 65.000</td><td>Rp 75.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=1" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG002</td><td>Minyak Goreng 2L</td><td>Makanan</td><td>Bimoli</td><td>CV Sumber Rejeki</td><td>30 botol</td><td>Rp 28.000</td><td>Rp 34.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/warning.svg" class="status-icon" alt="Stok Rendah"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=2" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG003</td><td>Gula Pasir 1kg</td><td>Makanan</td><td>Gulaku</td><td>PT Maju Tak Gentar</td><td>110 pcs</td><td>Rp 13.500</td><td>Rp 16.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=3" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG004</td><td>Tepung Terigu 1kg</td><td>Makanan</td><td>Segitiga Biru</td><td>CV Sumber Rejeki</td><td>85 pcs</td><td>Rp 10.000</td><td>Rp 13.500</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=4" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG005</td><td>Indomie Goreng</td><td>Makanan</td><td>Indomie</td><td>PT Cahaya Nusantara</td><td>200 pcs</td><td>Rp 2.800</td><td>Rp 3.500</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=5" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG006</td><td>Sabun Mandi Batang</td><td>Kebersihan</td><td>Lifebuoy</td><td>PT Cahaya Nusantara</td><td>25 pcs</td><td>Rp 4.500</td><td>Rp 6.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/warning.svg" class="status-icon" alt="Stok Rendah"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=6" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG007</td><td>Shampo 170ml</td><td>Kebersihan</td><td>Pantene</td><td>CV Berkah Jaya</td><td>60 botol</td><td>Rp 18.000</td><td>Rp 23.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=7" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG008</td><td>Air Mineral 600ml</td><td>Minuman</td><td>Aqua</td><td>CV Berkah Jaya</td><td>300 botol</td><td>Rp 2.000</td><td>Rp 3.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=8" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG009</td><td>Teh Celup 25 Pcs</td><td>Minuman</td><td>Sariwangi</td><td>UD Karya Mandiri</td><td>90 kotak</td><td>Rp 8.500</td><td>Rp 11.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=9" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG010</td><td>Kecap Manis 220ml</td><td>Bumbu</td><td>ABC</td><td>UD Karya Mandiri</td><td>75 botol</td><td>Rp 7.000</td><td>Rp 9.500</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=10" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG011</td><td>Saus Sambal 340ml</td><td>Bumbu</td><td>Indofood</td><td>PT Maju Tak Gentar</td><td>18 botol</td><td>Rp 9.000</td><td>Rp 12.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/warning.svg" class="status-icon" alt="Stok Rendah"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=11" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG012</td><td>Chitato Sapi Panggang</td><td>Snack</td><td>Chitato</td><td>CV Sumber Rejeki</td><td>120 pcs</td><td>Rp 7.500</td><td>Rp 10.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=12" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG013</td><td>Deterjen Bubuk 1kg</td><td>Kebersihan</td><td>Rinso</td><td>PT Cahaya Nusantara</td><td>55 pcs</td><td>Rp 14.000</td><td>Rp 18.500</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Tersedia"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=13" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td>BRG014</td><td>Susu UHT Full Cream 1L</td><td>Minuman</td><td>Ultra Milk</td><td>CV Berkah Jaya</td><td>0 karton</td><td>Rp 16.000</td><td>Rp 20.000</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/wrong.svg" class="status-icon" alt="Habis"></td>
                                <td><a href="<?= BASE_URL ?>/barang/detail?id=14" class="link">Lihat</a></td>
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