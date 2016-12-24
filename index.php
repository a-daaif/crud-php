<?php
require_once "controlleur.php";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Gestion des clients</h1>
</div>
<form action="#" method="get" class="form-inline">
    <input type="hidden" name="action" value="<?= $form_action ?>">
    <input type="hidden" name="id" value="<?= $client->id ?>">
    <input type="text" name="nom" class="form-control" placeholder="Nom"
    value="<?= $client->nom ?>">
    <input type="text" name="ville" class="form-control" placeholder="Ville"
           value="<?= $client->ville ?>">
    <input type="text" name="tel" class="form-control" placeholder="Téléphone"
           value="<?= $client->telephone ?>">
    <button class="btn btn-success">
        <?php if($client->id ==-1) : ?>
        Ajouter
        <?php else : ?>
        Modifier
        <?php endif; ?>
    </button>
</form>
<br>
<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Ville</th>
        <th>Téléphone</th>
    </tr>
    <?php foreach ($clients as $c) :?>
    <tr>
        <td><?= $c->id ?></td>
        <td><?= $c->nom ?></td>
        <td><?= $c->ville ?></td>
        <td><?= $c->telephone ?></td>
        <td><a href="?action=del&id=<?= $c->id ?>" class="btn btn-danger">
                <span class="glyphicon glyphicon-minus-sign"></span>
            </a></td>
        <td><a href="?action=edit&id=<?= $c->id ?>" class="btn btn-primary">
                <span class="glyphicon glyphicon-edit"></span>
            </a></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
