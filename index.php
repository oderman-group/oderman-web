<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => 'ODERMAN GROUP SAS | Desarrollo de Software a la Medida',
    'description' => 'ODERMAN GROUP SAS desarrolla software a la medida y soluciones tecnológicas innovadoras. Conoce SINTIA, nuestro ecosistema educativo integral.',
    'keywords' => 'desarrollo de software, software a la medida, SINTIA, ecosistema educativo, ODERMAN GROUP SAS, Colombia',
    'url' => url(),
    'alternate' => [
        'es' => url(),
        'en' => url() . '?lang=en'
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
  <?php include __DIR__ . '/includes/header.php'; ?>

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
        <p class="seccion__intro" id="services-intro">La seguridad y la eficiencia son las demandas más claras a nivel global, impulsadas por tecnologías que protejan datos y mejoren operaciones. En Oderman Group, ofrecemos servicios profesionales de desarrollo de software a la medida que responden a estas necesidades críticas del mercado.</p>
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
            <span class="valores-lista__nombre" id="service-security-name">Seguridad Informática</span>
            <span class="valores-lista__desc" id="service-security-desc">Implementamos soluciones robustas de ciberseguridad que protegen tus datos y cumplen con normativas de privacidad. Garantizamos la integridad y confidencialidad de tu información crítica.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-it-management-name">Gestión de TI</span>
            <span class="valores-lista__desc" id="service-it-management-desc">Optimizamos tus procesos de negocio, reducimos costos y mejoramos la eficiencia operativa mediante la gestión estratégica de tecnologías de información adaptadas a tus necesidades.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-ai-name">Inteligencia Artificial</span>
            <span class="valores-lista__desc" id="service-ai-desc">Desarrollamos soluciones con IA que automatizan procesos, mejoran la toma de decisiones y potencian la competitividad de tu organización mediante tecnologías de vanguardia.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-architecture-name">Arquitectura de TI</span>
            <span class="valores-lista__desc" id="service-architecture-desc">Diseñamos arquitecturas de software escalables, flexibles y basadas en la nube que se adaptan al crecimiento de tu empresa, garantizando rentabilidad y rendimiento óptimo.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-crm-name">Gestión de Relaciones con Clientes (CRM)</span>
            <span class="valores-lista__desc" id="service-crm-desc">Creamos sistemas CRM personalizados que optimizan la interacción con tus clientes, mejoran el seguimiento comercial y potencian las ventas mediante herramientas de gestión inteligente.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-finance-name">Contabilidad y Finanzas</span>
            <span class="valores-lista__desc" id="service-finance-desc">Desarrollamos sistemas de gestión financiera y contable que centralizan operaciones, automatizan procesos y proporcionan reportes precisos para una toma de decisiones informada.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-marketing-name">Marketing Digital</span>
            <span class="valores-lista__desc" id="service-marketing-desc">Implementamos plataformas y herramientas de marketing digital que optimizan tus campañas, mejoran la conversión y maximizan el retorno de inversión en tus estrategias comerciales.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="service-cloud-name">Soluciones en la Nube</span>
            <span class="valores-lista__desc" id="service-cloud-desc">Ofrecemos soluciones basadas en la nube con flexibilidad, escalabilidad y rentabilidad, permitiendo que tu negocio crezca sin limitaciones de infraestructura física.</span>
          </li>
        </div>
      </div>
    </section>

    <!-- Sección de Seguridad y Certificaciones -->
    <section id="seguridad" class="seccion seccion--clara">
      <div class="container-content">
        <div class="seccion__icono" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2l7 4v6c0 5-3.5 9.74-7 10-3.5-.26-7-5-7-10V6l7-4zm0 2.3L7 6.9V12c0 3.92 2.54 7.74 5 8.02 2.46-.28 5-4.1 5-8.02V6.9l-5-2.6zm-1 6.2l-1.41 1.41L11 13.32l3.41-3.41L15.82 11 11 15.82 8.18 13l.82-.5z"/>
          </svg>
        </div>
        <h2 class="seccion__titulo" id="security-commitment-title">Seguridad y Certificaciones</h2>
        <p class="seccion__intro" id="security-commitment-intro">Nos interesa y garantizamos la seguridad de las tecnologías, software y aplicaciones que desarrollamos. Trabajamos con buenas prácticas, control de calidad y un enfoque preventivo para reducir riesgos y fortalecer la confianza.</p>

        <div class="sintia-grid certifications">
          <div class="sintia-grid__content">
            <ul class="valores-lista valores-lista--complementarios security-points" role="list">
              <li>
                <strong id="security-point-1-title">Seguridad por diseño</strong>
                <span id="security-point-1-desc">Incorporamos controles desde el inicio: revisión de código, buenas prácticas y mitigación de vulnerabilidades en cada entrega.</span>
              </li>
              <li>
                <strong id="security-point-2-title">Protección de datos y cumplimiento</strong>
                <span id="security-point-2-desc">Aplicamos medidas para proteger información sensible y apoyar el cumplimiento de normativas de privacidad, según el contexto de tu organización.</span>
              </li>
              <li>
                <strong id="security-point-3-title">Calidad, mejora continua y sostenibilidad</strong>
                <span id="security-point-3-desc">Nuestros procesos están orientados a resultados consistentes, mejora continua y operación responsable.</span>
              </li>
            </ul>
          </div>

          <div class="sintia-grid__image certifications__badges" aria-label="Certificaciones ISO">
            <div class="cert-badge">
              <img src="<?php echo asset('img/certificaciones/iso-9001.svg'); ?>" alt="Certificación ISO 9001" loading="lazy" onerror="this.style.display='none'">
              <div class="cert-badge__text">
                <strong id="iso-9001-title">ISO 9001</strong>
                <span id="iso-9001-desc">Sistema de Gestión de Calidad</span>
              </div>
            </div>
            <div class="cert-badge">
              <img src="<?php echo asset('img/certificaciones/iso-14001.svg'); ?>" alt="Certificación ISO 14001" loading="lazy" onerror="this.style.display='none'">
              <div class="cert-badge__text">
                <strong id="iso-14001-title">ISO 14001</strong>
                <span id="iso-14001-desc">Sistema de Gestión Ambiental</span>
              </div>
            </div>
            <div class="cert-badge">
              <img src="<?php echo asset('img/certificaciones/iso-27001.svg'); ?>" alt="Certificación ISO 27001" loading="lazy" onerror="this.style.display='none'">
              <div class="cert-badge__text">
                <strong id="iso-27001-title">ISO 27001</strong>
                <span id="iso-27001-desc">Sistema de Gestión de Seguridad de la Información</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección de Cobertura / Países -->
    <section id="cobertura" class="seccion">
      <div class="container-content">
        <div class="seccion__icono" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10 10-4.49 10-10S17.51 2 12 2zm7.93 9h-3.17a15.5 15.5 0 0 0-1.07-4.12A8.03 8.03 0 0 1 19.93 11zM12 4c.83 0 2.34 1.86 3.07 5H8.93C9.66 5.86 11.17 4 12 4zM4.07 13h3.17c.2 1.49.61 2.9 1.2 4.12A8.03 8.03 0 0 1 4.07 13zM7.24 11H4.07a8.03 8.03 0 0 1 4.37-4.12A15.5 15.5 0 0 0 7.24 11zm1.69 0h6.14c.08.66.13 1.33.13 2s-.05 1.34-.13 2H8.93A16.4 16.4 0 0 1 8.8 13c0-.67.05-1.34.13-2zm.0 6h6.14c-.73 3.14-2.24 5-3.07 5-.83 0-2.34-1.86-3.07-5zm7.63.12c.59-1.22 1-2.63 1.2-4.12h3.17a8.03 8.03 0 0 1-4.37 4.12z"/>
          </svg>
        </div>
        <h2 class="seccion__titulo" id="coverage-title">Cobertura y alcance</h2>
        <p class="seccion__intro" id="coverage-intro">Tenemos el interés y la capacidad de trabajar con organizaciones en estos países, acompañando proyectos de software, consultoría y transformación digital de manera remota o híbrida.</p>

        <div class="coverage-countries" role="list" aria-label="Países con los que podemos trabajar">
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇨🇴</div>
            <h3 class="country-card__name" id="coverage-country-colombia">Colombia</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇦🇷</div>
            <h3 class="country-card__name" id="coverage-country-argentina">Argentina</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇧🇷</div>
            <h3 class="country-card__name" id="coverage-country-brazil">Brasil</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇨🇦</div>
            <h3 class="country-card__name" id="coverage-country-canada">Canadá</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🏝️</div>
            <h3 class="country-card__name" id="coverage-country-caribbean">Caribe</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇨🇱</div>
            <h3 class="country-card__name" id="coverage-country-chile">Chile</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇨🇷</div>
            <h3 class="country-card__name" id="coverage-country-costa-rica">Costa Rica</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇪🇨</div>
            <h3 class="country-card__name" id="coverage-country-ecuador">Ecuador</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇪🇸</div>
            <h3 class="country-card__name" id="coverage-country-spain">España</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇺🇸</div>
            <h3 class="country-card__name" id="coverage-country-usa">Estados Unidos</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇲🇽</div>
            <h3 class="country-card__name" id="coverage-country-mexico">México</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇵🇦</div>
            <h3 class="country-card__name" id="coverage-country-panama">Panamá</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇵🇪</div>
            <h3 class="country-card__name" id="coverage-country-peru">Perú</h3>
          </div>
          <div class="country-card" role="listitem">
            <div class="country-card__flag">🇬🇹🇭🇳🇸🇻</div>
            <h3 class="country-card__name" id="coverage-country-northern-triangle">Triángulo Norte</h3>
          </div>
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
              <!-- Logos reales de clientes -->
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/bydeluxe.webp'); ?>" alt="ByDeluxe" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/colegioemmanuelsur.png'); ?>" alt="Colegio Emmanuel Sur" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/ic&t.jpg'); ?>" alt="IC&T" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/icolven.jpg'); ?>" alt="Icolven" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/jmequipos.png'); ?>" alt="JM Equipos" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/mercadolibre.jpg'); ?>" alt="MercadoLibre" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/pureandsimple.png'); ?>" alt="Pure and Simple" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/sproutloud.jpg'); ?>" alt="SproutLoud" class="clientes__logo" loading="lazy">
              </div>
              <!-- Duplicar para efecto infinito -->
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/bydeluxe.webp'); ?>" alt="ByDeluxe" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/colegioemmanuelsur.png'); ?>" alt="Colegio Emmanuel Sur" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/ic&t.jpg'); ?>" alt="IC&T" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/icolven.jpg'); ?>" alt="Icolven" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/jmequipos.png'); ?>" alt="JM Equipos" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/mercadolibre.jpg'); ?>" alt="MercadoLibre" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/pureandsimple.png'); ?>" alt="Pure and Simple" class="clientes__logo" loading="lazy">
              </div>
              <div class="clientes__item">
                <img src="<?php echo asset('img/clients/sproutloud.jpg'); ?>" alt="SproutLoud" class="clientes__logo" loading="lazy">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contacto" class="seccion seccion--clara seccion--contacto">
      <div class="container-content">
        <div class="seccion__icono" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="currentColor">
            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
          </svg>
        </div>
        <h2 class="seccion__titulo" id="contact-title">Contacto</h2>
        <p class="seccion__intro" id="contact-intro">ODERMAN GROUP SAS — Desarrollo de software a la medida.</p>
        <p class="seccion__subtitle" id="contact-desc">Para consultas comerciales o soporte, escríbenos o contáctanos por WhatsApp. Estamos aquí para ayudarte.</p>
        
        <div class="contacto__info">
          <div class="contacto__card contacto__card--primary">
            <div class="contacto__card-icon">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
              </svg>
            </div>
            <h3 class="contacto__card-title" id="contact-email-label">Correo Electrónico</h3>
            <a href="mailto:info@oderman-group.com" class="contacto__card-link">info@oderman-group.com</a>
          </div>
          
          <div class="contacto__card contacto__card--primary">
            <div class="contacto__card-icon">
              <svg viewBox="0 0 24 24" fill="currentColor">
                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
              </svg>
            </div>
            <h3 class="contacto__card-title" id="contact-phone-label">Teléfono / WhatsApp</h3>
            <a href="tel:+573006075800" class="contacto__card-link">+57 300 607 5800</a>
            <a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer" class="btn btn--whatsapp btn--small" aria-label="Abrir chat de WhatsApp" id="contact-whatsapp-button">
              <svg class="btn__icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              <span id="contact-whatsapp-button-text">Escribir por WhatsApp</span>
            </a>
          </div>
        </div>

        <div class="contacto__sedes">
          <h3 class="contacto__sedes-titulo" id="contact-offices-title">Nuestras Sedes</h3>
          <div class="contacto__sedes-grid">
            <div class="contacto__sede-card">
              <div class="contacto__sede-icon">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                </svg>
              </div>
              <h4 class="contacto__sede-title" id="contact-office-medellin">Medellín, Colombia</h4>
              <p class="contacto__sede-address" id="contact-address-medellin">Carrera 83 C #33 B 11<br>Barrio La Castellana</p>
            </div>
            
            <div class="contacto__sede-card">
              <div class="contacto__sede-icon">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                </svg>
              </div>
              <h4 class="contacto__sede-title" id="contact-office-bolivar">San Juan Nepomuceno, Bolívar</h4>
              <p class="contacto__sede-address" id="contact-address-bolivar">Calle 16 #12 - 120<br>Barrio Arriba - Superior</p>
            </div>
            
            <div class="contacto__sede-card">
              <div class="contacto__sede-icon">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                </svg>
              </div>
              <h4 class="contacto__sede-title" id="contact-office-canada">Mississauga, Canadá</h4>
              <p class="contacto__sede-address" id="contact-address-canada">2100 Sherobee Road<br><span class="contacto__sede-note" id="contact-office-correspondence">(Correspondencia)</span></p>
            </div>
          </div>
        </div>

        <div class="contacto__nit">
          <p class="contacto__nit-text"><strong id="contact-nit-label">NIT:</strong> <span id="contact-nit-number">901.992.426-8</span></p>
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

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="<?php echo asset('js/translations.js'); ?>"></script>
  <script src="<?php echo asset('js/language.js'); ?>"></script>
  <script src="<?php echo asset('js/cookies.js'); ?>"></script>
  <script src="<?php echo asset('js/main.js'); ?>"></script>
</body>
</html>
