<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simple-MVC</title>
</head>
<body>
<section>
    <h1>Categorys</h1>
    <ul>
        <?php foreach ($categorys as $category) : ?>
            <li><?= $category['nom'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>