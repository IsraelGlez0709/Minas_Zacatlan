<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minas de Zacatlán - Contacto</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/equipo.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/map.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link rel="stylesheet" href="css/contact_page.css">
</head>
<body>

    <?php include './components/header.php'; ?>

    <main class="main-content">
        
        <section class="hero-contacto">
            <img src="assets/bg-contacto-hero.png" class="hero-bg-img" alt="Contacto Minas de Zacatlán">
            <div class="hero-gradient-overlay"></div>

            <div class="hero-title-box">
                <h1>CONTACTO</h1>
            </div>
        </section>

        <section class="estadisticas-section">
            <div class="stats-container">
                
                <div class="stat-item">
                    <div class="circular-progress" data-percentage="50"> <svg class="progress-ring" width="200" height="200">
                            <circle class="progress-ring-track" cx="100" cy="100" r="90" stroke-width="8" />
                            <circle class="progress-ring-circle" cx="100" cy="100" r="90" stroke-width="8" />
                        </svg>
                        <div class="stat-number">+200</div>
                    </div>
                    <div class="stat-label">CLIENTES<br>SATISFECHOS</div>
                </div>

                <div class="stat-item">
                    <div class="circular-progress" data-percentage="25">
                        <svg class="progress-ring" width="200" height="200">
                            <circle class="progress-ring-track" cx="100" cy="100" r="90" stroke-width="8" />
                            <circle class="progress-ring-circle" cx="100" cy="100" r="90" stroke-width="8" />
                        </svg>
                        <div class="stat-number">+20</div>
                    </div>
                    <div class="stat-label">PRESENCIA EN ESTADOS<br>DE LA REPÚBLICA</div>
                </div>

                <div class="stat-item">
                    <div class="circular-progress" data-percentage="75">
                        <svg class="progress-ring" width="200" height="200">
                            <circle class="progress-ring-track" cx="100" cy="100" r="90" stroke-width="8" />
                            <circle class="progress-ring-circle" cx="100" cy="100" r="90" stroke-width="8" />
                        </svg>
                        <div class="stat-number">+1M</div>
                    </div>
                    <div class="stat-label">PEDIDOS<br>ENTREGADOS</div>
                </div>

                <div class="stat-item">
                    <div class="circular-progress" data-percentage="50">
                        <svg class="progress-ring" width="200" height="200">
                            <circle class="progress-ring-track" cx="100" cy="100" r="90" stroke-width="8" />
                            <circle class="progress-ring-circle" cx="100" cy="100" r="90" stroke-width="8" />
                        </svg>
                        <div class="stat-number">+200,000</div>
                    </div>
                    <div class="stat-label">ÁRBOLES<br>SEMBRADOS</div>
                </div>

            </div>
        </section>

        <?php include './components/equipo.php'; ?>

        <?php include './components/contact.php'; ?>

        <?php include './components/map.php'; ?>

    </main>

    <?php include './components/footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const circles = document.querySelectorAll('.progress-ring-circle');
            const progressContainers = document.querySelectorAll('.circular-progress');

            const circumference = 565.48; 

            circles.forEach((circle, index) => {
                circle.style.strokeDasharray = `${circumference} ${circumference}`;
                circle.style.strokeDashoffset = circumference;

                setTimeout(() => {
                    const percentage = progressContainers[index].getAttribute('data-percentage');
                    const offset = circumference - (percentage / 100) * circumference;
                    circle.style.strokeDashoffset = offset;
                }, 100 + (index * 150));
            });
        });
    </script>
</body>
</html>