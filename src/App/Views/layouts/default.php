<!DOCTYPE html>
<html lang="ru">
<head>
    <?=$this->getMeta();?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
</head>

<body>
    <h1>Шаблон по умолчаниыю</h1>
    <?=$content.PHP_EOL;?>

    <?php
    // Debugging for database queries
    /*
    $logs = \R::getDatabaseAdapter()->getDatabase()->getLogger();
    debug($logs->grep('SELECT'));
    */
    ?>
</body>
</html>