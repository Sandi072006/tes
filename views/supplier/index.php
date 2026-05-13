<!DOCTYPE html>
<html lang="id">
<?php $pageTitle = 'Supplier — StockMate'; require_once ROOT . '/views/layout/header.php'; ?>
<body>
<div class="layout">

    <?php $aktif = 'supplier'; require_once ROOT . '/views/layout/sidebar.php'; ?>

    <main class="main-content">
        <?php require_once ROOT . '/views/layout/topbar.php'; ?>

        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h1>Data Supplier</h1>
                    <p>Lihat data supplier pemasok</p>
                </div>
            </div>

            <div class="card">
                <div class="toolbar">
                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Cari supplier, perusahaan, atau email..." />
                    </div>
                    <select class="select-filter">
                        <option value="">Semua Status</option>
                        <option>Aktif</option>
                        <option>Nonaktif</option>
                    </select>
                </div>

                <div class="table-wrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Supplier</th>
                                <th>Perusahaan</th>
                                <th>Kontak</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Sandi Zuliansyah</strong></td><td>PT Maju Tak Gentar</td><td>08123456789</td><td>sandi@majutagentar.com</td><td>Jl. Merdeka No.1, Jakarta</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Aktif"></td>
                                <td><a href="<?= BASE_URL ?>/supplier/detail?id=1" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td><strong>Siti Rahayu</strong></td><td>CV Sumber Rejeki</td><td>08234567890</td><td>siti@sumberrejeki.com</td><td>Jl. Sudirman No.45, Bandung</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Aktif"></td>
                                <td><a href="<?= BASE_URL ?>/supplier/detail?id=2" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td><strong>Ahmad Fauzi</strong></td><td>UD Karya Mandiri</td><td>08345678901</td><td>ahmad@karyamandiri.com</td><td>Jl. Ahmad Yani No.12, Surabaya</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/wrong.svg" class="status-icon" alt="Nonaktif"></td>
                                <td><a href="<?= BASE_URL ?>/supplier/detail?id=3" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td><strong>Dewi Lestari</strong></td><td>PT Cahaya Nusantara</td><td>08456789012</td><td>dewi@cahayanus.com</td><td>Jl. Diponegoro No.7, Semarang</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/check.svg" class="status-icon" alt="Aktif"></td>
                                <td><a href="<?= BASE_URL ?>/supplier/detail?id=4" class="link">Lihat</a></td>
                            </tr>
                            <tr>
                                <td><strong>Riko Pratama</strong></td><td>CV Berkah Jaya</td><td>08567890123</td><td>riko@berkahjaya.com</td><td>Jl. Gatot Subroto No.33, Medan</td>
                                <td><img src="<?= BASE_URL ?>/assets/img/wrong.svg" class="status-icon" alt="Nonaktif"></td>
                                <td><a href="<?= BASE_URL ?>/supplier/detail?id=5" class="link">Lihat</a></td>
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