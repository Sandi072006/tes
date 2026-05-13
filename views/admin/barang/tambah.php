<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang — Admin StockMate</title>

    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body>

<div class="layout">

    <aside class="sidebar">
        <div class="logo">
            <h2>StockMate</h2>
            <p>Smart Supplier System</p>
        </div>

        <nav class="menu">
            <a href="<?= BASE_URL ?>/admin/dashboard">Dashboard</a>

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

    <main class="main-content">

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

        <div class="content">

            <div class="page-header">

                <div class="page-title">

                    <div class="breadcrumb">
                        <a href="<?= BASE_URL ?>/admin/barang">
                            Data Barang
                        </a>

                        <span>›</span>

                        <span>Tambah Barang</span>
                    </div>

                    <h1>Tambah Barang</h1>
                    <p>Tambahkan data barang baru ke sistem</p>

                </div>

                <a href="<?= BASE_URL ?>/admin/barang" class="btn gray">
                    Kembali
                </a>

            </div>

            <div class="card">

                <div class="card-header">
                    <h3>Form Tambah Barang</h3>
                    <p>Isi semua field yang diperlukan</p>
                </div>

                <div class="card-body">

                    <!-- FORM ACTION -->
                    <form action="<?= BASE_URL ?>/admin/barang/store" method="POST">

                        <div class="form-grid">

                            <div class="form-group">
                                <label>Kode Barang</label>

                                <input
                                    type="text"
                                    name="kode_barang"
                                    placeholder="cth. BRG015"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label>Nama Barang</label>

                                <input
                                    type="text"
                                    name="nama_barang"
                                    placeholder="cth. Beras Premium 5kg"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>

                                <select name="kategori" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                    <option value="Kebersihan">Kebersihan</option>
                                    <option value="Bumbu">Bumbu</option>
                                    <option value="Snack">Snack</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Merek</label>

                                <input
                                    type="text"
                                    name="merek"
                                    placeholder="cth. Ramos"
                                >
                            </div>

                            <div class="form-group">
                                <label>Supplier</label>

                                <select name="supplier" required>
                                    <option value="">Pilih Supplier</option>

                                    <option value="PT Maju Tak Gentar">
                                        PT Maju Tak Gentar
                                    </option>

                                    <option value="CV Sumber Rejeki">
                                        CV Sumber Rejeki
                                    </option>

                                    <option value="UD Karya Mandiri">
                                        UD Karya Mandiri
                                    </option>

                                    <option value="PT Cahaya Nusantara">
                                        PT Cahaya Nusantara
                                    </option>

                                    <option value="CV Berkah Jaya">
                                        CV Berkah Jaya
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Stok Awal</label>

                                <input
                                    type="number"
                                    name="stok"
                                    placeholder="cth. 100"
                                    min="0"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label>Satuan</label>

                                <input
                                    type="text"
                                    name="satuan"
                                    placeholder="cth. pcs / botol / kg"
                                >
                            </div>

                            <div class="form-group">
                                <label>Stok Minimum</label>

                                <input
                                    type="number"
                                    name="stok_minimum"
                                    placeholder="cth. 20"
                                    min="0"
                                >
                            </div>

                            <div class="form-group">
                                <label>Harga Beli</label>

                                <input
                                    type="number"
                                    name="harga_beli"
                                    placeholder="cth. 65000"
                                    min="0"
                                    required
                                >
                            </div>

                            <div class="form-group">
                                <label>Harga Jual</label>

                                <input
                                    type="number"
                                    name="harga_jual"
                                    placeholder="cth. 75000"
                                    min="0"
                                    required
                                >
                            </div>

                            <div class="form-group form-full">

                                <label>
                                    Deskripsi
                                    <span class="label-optional">(opsional)</span>
                                </label>

                                <textarea
                                    rows="3"
                                    name="deskripsi"
                                    placeholder="Deskripsi singkat barang..."
                                ></textarea>

                            </div>

                        </div>

                        <div class="card-footer"
                             style="padding:20px 0 0;
                             border-top:1px solid #e2e8f0;
                             margin-top:20px;
                             display:flex;
                             justify-content:flex-end;
                             gap:10px;">

                            <a href="<?= BASE_URL ?>/admin/barang"
                               class="btn-secondary">
                                Batal
                            </a>

                            <button type="submit" class="btn-primary">
                                Simpan Barang
                            </button>

                        </div>

                    </form>

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