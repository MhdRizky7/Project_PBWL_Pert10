<?php

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Contoh sederhana, sesuaikan dengan kebutuhan proyek Anda
if ($uri === '/dashboard') {
    $controller = new \App\Controllers\Dashboard();
    $controller->dashboardPage();
} elseif ($uri === '/golongan') {
    $controller = new \App\Controllers\Golongan();
    $controller->golonganPage();
} elseif ($uri === '/pelanggan') {
    $controller = new \App\Controllers\Pelanggan();
    $controller->pelangganPage();
} elseif ($uri === '/users') {
    $controller = new \App\Controllers\Users();
    $controller->usersPage();
} else {
    // Handle route not found
    echo "404 Not Found";
}
