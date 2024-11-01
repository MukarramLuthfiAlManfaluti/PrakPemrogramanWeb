<?php
header('Content-Type: application/json'); // Menentukan header untuk format JSON

// Menggunakan require_once untuk menghindari pemanggilan ganda
require_once __DIR__ . '/../Controller/CoffeeController.php';

// Menggunakan namespace untuk kelas CoffeeController
use Controller\CoffeeController;

// Membuat instance dari CoffeeController dan memanggil method getCoffeeList
$controller = new CoffeeController();
$response = $controller->getCoffeeList(); // Mendapatkan daftar kopi

// Mengubah array menjadi JSON dan mengeluarkannya
echo json_encode($response);
?>
