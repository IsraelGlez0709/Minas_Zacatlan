<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minas de Zacatlán - Industrias</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/industrias.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link rel="stylesheet" href="css/industrias_page.css">
</head>
<body>

    <?php include './components/header.php'; ?>

    <main class="main-content">
        
        <section class="hero-industrias">
            <img src="assets/bg-industrias-hero.png" class="hero-bg-img" alt="Industrias Minas de Zacatlán">
            <div class="hero-gradient-overlay"></div>

            <div class="hero-title-box">
                <h1>INDUSTRIAS</h1>
            </div>
        </section>

        <section class="servicios-section">
            <div class="servicios-container">
                <div class="servicios-header">
                    <h2>
                        <span class="dark-blue">NUESTROS</span> 
                        <span class="light-blue">SERVICIOS</span>
                    </h2>
                    <p class="subtitle">Suministro integral "Del yacimiento a tu silo"</p>
                </div>

                <ul class="servicios-grid-unified">
                    <li><strong>Extracción responsable:</strong> planeación de banco y mínima huella ambiental.</li>
                    <li><strong>Refinación y clasificación:</strong> control de granulometría, humedad y LOI.</li>
                    <li><strong>Laboratorio & QA:</strong> análisis por lote; trazabilidad SAP 100%.</li>
                    <li><strong>Blends a la medida:</strong> PSD, XRF y performance objetivo.</li>

                    <li><strong>Logística:</strong> presurizada a silo, granel, por gravedad, súper saco y/o 25K.</li>
                    <li><strong>Cobertura:</strong> nacional e internacional, JIT, terrestre, marítima o ferroviaria.</li>
                    <li><strong>Asesoría técnica:</strong> ajuste de fórmulas, pruebas piloto y escalamiento.</li>
                    <li><strong>Documentación & compliance:</strong> EPA, hojas técnicas, TDS, SDS, higiene e inocuidad, SAP.</li>
                </ul>

                <a href="#" class="btn-solid-rect">SOLICITAR UNA COTIZACIÓN</a>
            </div>
        </section>

        <?php include './components/industrias.php'; ?>

        <section class="casos-exito-section">
            <div class="casos-header">
                <h2>
                    <span class="dark-blue">CASOS DE</span> 
                    <span class="light-blue">ÉXITO</span>
                </h2>
                <p>Historias reales donde la calidad y la logística presurizada mejoraron procesos, costos y tiempos de entrega.</p>
            </div>

            <div class="slider-wrapper">
                <div class="slider-track" id="casos-track">
                    
                    <?php for ($i = 0; $i < 4; $i++): ?>
                    <div class="slide">
                        <div class="pildora-caso-box">
                            
                            <img src="assets/bg-pildora.png" class="pildora-caso-bg" alt="Fondo Píldora">
                            
                            <div class="pildora-caso-content">
                                <div class="pildora-caso-img">
                                    <img src="assets/img-caso-placeholder.png" alt="Caso de Éxito">
                                </div>
                                
                                <div class="pildora-caso-text">
                                    <h3>En espera de casos de éxito</h3>
                                    <p><strong>Título del caso / Industria</strong></p>
                                    <p><strong>Reto:</strong> (variabilidad, impurezas, rendimiento)</p>
                                    <p><strong>Solución:</strong> (blend específico, control de malla, logística presurizada)</p>
                                    <p><strong>Resultado:</strong> (estabilidad de proceso, reducción de scrap, mejora en tiempos)</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php endfor; ?>

                </div>
            </div>

            <div class="slider-dots">
                <button class="dot active" onclick="moveSlideCasos(0)"></button>
                <button class="dot" onclick="moveSlideCasos(1)"></button>
                <button class="dot" onclick="moveSlideCasos(2)"></button>
                <button class="dot" onclick="moveSlideCasos(3)"></button>
            </div>
        </section>

        <?php include './components/contact.php'; ?>

        <?php include './components/map.php'; ?>

        <script>
            function moveSlideCasos(index) {
                const track = document.getElementById('casos-track');
                const dots = document.querySelectorAll('.casos-exito-section .dot');
                
                track.style.transform = `translateX(-${index * 100}%)`;
                
                dots.forEach(dot => dot.classList.remove('active'));
                dots[index].classList.add('active');
            }
        </script>

    </main>

    <?php include './components/footer.php'; ?>

</body>
</html>