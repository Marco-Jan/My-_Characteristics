<?php

require_once __DIR__ . '/../inc/all.php';

$images = new ImageGalleryCall($pdo);

renderAdmin(__DIR__ . '/views/admin.view.php', [
    'images' => $images->fetchAll()
]);
