<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minas de Zacatlán - Inicio</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/industrias.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

    <?php include './components/header.php'; ?>

    <main class="main-content">
        <section class="hero">
            <div class="hero-bg-layer">
                <img src="assets/portada-manos.png" class="bg-img bg-desktop" alt="Fondo Minas">
                <img src="assets/portada-manos-mobile.png" class="bg-img bg-mobile" alt="Fondo Minas Móvil">
                <div class="hero-gradient"></div>
            </div>

            <div class="hero-container">
                <div class="hero-text">
                    <h1>
                        <span class="hero-line text-white">CON RAÍCES EN LA</span>
                        <span class="hero-line text-white">TIERRA Y <span class="text-blue-muted">COMPROMISO</span></span>
                        <span class="hero-line text-blue-muted">EN EL MAÑANA</span>
                    </h1>
                    <p>
                        Extraemos, refinamos y suministramos minerales no metálicos industriales con pureza controlada y entrega confiable para que tus procesos nunca se detengan.
                    </p>
                    <a href="#" class="btn-primary">VER PRODUCTOS</a>
                </div>
            </div>

            <div class="mountains-overlay">
                <img src="assets/montanas-blancas.png" alt="Montañas Blancas">
            </div>
        </section>

        <section class="distintos-section">
            <div class="distintos-container">
                <h2>
                    <span class="text-dark">LO QUE NOS HACE</span> 
                    <span class="text-light">DISTINTOS</span>
                </h2>
                
                <p class="distintos-intro">
                    En <strong>Minas de Zacatlán</strong> transformamos la piedra de origen responsable en soluciones confiables para la construcción y la arquitectura. Nuestro compromiso se refleja en cada etapa: desde la cantera hasta la entrega en tu obra.
                </p>

                <div class="distintos-grid">
                    <ul class="distintos-list">
                        <li><strong>+25 años de experiencia</strong> operando y abasteciendo a la industria.</li>
                        <li><strong>Alta pureza</strong> con especificaciones verificables por lote.</li>
                        <li><strong>Extracción responsable:</strong> prácticas y seguridad verificables.</li>
                    </ul>
                    <ul class="distintos-list">
                        <li><strong>Cobertura nacional</strong> con logística propia y socios estratégicos.</li>
                        <li><strong>Cumplimiento</strong> en tiempos, cantidades y documentación.</li>
                        <li><strong>Trazabilidad</strong> completa desde el yacimiento hasta tu línea.</li>
                    </ul>
                </div>

                <a href="#" class="btn-primary btn-centered">CONOCE NUESTRO PROCESO</a>
            </div>
        </section>

        <?php include './components/products.php'; ?>

        <?php include './components/industrias.php'; ?>

        <section class="diagonal-section">
            
            <div class="diag-row">
                <div class="diag-text">
                    <h2>
                        <span class="light-blue">COMPROMISO</span><br>
                        <span class="dark-blue">AMBIENTAL, SOCIAL<br>Y LEGAL</span>
                    </h2>
                    <p>
                        Extraemos con criterios de mínimo impacto, seguridad para nuestro equipo y estricto apego regulatorio. Trabajamos con programas de restauración, relación comunitaria y cumplimiento documental.
                    </p>
                </div>
                <div class="diag-image img-right">
                    <img src="assets/bg-cantera.png" alt="Compromiso Ambiental">
                </div>
            </div>

            <div class="diag-row">
                <div class="diag-image img-left">
                    <img src="assets/bg-laboratorio.png" alt="Laboratorio">
                </div>

                <div class="diag-text text-right-box">
                    <h2>
                        <span class="light-blue">LABORATORIO</span><br>
                        <span class="dark-blue">QUE RESPALDA<br>TU PROCESO</span>
                    </h2>
                    <p>
                        Operamos con control estadístico de proceso, análisis de pureza y trazabilidad por lote integrada en SAP. Aseguramos consistencia en granulometría, humedad, LOI y parámetros clave para tu formulación.
                    </p>
                </div>
            </div>

        </section>

        <?php include './components/contact.php'; ?>

        <?php include './components/map.php'; ?>
    </main>

    <?php include './components/footer.php'; ?>

</body>
</html>