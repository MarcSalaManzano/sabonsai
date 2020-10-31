<html lang="ca">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <title>Sabonsai | Home</title>
    <!--Style-->
    <link href="css/main.css" rel="stylesheet">
    <!--typo-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,700" rel="stylesheet"/>
</head>
<body>
<div id="layout">
    <header id="header-container" class="header">
        <?php require __DIR__.'/controller/header.php'; ?>
    </header>
    <section class="carrousel"> Test </section>
    <nav class="nav">
        <?php require __DIR__.'/controller/categories.php'; ?>
    </nav>
    <section class="products">
        <?php require __DIR__.'/controller/llista_productes.php'; ?>
    </section>
    <footer class="footer">
        <?php require __DIR__.'/controller/footer.php'; ?>
    </footer>
</div>
</body>