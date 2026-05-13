<?php
// ─── Model Pemasokan ────────────────────────────────────────────
class Pemasokan {

    // Ambil semua pemasokan
    public static function getAll() {
        $db   = getDB();
        $stmt = $db->query('SELECT * FROM pemasokan ORDER BY tanggal DESC');
        return $stmt->fetchAll();
    }

    // Ambil pemasokan berdasarkan id
    public static function findById($id) {
        $db   = getDB();
        $stmt = $db->prepare('SELECT * FROM pemasokan WHERE id = ? LIMIT 1');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Ambil pemasokan berdasarkan supplier
    public static function getBySupplier($supplier) {
        $db   = getDB();
        $stmt = $db->prepare('SELECT * FROM pemasokan WHERE supplier = ? ORDER BY tanggal DESC');
        $stmt->execute([$supplier]);
        return $stmt->fetchAll();
    }

    // Tambah pemasokan baru
    public static function create($data) {
        $db = getDB();

        // Insert pemasokan
        $stmt = $db->prepare('INSERT INTO pemasokan 
                              (kode, barang, supplier, jumlah, tanggal, status) 
                              VALUES (?, ?, ?, ?, ?, ?)');
        return $stmt->execute([
            $data['kode'],
            $data['barang'],
            $data['supplier'],
            $data['jumlah'],
            $data['tanggal'],
            $data['status'],
        ]);
    }

    // Hapus pemasokan
    public static function delete($id) {
        $db   = getDB();
        $stmt = $db->prepare('DELETE FROM pemasokan WHERE id = ?');
        return $stmt->execute([$id]);
    }

    // Hitung total pemasokan
    public static function count() {
        $db = getDB();
        return $db->query('SELECT COUNT(*) FROM pemasokan')->fetchColumn();
    }
}