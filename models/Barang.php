<?php
// ─── Model Barang ───────────────────────────────────────────────
class Barang {

    // Ambil semua barang
    public static function getAll() {
        $db   = getDB();
        $stmt = $db->query('SELECT * FROM barang ORDER BY kode ASC');
        return $stmt->fetchAll();
    }

    // Ambil barang berdasarkan id
    public static function findById($id) {
        $db   = getDB();
        $stmt = $db->prepare('SELECT * FROM barang WHERE id = ? LIMIT 1');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Ambil barang dengan stok rendah (berdasarkan status 'Hampir habis')
    public static function getStokRendah() {
        $db   = getDB();
        $stmt = $db->query('SELECT * FROM barang WHERE status = "Hampir habis" ORDER BY stok ASC');
        return $stmt->fetchAll();
    }

    // Tambah barang baru
    public static function create($data) {
        $db   = getDB();
        $stmt = $db->prepare('INSERT INTO barang 
                              (kode, nama, kategori, merek, supplier, stok, harga_beli, harga_jual, status) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
        return $stmt->execute([
            $data['kode'],
            $data['nama'],
            $data['kategori'],
            $data['merek'],
            $data['supplier'],
            $data['stok'],
            $data['harga_beli'],
            $data['harga_jual'],
            $data['status'],
        ]);
    }

    // Update barang
    public static function update($id, $data) {
        $db   = getDB();
        $stmt = $db->prepare('UPDATE barang SET 
                              kode=?, nama=?, kategori=?, merek=?, supplier=?, 
                              stok=?, harga_beli=?, harga_jual=?, status=? 
                              WHERE id=?');
        return $stmt->execute([
            $data['kode'],
            $data['nama'],
            $data['kategori'],
            $data['merek'],
            $data['supplier'],
            $data['stok'],
            $data['harga_beli'],
            $data['harga_jual'],
            $data['status'],
            $id,
        ]);
    }

    // Hapus barang
    public static function delete($id) {
        $db   = getDB();
        $stmt = $db->prepare('DELETE FROM barang WHERE id = ?');
        return $stmt->execute([$id]);
    }

    // Hitung total barang
    public static function count() {
        $db = getDB();
        return $db->query('SELECT COUNT(*) FROM barang')->fetchColumn();
    }
}