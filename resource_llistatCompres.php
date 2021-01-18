<head>
    <title>Sabonsai | Compres</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/compra.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<div id="layoutCompres">
    <header id="header-container" style="grid-area: Head">
        <?php require __DIR__ . '/controller/header.php'; ?>
    </header>
    <section id="compres">
        <?php require __DIR__ . '/controller/llistat_compres.php'; ?>
    </section>
    <footer class="footer" style="grid-area: footerLogin">
        <?php require __DIR__ . '/controller/footer.php'; ?>
    </footer>
</div>
</body>