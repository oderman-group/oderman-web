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
  <?php include __DIR__ . '/includes/header.php'; ?>

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

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="<?php echo asset('js/translations.js'); ?>"></script>
  <script src="<?php echo asset('js/language.js'); ?>"></script>
  <script src="<?php echo asset('js/cookies.js'); ?>"></script>
  <script src="<?php echo asset('js/main.js'); ?>"></script>
</body>
</html>
