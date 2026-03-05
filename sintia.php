<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => 'Ecosistema SINTIA | ODERMAN GROUP SAS',
    'description' => 'SINTIA es nuestro ecosistema educativo: una plataforma integral que conecta instituciones, docentes, estudiantes y acudientes en un solo entorno.',
    'keywords' => 'SINTIA, ecosistema educativo, plataforma educativa, gestión académica, transformación digital, ODERMAN GROUP SAS',
    'url' => url('sintia'),
    'alternate' => [
        'es' => url('sintia'),
        'en' => url('sintia') . '?lang=en'
    ]
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
  <meta name="robots" content="index, follow">
  <meta name="author" content="ODERMAN GROUP SAS">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo asset('img/logooderman.png'); ?>">
  
  <!-- Schema.org Structured Data -->
  <?php echo generateSchemaOrg('WebPage', [
      'name' => 'Ecosistema SINTIA',
      'description' => $pageData['description']
  ]); ?>
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
    <section class="hero">
      <div class="hero__contenedor">
        <p class="hero__etiqueta" id="hero-tagline">ODERMAN GROUP SAS</p>
        <h1 class="hero__titulo" id="sintia-title">Ecosistema SINTIA</h1>
        <p class="hero__subtitulo" id="sintia-intro">SINTIA es nuestro ecosistema educativo: una plataforma integral que conecta instituciones, docentes, estudiantes y acudientes en un solo entorno. Gestión académica, comunicados, calificaciones, pagos y seguimiento en tiempo real, diseñados para simplificar la operación y potenciar el aprendizaje.</p>
      </div>
    </section>

    <section class="seccion">
      <div class="container-content">
        <div class="sintia-grid">
          <div class="sintia-grid__content">
            <p class="seccion__intro" id="sintia-desc">Si tu institución busca una solución robusta y fácil de usar para la transformación digital, conoce la plataforma.</p>
            <div style="display: flex; gap: var(--spacing-md); flex-wrap: wrap; margin-top: var(--spacing-lg);">
              <a href="https://plataformasintia.com" target="_blank" rel="noopener noreferrer" class="btn btn--primary" id="sintia-cta">Ir a Plataforma SINTIA</a>
            </div>
          </div>
          <div class="sintia-grid__image">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=500&fit=crop" alt="Plataforma SINTIA" class="seccion__imagen" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <!-- Módulos de SINTIA -->
    <section class="seccion seccion--clara">
      <div class="container-content">
        <h2 class="seccion__titulo">Módulos de SINTIA</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--spacing-lg); margin-top: var(--spacing-xl);">
          <div style="padding: var(--spacing-lg); background: var(--color-bg-light); border-radius: 12px; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--spacing-sm); color: var(--color-primary);">Módulo Comunicativo</h3>
            <p style="color: var(--color-text-secondary); margin-bottom: var(--spacing-md); line-height: 1.6;">Sistema de comunicación entre instituciones, docentes, estudiantes y acudientes. Envía mensajes, notificaciones y comunicados importantes.</p>
            <a href="<?php echo url('sintia/tarifas-comunicativo'); ?>" class="btn btn--text" style="padding: 0;">Ver tarifas →</a>
          </div>
          <div style="padding: var(--spacing-lg); background: var(--color-bg-light); border-radius: 12px; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--spacing-sm); color: var(--color-primary);">AVA - Ambientes Virtuales</h3>
            <p style="color: var(--color-text-secondary); margin-bottom: var(--spacing-md); line-height: 1.6;">Plataforma de aprendizaje virtual para complementar la educación presencial. Gestión de cursos, materiales y evaluaciones en línea.</p>
            <a href="<?php echo url('sintia/ava'); ?>" class="btn btn--text" style="padding: 0;">Conocer más →</a>
          </div>
          <div style="padding: var(--spacing-lg); background: var(--color-bg-light); border-radius: 12px; box-shadow: var(--shadow-md); border: 1px solid var(--color-border);">
            <h3 style="font-size: 1.5rem; margin-bottom: var(--spacing-sm); color: var(--color-primary);">Demo para Colegios</h3>
            <p style="color: var(--color-text-secondary); margin-bottom: var(--spacing-md); line-height: 1.6;">Solicita una demostración personalizada de la plataforma para tu institución. Conoce todas las funcionalidades de SINTIA.</p>
            <a href="<?php echo url('sintia/demo'); ?>" class="btn btn--text" style="padding: 0;">Solicitar demo →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Características principales -->
    <section class="seccion">
      <div class="container-content">
        <h2 class="seccion__titulo">Características principales</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--spacing-lg); margin-top: var(--spacing-lg);">
          <div style="padding: var(--spacing-md); background: var(--color-bg-section); border-radius: 8px; box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.25rem; margin-bottom: var(--spacing-sm); color: var(--color-primary);">Gestión Académica</h3>
            <p style="color: var(--color-text-secondary);">Administra calificaciones, asistencias, horarios y reportes académicos de forma centralizada.</p>
          </div>
          <div style="padding: var(--spacing-md); background: var(--color-bg-section); border-radius: 8px; box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.25rem; margin-bottom: var(--spacing-sm); color: var(--color-primary);">Comunicación</h3>
            <p style="color: var(--color-text-secondary);">Mantén comunicación fluida entre todos los actores del proceso educativo.</p>
          </div>
          <div style="padding: var(--spacing-md); background: var(--color-bg-section); border-radius: 8px; box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.25rem; margin-bottom: var(--spacing-sm); color: var(--color-primary);">Pagos en Línea</h3>
            <p style="color: var(--color-text-secondary);">Gestiona pagos de matrículas, pensiones y otros conceptos de forma segura.</p>
          </div>
          <div style="padding: var(--spacing-md); background: var(--color-bg-section); border-radius: 8px; box-shadow: var(--shadow-sm);">
            <h3 style="font-size: 1.25rem; margin-bottom: var(--spacing-sm); color: var(--color-primary);">Seguimiento en Tiempo Real</h3>
            <p style="color: var(--color-text-secondary);">Accede a información actualizada sobre el progreso académico de los estudiantes.</p>
          </div>
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

  <!-- Cookie Consent Banner -->
  <div id="cookie-consent" class="cookie-consent" role="dialog" aria-label="Consentimiento de cookies" aria-live="polite">
    <div class="cookie-consent__content">
      <div class="cookie-consent__text">
        <h3 class="cookie-consent__title" id="cookie-title">Uso de Cookies</h3>
        <p id="cookie-text">Utilizamos cookies para mejorar tu experiencia, analizar el tráfico del sitio y personalizar el contenido. Al hacer clic en "Aceptar", consientes el uso de cookies según nuestra <a href="<?php echo url('privacidad'); ?>">Política de Privacidad</a>.</p>
      </div>
      <div class="cookie-consent__actions">
        <button id="cookie-accept" class="btn btn--primary" id="cookie-accept-btn">Aceptar todas</button>
        <button id="cookie-settings" class="btn btn--secondary" id="cookie-settings-btn">Configurar</button>
        <button id="cookie-reject" class="btn btn--text" id="cookie-reject-btn">Rechazar</button>
      </div>
    </div>
  </div>

  <!-- Panel de Configuración de Cookies -->
  <div id="cookie-settings-panel" class="cookie-settings" aria-hidden="true">
    <div class="cookie-settings__content">
      <h3 id="cookie-settings-title">Configuración de Cookies</h3>
      <div class="cookie-settings__group">
        <label>
          <input type="checkbox" id="cookie-necessary" checked disabled>
          <div>
            <span id="cookie-necessary-label">Cookies Necesarias</span>
            <small id="cookie-necessary-desc">Estas cookies son esenciales para el funcionamiento del sitio.</small>
          </div>
        </label>
      </div>
      <div class="cookie-settings__group">
        <label>
          <input type="checkbox" id="cookie-analytics">
          <div>
            <span id="cookie-analytics-label">Cookies Analíticas</span>
            <small id="cookie-analytics-desc">Nos ayudan a entender cómo los visitantes interactúan con el sitio.</small>
          </div>
        </label>
      </div>
      <div class="cookie-settings__group">
        <label>
          <input type="checkbox" id="cookie-marketing">
          <div>
            <span id="cookie-marketing-label">Cookies de Marketing</span>
            <small id="cookie-marketing-desc">Se utilizan para mostrar anuncios relevantes y medir la efectividad de las campañas.</small>
          </div>
        </label>
      </div>
      <div class="cookie-settings__actions">
        <button id="cookie-save" class="btn btn--primary" id="cookie-save-btn">Guardar Preferencias</button>
      </div>
    </div>
  </div>

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
