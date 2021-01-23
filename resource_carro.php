<head>
    <title>Sabonsai | Register/Login</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet">
    <link href="css/cabas.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>

</head>

<body>
<div >
    <header id="header-container" style="grid-area: Head">
        <?php require __DIR__ . '/controller/header.php'; ?>
    </header>

    <section id="layoutCarro">
        <?php require __DIR__ . '/controller/cabasPage.php'; ?>
    </section>

    <footer class="footer">
        <?php require __DIR__.'/controller/footer.php'; ?>
    </footer>
</body>