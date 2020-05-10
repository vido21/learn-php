
<?php require 'partials/head.view.php' ?>
        <h1> Todo 
        </h1>

        <ul>

             <?php foreach ($tasks as $task): ?>
                <li>
                    <?php if ($task->completed): ?>
                        <strike>
                    <?php endif;?>
                    <?= $task->description ?>
                    <?php if ($task->completed): ?>
                        </strike>
                    <?php endif;?>
                </li>
            <?php endforeach ;?>

        </ul>

<form action="/names" method="POST">
    Name: <input name="name" type="text">
    <button type="submit">Submit</button>
</form>

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
<?php require 'partials/footer.view.php' ?>
