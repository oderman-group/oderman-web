<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => 'Productos | ODERMAN GROUP SAS',
    'description' => 'Conoce nuestros productos de software a la medida. SINTIA, nuestro ecosistema educativo integral para instituciones.',
    'keywords' => 'productos, software a la medida, SINTIA, ecosistema educativo, plataforma educativa, ODERMAN GROUP SAS',
    'url' => url('productos'),
    'alternate' => [
        'es' => url('productos'),
        'en' => url('productos') . '?lang=en'
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
      'name' => 'Productos',
      'description' => $pageData['description']
  ]); ?>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="hero">
      <div class="hero__contenedor">
        <p class="hero__etiqueta" id="hero-tagline">ODERMAN GROUP SAS</p>
        <h1 class="hero__titulo" id="products-title">Nuestros Productos</h1>
        <p class="hero__subtitulo" id="products-intro">Desarrollamos soluciones de software a la medida que transforman la manera en que las organizaciones operan. Conoce nuestros productos diseñados para potenciar tu negocio.</p>
      </div>
    </section>

    <!-- Catálogo de Productos -->
    <section class="seccion">
      <div class="container-content">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: var(--spacing-xl); margin-top: var(--spacing-xl);">
          
          <!-- Producto: Ecosistema SINTIA -->
          <div style="background: var(--color-bg-light); border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-lg); border: 1px solid var(--color-border); transition: transform var(--transition-base), box-shadow var(--transition-base);" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='var(--shadow-xl)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-lg)'">
            <div style="height: 250px; overflow: hidden; background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); position: relative;">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Ecosistema SINTIA" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.3;">
              <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; z-index: 1;">
                <h3 style="font-size: 1.75rem; font-weight: 700; margin-bottom: var(--spacing-xs);">SINTIA</h3>
                <p style="font-size: 1rem; opacity: 0.9;">Ecosistema Educativo</p>
              </div>
            </div>
            <div style="padding: var(--spacing-lg);">
              <p style="color: var(--color-text-secondary); line-height: 1.6; margin-bottom: var(--spacing-lg);">Plataforma integral que conecta instituciones, docentes, estudiantes y acudientes. Gestión académica, comunicados, calificaciones y pagos en tiempo real.</p>
              <a href="<?php echo url('sintia'); ?>" class="btn btn--primary" style="width: 100%; text-align: center; display: block;">Conocer más</a>
            </div>
          </div>

          <!-- Producto: ELISAB ERP -->
          <div style="background: var(--color-bg-light); border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-lg); border: 1px solid var(--color-border); transition: transform var(--transition-base), box-shadow var(--transition-base); opacity: 0.8;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='var(--shadow-xl)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow-lg)'">
            <div style="height: 250px; overflow: hidden; background: linear-gradient(135deg, #1E3A5F 0%, #0A1628 100%); position: relative;">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" alt="ELISAB ERP" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.3;">
              <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; z-index: 1;">
                <h3 style="font-size: 1.75rem; font-weight: 700; margin-bottom: var(--spacing-xs);">ELISAB</h3>
                <p style="font-size: 1rem; opacity: 0.9;">Sistema ERP</p>
              </div>
            </div>
            <div style="padding: var(--spacing-lg);">
              <p style="color: var(--color-text-secondary); line-height: 1.6; margin-bottom: var(--spacing-lg);">Sistema de planificación de recursos empresariales (ERP) diseñado para optimizar los procesos de tu organización. Gestión integral de recursos, finanzas y operaciones.</p>
              <button class="btn btn--secondary" style="width: 100%; text-align: center; display: block; cursor: not-allowed; opacity: 0.6;" disabled>Próximamente</button>
            </div>
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
