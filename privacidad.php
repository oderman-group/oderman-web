<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => 'Política de Privacidad | ODERMAN GROUP SAS',
    'description' => 'Política de privacidad de ODERMAN GROUP SAS. Información sobre cómo recopilamos, usamos y protegemos tus datos personales.',
    'keywords' => 'política de privacidad, protección de datos, privacidad, datos personales, ODERMAN GROUP SAS',
    'url' => url('privacidad'),
    'alternate' => [
        'es' => url('privacidad'),
        'en' => url('privacidad') . '?lang=en'
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
      'name' => 'Política de Privacidad',
      'description' => $pageData['description']
  ]); ?>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="hero hero--legal">
      <div class="hero__contenedor">
        <h1 id="privacy-title">Política de Privacidad</h1>
        <p class="hero__subtitulo" id="privacy-updated">Última actualización: <?php echo date('d/m/Y'); ?></p>
      </div>
    </section>

    <section class="contenido contenido--legal">
      <div class="contenido__contenedor">
        <div class="contenido__texto">
          <h2 id="privacy-intro-title">1. Información General</h2>
          <p id="privacy-intro-text">ODERMAN GROUP SAS (en adelante, "la Empresa", "nosotros" o "nuestro") se compromete a proteger la privacidad de los usuarios de nuestro sitio web. Esta Política de Privacidad describe cómo recopilamos, usamos, almacenamos y protegemos tu información personal de acuerdo con la Ley 1581 de 2012 y el Decreto 1377 de 2013 de Colombia, así como con el Reglamento General de Protección de Datos (GDPR) cuando aplica.</p>

          <h2 id="privacy-data-title">2. Datos que Recopilamos</h2>
          <p id="privacy-data-text">Recopilamos los siguientes tipos de información:</p>
          <ul>
            <li id="privacy-data-1"><strong>Datos de identificación:</strong> Nombre, apellidos, documento de identidad.</li>
            <li id="privacy-data-2"><strong>Datos de contacto:</strong> Dirección de correo electrónico, número de teléfono, dirección postal.</li>
            <li id="privacy-data-3"><strong>Datos técnicos:</strong> Dirección IP, tipo de navegador, sistema operativo, páginas visitadas, fecha y hora de acceso.</li>
            <li id="privacy-data-4"><strong>Cookies:</strong> Utilizamos cookies para mejorar la experiencia del usuario. Para más información, consulta nuestra <a href="<?php echo url('cookies'); ?>">Política de Cookies</a>.</li>
          </ul>

          <h2 id="privacy-use-title">3. Uso de la Información</h2>
          <p id="privacy-use-text">Utilizamos tu información personal para:</p>
          <ul>
            <li id="privacy-use-1">Proporcionar y mejorar nuestros servicios.</li>
            <li id="privacy-use-2">Responder a tus consultas y solicitudes.</li>
            <li id="privacy-use-3">Enviar comunicaciones relacionadas con nuestros servicios (solo con tu consentimiento).</li>
            <li id="privacy-use-4">Analizar el uso del sitio web para mejorar su funcionalidad.</li>
            <li id="privacy-use-5">Cumplir con obligaciones legales y regulatorias.</li>
          </ul>

          <h2 id="privacy-share-title">4. Compartir Información</h2>
          <p id="privacy-share-text">No vendemos, alquilamos ni compartimos tu información personal con terceros, excepto en los siguientes casos:</p>
          <ul>
            <li id="privacy-share-1">Cuando sea necesario para proporcionar nuestros servicios.</li>
            <li id="privacy-share-2">Cuando sea requerido por ley o por autoridades competentes.</li>
            <li id="privacy-share-3">Con proveedores de servicios que nos ayudan a operar nuestro sitio web (bajo acuerdos de confidencialidad).</li>
          </ul>

          <h2 id="privacy-rights-title">5. Tus Derechos</h2>
          <p id="privacy-rights-text">Tienes derecho a:</p>
          <ul>
            <li id="privacy-rights-1"><strong>Acceso:</strong> Solicitar información sobre tus datos personales que tenemos.</li>
            <li id="privacy-rights-2"><strong>Rectificación:</strong> Corregir datos inexactos o incompletos.</li>
            <li id="privacy-rights-3"><strong>Supresión:</strong> Solicitar la eliminación de tus datos personales.</li>
            <li id="privacy-rights-4"><strong>Oposición:</strong> Oponerte al tratamiento de tus datos personales.</li>
            <li id="privacy-rights-5"><strong>Portabilidad:</strong> Recibir tus datos en un formato estructurado.</li>
            <li id="privacy-rights-6"><strong>Revocación:</strong> Retirar tu consentimiento en cualquier momento.</li>
          </ul>

          <h2 id="privacy-security-title">6. Seguridad</h2>
          <p id="privacy-security-text">Implementamos medidas técnicas y organizativas apropiadas para proteger tu información personal contra acceso no autorizado, alteración, divulgación o destrucción. Sin embargo, ningún método de transmisión por Internet es 100% seguro.</p>

          <h2 id="privacy-retention-title">7. Retención de Datos</h2>
          <p id="privacy-retention-text">Conservamos tu información personal solo durante el tiempo necesario para cumplir con los propósitos descritos en esta política, a menos que la ley requiera un período de retención más largo.</p>

          <h2 id="privacy-children-title">8. Menores de Edad</h2>
          <p id="privacy-children-text">Nuestro sitio web no está dirigido a menores de 18 años. No recopilamos intencionalmente información personal de menores. Si descubrimos que hemos recopilado información de un menor, la eliminaremos de inmediato.</p>

          <h2 id="privacy-changes-title">9. Cambios a esta Política</h2>
          <p id="privacy-changes-text">Podemos actualizar esta Política de Privacidad ocasionalmente. Te notificaremos de cualquier cambio publicando la nueva política en esta página y actualizando la fecha de "Última actualización".</p>

          <h2 id="privacy-contact-title">10. Contacto</h2>
          <p id="privacy-contact-text">Para ejercer tus derechos o hacer consultas sobre esta política, puedes contactarnos:</p>
          <ul>
            <li id="privacy-contact-1"><strong>Email:</strong> <a href="mailto:info@oderman-group.com">info@oderman-group.com</a></li>
            <li id="privacy-contact-2"><strong>Teléfono:</strong> <a href="tel:+573006075800">+57 300 607 5800</a></li>
            <li id="privacy-contact-3"><strong>Empresa:</strong> ODERMAN GROUP SAS</li>
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
