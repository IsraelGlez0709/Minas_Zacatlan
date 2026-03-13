<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minas de Zacatlán - Responsabilidad</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link rel="stylesheet" href="css/responsabilidad.css">
</head>
<body>

    <?php include './components/header.php'; ?>

    <main class="main-content">
        
        <section class="hero-responsabilidad">
            <img src="assets/bg-responsabilidad-hero.png" class="hero-bg-img" alt="Responsabilidad Minas de Zacatlán">
            <div class="hero-gradient-overlay"></div>

            <div class="hero-title-box">
                <h1>RESPONSABILIDAD</h1>
            </div>
        </section>

        <section class="compromiso-section">
            <div class="compromiso-header">
                <h2>
                    <span class="light-blue">NUESTRO</span> 
                    <span class="dark-blue">COMPROMISO</span>
                </h2>
                <p>Extraemos con respeto por la tierra y las comunidades. Operamos con estándares ambientales, sociales y de gobernanza (ESG) para asegurar continuidad operativa, trazabilidad y valor compartido.</p>
            </div>

            <div class="slider-wrapper">
                <div class="slider-track" id="compromiso-track">
                    
                    <div class="slide">
                        <div class="compromiso-card">
                            <div class="compromiso-img">
                                <img src="assets/img-comp-ambiental.png" alt="Compromiso Ambiental">
                            </div>
                            <div class="compromiso-text">
                                <h3>
                                    <span class="dark-blue">COMPROMISO</span><br>
                                    <span class="light-blue">AMBIENTAL</span>
                                </h3>
                                <p class="objetivo"><strong>Objetivo:</strong> minimizar impacto y restaurar ecosistemas.</p>
                                <ul>
                                    <li>Plan de manejo y restauración progresiva del sitio.</li>
                                    <li>Control de emisiones (riegos, cubiertas, rutas definidas).</li>
                                    <li>Manejo y aprovechamiento responsable de residuos peligrosos como recursos.</li>
                                    <li>Reforestación con especies nativas y monitoreo post-siembra.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="compromiso-card">
                            <div class="compromiso-img">
                                <img src="assets/img-comp-social.png" alt="Compromiso Social">
                            </div>
                            <div class="compromiso-text">
                                <h3>
                                    <span class="dark-blue">COMPROMISO</span><br>
                                    <span class="light-blue">SOCIAL</span>
                                </h3>
                                <p class="objetivo"><strong>Objetivo:</strong> seguridad, bienestar y desarrollo local.</p>
                                <ul>
                                    <li>Cero tolerancia a incidentes: capacitación continua, EPP y simulacros.</li>
                                    <li>Programas de salud ocupacional y ergonomía.</li>
                                    <li>Empleo formal y preferencia a talento local.</li>
                                    <li>Compras regionales y apoyo a proveedores de la comunidad.</li>
                                    <li>Iniciativas educativas y de infraestructura en la zona.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="compromiso-card">
                            <div class="compromiso-img">
                                <img src="assets/img-comp-legal.png" alt="Compromiso Legal y Regulatorio">
                            </div>
                            <div class="compromiso-text">
                                <h3>
                                    <span class="dark-blue">COMPROMISO</span><br>
                                    <span class="light-blue">LEGAL Y REGULATORIO</span>
                                </h3>
                                <p class="objetivo"><strong>Objetivo:</strong> operar con plena conformidad normativa.</p>
                                <ul>
                                    <li>Concesiones y permisos vigentes; cumplimiento minero-ambiental y municipal.</li>
                                    <li>Trazabilidad por lote en SAP y cadena de custodia documental.</li>
                                    <li>Auditorías internas y de terceros; atención a autoridades.</li>
                                    <li>Certificación EPA aplicable a procesos/controles de emisiones y manejo de materiales.</li>
                                    <li>Código de Conducta de Proveedores y canal de integridad.</li>
                                    <li>Cumpliendo con todas las normas y regulaciones de seguridad industrial.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="slider-dots">
                <button class="dot active" onclick="moveSlideCompromiso(0)"></button>
                <button class="dot" onclick="moveSlideCompromiso(1)"></button>
                <button class="dot" onclick="moveSlideCompromiso(2)"></button>
            </div>
        </section>

        <section class="parque-solar-section">
            <div class="parque-solar-container">
                <div class="parque-solar-text">
                    <h2>
                        <span class="dark-blue">CONOCE NUESTRO</span><br>
                        <span class="light-blue">PARQUE SOLAR</span>
                    </h2>
                    <ul>
                        <li><strong>Generación anual estimada:</strong> 0.94 GWh/año.</li>
                        <li><strong>Capacidad instalada:</strong> 0.63 MWp proyectados.</li>
                        <li><strong>Ahorros energéticos:</strong> 50% en el primer año (87% eficiencia - 13% energía solar)</li>
                        <li><strong>Impacto ambiental:</strong> 415 toneladas de CO₂ evitadas anualmente.</li>
                    </ul>
                </div>
                
                <div class="parque-solar-img">
                    <img src="assets/img-parque-solar.png" alt="Parque Solar Minas de Zacatlán">
                </div>
            </div>
        </section>

        <section class="banner-valor-compartido">
            <div class="banner-container">
                <h2>
                    <span class="light-blue">VALOR COMPARTIDO</span> <span class="white">Y</span><br>
                    <span class="white">TRANSPARENCIA</span>
                </h2>
                <p>Publicamos avances de restauración, consumo de recursos y desempeño social. Si requieres evidencia específica o fichas, compártenos tu necesidad.</p>
            </div>
        </section>

        <script>
            function moveSlideCompromiso(index) {
                const track = document.getElementById('compromiso-track');
                const dots = document.querySelectorAll('.compromiso-section .dot');
                
                track.style.transform = `translateX(-${index * 100}%)`;
                
                dots.forEach(dot => dot.classList.remove('active'));
                dots[index].classList.add('active');
            }
        </script>

    </main>

    <?php include './components/footer.php'; ?>

</body>
</html>