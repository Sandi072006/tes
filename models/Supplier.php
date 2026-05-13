<?php
// ─── Model Supplier ─────────────────────────────────────────────
class Supplier {

    // Ambil semua supplier
    public static function getAll() {
        $db   = getDB();
        $stmt = $db->query('SELECT * FROM supplier ORDER BY perusahaan ASC');
        return $stmt->fetchAll();
    }

    // Ambil supplier berdasarkan id
    public static function findById($id) {
        $db   = getDB();
        $stmt = $db->prepare('SELECT * FROM supplier WHERE id = ? LIMIT 1');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // Ambil supplier yang aktif saja
    public static function getAktif() {
        $db   = getDB();
        $stmt = $db->query("SELECT * FROM supplier WHERE status = 'aktif' ORDER BY perusahaan ASC");
        return $stmt->fetchAll();
    }

    // Tambah supplier baru
    public static function create($data) {
        $db   = getDB();
        $stmt = $db->prepare('INSERT INTO supplier 
                              (nama, perusahaan, kontak, email, alamat, status) 
                              VALUES (?, ?, ?, ?, ?, ?)');
        return $stmt->execute([
            $data['nama'],
            $data['perusahaan'],
            $data['kontak'],
            $data['email'],
            $data['alamat'],
            $data['status'],
        ]);
    }

    // Update supplier
    public static function update($id, $data) {
        $db   = getDB();
        $stmt = $db->prepare('UPDATE supplier SET 
                              nama=?, perusahaan=?, kontak=?, email=?, 
                              alamat=?, status=? 
                              WHERE id=?');
        return $stmt->execute([
            $data['nama'],
            $data['perusahaan'],
            $data['kontak'],
            $data['email'],
            $data['alamat'],
            $data['status'],
            $id,
        ]);
    }

    // Hapus supplier
    public static function delete($id) {
        $db   = getDB();
        $stmt = $db->prepare('DELETE FROM supplier WHERE id = ?');
        return $stmt->execute([$id]);
    }

    // Hitung total supplier
    public static function count() {
        $db = getDB();
        return $db->query('SELECT COUNT(*) FROM supplier')->fetchColumn();
    }

    // Hitung supplier aktif
    public static function countAktif() {
        $db = getDB();
        return $db->query("SELECT COUNT(*) FROM supplier WHERE status='aktif'")->fetchColumn();
    }
}