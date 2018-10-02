<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Voir un seul item</title>
</head>
<body>
   <main>
    <h1>Item <?= $item['title'] ?></h1>
<ul>
    <li>Id : <?= $item['id'] ?></li>
</ul>
<a href='../?route=items'>Back to list</a>
</main>
</body>
</html>