<head>
    <title>Sabonsai | Register/Login</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
    <link href="../css/login.css" rel="stylesheet">
</head>

<body>

<div id="layoutLogin">
    <header>
        <?php require __DIR__ . '/controller/header.php'; ?>
    </header>

    <section id="formRegister">
        <?php require __DIR__ . '/controller/registre.php'; ?>
    </section>

    <section id="formLogin">
        <?php require __DIR__ . '/controller/login.php'; ?>
    </section>
</div>

<footer>
    <?php require __DIR__ . '/controller/footer.php'; ?>
</footer>
</body>