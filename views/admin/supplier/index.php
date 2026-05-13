<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Supplier — Admin StockMate</title>
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
            <a href="<?= BASE_URL ?>/admin/barang">Data Barang</a>
            <a href="<?= BASE_URL ?>/admin/supplier" class="active">Supplier</a>
            <a href="<?= BASE_URL ?>/admin/pemasokan">Pemasokan</a>
            <a href="<?= BASE_URL ?>/admin/laporan">Laporan</a>
        </nav>

        <div class="user-box">
            <p>Logged in as</p>
            <h4>Admin</h4>
            <span>Administrator</span>
        </div>

        <a href="<?= BASE_URL ?>/logout" class="logout">Logout</a>
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
                <!-- ✅ FIX 1: Tanggal dynamic -->
                <span class="topbar-date">
                    <?= date('l, d F Y') ?>
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

            <div class="page-header">
                <div class="page-title">
                    <h1>Manajemen Supplier</h1>
                    <p>Kelola data supplier pemasok</p>
                </div>

                <div class="qa-grid">
                    <a href="<?= BASE_URL ?>/admin/supplier/tambah" class="qa-card">
                        <div class="qa-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="7" width="20" height="14" rx="2"/>
                                <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                                <line x1="12" y1="12" x2="12" y2="16"/>
                                <line x1="10" y1="14" x2="14" y2="14"/>
                            </svg>
                        </div>
                        <span>Tambah Supplier</span>
                    </a>
                </div>
            </div>

            <div class="card">

                <div class="toolbar">
                    <div class="search-box">
                        <!-- ✅ FIX 2: Search pakai GET form -->
                        <form method="GET" action="">
                            <input
                                type="text"
                                name="search"
                                class="search-input"
                                placeholder="Cari supplier, perusahaan, atau email..."
                                value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
                            />
                        </form>
                    </div>

                    <!-- ✅ FIX 3: Filter status pakai GET form -->
                    <form method="GET" action="">
                        <select class="select-filter" name="status" onchange="this.form.submit()">
                            <option value="">Semua Status</option>
                            <option value="aktif"   <?= (($_GET['status'] ?? '') === 'aktif')    ? 'selected' : '' ?>>Aktif</option>
                            <option value="nonaktif"<?= (($_GET['status'] ?? '') === 'nonaktif') ? 'selected' : '' ?>>Nonaktif</option>
                        </select>
                    </form>
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

                        <!-- ✅ FIX 4: Data dynamic dari database -->
                        <?php if (!empty($data['supplier'])): ?>

                            <?php foreach ($data['supplier'] as $supplier): ?>

                                <tr>
                                    <td>
                                        <!-- ✅ FIX 5: htmlspecialchars untuk cegah XSS -->
                                        <strong><?= htmlspecialchars($supplier['nama']) ?></strong>
                                    </td>

                                    <td><?= htmlspecialchars($supplier['perusahaan'] ?? '-') ?></td>
                                    <td><?= htmlspecialchars($supplier['kontak']     ?? '-') ?></td>
                                    <td><?= htmlspecialchars($supplier['email']      ?? '-') ?></td>
                                    <td><?= htmlspecialchars($supplier['alamat']     ?? '-') ?></td>

                                    <td>
                                        <?php if (($supplier['status'] ?? '') === 'aktif'): ?>
                                            <img src="<?= BASE_URL ?>/assets/img/check.svg"
                                                 class="status-icon" alt="Aktif" title="Aktif">
                                        <?php else: ?>
                                            <img src="<?= BASE_URL ?>/assets/img/wrong.svg"
                                                 class="status-icon" alt="Nonaktif" title="Nonaktif">
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <div style="display:flex;gap:10px;">
                                            <a href="<?= BASE_URL ?>/admin/supplier/detail?id=<?= (int) $supplier['id'] ?>"
                                               class="link">Lihat</a>

                                            <!-- ✅ FIX 6: Hapus pakai modal per-id, bukan hardcoded -->
                                            <a href="#modal-hapus-<?= (int) $supplier['id'] ?>"
                                               class="link" style="color:#ef4444;">Hapus</a>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="7" style="text-align:center;">
                                    Tidak ada data supplier
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

<!-- ✅ FIX 7: Modal hapus dynamic per supplier -->
<?php if (!empty($data['supplier'])): ?>
    <?php foreach ($data['supplier'] as $supplier): ?>

        <div class="modal" id="modal-hapus-<?= (int) $supplier['id'] ?>">
            <div class="modal-box">

                <a href="#" class="close">&times;</a>

                <h2>Hapus Supplier</h2>

                <p>
                    Apakah Anda yakin ingin menghapus
                    <strong><?= htmlspecialchars($supplier['nama']) ?></strong>?
                </p>

                <div style="display:flex;gap:10px;justify-content:flex-end;">
                    <a href="#" class="btn-secondary">Batal</a>

                    <a href="<?= BASE_URL ?>/admin/supplier/hapus?id=<?= (int) $supplier['id'] ?>"
                       class="btn-delete" style="padding:9px 16px;">
                        Ya, Hapus
                    </a>
                </div>

            </div>
        </div>

    <?php endforeach; ?>
<?php endif; ?>

<footer>
    <p>&copy; <?= date('Y') ?> StockMate</p>
</footer>

</body>
</html>