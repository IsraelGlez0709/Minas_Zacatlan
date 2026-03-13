<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minas de Zacatlán - Productos</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link rel="stylesheet" href="css/products_page.css">
</head>
<body>

    <?php include './components/header.php'; ?>

    <main class="main-content">
        
        <section class="hero-productos">
            <img src="assets/bg-productos-hero.png" class="hero-bg-img" alt="Productos Minas de Zacatlán">
            <div class="hero-gradient-overlay"></div>

            <div class="hero-title-box">
                <h1>PRODUCTOS</h1>
            </div>
        </section>

        <section class="intro-productos">
            <div class="intro-container">
                <p>
                    Aquí encontrarás nuestro portafolio de minerales industriales con especificaciones consistentes y respaldo técnico. Suministramos Ball Clay, Caolín, Feldespato y Sílica, además de blends a la medida para optimizar reología, brillo, vitrificación y desempeño en proceso. Cada lote cuenta con análisis de laboratorio, control de granulometría y humedad, y trazabilidad SAP. Entregamos en presurizado a silo, a granel, súper sacos o sacos, con cobertura nacional. Explora las familias, revisa sus fichas técnicas y cuéntanos tus parámetros objetivo para recomendar la solución ideal.
                </p>
            </div>
        </section>

        <?php include './components/products.php'; ?>

        <?php include './components/contact.php'; ?>

        <?php include './components/map.php'; ?>

    </main>

    <?php include './components/footer.php'; ?>

</body>
</html>