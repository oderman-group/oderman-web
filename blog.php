<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/articulos.php';

$pageData = [
    'title' => 'Blog | ODERMAN GROUP SAS',
    'description' => 'Artículos sobre desarrollo de software, seguridad informática, metodologías ágiles y sostenibilidad tecnológica.',
    'keywords' => 'blog, desarrollo de software, seguridad informática, metodologías ágiles, sostenibilidad, tecnología',
    'url' => url('blog'),
    'alternate' => [
        'es' => url('blog'),
        'en' => url('blog') . '?lang=en'
    ]
];

$articulos = getAllArticulos();
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
  <?php echo generateSchemaOrg('Blog', [
      'name' => 'Blog ODERMAN GROUP SAS',
      'description' => $pageData['description']
  ]); ?>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="hero">
      <div class="hero__contenedor">
        <p class="hero__etiqueta" id="hero-tagline">ODERMAN GROUP SAS</p>
        <h1 class="hero__titulo" id="blog-title">Blog</h1>
        <p class="hero__subtitulo" id="blog-intro">Artículos sobre desarrollo de software, seguridad informática, metodologías y mejores prácticas tecnológicas.</p>
      </div>
    </section>

    <!-- Lista de Artículos -->
    <section class="seccion">
      <div class="container-content">
        <div class="blog-grid">
          <?php foreach ($articulos as $articulo): ?>
            <article class="blog-card">
              <a href="<?php echo url('blog/' . $articulo['slug']); ?>" class="blog-card__link">
                <div class="blog-card__image">
                  <img src="<?php echo htmlspecialchars($articulo['image']); ?>" alt="<?php echo htmlspecialchars($articulo['title_es']); ?>" loading="lazy">
                </div>
                <div class="blog-card__content">
                  <span class="blog-card__category" data-category-es="<?php echo htmlspecialchars($articulo['category_es']); ?>" data-category-en="<?php echo htmlspecialchars($articulo['category_en']); ?>"><?php echo htmlspecialchars($articulo['category_es']); ?></span>
                  <h2 class="blog-card__title" data-title-es="<?php echo htmlspecialchars($articulo['title_es']); ?>" data-title-en="<?php echo htmlspecialchars($articulo['title_en']); ?>"><?php echo htmlspecialchars($articulo['title_es']); ?></h2>
                  <p class="blog-card__excerpt" data-excerpt-es="<?php echo htmlspecialchars($articulo['excerpt_es']); ?>" data-excerpt-en="<?php echo htmlspecialchars($articulo['excerpt_en']); ?>"><?php echo htmlspecialchars($articulo['excerpt_es']); ?></p>
                  <div class="blog-card__meta">
                    <time datetime="<?php echo $articulo['date']; ?>"><?php echo date('d/m/Y', strtotime($articulo['date'])); ?></time>
                    <span class="blog-card__author"><?php echo htmlspecialchars($articulo['author']); ?></span>
                  </div>
                </div>
              </a>
            </article>
          <?php endforeach; ?>
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
