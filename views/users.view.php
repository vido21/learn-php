<?php require 'partials/head.view.php' ?>
<h1>All Users</h1>
<ul>
             <?php foreach ($users as $user): ?>
                <li>
                    <?= $user->name ?>
                </li>
            <?php endforeach ;?>

        </ul>

<form action="/users" method="POST">
    Name: <input name="name" type="text">
    <button type="submit">Submit</button>
</form>
<?php require 'partials/footer.view.php' ?>
