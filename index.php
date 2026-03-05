<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
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
  <meta name="description" content="ODERMAN GROUP SAS — Desarrollo de software a la medida. Soluciones intuitivas y robustas para educación y otros sectores. Conoce nuestra misión, visión y valores.">
  <meta name="keywords" content="software a la medida, desarrollo de software, Colombia, educación, Sintia, transformación digital, Oderman, consultoría, desarrollo de software profesional">
  <meta name="author" content="ODERMAN GROUP SAS">
  <meta name="robots" content="index, follow">
  <meta name="language" content="Spanish, English">
  <meta name="revisit-after" content="7 days">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://oderman.com.co/">
  <meta property="og:title" content="ODERMAN GROUP SAS | Software a la medida">
  <meta property="og:description" content="Desarrollamos soluciones de software a la medida que potencian el crecimiento y la eficiencia de organizaciones. Líderes en desarrollo de software en Latinoamérica.">
  <meta property="og:image" content="https://oderman.com.co/img/og-oderman.jpg">
  <meta property="og:locale" content="es_CO">
  <meta property="og:locale:alternate" content="en_US">
  <meta property="og:site_name" content="ODERMAN GROUP SAS">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="ODERMAN GROUP SAS | Software a la medida">
  <meta name="twitter:description" content="Desarrollamos soluciones de software a la medida que potencian el crecimiento y la eficiencia de organizaciones.">
  <meta name="twitter:image" content="https://oderman.com.co/img/og-oderman.jpg">
  
  <title>ODERMAN GROUP SAS | Software a la medida</title>
  <link rel="canonical" href="https://oderman.com.co/">
  <link rel="alternate" hreflang="es" href="https://oderman.com.co/">
  <link rel="alternate" hreflang="en" href="https://oderman.com.co/?lang=en">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo asset('img/logooderman.png'); ?>">
  
  <!-- Schema.org Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "ODERMAN GROUP SAS",
    "url": "https://oderman.com.co",
    "logo": "https://oderman.com.co/img/logooderman.png",
    "description": "Desarrollo de software a la medida. Soluciones intuitivas y robustas para educación y otros sectores.",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "CO"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "email": "info@oderman-group.com",
      "contactType": "customer service",
      "availableLanguage": ["Spanish", "English"]
    },
    "sameAs": [
      "https://www.facebook.com/plataformasintia/",
      "https://x.com/platsintia",
      "https://www.instagram.com/platsintia/",
      "https://www.youtube.com/c/Plataformasintia",
      "https://co.linkedin.com/company/oderman-group-sas"
    ]
  }
  </script>
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
      <button type="button" class="header__menu-btn" aria-label="Abrir menú" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="hero__contenedor">
        <p class="hero__etiqueta" id="hero-tagline">ODERMAN GROUP SAS</p>
        <h1 class="hero__titulo" id="hero-title">Software a la medida que impulsa tu organización</h1>
        <p class="hero__subtitulo" id="hero-subtitle">Desarrollamos soluciones intuitivas y robustas para educación, empresas e instituciones. Calidad, adaptabilidad e innovación en cada proyecto.</p>
        <a href="<?php echo url('nosotros'); ?>" class="hero__cta" id="hero-cta">Conocer más</a>
      </div>
    </section>

    <section id="nosotros" class="seccion seccion--clara">
      <div class="container-content">
        <div class="seccion__icono">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
          </svg>
        </div>
        <h2 class="seccion__titulo" id="about-title">Sobre nosotros</h2>
        <p class="seccion__intro" id="about-intro">Somos una empresa colombiana dedicada al desarrollo de software a la medida. Entre nuestros productos se encuentra <strong>SINTIA</strong>, nuestro ecosistema educativo que acompaña a instituciones y familias en la gestión académica y la transformación digital.</p>
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=500&fit=crop" alt="Equipo ODERMAN" class="seccion__imagen seccion__imagen--center" loading="lazy">
      </div>
    </section>

    <section id="servicios" class="seccion seccion--clara">
      <div class="container-content">
        <h2 class="seccion__titulo" id="services-title">Nuestros Servicios</h2>
        <p class="seccion__intro" id="services-intro">Ofrecemos servicios profesionales de desarrollo de software a la medida, consultoría tecnológica y soluciones empresariales adaptadas a las necesidades específicas de cada cliente.</p>
        <div class="imagenes-grid">
          <div class="imagenes-grid__item">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Desarrollo de Software" loading="lazy">
          </div>
          <div class="imagenes-grid__item">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" alt="Consultoría Tecnológica" loading="lazy">
          </div>
          <div class="imagenes-grid__item">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Soporte y Mantenimiento" loading="lazy">
          </div>
        </div>
        <div class="valores-lista valores-lista--core">
          <li>
            <span class="valores-lista__nombre" id="service-software-name">Desarrollo de Software</span>
            <span class="valores-lista__desc" id="service-software-desc">Desarrollamos aplicaciones web y móviles personalizadas que se adaptan a los procesos únicos de tu organización.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-consulting-name">Consultoría Tecnológica</span>
            <span class="valores-lista__desc" id="service-consulting-desc">Asesoramos en la transformación digital, arquitectura de software y mejores prácticas de desarrollo.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-support-name">Soporte y Mantenimiento</span>
            <span class="valores-lista__desc" id="service-support-desc">Proporcionamos soporte continuo y mantenimiento para garantizar el óptimo funcionamiento de tus sistemas.</span>
          </li>
        </div>
      </div>
    </section>


    <!-- Sección de Clientes -->
    <section id="clientes" class="clientes">
      <div class="clientes__contenedor">
        <h2 class="clientes__titulo" id="clients-title">Nuestros Clientes</h2>
        <p class="clientes__subtitulo" id="clients-subtitle">Instituciones y empresas que confían en nuestras soluciones</p>
        <div class="clientes__slider">
          <div class="clientes__wrapper">
            <div class="clientes__track" id="clientes-track-1">
              <!-- Placeholder images - Reemplazar con logos reales -->
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=200&h=120&fit=crop" alt="Cliente 1" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=200&h=120&fit=crop" alt="Cliente 2" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200&h=120&fit=crop" alt="Cliente 3" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=200&h=120&fit=crop" alt="Cliente 4" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=200&h=120&fit=crop" alt="Cliente 5" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200&h=120&fit=crop&auto=format" alt="Cliente 6" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=200&h=120&fit=crop" alt="Cliente 7" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=200&h=120&fit=crop" alt="Cliente 8" class="clientes__logo">
              </div>
              <!-- Duplicar para efecto infinito -->
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=200&h=120&fit=crop" alt="Cliente 1" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=200&h=120&fit=crop" alt="Cliente 2" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200&h=120&fit=crop" alt="Cliente 3" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=200&h=120&fit=crop" alt="Cliente 4" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=200&h=120&fit=crop" alt="Cliente 5" class="clientes__logo">
              </div>
              <div class="clientes__item">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=200&h=120&fit=crop&auto=format" alt="Cliente 6" class="clientes__logo">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contacto" class="seccion seccion--clara seccion--contacto">
      <div class="container-content">
        <h2 class="seccion__titulo" id="contact-title">Contacto</h2>
        <p class="seccion__intro" id="contact-intro">ODERMAN GROUP SAS — Desarrollo de software a la medida.</p>
        <p id="contact-desc">Para consultas comerciales o soporte, escríbenos o contáctanos por WhatsApp.</p>
        <div class="contacto__canales">
          <p class="contacto__item">
            <span class="contacto__etiqueta" id="contact-email-label">Correo:</span>
            <a href="mailto:info@oderman-group.com" class="contacto__enlace">info@oderman-group.com</a>
          </p>
          <p class="contacto__item">
            <span class="contacto__etiqueta" id="contact-whatsapp-label">WhatsApp:</span>
            <a href="tel:+573006075800" class="contacto__enlace">+57 300 607 5800</a>
          </p>
          <a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer" class="btn btn--whatsapp" aria-label="Abrir chat de WhatsApp" id="contact-whatsapp-button">
            <svg class="btn__icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Escribir por WhatsApp
          </a>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="cta">
      <div class="cta__contenedor">
        <div class="cta__contenido">
          <h2 class="cta__titulo" id="cta-title">¿Listo para transformar tu organización?</h2>
          <p class="cta__texto" id="cta-text">Descubre cómo nuestras soluciones de software a la medida pueden potenciar tu negocio. Contáctanos hoy y recibe una consultoría gratuita.</p>
          <div class="cta__acciones">
            <a href="<?php echo url(); ?>#contacto" class="btn btn--primary btn--large" id="cta-contact">Contactar ahora</a>
            <a href="<?php echo url('productos'); ?>" class="btn btn--secondary btn--large" id="cta-products">Ver nuestros productos</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="footer__contenedor-ancho">
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
      // Año actual
      document.getElementById('anio').textContent = new Date().getFullYear();

      // Menú móvil
      var btn = document.querySelector('.header__menu-btn');
      var navWrapper = document.querySelector('.header__nav-wrapper');
      if (btn && navWrapper) {
        btn.addEventListener('click', function() {
          var isOpen = navWrapper.getAttribute('aria-hidden') === 'false';
          navWrapper.setAttribute('aria-hidden', !isOpen);
          btn.setAttribute('aria-expanded', !isOpen);
          btn.setAttribute('aria-label', !isOpen ? 'Cerrar menú' : 'Abrir menú');
        });

        // Cerrar menú al hacer clic en un enlace
        var navLinks = navWrapper.querySelectorAll('a');
        navLinks.forEach(function(link) {
          link.addEventListener('click', function() {
            navWrapper.setAttribute('aria-hidden', 'true');
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Abrir menú');
          });
        });

        // Cerrar menú al hacer clic fuera
        document.addEventListener('click', function(e) {
          if (!navWrapper.contains(e.target) && !btn.contains(e.target)) {
            navWrapper.setAttribute('aria-hidden', 'true');
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Abrir menú');
          }
        });
      }
    })();
  </script>
</body>
</html>
