<?php
function e($string)
{
    return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
}

function render($path, array $data = []): void
{
    ob_start();
    extract($data);
    require $path;
    $content = ob_get_contents();
    ob_end_clean();
    require __DIR__ . '/../view/layouts/main.view.php';
}

function renderAdmin($path, array $data = []): void
{
    ob_start();
    extract($data);
    require $path;
    $content = ob_get_contents();
    ob_end_clean();
    require __DIR__ . '/../admin/views/layouts/main.view.php';
}


