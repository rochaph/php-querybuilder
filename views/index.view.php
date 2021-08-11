<!DOCTYPE html>

<?
$header = require 'views/layout/header.php';

getHeader("Home");
?>

<body>

    <? require 'views/layout/navigation.php'; ?>

    <h1> Submit your name </h1>

    <form action="/names" method="post">

        <input type="text" name="name" />

        <button type="submit">Submit</button>
    </form>
    <!-- 
    <ul>
        <? foreach ($tasks as $task) : ?>
            <li>
                <? if ($task['completed']) : ?>
                    <s>
                        <?= $task['description'] ?>
                    </s>
                <? else : ?>
                    <?= $task['description'] ?>
                <? endif ?>
            </li>
        <? endforeach ?>
    </ul> -->
</body>

</html>