<?php
if (!isset($css_path)) {
  $css_path = '../pico.classless.min.css';
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?= $css_path ?>" type="text/css">
    <title><?= $title ?? '' ?></title>
</head>

<body>