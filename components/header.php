<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<header class="main-header">
    <div class="header-container">
        
        <div class="logo">
            <img src="assets/logo-minas.png" alt="Minas de Zacatlán">
        </div>

        <button class="mobile-menu-btn" id="openMenuBtn" aria-label="Abrir menú">
            <i class="fa-solid fa-bars" style="font-size: 24px;"></i>
        </button>

        <div class="menu-overlay" id="menuOverlay"></div>

        <nav class="nav-menu" id="navMenu">
            <button class="close-menu-btn" id="closeMenuBtn" aria-label="Cerrar menú">
                <i class="fa-solid fa-xmark" style="font-size: 28px;"></i>
            </button>

            <ul>
                <li><a href="index.php" <?php if ($current_page == 'index.php') echo 'class="active"'; ?>>Inicio</a></li>
                <li><a href="nosotros.php" <?php if ($current_page == 'nosotros.php') echo 'class="active"'; ?>>Nosotros</a></li>
                <li><a href="industrias.php" <?php if ($current_page == 'industrias.php') echo 'class="active"'; ?>>Industrias</a></li>
                <li><a href="productos.php" <?php if ($current_page == 'productos.php') echo 'class="active"'; ?>>Productos</a></li>
                <li><a href="responsabilidad.php" <?php if ($current_page == 'responsabilidad.php') echo 'class="active"'; ?>>Responsabilidad</a></li>
                <li><a href="blog.php" <?php if ($current_page == 'blog.php' || $current_page == 'articulo.php') echo 'class="active"'; ?>>Blog</a></li>
                <li><a href="contacto.php" <?php if ($current_page == 'contacto.php') echo 'class="active"'; ?>>Contacto</a></li>
            </ul>

            <div class="social-icons">
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openBtn = document.getElementById('openMenuBtn');
        const closeBtn = document.getElementById('closeMenuBtn');
        const navMenu = document.getElementById('navMenu');
        const overlay = document.getElementById('menuOverlay');
        const body = document.body;

        const openMenu = () => {
            navMenu.classList.add('menu-open');
            overlay.classList.add('active');
            body.classList.add('no-scroll');
        };

        const closeMenu = () => {
            navMenu.classList.remove('menu-open');
            overlay.classList.remove('active');
            body.classList.remove('no-scroll');
        };

        openBtn.addEventListener('click', openMenu);
        closeBtn.addEventListener('click', closeMenu);
        overlay.addEventListener('click', closeMenu);

        const navLinks = navMenu.querySelectorAll('ul li a');
        navLinks.forEach(link => {
            link.addEventListener('click', closeMenu);
        });
    });
</script>