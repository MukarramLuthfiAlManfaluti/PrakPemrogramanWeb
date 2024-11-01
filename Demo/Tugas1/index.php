<?php

// Mengatur level error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mengimpor semua file yang diperlukan
require 'Abstract/AbstractCoffee.php';
require 'Traits/LoggerTrait.php';
require 'Models/Coffee.php';
require 'Models/CoffeeOrder.php';
require 'Controller/CoffeeController.php';

// Memastikan kode di bawah hanya dijalankan jika ini adalah file utama
if (basename($_SERVER['PHP_SELF']) === 'index.php') {
    // Menentukan header untuk format JSON
    header('Content-Type: application/json');

    // Membuat instance dari CoffeeController dan memanggil method getCoffeeList
    $controller = new \Controller\CoffeeController();
    $response = $controller->getCoffeeList(); // Mengambil daftar kopi

    // Mengubah array menjadi JSON dan mengeluarkannya
    echo json_encode($response);
}
