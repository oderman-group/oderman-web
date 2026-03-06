<?php
http_response_code(404);
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => '404 - Página no encontrada | ODERMAN GROUP SAS',
    'description' => 'La página que buscas no existe. Regresa al inicio de ODERMAN GROUP SAS.',
    'keywords' => '404, página no encontrada, error, ODERMAN GROUP SAS',
    'url' => url('404'),
    'robots' => 'noindex, nofollow'
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
  <meta name="robots" content="noindex, nofollow">
  <meta name="author" content="ODERMAN GROUP SAS">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo asset('img/logooderman.png'); ?>">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="hero hero--404" style="min-height: 70vh; display: flex; align-items: center; justify-content: center;">
      <div class="hero__contenedor" style="text-align: center; max-width: 600px;">
        <h1 style="font-size: 8rem; font-weight: 700; color: var(--color-primary); margin-bottom: var(--spacing-md); line-height: 1;">404</h1>
        <h2 id="error-title" style="font-size: 2rem; margin-bottom: var(--spacing-md); color: var(--color-text-primary);">Página no encontrada</h2>
        <p id="error-text" style="font-size: 1.125rem; color: var(--color-text-secondary); margin-bottom: var(--spacing-xl); line-height: 1.6;">Lo sentimos, la página que buscas no existe o ha sido movida.</p>
        <div style="display: flex; gap: var(--spacing-md); justify-content: center; flex-wrap: wrap;">
          <a href="<?php echo url(); ?>" class="btn btn--primary" id="error-home">Volver al inicio</a>
          <a href="<?php echo url(); ?>#contacto" class="btn btn--secondary" id="error-contact">Contacto</a>
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
