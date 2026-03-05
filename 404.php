<?php
http_response_code(404);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => '404 - Página no encontrada | ODERMAN GROUP SAS',
    'description' => 'La página que buscas no existe. Regresa al inicio de ODERMAN GROUP SAS.',
    'keywords' => '404, página no encontrada, error, ODERMAN GROUP SAS',
    'url' => url('404'),
    'robots' => 'noindex, nofollow'
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Security Headers -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self'; frame-src https://www.youtube.com;">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
  <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
  
  <!-- SEO Meta Tags -->
  <?php echo generateSEOTags($pageData); ?>
  <meta name="robots" content="noindex, nofollow">
  <meta name="author" content="ODERMAN GROUP SAS">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo asset('img/logooderman.png'); ?>">
</head>
<body>
  <header class="header">
    <div class="header__contenedor">
      <a href="<?php echo url(); ?>" class="header__logo" aria-label="ODERMAN GROUP SAS - Inicio">
        <img src="<?php echo asset('img/logooderman.png'); ?>" alt="ODERMAN GROUP SAS Logo" class="header__logo-img">
        <div class="header__logo-text">
          <span class="header__logo-texto">ODERMAN</span>
          <span class="header__logo-sas">GROUP SAS</span>
        </div>
      </a>
      <div class="header__nav-wrapper" aria-hidden="true">
        <nav class="header__nav" aria-label="Navegación principal">
          <a href="<?php echo url(); ?>" id="nav-home">Inicio</a>
          <a href="<?php echo url('nosotros'); ?>" id="nav-about">Nosotros</a>
          <a href="<?php echo url(); ?>#servicios" id="nav-services">Servicios</a>
          <a href="<?php echo url('productos'); ?>" id="nav-products">Productos</a>
          <a href="<?php echo url(); ?>#contacto" id="nav-contact">Contacto</a>
        </nav>
        <div class="language-selector">
          <select id="language-selector" aria-label="Seleccionar idioma">
            <option value="es">ES</option>
            <option value="en">EN</option>
          </select>
        </div>
      </div>
      <button class="header__menu-btn" aria-label="Abrir menú" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>

  <main>
    <section class="hero hero--404" style="min-height: 70vh; display: flex; align-items: center; justify-content: center;">
      <div class="hero__contenedor" style="text-align: center; max-width: 600px;">
        <h1 style="font-size: 8rem; font-weight: 700; color: var(--color-primary); margin-bottom: var(--spacing-md); line-height: 1;">404</h1>
        <h2 id="error-title" style="font-size: 2rem; margin-bottom: var(--spacing-md); color: var(--color-text-primary);">Página no encontrada</h2>
        <p id="error-text" style="font-size: 1.125rem; color: var(--color-text-secondary); margin-bottom: var(--spacing-xl); line-height: 1.6;">Lo sentimos, la página que buscas no existe o ha sido movida.</p>
        <div style="display: flex; gap: var(--spacing-md); justify-content: center; flex-wrap: wrap;">
          <a href="<?php echo url(); ?>" class="btn btn--primary" id="error-home">Volver al inicio</a>
          <a href="<?php echo url(); ?>#contacto" class="btn btn--secondary" id="error-contact">Contacto</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="footer__contenedor">
      <div class="footer__grid">
        <div class="footer__bloque">
          <h3 class="footer__titulo" id="footer-company">Empresa</h3>
          <ul class="footer__lista">
            <li><a href="<?php echo url(); ?>" id="footer-link-home">Inicio</a></li>
            <li><a href="<?php echo url('nosotros'); ?>" id="footer-link-about">Nosotros</a></li>
            <li><a href="<?php echo url(); ?>#servicios" id="footer-link-services">Servicios</a></li>
            <li><a href="<?php echo url('productos'); ?>" id="footer-link-products">Productos</a></li>
            <li><a href="<?php echo url('nosotros'); ?>#mision" id="footer-link-mission">Misión</a></li>
            <li><a href="<?php echo url('nosotros'); ?>#vision" id="footer-link-vision">Visión</a></li>
            <li><a href="<?php echo url('nosotros'); ?>#valores" id="footer-link-values">Valores</a></li>
            <li><a href="<?php echo url(); ?>#contacto" id="footer-link-contact">Contacto</a></li>
            <li><a href="https://oderman-group.com/" target="_blank" rel="noopener noreferrer" id="footer-link-corporate">Sitio corporativo <span class="footer__externo" aria-label="Abre en nueva pestaña">↗</span></a></li>
          </ul>
        </div>
        <div class="footer__bloque">
          <h3 class="footer__titulo" id="footer-sintia">Ecosistema SINTIA</h3>
          <ul class="footer__lista">
            <li><a href="<?php echo url('sintia'); ?>" id="footer-link-sintia-ecosystem">Ecosistema SINTIA</a></li>
            <li><a href="<?php echo url('sintia/tarifas-comunicativo'); ?>" id="footer-link-rates">Tarifas módulo comunicativo</a></li>
            <li><a href="<?php echo url('sintia/ava'); ?>" id="footer-link-ava">AVA - Ambientes Virtuales</a></li>
            <li><a href="<?php echo url('sintia/demo'); ?>" id="footer-link-demo">Demo para colegios</a></li>
            <li><a href="https://plataformasintia.com" target="_blank" rel="noopener noreferrer" id="footer-link-platform">Plataforma SINTIA <span class="footer__externo" aria-label="Abre en nueva pestaña">↗</span></a></li>
          </ul>
        </div>
        <div class="footer__bloque">
          <h3 class="footer__titulo" id="footer-contact">Contacto</h3>
          <ul class="footer__lista footer__lista--contacto">
            <li><a href="mailto:info@oderman-group.com">info@oderman-group.com</a></li>
            <li><a href="tel:+573006075800">+57 300 607 5800</a></li>
            <li><a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer" class="footer__wa">WhatsApp</a></li>
          </ul>
        </div>
        <div class="footer__bloque footer__bloque--redes">
          <h3 class="footer__titulo" id="footer-follow">Síguenos</h3>
          <div class="footer__redes">
            <a href="https://www.facebook.com/plataformasintia/" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="Facebook SINTIA">Facebook</a>
            <a href="https://x.com/platsintia" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="X SINTIA">X</a>
            <a href="https://www.instagram.com/platsintia/" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="Instagram SINTIA">Instagram</a>
            <a href="https://www.youtube.com/c/Plataformasintia/videos" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="YouTube SINTIA">YouTube</a>
            <a href="https://co.linkedin.com/company/oderman-group-sas" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="LinkedIn Oderman Group">LinkedIn</a>
          </div>
        </div>
      </div>
      <div class="footer__baja">
        <p class="footer__firma">© <span id="anio"></span> ODERMAN GROUP SAS. <span id="footer-rights">Todos los derechos reservados.</span></p>
        <p class="footer__dominio">oderman.com.co</p>
      </div>
      <div class="footer__legal">
        <a href="<?php echo url('privacidad'); ?>" id="footer-privacy">Política de Privacidad</a>
        <span>|</span>
        <a href="<?php echo url('terminos'); ?>" id="footer-terms">Términos y Condiciones</a>
        <span>|</span>
        <a href="<?php echo url('cookies'); ?>" id="footer-cookies">Política de Cookies</a>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="<?php echo asset('js/translations.js'); ?>"></script>
  <script src="<?php echo asset('js/language.js'); ?>"></script>
  <script src="<?php echo asset('js/cookies.js'); ?>"></script>
  <script>
    (function() {
      document.getElementById('anio').textContent = new Date().getFullYear();
      
      var btn = document.querySelector('.header__menu-btn');
      var navWrapper = document.querySelector('.header__nav-wrapper');
      if (btn && navWrapper) {
        btn.addEventListener('click', function() {
          var isOpen = navWrapper.getAttribute('aria-hidden') === 'false';
          navWrapper.setAttribute('aria-hidden', !isOpen);
          btn.setAttribute('aria-expanded', !isOpen);
          btn.setAttribute('aria-label', !isOpen ? 'Cerrar menú' : 'Abrir menú');
        });
      }
    })();
  </script>
</body>
</html>
