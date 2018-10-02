<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Voir un seul item</title>
</head>
<body>
<main>
    <h1>Category <?= $categorys['nom'] ?></h1>
    <ul>
        <li>Id : <?= $categorys['id'] ?></li>
    </ul>
    <a href='../categorys'>Back to list</a>
</main>
</body>
</html>