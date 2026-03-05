<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => 'Política de Cookies | ODERMAN GROUP SAS',
    'description' => 'Política de cookies de ODERMAN GROUP SAS. Información sobre qué cookies utilizamos y cómo gestionarlas.',
    'keywords' => 'política de cookies, cookies, gestión de cookies, privacidad, ODERMAN GROUP SAS',
    'url' => url('cookies'),
    'alternate' => [
        'es' => url('cookies'),
        'en' => url('cookies') . '?lang=en'
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
      'name' => 'Política de Cookies',
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
    <section class="hero hero--legal">
      <div class="hero__contenedor">
        <h1 id="cookies-title">Política de Cookies</h1>
        <p class="hero__subtitulo" id="cookies-updated">Última actualización: <?php echo date('d/m/Y'); ?></p>
      </div>
    </section>

    <section class="contenido contenido--legal">
      <div class="contenido__contenedor">
        <div class="contenido__texto">
          <h2 id="cookies-what-title">1. ¿Qué son las Cookies?</h2>
          <p id="cookies-what-text">Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo (computadora, tablet o móvil) cuando visitas un sitio web. Las cookies permiten que el sitio web recuerde tus acciones y preferencias durante un período de tiempo, por lo que no tienes que volver a configurarlas cada vez que regresas al sitio o navegas de una página a otra.</p>

          <h2 id="cookies-types-title">2. Tipos de Cookies que Utilizamos</h2>
          <p id="cookies-types-text">Utilizamos los siguientes tipos de cookies en nuestro sitio web:</p>

          <h3 id="cookies-necessary-title">2.1. Cookies Necesarias</h3>
          <p id="cookies-necessary-text">Estas cookies son esenciales para que el sitio web funcione correctamente. Permiten funciones básicas como la navegación por la página y el acceso a áreas seguras del sitio web. El sitio web no puede funcionar adecuadamente sin estas cookies.</p>
          <ul>
            <li id="cookies-necessary-1"><strong>Cookies de sesión:</strong> Se eliminan cuando cierras el navegador.</li>
            <li id="cookies-necessary-2"><strong>Cookies de preferencias:</strong> Almacenan tus preferencias de idioma y otras configuraciones.</li>
          </ul>

          <h3 id="cookies-analytics-title">2.2. Cookies Analíticas</h3>
          <p id="cookies-analytics-text">Estas cookies nos ayudan a entender cómo los visitantes interactúan con nuestro sitio web recopilando y reportando información de forma anónima. Utilizamos esta información para mejorar el funcionamiento del sitio.</p>
          <ul>
            <li id="cookies-analytics-1"><strong>Google Analytics:</strong> Nos ayuda a analizar el tráfico del sitio y el comportamiento de los usuarios (solo si aceptas estas cookies).</li>
          </ul>

          <h3 id="cookies-marketing-title">2.3. Cookies de Marketing</h3>
          <p id="cookies-marketing-text">Estas cookies se utilizan para hacer seguimiento de los visitantes a través de diferentes sitios web. La intención es mostrar anuncios que sean relevantes y atractivos para el usuario individual y, por lo tanto, más valiosos para los editores y los anunciantes de terceros.</p>
          <ul>
            <li id="cookies-marketing-1"><strong>Cookies de seguimiento:</strong> Rastrean tu actividad en diferentes sitios web para personalizar anuncios (solo si aceptas estas cookies).</li>
          </ul>

          <h2 id="cookies-purpose-title">3. Propósito de las Cookies</h2>
          <p id="cookies-purpose-text">Utilizamos cookies para:</p>
          <ul>
            <li id="cookies-purpose-1">Garantizar el funcionamiento correcto del sitio web.</li>
            <li id="cookies-purpose-2">Recordar tus preferencias (como idioma).</li>
            <li id="cookies-purpose-3">Analizar cómo se utiliza el sitio web para mejorarlo.</li>
            <li id="cookies-purpose-4">Personalizar el contenido y los anuncios (con tu consentimiento).</li>
          </ul>

          <h2 id="cookies-manage-title">4. Cómo Gestionar las Cookies</h2>
          <p id="cookies-manage-text">Puedes gestionar tus preferencias de cookies de las siguientes maneras:</p>

          <h3 id="cookies-manage-site-title">4.1. A través de nuestro sitio web</h3>
          <p id="cookies-manage-site-text">Puedes configurar tus preferencias de cookies haciendo clic en el botón "Configurar" en el banner de cookies que aparece cuando visitas nuestro sitio por primera vez. También puedes cambiar tus preferencias en cualquier momento haciendo clic en el enlace "Política de Cookies" en el pie de página.</p>

          <h3 id="cookies-manage-browser-title">4.2. A través de tu navegador</h3>
          <p id="cookies-manage-browser-text">La mayoría de los navegadores te permiten controlar las cookies a través de sus configuraciones. Puedes configurar tu navegador para que rechace cookies o te avise cuando un sitio web intenta colocar una cookie. Sin embargo, si rechazas las cookies, es posible que algunas partes de nuestro sitio web no funcionen correctamente.</p>
          <p id="cookies-manage-browser-text2">Aquí tienes enlaces a las páginas de ayuda de los navegadores más populares:</p>
          <ul>
            <li id="cookies-manage-browser-1"><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener noreferrer">Google Chrome</a></li>
            <li id="cookies-manage-browser-2"><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear-preferencias" target="_blank" rel="noopener noreferrer">Mozilla Firefox</a></li>
            <li id="cookies-manage-browser-3"><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank" rel="noopener noreferrer">Safari</a></li>
            <li id="cookies-manage-browser-4"><a href="https://support.microsoft.com/es-es/microsoft-edge/eliminar-las-cookies-en-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener noreferrer">Microsoft Edge</a></li>
          </ul>

          <h2 id="cookies-third-title">5. Cookies de Terceros</h2>
          <p id="cookies-third-text">Algunas cookies son colocadas por servicios de terceros que aparecen en nuestras páginas. No controlamos la configuración de estas cookies, por lo que te recomendamos que consultes los sitios web de estos terceros para obtener más información sobre sus cookies y cómo gestionarlas:</p>
          <ul>
            <li id="cookies-third-1"><strong>Google Analytics:</strong> <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Política de Privacidad de Google</a></li>
            <li id="cookies-third-2"><strong>Redes Sociales:</strong> Si compartes contenido de nuestro sitio en redes sociales, estas plataformas pueden colocar cookies. Consulta las políticas de privacidad de cada plataforma.</li>
          </ul>

          <h2 id="cookies-updates-title">6. Actualizaciones de esta Política</h2>
          <p id="cookies-updates-text">Podemos actualizar esta Política de Cookies ocasionalmente para reflejar cambios en las cookies que utilizamos o por otras razones operativas, legales o regulatorias. Te recomendamos que revises esta página periódicamente para estar informado sobre nuestro uso de cookies.</p>

          <h2 id="cookies-contact-title">7. Contacto</h2>
          <p id="cookies-contact-text">Si tienes preguntas sobre nuestra Política de Cookies, puedes contactarnos:</p>
          <ul>
            <li id="cookies-contact-1"><strong>Email:</strong> <a href="mailto:info@oderman-group.com">info@oderman-group.com</a></li>
            <li id="cookies-contact-2"><strong>Teléfono:</strong> <a href="tel:+573006075800">+57 300 607 5800</a></li>
            <li id="cookies-contact-3"><strong>Empresa:</strong> ODERMAN GROUP SAS</li>
          </ul>
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
