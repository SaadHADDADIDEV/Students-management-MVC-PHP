<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
<?php require_once __DIR__. 'include/nav.php'?>
<div class="container mt-2">
    <h2><?= $title ?></h2>
    <hr>
    <?= $content ?>
</div>
</body>
</html>