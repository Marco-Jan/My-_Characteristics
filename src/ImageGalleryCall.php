<?php

class ImageGalleryCall {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function fetchAll() {
        $stmt = $this->pdo->prepare('SELECT * FROM images ORDER BY id');
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS, Image::class);
    }
}