<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Barang</title>
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

            <a href="<?= BASE_URL ?>/admin/barang" class="active">
                Data Barang
            </a>

            <a href="<?= BASE_URL ?>/admin/supplier">
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
                <span class="topbar-date">
                    <?= date('l, d F Y') ?>
                </span>

                <div class="topbar-divider"></div>

                <div class="topbar-user">
                    <div class="topbar-avatar">A</div>

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

            <!-- HEADER -->
            <div class="page-header">

                <div class="page-title">
                    <h1>Manajemen Barang</h1>
                    <p>Kelola data barang supermarket</p>
                </div>

                <div class="qa-grid">
                    <a href="<?= BASE_URL ?>/admin/barang/tambah"
                       class="qa-card">

                        <div class="qa-icon">
                            <svg viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2.2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                                <line x1="12" y1="22" x2="12" y2="12"/>
                                <line x1="12" y1="12" x2="3.27" y2="6.96"/>
                                <line x1="12" y1="12" x2="20.73" y2="6.96"/>
                            </svg>
                        </div>

                        <span>Tambah Barang</span>
                    </a>
                </div>
            </div>

            <!-- TABLE -->
            <div class="card">

                <div class="toolbar">

                    <div class="search-box">
                        <input type="text"
                               class="search-input"
                               placeholder="Cari barang, kategori, atau merek..." />
                    </div>

                    <select class="select-filter">
                        <option value="">Semua Kategori</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="kebersihan">Kebersihan</option>
                        <option value="bumbu">Bumbu & Rempah</option>
                        <option value="snack">Snack</option>
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

                        <?php if (!empty($data['barang'])): ?>

                            <?php foreach ($data['barang'] as $barang): ?>

                                <tr>

                                    <td>
                                        <?= $barang['kode'] ?>
                                    </td>

                                    <td>
                                        <?= $barang['nama'] ?>
                                    </td>

                                    <td>
                                        <?= $barang['kategori'] ?>
                                    </td>

                                    <td>
                                        <?= $barang['merek'] ?>
                                    </td>

                                    <td>
                                        <?= $barang['supplier_nama'] ?? '-' ?>
                                    </td>

                                    <td>
                                        <?= $barang['stok'] ?>
                                        <?= $barang['satuan'] ?? ''?>
                                    </td>

                                    <td>
                                        Rp <?= number_format((float)$barang['harga_beli'], 0, ',', '.') ?>
                                    </td>

                                    <td>
                                        Rp <?= number_format((float)$barang['harga_jual'], 0, ',', '.') ?>
                                    </td>

                                    <!-- STATUS -->
                                    <td>

                                        <?php if ($barang['stok'] <= 0): ?>

                                            <img src="<?= BASE_URL ?>/assets/img/wrong.svg"
                                                 class="status-icon"
                                                 alt="Habis"
                                                 title="Habis">

                                        <?php elseif ($barang['stok'] <= ($barang['stok_minimum']?? 0)): ?>

                                            <img src="<?= BASE_URL ?>/assets/img/warning.svg"
                                                 class="status-icon"
                                                 alt="Hampir habis"
                                                 title="Hampir habis">

                                        <?php else: ?>

                                            <img src="<?= BASE_URL ?>/assets/img/check.svg"
                                                 class="status-icon"
                                                 alt="Tersedia"
                                                 title="Tersedia">

                                        <?php endif; ?>

                                    </td>

                                    <!-- AKSI -->
                                    <td>

                                        <a href="<?= BASE_URL ?>/admin/barang/detail?id=<?= $barang['id'] ?>"
                                           class="link">
                                            Lihat
                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="10" style="text-align:center;">
                                    Tidak ada data barang
                                </td>
                            </tr>

                        <?php endif; ?>

                        </tbody>

                    </table>

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