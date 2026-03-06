<?php
// Header reutilizable para todas las páginas
// Detectar página actual para resaltar menú
$currentPage = '';
$requestUri = $_SERVER['REQUEST_URI'];
$scriptName = $_SERVER['SCRIPT_NAME'];

// Normalizar URI
$requestUri = str_replace(BASE_PATH, '', $requestUri);
$requestUri = trim($requestUri, '/');
$requestUri = preg_replace('/\?.*/', '', $requestUri); // Quitar query string

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
    $currentPage = 'products'; // Sintia es parte de productos
} elseif (strpos($scriptName, 'index.php') !== false) {
    $currentPage = 'home';
}
?>
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
          <a href="<?php echo url(); ?>" id="nav-home" class="<?php echo $currentPage === 'home' ? 'header__nav-link--active' : ''; ?>">Inicio</a>
          <a href="<?php echo url('nosotros'); ?>" id="nav-about" class="<?php echo $currentPage === 'about' ? 'header__nav-link--active' : ''; ?>">Nosotros</a>
          <a href="<?php echo url('productos'); ?>" id="nav-products" class="<?php echo $currentPage === 'products' ? 'header__nav-link--active' : ''; ?>">Productos</a>
        </nav>
        <div class="language-selector">
          <select id="language-selector" aria-label="Seleccionar idioma">
            <option value="es">ES</option>
            <option value="en">EN</option>
          </select>
        </div>
      </div>
      <button class="header__menu-btn" aria-label="Abrir menú" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>
