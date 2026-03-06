<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/articulos.php';
require_once __DIR__ . '/includes/noticias.php';

// Obtener el slug del artículo/noticia desde la URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : 'blog'; // 'blog' o 'noticias'

// Obtener el artículo o noticia
if ($tipo === 'noticias') {
    $articulo = getNoticia($slug);
    $redirectUrl = url('noticias');
    $breadcrumbLink = url('noticias');
    $breadcrumbText = 'Noticias';
} else {
    $articulo = getArticulo($slug);
    $redirectUrl = url('blog');
    $breadcrumbLink = url('blog');
    $breadcrumbText = 'Blog';
}

// Si no existe, redirigir
if (!$articulo) {
    header('Location: ' . $redirectUrl);
    exit;
}

// Detectar idioma
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'es';

$pageData = [
    'title' => ($lang === 'es' ? $articulo['title_es'] : $articulo['title_en']) . ' | Blog ODERMAN GROUP SAS',
    'description' => $lang === 'es' ? $articulo['excerpt_es'] : $articulo['excerpt_en'],
    'keywords' => ($lang === 'es' ? $articulo['category_es'] : $articulo['category_en']) . ', blog, desarrollo de software, ODERMAN GROUP SAS',
    'url' => $tipo === 'noticias' ? url('noticias/' . $articulo['slug']) : url('blog/' . $articulo['slug']),
    'image' => $articulo['image'],
    'alternate' => [
        'es' => $tipo === 'noticias' ? url('noticias/' . $articulo['slug']) : url('blog/' . $articulo['slug']),
        'en' => ($tipo === 'noticias' ? url('noticias/' . $articulo['slug']) : url('blog/' . $articulo['slug'])) . '?lang=en'
    ]
];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
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
  <meta name="author" content="<?php echo htmlspecialchars($articulo['author']); ?>">
  <meta property="article:published_time" content="<?php echo $articulo['date']; ?>">
  <meta property="article:author" content="<?php echo htmlspecialchars($articulo['author']); ?>">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
  
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo asset('img/logooderman.png'); ?>">
  
  <!-- Schema.org Structured Data -->
  <?php echo generateSchemaOrg('BlogPosting', [
      'headline' => $lang === 'es' ? $articulo['title_es'] : $articulo['title_en'],
      'description' => $lang === 'es' ? $articulo['excerpt_es'] : $articulo['excerpt_en'],
      'image' => $articulo['image'],
      'datePublished' => $articulo['date'],
      'author' => [
          '@type' => 'Organization',
          'name' => $articulo['author']
      ]
  ]); ?>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <article class="articulo">
      <div class="articulo__header">
        <div class="container-content">
          <nav class="articulo__breadcrumb">
            <a href="<?php echo url(); ?>">Inicio</a>
            <span>/</span>
            <a href="<?php echo $breadcrumbLink; ?>" id="articulo-breadcrumb-link"><?php echo $breadcrumbText; ?></a>
            <span>/</span>
            <span id="articulo-breadcrumb-title"><?php echo htmlspecialchars($lang === 'es' ? $articulo['title_es'] : $articulo['title_en']); ?></span>
          </nav>
          <span class="articulo__category" data-category-es="<?php echo htmlspecialchars($articulo['category_es']); ?>" data-category-en="<?php echo htmlspecialchars($articulo['category_en']); ?>"><?php echo htmlspecialchars($lang === 'es' ? $articulo['category_es'] : $articulo['category_en']); ?></span>
          <h1 class="articulo__titulo" data-title-es="<?php echo htmlspecialchars($articulo['title_es']); ?>" data-title-en="<?php echo htmlspecialchars($articulo['title_en']); ?>"><?php echo htmlspecialchars($lang === 'es' ? $articulo['title_es'] : $articulo['title_en']); ?></h1>
          <div class="articulo__meta">
            <time datetime="<?php echo $articulo['date']; ?>"><?php echo date('d/m/Y', strtotime($articulo['date'])); ?></time>
            <span class="articulo__author"><?php echo htmlspecialchars($articulo['author']); ?></span>
          </div>
        </div>
      </div>
      
      <div class="articulo__imagen-hero">
        <img src="<?php echo htmlspecialchars($articulo['image']); ?>" alt="<?php echo htmlspecialchars($lang === 'es' ? $articulo['title_es'] : $articulo['title_en']); ?>" loading="eager">
      </div>

      <div class="articulo__contenido">
        <div class="container-content">
          <div class="articulo__body" data-content-es="<?php echo htmlspecialchars($articulo['content_es']); ?>" data-content-en="<?php echo htmlspecialchars($articulo['content_en']); ?>">
            <?php echo $lang === 'es' ? $articulo['content_es'] : $articulo['content_en']; ?>
          </div>
          
          <div class="articulo__footer">
            <a href="<?php echo $breadcrumbLink; ?>" class="btn btn--secondary" id="articulo-back-link" data-link-es="← Volver a <?php echo $breadcrumbText; ?>" data-link-en="← Back to <?php echo $tipo === 'noticias' ? 'News' : 'Blog'; ?>">← Volver a <?php echo $breadcrumbText; ?></a>
          </div>
        </div>
      </div>
    </article>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Scripts -->
  <script src="<?php echo asset('js/translations.js'); ?>"></script>
  <script src="<?php echo asset('js/language.js'); ?>"></script>
  <script src="<?php echo asset('js/cookies.js'); ?>"></script>
  <script src="<?php echo asset('js/main.js'); ?>"></script>
  <script>
    // Actualizar contenido del artículo al cambiar idioma
    document.getElementById('language-selector').addEventListener('change', function() {
      var lang = this.value;
      var url = new URL(window.location.href);
      url.searchParams.set('lang', lang);
      window.location.href = url.toString();
    });
  </script>
</body>
</html>
