<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => 'Nosotros | ODERMAN GROUP SAS',
    'description' => 'Conoce la misión, visión y valores de ODERMAN GROUP SAS. Una empresa colombiana dedicada al desarrollo de software a la medida.',
    'keywords' => 'nosotros, misión, visión, valores, ODERMAN GROUP SAS, empresa colombiana, desarrollo de software',
    'url' => url('nosotros'),
    'alternate' => [
        'es' => url('nosotros'),
        'en' => url('nosotros') . '?lang=en'
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
      'name' => 'Nosotros',
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
        <h1 class="hero__titulo" id="about-title">Sobre nosotros</h1>
        <p class="hero__subtitulo" id="about-intro">Somos una empresa colombiana dedicada al desarrollo de software a la medida. Entre nuestros productos se encuentra <strong>SINTIA</strong>, nuestro ecosistema educativo que acompaña a instituciones y familias en la gestión académica y la transformación digital.</p>
      </div>
    </section>

    <section id="mision" class="seccion">
      <div class="container-content">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-xl); align-items: center;">
          <div>
            <h2 class="seccion__titulo" id="mission-title">Misión</h2>
            <div class="bloque-texto">
              <p id="mission-text1">En Oderman, nos dedicamos a diseñar y entregar soluciones de software a la medida que potencian el crecimiento y la eficiencia de organizaciones de diversos sectores, incluyendo el educativo. Nuestro compromiso es desarrollar tecnologías intuitivas y robustas, apoyadas por un servicio de atención al cliente excepcional y personalizado.</p>
              <p id="mission-text2">Nos esforzamos por superar las expectativas, asegurando que cada interacción y producto refleje la <strong>calidad</strong>, la <strong>adaptabilidad</strong> y la <strong>innovación</strong> que nuestros clientes merecen.</p>
            </div>
          </div>
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Nuestra Misión" class="seccion__imagen" style="width: 100%; border-radius: 12px; box-shadow: var(--shadow-lg);" loading="lazy">
        </div>
      </div>
    </section>

    <section id="vision" class="seccion seccion--clara">
      <div class="container-content">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-xl); align-items: center;">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" alt="Nuestra Visión" class="seccion__imagen" style="width: 100%; border-radius: 12px; box-shadow: var(--shadow-lg); order: -1;" loading="lazy">
          <div>
            <h2 class="seccion__titulo" id="vision-title">Visión</h2>
            <div class="bloque-texto">
              <p id="vision-text1">Ser reconocidos como la empresa líder en el desarrollo de software a la medida en América Latina, EEUU y Canadá, distinguidos por nuestra creatividad, calidad y confiabilidad. Aspiramos a que cada producto, desde nuestro ecosistema educativo <strong>SINTIA</strong> hasta nuestras soluciones personalizadas, sea sinónimo de excelencia y un catalizador para la transformación digital de nuestros clientes.</p>
              <p id="vision-text2">Nuestra visión es ser el socio tecnológico predilecto, creando soluciones que no solo satisfacen las necesidades actuales sino que también anticipan los desafíos del futuro.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="valores" class="seccion">
      <div class="container-content">
        <h2 class="seccion__titulo" id="values-title">Valores fundamentales</h2>
        <ul class="valores-lista valores-lista--core">
          <li>
            <span class="valores-lista__nombre" id="value-innovation-name">Innovación</span>
            <span class="valores-lista__desc" id="value-innovation-desc">Fomentamos la búsqueda constante de nuevas ideas y enfoques que rompan moldes tradicionales y entreguen soluciones de vanguardia.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-quality-name">Calidad</span>
            <span class="valores-lista__desc" id="value-quality-desc">Nos obsesiona la excelencia en cada línea de código y en cada interacción con el cliente, garantizando productos y servicios superiores.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-honesty-name">Honestidad</span>
            <span class="valores-lista__desc" id="value-honesty-desc">Practicamos la transparencia y la integridad en cada aspecto de nuestro quehacer, construyendo relaciones basadas en la confianza y el respeto mutuo.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-curiosity-name">Curiosidad</span>
            <span class="valores-lista__desc" id="value-curiosity-desc">Promovemos una cultura de aprendizaje continuo y descubrimiento, manteniendo la mente abierta a las posibilidades de la tecnología.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-initiative-name">Iniciativa</span>
            <span class="valores-lista__desc" id="value-initiative-desc">Valoramos y apoyamos a quienes toman la iniciativa, ven una oportunidad de mejora y actúan en consecuencia.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-commitment-name">Compromiso</span>
            <span class="valores-lista__desc" id="value-commitment-desc">Nos dedicamos a cumplir nuestras promesas, entregando resultados tangibles y consistentes que reflejan nuestro compromiso con el éxito del cliente.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-personalization-name">Personalización</span>
            <span class="valores-lista__desc" id="value-personalization-desc">Creemos en la singularidad de cada cliente y nos esforzamos por ofrecer un servicio que reconozca y adapte nuestras soluciones a sus necesidades específicas.</span>
          </li>
        </ul>

        <h3 class="seccion__subtitulo" id="values-complementary">Valores complementarios</h3>
        <ul class="valores-lista valores-lista--complementarios">
          <li data-complementary-value="0"><strong>Somos propositivos:</strong> Proponemos dos soluciones por cada desafío que se nos presenta.</li>
          <li data-complementary-value="1"><strong>Entendemos el propósito:</strong> Entendemos el porqué de cada cosa que hacemos.</li>
          <li data-complementary-value="2"><strong>Tenemos criterio:</strong> Tomamos la iniciativa con criterio y sentido.</li>
          <li data-complementary-value="3"><strong>Somos comprometidos:</strong> Aprovechamos el tiempo en pro de los objetivos, la misión y visión de la empresa.</li>
          <li data-complementary-value="4"><strong>Somos valientes:</strong> Actuamos con valentía y prudencia ante la incertidumbre.</li>
          <li data-complementary-value="5"><strong>Usamos el sentido común:</strong> Nos apegamos al protocolo, pero también usamos el sentido común y la espontaneidad.</li>
        </ul>
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
