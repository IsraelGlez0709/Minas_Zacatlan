<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minas de Zacatlán - Blog</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>

    <?php include './components/header.php'; ?>

    <main class="main-content">
        
        <section class="hero-blog">
            <div class="hero-title-box">
                <h1>BLOG</h1>
            </div>
        </section>

        <section class="blog-destacado">
            <div class="blog-container">
                
                <h2>LO MÁS DESTACADO</h2>
                
                <div class="blog-grid">
                    
                    <a href="articulo.php" class="blog-link">
                        <article class="blog-card">
                            <div class="blog-img">
                                <img src="assets/img-placeholder.png" alt="Placeholder">
                            </div>
                            <div class="blog-info">
                                <h3>Lorem ipsum dolor</h3>
                                <p class="categoria">Categoría</p>
                                <p class="autor">Autor</p>
                            </div>
                        </article>
                    </a>

                    <a href="articulo.php" class="blog-link">
                        <article class="blog-card">
                            <div class="blog-img">
                                <img src="assets/img-placeholder.png" alt="Placeholder">
                            </div>
                            <div class="blog-info">
                                <h3>Lorem ipsum dolor</h3>
                                <p class="categoria">Categoría</p>
                                <p class="autor">Autor</p>
                            </div>
                        </article>
                    </a>

                    <a href="articulo.php" class="blog-link">
                        <article class="blog-card">
                            <div class="blog-img">
                                <img src="assets/img-placeholder.png" alt="Placeholder">
                            </div>
                            <div class="blog-info">
                                <h3>Lorem ipsum dolor</h3>
                                <p class="categoria">Categoría</p>
                                <p class="autor">Autor</p>
                            </div>
                        </article>
                    </a>

                </div>

            </div>
        </section>

        <section class="blog-todos">
            <div class="blog-container">
                
                <div class="blog-filtros">
                    <label for="categoria">Filtros</label>
                    <div class="select-wrapper">
                        <select name="categoria" id="categoria">
                            <option value="">Categoría</option>
                        </select>
                    </div>
                </div>

                <div class="blog-grid">
                    
                    <?php for ($i = 0; $i < 6; $i++): ?>
                    <a href="articulo.php" class="blog-link">
                        <article class="blog-card">
                            <div class="blog-img">
                                <img src="assets/img-placeholder.png" alt="Placeholder">
                            </div>
                            <div class="blog-info">
                                <h3>Lorem ipsum dolor</h3>
                                <p class="categoria">Categoría</p>
                                <p class="autor">Autor</p>
                            </div>
                        </article>
                    </a>
                    <?php endfor; ?>

                </div>
            </div>
        </section>

    </main>

    <?php include './components/footer.php'; ?>

</body>
</html>