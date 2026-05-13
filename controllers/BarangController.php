<?php
require_once ROOT . '/controllers/AuthController.php';

// ─── Barang Controller ──────────────────────────────────────────
class BarangController {

    // ── PETUGAS: List barang ──
    public function index() {
        AuthController::cekLogin();
        $data['barang'] = Barang::getAll();
        require_once ROOT . '/views/barang/index.php';
    }

    // ── PETUGAS: Detail barang ──
    public function detail() {
        AuthController::cekLogin();
        $id = $_GET['id'] ?? null;
        $data['barang'] = Barang::findById($id);
        if (!$data['barang']) {
            header('Location: ' . BASE_URL . '/barang');
            exit;
        }
        require_once ROOT . '/views/barang/detail.php';
    }

    // ── ADMIN: List barang ──
    public function indexAdmin() {
        AuthController::cekAdmin();
        $data['barang']    = Barang::getAll();
        $data['suppliers'] = Supplier::getAll();
        require_once ROOT . '/views/admin/barang/index.php';
    }

    // ── ADMIN: Detail barang ──
    public function detailAdmin() {
        AuthController::cekAdmin();
        $id = $_GET['id'] ?? null;
        $data['barang'] = Barang::findById($id);
        if (!$data['barang']) {
            header('Location: ' . BASE_URL . '/admin/barang');
            exit;
        }
        require_once ROOT . '/views/admin/barang/detail.php';
    }

    // ── ADMIN: Form tambah barang ──
    public function tambah() {
        AuthController::cekAdmin();
        $data['suppliers'] = Supplier::getAll();
        require_once ROOT . '/views/admin/barang/tambah.php';
    }

    // ── ADMIN: Simpan barang baru ──
    public function simpan() {
        AuthController::cekAdmin();
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ' . BASE_URL . '/admin/barang/tambah');
            exit;
        }
        Barang::create([
            'kode'         => $_POST['kode'],
            'nama'         => $_POST['nama'],
            'kategori'     => $_POST['kategori'],
            'merek'        => $_POST['merek'],
            'supplier_id'  => $_POST['supplier_id'],
            'stok'         => $_POST['stok'],
            'satuan'       => $_POST['satuan'],
            'stok_minimum' => $_POST['stok_minimum'],
            'harga_beli'   => $_POST['harga_beli'],
            'harga_jual'   => $_POST['harga_jual'],
        ]);
        header('Location: ' . BASE_URL . '/admin/barang');
        exit;
    }

    // ── ADMIN: Form edit barang ──
    public function edit() {
        AuthController::cekAdmin();
        $id = $_GET['id'] ?? null;
        $data['barang']    = Barang::findById($id);
        $data['suppliers'] = Supplier::getAll();
        if (!$data['barang']) {
            header('Location: ' . BASE_URL . '/admin/barang');
            exit;
        }
        require_once ROOT . '/views/admin/barang/edit.php';
    }

    // ── ADMIN: Update barang ──
    public function update() {
        AuthController::cekAdmin();
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ' . BASE_URL . '/admin/barang');
            exit;
        }
        $id = $_POST['id'];
        Barang::update($id, [
            'kode'         => $_POST['kode'],
            'nama'         => $_POST['nama'],
            'kategori'     => $_POST['kategori'],
            'merek'        => $_POST['merek'],
            'supplier_id'  => $_POST['supplier_id'],
            'stok'         => $_POST['stok'],
            'satuan'       => $_POST['satuan'],
            'stok_minimum' => $_POST['stok_minimum'],
            'harga_beli'   => $_POST['harga_beli'],
            'harga_jual'   => $_POST['harga_jual'],
        ]);
        header('Location: ' . BASE_URL . '/admin/barang');
        exit;
    }

    // ── ADMIN: Hapus barang ──
    public function hapus() {
        AuthController::cekAdmin();
        $id = $_GET['id'] ?? null;
        if ($id) Barang::delete($id);
        header('Location: ' . BASE_URL . '/admin/barang');
        exit;
    }
}