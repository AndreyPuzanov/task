<?php

spl_autoload_register(function ($class_name) {
    require_once 'classes/' . $class_name . '.php';
});

if(isset($_POST['passBtn'])){
    $factory = new Factory();
    $door = $factory->createClass(DoorWithElectronicLock, $_POST['pass']);
    $result = $door->initStatus();
}

if(isset($_POST['checkBtn'])){
    $factory = new Factory();
    $door2 = $factory->createClass(DoorWithLatch, $_POST['check']);
    $result = $door2->initStatus();
}

if(isset($_POST['statusBtn'])){
    $factory = new Factory();
    $door3 = $factory->createClass(DoorWithMechanicalLock, $_POST['status']);
    $result = $door3->initStatus();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <hr>
    <p>Дверь с электронным замком</p>
    <?php if(isset($_POST['passBtn'])): ?>
    <p>
            <?php if($result == 1): ?>
                Дверь открыта
            <?php elseif($result == 0): ?>
                Дверь закрыта
            <?php elseif($result == 2): ?>
                Введен неверный пароль.
            <?php endif; ?>
        </p>
    <?php endif; ?>
    <form action="index.php" method="post">
        <input type="password" name="pass">
        <input type="submit" name="passBtn">
    </form>
    <hr>
    <p>Дверь с щеколдой</p>
    <?php if(isset($_POST['checkBtn'])): ?>
        <p>
            <?php if($result == 1): ?>
                Дверь открыта
            <?php elseif($result == 0): ?>
                Дверь закрыта
            <?php endif; ?>
        </p>
    <?php endif; ?>
    <form action="index.php" method="post">
        <label for="open">Отодвинуть щеколду</label>
        <input type="radio" name="check" value="1" id="open">
        <br>
        <label for="close">Задвинуть щеколду</label>
        <input type="radio" name="check" value="0" id="close">
        <br>
        <input type="submit" name="checkBtn">
    </form>
    <hr>
    <p>Дверь с механическим замком</p>
    <?php if(isset($_POST['statusBtn'])): ?>
        <p>
            <?php if($result == 1): ?>
                Дверь открыта
            <?php elseif($result == 0): ?>
                Дверь закрыта
            <?php endif; ?>
        </p>
    <?php endif; ?>
    <form action="index.php" method="post">
        <label for="open">Открыть замок</label>
        <input type="range" name="status" min="0" max="1" value="0">
        <br>
        <input type="submit" name="statusBtn">
    </form>
    <hr>
</body>
</html>