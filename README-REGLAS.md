# Reglas y Mejores Prácticas - Sitio Web Profesional

Este documento describe las reglas, estándares y mejores prácticas implementadas en este proyecto web para ser replicadas en proyectos similares.

## 📋 Tabla de Contenidos

1. [Estructura del Proyecto](#estructura-del-proyecto)
2. [Sistema de URLs Amigables](#sistema-de-urls-amigables)
3. [Sistema de Idiomas](#sistema-de-idiomas)
4. [Seguridad](#seguridad)
5. [SEO y Optimización](#seo-y-optimización)
6. [Responsive Design](#responsive-design)
7. [Organización de Código](#organización-de-código)
8. [Gestión de Assets](#gestión-de-assets)
9. [Mejores Prácticas CSS](#mejores-prácticas-css)
10. [Mejores Prácticas PHP](#mejores-prácticas-php)

---

## 🗂️ Estructura del Proyecto

```
proyecto-web/
├── css/
│   └── estilos.css          # Estilos principales
├── js/
│   ├── translations.js       # Traducciones ES/EN
│   └── language.js           # Sistema de cambio de idioma
├── img/
│   ├── clients/             # Logos de clientes
│   └── [otras imágenes]     # Imágenes del sitio
├── includes/
│   ├── config.php           # Configuración base y funciones helper
│   └── seo.php              # Funciones SEO (opcional)
├── .htaccess                # Configuración Apache
├── robots.txt               # Instrucciones para crawlers
├── sitemap.xml              # Mapa del sitio
└── [archivos].php           # Páginas del sitio
```

### Reglas de Estructura:
- ✅ Separar CSS, JS e imágenes en carpetas dedicadas
- ✅ Usar carpeta `includes/` para archivos PHP reutilizables
- ✅ Mantener nombres de archivos en minúsculas con guiones
- ✅ Usar `.php` para todas las páginas (no `.html`)

---

## 🔗 Sistema de URLs Amigables

### Configuración en `.htaccess`

```apache
RewriteEngine On
RewriteBase /nombre-proyecto/

# Permitir acceso directo a archivos y directorios existentes
RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]

# URLs amigables específicas
RewriteRule ^ruta-amigable/?$ archivo.php [L]

# Si el archivo .php existe, servir directamente
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^(.*)$ $1.php [L]

# Si es la raíz, servir index.php
RewriteRule ^$ index.php [L]
```

### Reglas de URLs:
- ✅ Usar slugs en minúsculas con guiones: `/sintia/tarifas-comunicativo`
- ✅ Evitar extensiones `.php` en las URLs públicas
- ✅ Mantener estructura jerárquica: `/categoria/subcategoria`
- ✅ Configurar `RewriteBase` según la ubicación del proyecto

---

## 🌐 Sistema de Idiomas

### Estructura de Traducciones

**Archivo: `js/translations.js`**
```javascript
const translations = {
  es: {
    nav: { home: "Inicio", ... },
    hero: { title: "...", ... },
    sections: { ... },
    footer: { ... }
  },
  en: {
    nav: { home: "Home", ... },
    // ... traducciones en inglés
  }
};
```

**Archivo: `js/language.js`**
- Detecta idioma del navegador o localStorage
- Aplica traducciones automáticamente
- Guarda preferencia del usuario

### Reglas de Traducciones:
- ✅ Estructurar traducciones por secciones lógicas
- ✅ Usar IDs únicos en HTML para elementos traducibles
- ✅ Guardar preferencia en `localStorage`
- ✅ Detectar idioma del navegador como fallback
- ✅ Actualizar `lang` attribute del `<html>`

---

## 🔒 Seguridad

### Headers de Seguridad en `.htaccess`

```apache
# Prevenir clickjacking
Header always set X-Frame-Options "SAMEORIGIN"

# Prevenir MIME type sniffing
Header always set X-Content-Type-Options "nosniff"

# XSS Protection
Header always set X-XSS-Protection "1; mode=block"

# Referrer Policy
Header always set Referrer-Policy "strict-origin-when-cross-origin"
```

### Meta Tags de Seguridad en HTML

```html
<meta http-equiv="Content-Security-Policy" content="...">
<meta http-equiv="X-Content-Type-Options" content="nosniff">
<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
<meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
```

### Reglas de Seguridad:
- ✅ Siempre usar `rel="noopener noreferrer"` en enlaces externos
- ✅ Validar y sanitizar todas las entradas del usuario
- ✅ Usar HTTPS en producción (forzar redirección)
- ✅ Proteger archivos sensibles en `.htaccess`
- ✅ Prevenir listado de directorios: `Options -Indexes`
- ✅ Implementar CSP (Content Security Policy)

---

## 🔍 SEO y Optimización

### Meta Tags Esenciales

```html
<!-- SEO Básico -->
<meta name="description" content="...">
<meta name="keywords" content="...">
<meta name="author" content="...">
<meta name="robots" content="index, follow">
<link rel="canonical" href="...">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:url" content="...">
<meta property="og:title" content="...">
<meta property="og:description" content="...">
<meta property="og:image" content="...">
<meta property="og:locale" content="es_CO">
<meta property="og:locale:alternate" content="en_US">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="...">
<meta name="twitter:description" content="...">
<meta name="twitter:image" content="...">

<!-- Hreflang para multiidioma -->
<link rel="alternate" hreflang="es" href="...">
<link rel="alternate" hreflang="en" href="...">
```

### Schema.org Structured Data

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "...",
  "url": "...",
  "logo": "...",
  "description": "...",
  "address": { ... },
  "contactPoint": { ... },
  "sameAs": [ ... ]
}
</script>
```

### Archivos SEO:
- ✅ `sitemap.xml` - Mapa del sitio con todas las URLs
- ✅ `robots.txt` - Instrucciones para crawlers
- ✅ URLs amigables y descriptivas
- ✅ Títulos únicos por página
- ✅ Meta descriptions únicas (150-160 caracteres)

### Reglas SEO:
- ✅ Un `<h1>` por página
- ✅ Estructura semántica HTML5 (`<header>`, `<main>`, `<section>`, `<footer>`)
- ✅ Alt text descriptivo en todas las imágenes
- ✅ Enlaces internos con anchor text relevante
- ✅ Velocidad de carga optimizada (lazy loading, compresión)

---

## 📱 Responsive Design

### Breakpoints Estándar

```css
/* Desktop First */
@media (max-width: 1024px) { /* Tablets */ }
@media (max-width: 768px) { /* Móviles grandes */ }
@media (max-width: 480px) { /* Móviles pequeños */ }
```

### Reglas Responsive:
- ✅ Mobile-first o Desktop-first (elegir uno y ser consistente)
- ✅ Usar `clamp()` para tipografía fluida
- ✅ Grid y Flexbox para layouts adaptativos
- ✅ Imágenes responsive con `max-width: 100%`
- ✅ Menú hamburguesa para móviles
- ✅ Touch targets mínimo 44x44px
- ✅ Viewport meta tag: `<meta name="viewport" content="width=device-width, initial-scale=1.0">`

### Ejemplo de Grid Responsive:
```css
.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: var(--spacing-lg);
}
```

---

## 💻 Organización de Código

### PHP - Configuración Centralizada

**Archivo: `includes/config.php`**
```php
<?php
// Detectar ruta base automáticamente
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$basePath = ($scriptDir === '/' || $scriptDir === '.' || empty($scriptDir)) ? '' : $scriptDir;
$baseUrl = $protocol . '://' . $host . ($basePath ? $basePath : '');

define('BASE_URL', $baseUrl);
define('BASE_PATH', $basePath);

// Función helper para URLs
function url($path = '') {
    $path = ltrim($path, '/');
    return BASE_URL . ($path ? '/' . $path : '');
}

// Función helper para assets
function asset($path) {
    $path = ltrim($path, '/');
    if (BASE_PATH) {
        return BASE_PATH . '/' . $path;
    }
    return '/' . $path;
}
?>
```

### Reglas PHP:
- ✅ Siempre incluir `config.php` al inicio de cada página
- ✅ Usar funciones helper para URLs y assets
- ✅ Escapar output con `htmlspecialchars()`
- ✅ Validar y sanitizar inputs
- ✅ Usar `__DIR__` para rutas relativas seguras

---

## 🎨 Gestión de Assets

### Rutas de Assets

**❌ Incorrecto (rutas relativas):**
```html
<link rel="stylesheet" href="css/estilos.css">
<img src="img/logo.png">
```

**✅ Correcto (usando función helper):**
```php
<link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
<img src="<?php echo asset('img/logo.png'); ?>">
```

### Reglas de Assets:
- ✅ **NUNCA** usar rutas relativas (`css/estilos.css`)
- ✅ **SIEMPRE** usar función `asset()` para recursos estáticos
- ✅ Usar función `url()` para enlaces internos
- ✅ Esto asegura que funcione con URLs amigables

---

## 🎯 Mejores Prácticas CSS

### Variables CSS (Custom Properties)

```css
:root {
  /* Colores */
  --color-primary: #0066CC;
  --color-primary-dark: #0052A3;
  --color-bg-light: #FFFFFF;
  --color-text-primary: #1A1F2E;
  
  /* Tipografía */
  --font-primary: 'Inter', sans-serif;
  --font-heading: 'Inter', sans-serif;
  
  /* Espaciado */
  --spacing-xs: 0.5rem;
  --spacing-sm: 1rem;
  --spacing-md: 1.5rem;
  --spacing-lg: 2rem;
  --spacing-xl: 3rem;
  
  /* Anchos */
  --container-max: 1280px;
  --container-content: 960px;
  
  /* Sombras */
  --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  
  /* Transiciones */
  --transition-base: 250ms ease;
}
```

### Reglas CSS:
- ✅ Usar variables CSS para valores reutilizables
- ✅ Nomenclatura BEM para clases: `.bloque__elemento--modificador`
- ✅ Mobile-first o Desktop-first (ser consistente)
- ✅ Usar `rem` para tipografía y espaciado
- ✅ Usar `em` solo cuando sea necesario (relativo al elemento padre)
- ✅ Evitar `!important` (solo en casos excepcionales)
- ✅ Organizar CSS por secciones con comentarios

### Estructura CSS Recomendada:
```css
/* 1. Variables y Reset */
/* 2. Utilidades */
/* 3. Layout (Header, Footer) */
/* 4. Componentes */
/* 5. Secciones específicas */
/* 6. Responsive */
/* 7. Print */
```

---

## 🔧 Mejores Prácticas PHP

### Estructura de Páginas PHP

```php
<?php
// 1. Incluir configuración
require_once __DIR__ . '/includes/config.php';

// 2. Configuración de página (SEO, título, etc.)
$pageConfig = [
    'title' => 'Título de la página',
    'description' => 'Descripción...',
    'url' => url('ruta-amigable')
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Meta tags -->
    <!-- Usar asset() para CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
</head>
<body>
    <!-- Contenido -->
    <!-- Usar url() para enlaces internos -->
    <a href="<?php echo url('ruta'); ?>">Enlace</a>
    
    <!-- Usar asset() para imágenes -->
    <img src="<?php echo asset('img/imagen.jpg'); ?>" alt="...">
</body>
</html>
```

### Reglas PHP:
- ✅ Siempre usar `<?php echo ... ?>` para output (nunca `<?= ... ?>` en producción)
- ✅ Escapar output: `htmlspecialchars($variable)`
- ✅ Validar inputs antes de procesar
- ✅ Usar `__DIR__` para rutas de archivos
- ✅ Separar lógica de presentación
- ✅ Comentar código complejo

---

## 🖼️ Gestión de Imágenes

### Reglas de Imágenes:
- ✅ Usar `loading="lazy"` para imágenes below-the-fold
- ✅ Siempre incluir `alt` descriptivo
- ✅ Optimizar imágenes antes de subir (comprimir)
- ✅ Usar formatos modernos: WebP con fallback
- ✅ Tamaños apropiados: máximo 1920px de ancho para web
- ✅ Usar `object-fit: cover` para mantener aspect ratio

### Estructura de Carpetas:
```
img/
├── clients/          # Logos de clientes
├── logos/            # Logos de la empresa
├── sections/         # Imágenes de secciones
└── [otros]/
```

---

## 🎭 Componentes Reutilizables

### Carrusel de Clientes

**HTML:**
```html
<section class="clientes">
  <div class="clientes__contenedor">
    <h2 class="clientes__titulo">Nuestros Clientes</h2>
    <div class="clientes__slider">
      <div class="clientes__track">
        <!-- Items duplicados para efecto infinito -->
      </div>
    </div>
  </div>
</section>
```

**CSS:**
- Usar `animation` para movimiento continuo
- Duplicar items para efecto infinito
- Mask para fade en los bordes
- Hover pausa la animación

---

## 📊 Performance

### Optimizaciones Implementadas:

1. **Compresión GZIP** (en `.htaccess`)
2. **Cache de archivos estáticos** (en `.htaccess`)
3. **Lazy loading** de imágenes
4. **Minificación** de CSS/JS (en producción)
5. **CDN** para fuentes (Google Fonts)

### Reglas de Performance:
- ✅ Minimizar requests HTTP
- ✅ Combinar archivos CSS/JS cuando sea posible
- ✅ Usar sprites para iconos pequeños
- ✅ Optimizar imágenes (comprimir, formato adecuado)
- ✅ Usar `preconnect` para recursos externos

---

## ♿ Accesibilidad

### Reglas de Accesibilidad:
- ✅ Usar HTML semántico (`<nav>`, `<main>`, `<section>`)
- ✅ `aria-label` en elementos interactivos sin texto
- ✅ `aria-expanded` en menús desplegables
- ✅ Contraste de colores WCAG AA mínimo
- ✅ Navegación por teclado funcional
- ✅ Textos alternativos descriptivos en imágenes
- ✅ Estructura de encabezados lógica (h1 → h2 → h3)

---

## 🔄 Versionado y Control

### Reglas Git:
- ✅ Commits descriptivos
- ✅ `.gitignore` configurado correctamente
- ✅ No commitear archivos sensibles
- ✅ Branching strategy clara
- ✅ Tags para releases

---

## 📝 Checklist de Implementación

### Al crear un nuevo proyecto similar:

- [ ] Estructura de carpetas creada
- [ ] `.htaccess` configurado con URLs amigables
- [ ] `includes/config.php` con funciones helper
- [ ] Sistema de idiomas implementado
- [ ] Meta tags SEO en todas las páginas
- [ ] Schema.org structured data
- [ ] `sitemap.xml` y `robots.txt`
- [ ] Headers de seguridad configurados
- [ ] CSS con variables y responsive
- [ ] Todas las rutas usan `asset()` y `url()`
- [ ] Imágenes con lazy loading
- [ ] Accesibilidad implementada
- [ ] Testing en múltiples dispositivos

---

## 🚀 Deployment

### Checklist Pre-Deployment:

- [ ] Cambiar URLs de desarrollo a producción
- [ ] Habilitar HTTPS y forzar redirección
- [ ] Verificar que todas las rutas funcionen
- [ ] Optimizar imágenes
- [ ] Minificar CSS/JS
- [ ] Verificar meta tags
- [ ] Probar en diferentes navegadores
- [ ] Verificar responsive en dispositivos reales
- [ ] Testing de velocidad (PageSpeed Insights)
- [ ] Verificar SSL y certificados

---

## 📚 Recursos Adicionales

### Herramientas Recomendadas:
- **SEO**: Google Search Console, Google Analytics
- **Performance**: PageSpeed Insights, GTmetrix
- **Accesibilidad**: WAVE, axe DevTools
- **Validación**: W3C Validator
- **Imágenes**: TinyPNG, Squoosh

### Estándares a Seguir:
- HTML5 Semántico
- WCAG 2.1 AA (Accesibilidad)
- W3C Standards
- Mobile-First Design
- Progressive Enhancement

---

## ⚠️ Notas Importantes

1. **Nunca** usar rutas relativas para assets cuando hay URLs amigables
2. **Siempre** usar funciones helper (`asset()`, `url()`)
3. **Validar** todas las entradas del usuario
4. **Escapar** todo el output PHP
5. **Optimizar** imágenes antes de subir
6. **Probar** en múltiples navegadores y dispositivos
7. **Documentar** código complejo
8. **Mantener** consistencia en nomenclatura

---

## 📞 Soporte

Para replicar este proyecto:
1. Copiar estructura de carpetas
2. Implementar `config.php` con funciones helper
3. Configurar `.htaccess` según estructura de URLs
4. Implementar sistema de idiomas
5. Aplicar estilos siguiendo el sistema de variables CSS
6. Seguir las reglas de seguridad y SEO

---

**Última actualización:** 2025-03-05
**Versión:** 1.0
