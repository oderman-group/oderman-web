<?php
require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Security Headers -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self';">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
  <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
  
  <meta name="description" content="Ambientes Virtuales de Aprendizaje (AVA) en SINTIA: evaluaciones online, tareas en casa, foros de discusión, clases y ausencias. Tarifas mensuales para instituciones.">
  <meta name="keywords" content="SINTIA, AVA, ambientes virtuales, aprendizaje, evaluaciones online, tareas, foros, Oderman">
  <meta name="author" content="ODERMAN GROUP SAS">
  <meta name="robots" content="index, follow">

  <title>AVA - Ambientes Virtuales de Aprendizaje | ODERMAN GROUP SAS</title>
  <link rel="canonical" href="https://oderman.com.co/sintia/ava">
  <link rel="alternate" hreflang="es" href="https://oderman.com.co/sintia/ava">
  <link rel="alternate" hreflang="en" href="https://oderman.com.co/sintia/ava?lang=en">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
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
          <a href="<?php echo url(); ?>">Inicio</a>
          <a href="<?php echo url(); ?>#nosotros">Nosotros</a>
          <a href="<?php echo url(); ?>#servicios">Servicios</a>
          <a href="<?php echo url(); ?>#productos">Productos</a>
          <a href="<?php echo url(); ?>#contacto">Contacto</a>
        </nav>
      </div>
      <button type="button" class="header__menu-btn" aria-label="Abrir menú" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <main class="pagina-interna">
    <section class="hero hero--compacto">
      <div class="hero__contenedor">
        <p class="hero__etiqueta">SINTIA</p>
        <h1 class="hero__titulo">Ambientes Virtuales de Aprendizaje (AVA)</h1>
        <p class="hero__subtitulo">Módulos para evaluaciones online, tareas en casa, foros de discusión y control de clases y ausencias. Precios mensuales por institución.</p>
      </div>
    </section>

    <section class="seccion">
      <div class="contenedor">
        <p class="seccion__intro">El módulo <strong>Ambientes Virtuales de Aprendizaje (AVA)</strong> de SINTIA integra herramientas para enriquecer la experiencia educativa: evaluaciones en línea, tareas para casa, foros de discusión y el registro de clases y ausencias. Cada submódulo puede contratarse por separado o como paquete completo con un precio preferencial.</p>

        <div class="ava-modulos">
          <article class="ava-modulo">
            <h2 class="ava-modulo__titulo">Evaluaciones online</h2>
            <p class="ava-modulo__desc">Pruebas y evaluaciones en línea para estudiantes.</p>
            <p class="ava-modulo__precio">$80.000 <abbr title="pesos colombianos">COP</abbr> / mes</p>
          </article>

          <article class="ava-modulo">
            <h2 class="ava-modulo__titulo">Tareas en casa</h2>
            <p class="ava-modulo__desc">Gestión y entrega de tareas para el hogar.</p>
            <p class="ava-modulo__precio">$60.000 <abbr title="pesos colombianos">COP</abbr> / mes</p>
          </article>

          <article class="ava-modulo">
            <h2 class="ava-modulo__titulo">Foros de discusión</h2>
            <p class="ava-modulo__desc">Espacios de debate y participación entre estudiantes y docentes.</p>
            <p class="ava-modulo__precio">$30.000 <abbr title="pesos colombianos">COP</abbr> / mes</p>
          </article>

          <article class="ava-modulo">
            <h2 class="ava-modulo__titulo">Clases y ausencias</h2>
            <p class="ava-modulo__desc">Registro de clases y control de asistencias y ausencias.</p>
            <p class="ava-modulo__precio">$70.000 <abbr title="pesos colombianos">COP</abbr> / mes</p>
          </article>
        </div>

        <div class="ava-paquete">
          <h2 class="ava-paquete__titulo">Paquete completo AVA</h2>
          <p class="ava-paquete__desc">Si contratas los cuatro submódulos juntos, el costo mensual es:</p>
          <p class="ava-paquete__precio">$120.000 <abbr title="pesos colombianos">COP</abbr> / mes</p>
          <p class="ava-paquete__nota">(Por separado sumarían $240.000/mes; con el paquete ahorras $120.000 mensuales.)</p>
        </div>

        <div class="ava-beneficios">
          <h2 class="seccion__titulo">Qué ganas con cada módulo</h2>
          <p class="ava-beneficios__intro">Cada herramienta no solo resuelve un problema operativo: transmite a estudiantes, familias y docentes que tu institución apuesta por orden, claridad y una experiencia educativa moderna. Esto es lo que logras con cada uno.</p>

          <article class="ava-beneficio">
            <h3 class="ava-beneficio__titulo">Evaluaciones online</h3>
            <p>Dejas atrás la impresión masiva de pruebas, el reparto de hojas y la corrección manual que consume horas. Las evaluaciones se aplican en línea, con resultados disponibles de forma inmediata para docentes y estudiantes. <strong>Ganas tiempo</strong>, reduces costos de papel y evitas pérdidas o confusiones de folios. Para las familias transmites <strong>transparencia y seguimiento al instante</strong>; para los estudiantes, una experiencia clara y sin sorpresas. La imagen que das es la de una institución actualizada y seria en su proceso de evaluación.</p>
          </article>

          <article class="ava-beneficio">
            <h3 class="ava-beneficio__titulo">Tareas en casa</h3>
            <p>Un solo lugar donde los docentes publican tareas, fechas de entrega y criterios, y donde estudiantes y acudientes consultan todo sin depender de cuadernos o mensajes dispersos. <strong>Te quitas el dolor de cabeza</strong> de los “no me dijeron”, “se perdió la hoja” o “no sabía la fecha”. Las entregas quedan registradas con fecha y hora; hay trazabilidad para docentes y coordinación. Transmites a las familias <strong>orden y compromiso</strong>, y a los estudiantes responsabilidad y claridad. La impresión que causas es de institución organizada que cuida el seguimiento del aprendizaje en casa.</p>
          </article>

          <article class="ava-beneficio">
            <h3 class="ava-beneficio__titulo">Foros de discusión</h3>
            <p>Espacios donde estudiantes y docentes debaten, comparten ideas y construyen conocimiento en conjunto. Fomentas la participación, el pensamiento crítico y el sentido de comunidad sin depender solo del aula. <strong>Diferencias tu oferta</strong>: no es solo “dar clase”, sino crear un ambiente donde la voz del estudiante cuenta. Las familias perciben un colegio que valora la opinión y el debate; los estudiantes sienten que su criterio importa. Es una herramienta que suma prestigio y contenido pedagógico con poco esfuerzo operativo una vez configurada.</p>
          </article>

          <article class="ava-beneficio">
            <h3 class="ava-beneficio__titulo">Clases y ausencias</h3>
            <p>El registro de clases y el control de asistencias y ausencias dejan de vivir en planillas sueltas o en Excel que solo tú entiendes. Todo queda centralizado, con historial y reportes claros para coordinación, docentes y, cuando corresponda, para acudientes. <strong>Te ahorras</strong> tiempo de consolidados manuales y reduces errores en reportes a secretaría o a padres. Transmites a las familias <strong>seriedad y control</strong> sobre la asistencia de sus hijos; ante inspección o auditorías, das la impresión de una institución que cumple y documenta bien. Menos dolores de cabeza administrativos y más confianza hacia afuera.</p>
          </article>
        </div>

        <p class="tarifas__nota">Los valores pueden variar según convenios. Para cotizar o activar el módulo AVA en tu institución, escríbenos a <a href="mailto:info@oderman-group.com">info@oderman-group.com</a> o contáctanos por <a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer">WhatsApp</a>.</p>

        <p class="tarifas__cta">
          <a href="https://plataformasintia.com" target="_blank" rel="noopener noreferrer" class="btn btn--sintia">Conocer Plataforma SINTIA</a>
        </p>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="footer__contenedor-ancho">
      <div class="footer__grid">
        <div class="footer__bloque">
          <h3 class="footer__titulo">Empresa</h3>
          <ul class="footer__lista">
            <li><a href="<?php echo url(); ?>">Inicio</a></li>
            <li><a href="<?php echo url(); ?>#nosotros">Nosotros</a></li>
            <li><a href="<?php echo url(); ?>#servicios">Servicios</a></li>
            <li><a href="<?php echo url(); ?>#productos">Productos</a></li>
            <li><a href="<?php echo url(); ?>#mision">Misión</a></li>
            <li><a href="<?php echo url(); ?>#vision">Visión</a></li>
            <li><a href="<?php echo url(); ?>#valores">Valores</a></li>
            <li><a href="<?php echo url(); ?>#contacto">Contacto</a></li>
            <li><a href="https://oderman-group.com/" target="_blank" rel="noopener noreferrer">Sitio corporativo <span class="footer__externo" aria-label="Abre en nueva pestaña">↗</span></a></li>
          </ul>
        </div>
        <div class="footer__bloque">
          <h3 class="footer__titulo">Ecosistema SINTIA</h3>
          <ul class="footer__lista">
            <li><a href="<?php echo url(); ?>#productos">Ecosistema SINTIA</a></li>
            <li><a href="<?php echo url('sintia/tarifas-comunicativo'); ?>">Tarifas módulo comunicativo</a></li>
            <li><a href="<?php echo url('sintia/ava'); ?>">AVA - Ambientes Virtuales</a></li>
            <li><a href="<?php echo url('sintia/demo'); ?>">Demo para colegios</a></li>
            <li><a href="https://plataformasintia.com" target="_blank" rel="noopener noreferrer">Plataforma SINTIA <span class="footer__externo" aria-label="Abre en nueva pestaña">↗</span></a></li>
          </ul>
        </div>
        <div class="footer__bloque">
          <h3 class="footer__titulo">Contacto</h3>
          <ul class="footer__lista footer__lista--contacto">
            <li><a href="mailto:info@oderman-group.com">info@oderman-group.com</a></li>
            <li><a href="tel:+573006075800">+57 300 607 5800</a></li>
            <li><a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer" class="footer__wa">WhatsApp</a></li>
          </ul>
        </div>
        <div class="footer__bloque footer__bloque--redes">
          <h3 class="footer__titulo">Síguenos</h3>
          <div class="footer__redes">
            <a href="https://www.facebook.com/plataformasintia/" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="Facebook SINTIA">Facebook</a>
            <a href="https://x.com/platsintia" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="X SINTIA">X</a>
            <a href="https://www.instagram.com/platsintia/" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="Instagram SINTIA">Instagram</a>
            <a href="https://www.youtube.com/c/Plataformasintia/videos" target="_blank" rel="noopener noreferrer" class="footer__red" aria-label="YouTube SINTIA">YouTube</a>
          </div>
        </div>
      </div>
      <div class="footer__baja">
        <p class="footer__firma">© <span id="anio"></span> ODERMAN GROUP SAS. Todos los derechos reservados.</p>
        <p class="footer__dominio">oderman.com.co</p>
      </div>
    </div>
  </footer>

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
      }
    })();
  </script>
</body>
</html>
