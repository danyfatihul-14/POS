<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> {{ $judul }}</h1>
    <ul>
        <?php
    foreach ($products as $produk) : ?>
        <li>
            <h2><?= $produk ?></h2>
        </li>

        <?php endforeach ?>
    </ul>
</body>

</html>
