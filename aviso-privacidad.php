<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minas de Zacatlán - Legal</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link rel="stylesheet" href="css/aviso.css">
</head>
<body>

    <?php include './components/header.php'; ?>

    <main class="main-content">
        
        <section class="hero-legal" id="hero-aviso">
            <div class="hero-title-box">
                <h1>AVISO DE PRIVACIDAD</h1>
            </div>
        </section>

        <section class="hero-legal hidden-section" id="hero-faq">
            <div class="hero-title-box">
                <h1>PREGUNTAS FRECUENTES</h1>
            </div>
        </section>

        <section class="legal-layout">
            <div class="legal-container">
                
                <aside class="sidebar-menu">
                    <ul>
                        <li><button class="sidebar-link active" onclick="switchTab('aviso')" id="btn-aviso">Aviso de privacidad</button></li>
                        <li><button class="sidebar-link" onclick="switchTab('faq')" id="btn-faq">Preguntas frecuentes</button></li>
                    </ul>
                </aside>

                <div class="content-area">
                    
                    <div class="scroll-box" id="content-aviso">
                        <h2>AVISO DE PRIVACIDAD</h2>
                        <div class="divider-line"></div>
                        
                        <div class="text-content">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <p>Tulumina orem ipasse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                             <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>

                    <div class="scroll-box hidden-section" id="content-faq">
                        <h2>PREGUNTAS FRECUENTES</h2>
                        <div class="divider-line"></div>
                        
                        <div class="text-content faq-list">
                            <div class="faq-item">
                                <strong>1. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</strong>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            </div>
                            <div class="faq-item">
                                <strong>2. Sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</strong>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="faq-item">
                                <strong>3. Sectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</strong>
                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <?php include './components/footer.php'; ?>

    <script>
        function switchTab(tabId) {
            document.getElementById('hero-aviso').classList.add('hidden-section');
            document.getElementById('hero-faq').classList.add('hidden-section');
            document.getElementById('content-aviso').classList.add('hidden-section');
            document.getElementById('content-faq').classList.add('hidden-section');
            document.getElementById('btn-aviso').classList.remove('active');
            document.getElementById('btn-faq').classList.remove('active');

            if (tabId === 'aviso') {
                document.getElementById('hero-aviso').classList.remove('hidden-section');
                document.getElementById('content-aviso').classList.remove('hidden-section');
                document.getElementById('btn-aviso').classList.add('active');
            } else if (tabId === 'faq') {
                document.getElementById('hero-faq').classList.remove('hidden-section');
                document.getElementById('content-faq').classList.remove('hidden-section');
                document.getElementById('btn-faq').classList.add('active');
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            if (window.location.hash === '#faq') {
                switchTab('faq');
            } else {
                switchTab('aviso');
            }
        });
    </script>
</body>
</html>