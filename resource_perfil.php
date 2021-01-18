<html lang="ca">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <title>Sabonsai | Perfil</title>
    <!--Style-->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/perfil.css" rel="stylesheet">
    <!--typo-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div id="layout">
    <header id="header-container" class="header">
        <?php require __DIR__.'/controller/header.php'; ?>
    </header>
    <section id="perfil-inf">
        <?php require __DIR__.'/controller/perfil.php'; ?>
    </section>
    <footer class="footer">
        <?php require __DIR__.'/controller/footer.php'; ?>
    </footer>
</div>
</body>
</html>