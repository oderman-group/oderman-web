<?php
// Footer reutilizable para todas las páginas
// Detectar página actual para resaltar menú (si no está definida)
if (!isset($currentPage)) {
    $currentPage = '';
    $requestUri = $_SERVER['REQUEST_URI'];
    $scriptName = $_SERVER['SCRIPT_NAME'];
    
    // Normalizar URI
    $requestUri = str_replace(BASE_PATH, '', $requestUri);
    $requestUri = trim($requestUri, '/');
    $requestUri = preg_replace('/\?.*/', '', $requestUri);
    
    // Detectar página actual
    if (empty($requestUri) || $requestUri === 'index.php') {
        $currentPage = 'home';
    } elseif (strpos($requestUri, 'nosotros') !== false || strpos($requestUri, 'about') !== false) {
        $currentPage = 'about';
    } elseif (strpos($requestUri, 'productos') !== false || strpos($requestUri, 'products') !== false) {
        $currentPage = 'products';
    } elseif (strpos($requestUri, 'blog') !== false) {
        $currentPage = 'blog';
    } elseif (strpos($requestUri, 'noticias') !== false || strpos($requestUri, 'news') !== false) {
        $currentPage = 'news';
    } elseif (strpos($requestUri, 'sintia') !== false) {
        $currentPage = 'products';
    }
}
?>
  <footer class="footer">
    <div class="footer__contenedor-ancho">
      <div class="footer__grid">
        <div class="footer__bloque">
          <h3 class="footer__titulo" id="footer-company">Empresa</h3>
          <ul class="footer__lista">
            <li><a href="<?php echo url(); ?>" id="footer-link-home" class="<?php echo $currentPage === 'home' ? 'footer__link--active' : ''; ?>">Inicio</a></li>
            <li><a href="<?php echo url('nosotros'); ?>" id="footer-link-about" class="<?php echo $currentPage === 'about' ? 'footer__link--active' : ''; ?>">Nosotros</a></li>
            <li><a href="<?php echo url('productos'); ?>" id="footer-link-products" class="<?php echo $currentPage === 'products' ? 'footer__link--active' : ''; ?>">Productos</a></li>
            <li><a href="<?php echo url('blog'); ?>" id="footer-link-blog" class="<?php echo $currentPage === 'blog' ? 'footer__link--active' : ''; ?>">Blog</a></li>
            <li><a href="<?php echo url('noticias'); ?>" id="footer-link-news" class="<?php echo $currentPage === 'news' ? 'footer__link--active' : ''; ?>">Noticias</a></li>
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
          <div class="footer__sedes">
            <h4 class="footer__sedes-titulo" id="footer-offices-title">Nuestras Sedes</h4>
            <div class="footer__sede">
              <strong id="footer-office-medellin">Medellín, Colombia</strong>
              <p id="footer-address-medellin">Carrera 83 C #33 B 11<br>Barrio La Castellana</p>
            </div>
            <div class="footer__sede">
              <strong id="footer-office-bolivar">San Juan Nepomuceno, Bolívar</strong>
              <p id="footer-address-bolivar">Calle 16 #12 - 120<br>Barrio Arriba - Superior</p>
            </div>
            <div class="footer__sede">
              <strong id="footer-office-canada">Mississauga, Canadá</strong>
              <p id="footer-address-canada">2100 Sherobee Road<br><span id="footer-office-correspondence">(Correspondencia)</span></p>
            </div>
          </div>
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
        <p class="footer__nit" id="footer-nit">NIT: 901.992.426-8</p>
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

  <!-- Botón Scroll to Top -->
  <button id="scroll-to-top" class="scroll-to-top" aria-label="Volver arriba" title="Volver arriba">
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
      <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
    </svg>
  </button>

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

        var navLinks = navWrapper.querySelectorAll('a');
        navLinks.forEach(function(link) {
          link.addEventListener('click', function() {
            navWrapper.setAttribute('aria-hidden', 'true');
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Abrir menú');
          });
        });

        document.addEventListener('click', function(e) {
          if (!navWrapper.contains(e.target) && !btn.contains(e.target)) {
            navWrapper.setAttribute('aria-hidden', 'true');
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Abrir menú');
          }
        });
      }

      // Scroll to Top Button
      var scrollToTopBtn = document.getElementById('scroll-to-top');
      if (scrollToTopBtn) {
        // Mostrar/ocultar botón según scroll
        function toggleScrollButton() {
          if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('scroll-to-top--visible');
          } else {
            scrollToTopBtn.classList.remove('scroll-to-top--visible');
          }
        }

        // Scroll suave al hacer clic
        scrollToTopBtn.addEventListener('click', function() {
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        });

        // Escuchar eventos de scroll
        window.addEventListener('scroll', toggleScrollButton);
        toggleScrollButton(); // Verificar estado inicial
      }
    })();
  </script>
