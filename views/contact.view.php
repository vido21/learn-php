<?php require 'partials/head.view.php' ?>
    <h1>
    Contact us
    </h1>
    <ul>
        <?php foreach ($users as $user):?>
            <li><?= $user->name?></li>
        <?php endforeach; ?>
    </ul>
<?php require 'partials/footer.view.php' ?>
