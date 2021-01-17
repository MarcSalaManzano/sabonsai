<head>
    <title>Sabonsai | Compra finalitzada</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet">

</head>

<body>
<div id="layoutCompraFinalitzada">
    <header id="header-container" style="grid-area: Head">
        <?php require __DIR__ . '/controller/header.php'; ?>
    </header>

    <section>
        <?php require __DIR__ . '/view/compraFinalitzada.php'; ?>
    </section>

    <footer class="footer">
        <?php require __DIR__.'/controller/footer.php'; ?>
    </footer>
</body>