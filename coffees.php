<?php
header('Content-Type: application/json');
include 'db.php';

try {
    // Mengambil semua data dari tabel coffees
    $stmt = $pdo->prepare("SELECT * FROM coffees");
    $stmt->execute();
    $coffees = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Mengubah data menjadi format JSON
    echo json_encode($coffees);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
