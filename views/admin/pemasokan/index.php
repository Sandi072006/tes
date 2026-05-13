<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemasokan — Admin StockMate</title>

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

            <a href="<?= BASE_URL ?>/admin/supplier">
                Supplier
            </a>

            <a href="<?= BASE_URL ?>/admin/pemasokan"
               class="active">
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
                    <?= date('d F Y') ?>
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

            <!-- HEADER -->
            <div class="page-header">

                <div class="page-title">

                    <h1>Manajemen Pemasokan</h1>

                    <p>
                        Kelola data pemasokan barang
                    </p>

                </div>

                <div class="qa-grid">

                    <a href="<?= BASE_URL ?>/admin/pemasokan/tambah"
                       class="qa-card">

                        <div class="qa-icon">

                            <svg viewBox="0 0 24 24"
                                 fill="none"
                                 stroke="currentColor"
                                 stroke-width="2.2"
                                 stroke-linecap="round"
                                 stroke-linejoin="round">

                                <path d="M12 5v14M5 12h14"/>

                            </svg>

                        </div>

                        <span>Tambah Pemasokan</span>

                    </a>

                </div>

            </div>

            <!-- CARD -->
            <div class="card">

                <!-- TOOLBAR -->
                <div class="toolbar">

                    <div class="search-box">

                        <input
                            type="text"
                            id="searchInput"
                            class="search-input"
                            placeholder="Cari tanggal, supplier, atau barang..."
                            oninput="filterTable()"
                        />

                    </div>

                    <select class="select-filter">

                        <option value="">
                            Semua Supplier
                        </option>

                        <option value="PT Sumber Makmur">
                            PT Sumber Makmur
                        </option>

                        <option value="CV Berkah Jaya">
                            CV Berkah Jaya
                        </option>

                        <option value="Toko Sejahtera">
                            Toko Sejahtera
                        </option>

                    </select>

                </div>

                <!-- TABLE -->
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

                        <tbody id="tableBody">

                            <tr>

                                <td>05 Mei 2026</td>

                                <td>PT Sumber Makmur</td>

                                <td>Beras Premium 5kg</td>

                                <td>200</td>

                                <td>
                                    Pengiriman tepat waktu
                                </td>

                                <td>Admin</td>

                                <td>

                                    <a href="<?= BASE_URL ?>/admin/pemasokan/detail/1"
                                       class="link">

                                        Lihat

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>06 Mei 2026</td>

                                <td>CV Berkah Jaya</td>

                                <td>Minyak Goreng 1L</td>

                                <td>150</td>

                                <td>
                                    Stok tambahan bulanan
                                </td>

                                <td>Admin</td>

                                <td>

                                    <a href="<?= BASE_URL ?>/admin/pemasokan/detail/2"
                                       class="link">

                                        Lihat

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>07 Mei 2026</td>

                                <td>Toko Sejahtera</td>

                                <td>Gula Pasir 1kg</td>

                                <td>300</td>

                                <td>-</td>

                                <td>Admin</td>

                                <td>

                                    <a href="<?= BASE_URL ?>/admin/pemasokan/detail/3"
                                       class="link">

                                        Lihat

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>08 Mei 2026</td>

                                <td>PT Sumber Makmur</td>

                                <td>Tepung Terigu 1kg</td>

                                <td>100</td>

                                <td>
                                    Pesanan mendesak
                                </td>

                                <td>Admin</td>

                                <td>

                                    <a href="<?= BASE_URL ?>/admin/pemasokan/detail/4"
                                       class="link">

                                        Lihat

                                    </a>

                                </td>

                            </tr>

                            <tr>

                                <td>09 Mei 2026</td>

                                <td>CV Berkah Jaya</td>

                                <td>Garam Halus 500g</td>

                                <td>250</td>

                                <td>
                                    Restock rutin mingguan
                                </td>

                                <td>Admin</td>

                                <td>

                                    <a href="<?= BASE_URL ?>/admin/pemasokan/detail/5"
                                       class="link">

                                        Lihat

                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

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