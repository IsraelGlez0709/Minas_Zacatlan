<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minas de Zacatlán - Artículo</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link rel="stylesheet" href="css/articulo.css">
</head>
<body>

    <?php include './components/header.php'; ?>

    <main class="main-content">
        
        <section class="single-article-section">
            <div class="article-container">
                
                <h1 class="article-title">NOMBRE DEL ARTÍCULO</h1>
                
                <div class="article-img-wrapper">
                    <img src="assets/img-placeholder.png" alt="Imagen del Artículo" class="article-hero-img">
                </div>
                
                <div class="article-meta">
                    <h3 class="meta-title">Lorem ipsum dolor</h3>
                    <p class="meta-categoria">Categoría</p>
                    <p class="meta-autor">Autor</p>
                </div>
                
                <div class="article-body">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    
                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                    
                    <p>Dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="sugerencias-section">
                    <h2 class="sugerencias-title">ALGUNAS SUGERENCIAS</h2>
                    
                    <div class="sugerencias-slider-container">
                        
                        <button class="slider-btn prev-btn" onclick="moveSugerencias(-1)">
                            &#9664; </button>
                        
                        <div class="sugerencias-track-wrapper">
                            <div class="sugerencias-track" id="sugerenciasTrack">
                                
                                <?php for ($i = 0; $i < 6; $i++): ?>
                                <a href="articulo.php" class="sugerencia-card">
                                    <div class="sugerencia-img">
                                        <img src="assets/img-placeholder.png" alt="Sugerencia">
                                    </div>
                                    <div class="sugerencia-info">
                                        <h4>Lorem ipsum dolor</h4>
                                        <p>Categoría</p>
                                    </div>
                                </a>
                                <?php endfor; ?>

                            </div>
                        </div>

                        <button class="slider-btn next-btn" onclick="moveSugerencias(1)">
                            &#9654;
                        </button>

                    </div>
                </div>

                <script>
                    let currentPosition = 0;
                    
                    function moveSugerencias(direction) {
                        const track = document.getElementById('sugerenciasTrack');
                        const cardWidth = track.children[0].offsetWidth + 30; 
                        const maxPositions = track.children.length - 3;
                        
                        currentPosition += direction;
                        if (currentPosition < 0) {
                            currentPosition = 0;
                        } else if (currentPosition > maxPositions) {
                            currentPosition = maxPositions;
                        }
                        
                        track.style.transform = `translateX(-${currentPosition * cardWidth}px)`;
                    }
                </script>

            </div>
        </section>

    </main>

    <?php include './components/footer.php'; ?>

</body>
</html>