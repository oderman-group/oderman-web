<?php
/**
 * Configuración base del sitio
 * ODERMAN GROUP SAS
 */

// Detectar la ruta base del proyecto automáticamente
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];

// Obtener el directorio del script actual (más confiable)
$scriptName = $_SERVER['SCRIPT_NAME'];
$scriptDir = dirname($scriptName);

// Normalizar la ruta (convertir \ a / y eliminar .)
$scriptDir = str_replace('\\', '/', $scriptDir);
$scriptDir = rtrim($scriptDir, '/');

// Si el script está en la raíz de htdocs, usar ''
// Si está en una subcarpeta (como /oderman-web), usar esa ruta
if ($scriptDir === '/' || $scriptDir === '.' || empty($scriptDir)) {
    $basePath = '';
} else {
    $basePath = $scriptDir;
}

$baseUrl = $protocol . '://' . $host . ($basePath ? $basePath : '');

// Definir constante para usar en todo el sitio
define('BASE_URL', $baseUrl);
define('BASE_PATH', $basePath);

// Función helper para generar URLs
function url($path = '') {
    $path = ltrim($path, '/');
    return BASE_URL . ($path ? '/' . $path : '');
}

// Función helper para assets (CSS, JS, imágenes) - siempre desde la raíz del proyecto
function asset($path) {
    $path = ltrim($path, '/');
    if (BASE_PATH) {
        return BASE_PATH . '/' . $path;
    }
    return '/' . $path;
}
?>
