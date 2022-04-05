<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php echo "dans le fichier test.php" ?>
<body>
    <?php foreach($allRows as $row): ?>
        <?= $row["productName"]?>
        <?= $row["hotOrCold"]?>
        <?= $row["sparklingOrStill"]?>
    <?php endforeach ?>
</body>
</html>