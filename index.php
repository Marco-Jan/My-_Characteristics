<?php
require_once __DIR__ . '/inc/all.php';

$images = new ImageGalleryCall($pdo);

// var_dump($pdo);
// die();

render(__DIR__ . '/view/index.view.php', [
    'images' => $images->fetchAll()
]);
