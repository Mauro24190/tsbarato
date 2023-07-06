<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TsBarato</title>
    <link rel="stylesheet" href="Public/css/tailwind/tailwind.css">
    <link rel="stylesheet" href="Public/css/global.css">
</head>

<body>
    <?php include_once "App/View/Static/header.php"; ?>
    <?php include_once "App/View/" . ($ruta ?? "") . ".php"; ?>
    <?php include_once "App/View/Static/footer.php"; ?>
</body>

</html>