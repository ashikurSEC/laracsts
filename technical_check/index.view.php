<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Check</title>
</head>
<body>
    <h1><?= $busniess['name'] ?></h1>
    <ul>
        <?php foreach ( $busniess['categories'] as $category ): ?>
            <li><?= $category ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>