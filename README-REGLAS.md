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
│   ├── language.js           # Sistema de cambio de idioma
│   ├── cookies.js            # Gestión de cookies
│   └── main.js               # Scripts comunes (menú, scroll-to-top)
├── img/
│   ├── clients/              # Logos de clientes
│   ├── certificaciones/      # Logos de certificaciones
│   ├── blog/                 # Imágenes del blog
│   ├── news/                 # Imágenes de noticias
│   ├── icons/                # Iconos SVG
│   └── [otras imágenes]      # Imágenes del sitio
├── includes/
│   ├── config.php            # Configuración base y funciones helper
│   ├── seo.php               # Funciones SEO
│   ├── header.php            # Header reutilizable
│   ├── footer.php            # Footer reutilizable
│   ├── articulos.php         # Datos de artículos del blog
│   └── noticias.php          # Datos de noticias
├── .htaccess                 # Configuración Apache
├── robots.txt                # Instrucciones para crawlers
├── sitemap.xml               # Mapa del sitio
├── 404.php                   # Página de error 404 personalizada
├── privacidad.php            # Política de privacidad
├── terminos.php              # Términos y condiciones
├── cookies.php               # Política de cookies
└── [archivos].php            # Páginas del sitio
```

### Reglas de Estructura:
- ✅ Separar CSS, JS e imágenes en carpetas dedicadas
- ✅ Usar carpeta `includes/` para archivos PHP reutilizables
- ✅ **Centralizar componentes**: Header y Footer en `includes/`
- ✅ **Centralizar scripts comunes**: Menú móvil y scroll-to-top en `main.js`
- ✅ Mantener nombres de archivos en minúsculas con guiones
- ✅ Usar `.php` para todas las páginas (no `.html`)
- ✅ Organizar imágenes por tipo/categoría en subcarpetas

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

### Componentes Centralizados

**Archivo: `includes/header.php`**
- Header reutilizable con logo, navegación y selector de idioma
- Detección automática de página activa para resaltar menú
- Menú móvil con botón hamburguesa
- **Regla**: Incluir con `<?php include __DIR__ . '/includes/header.php'; ?>`

**Archivo: `includes/footer.php`**
- Footer reutilizable con enlaces, contacto, redes sociales
- Cookie consent banner integrado
- Panel de configuración de cookies
- Botón scroll-to-top
- Detección de página activa para resaltar enlaces
- **Regla**: Incluir con `<?php include __DIR__ . '/includes/footer.php'; ?>`

### JavaScript Centralizado

**Archivo: `js/main.js`**
- Actualización del año actual
- Lógica del menú móvil (abrir/cerrar, cerrar al hacer clic en enlace o fuera)
- Lógica del botón scroll-to-top (mostrar/ocultar, scroll suave)
- **Regla**: Incluir en todas las páginas después de otros scripts

### Reglas PHP:
- ✅ Siempre incluir `config.php` al inicio de cada página
- ✅ **Usar componentes centralizados**: Header y Footer desde `includes/`
- ✅ **No duplicar código**: Usar `includes/header.php` y `includes/footer.php`
- ✅ Usar funciones helper para URLs y assets
- ✅ Escapar output con `htmlspecialchars()`
- ✅ Validar y sanitizar inputs
- ✅ Usar `__DIR__` para rutas relativas seguras
- ✅ **Eliminar scripts duplicados**: Usar `main.js` para funcionalidad común

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
  --color-primary-rgb: 0, 102, 204; /* Para rgba() */
  --color-primary-dark: #0052A3;
  --color-bg-light: #FFFFFF;
  --color-bg-dark: #1A1F2E;
  --color-text-primary: #1A1F2E;
  --color-text-white: #FFFFFF;
  --color-border: rgba(0, 0, 0, 0.1);
  
  /* Tipografía */
  --font-primary: 'Inter', sans-serif;
  --font-heading: 'Inter', sans-serif;
  
  /* Espaciado */
  --spacing-xs: 0.5rem;
  --spacing-sm: 1rem;
  --spacing-md: 1.5rem;
  --spacing-lg: 2rem;
  --spacing-xl: 3rem;
  --spacing-2xl: 4rem;
  --spacing-3xl: 6rem;
  
  /* Anchos */
  --container-max: 1280px;
  --container-content: 960px; /* IMPORTANTE: Usar esta clase */
  
  /* Sombras */
  --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
  
  /* Transiciones */
  --transition-base: 250ms ease;
}
```

### Clases de Contenedor

**✅ CORRECTO:**
```html
<div class="container-content">
  <!-- Contenido centrado con max-width: 960px -->
</div>
```

**❌ INCORRECTO:**
```html
<div class="contenedor">
  <!-- Esta clase no está definida en CSS -->
</div>
```

### Reglas CSS:
- ✅ Usar variables CSS para valores reutilizables
- ✅ **Usar `container-content` para contenido principal**: No inventar clases no definidas
- ✅ Nomenclatura BEM para clases: `.bloque__elemento--modificador`
- ✅ Mobile-first o Desktop-first (ser consistente)
- ✅ Usar `rem` para tipografía y espaciado
- ✅ Usar `em` solo cuando sea necesario (relativo al elemento padre)
- ✅ Evitar `!important` (solo en casos excepcionales)
- ✅ Organizar CSS por secciones con comentarios
- ✅ **Definir clases antes de usarlas**: Verificar que existan en CSS

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
require_once __DIR__ . '/includes/seo.php';

// 2. Configuración de página (SEO, título, etc.)
$pageData = [
    'title' => 'Título de la página',
    'description' => 'Descripción...',
    'keywords' => 'palabra1, palabra2',
    'url' => url('ruta-amigable'),
    'image' => asset('img/og-image.jpg'),
    'alternate' => [
        'es' => url('ruta-amigable'),
        'en' => url('ruta-amigable') . '?lang=en'
    ]
];

// 3. Detectar idioma
$lang = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'es';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo generateSeoTags($pageData, $lang); ?>
    <title><?php echo $pageData['title']; ?></title>
    <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
</head>
<body>
    <?php include __DIR__ . '/includes/header.php'; ?>
    
    <main>
        <!-- Contenido de la página -->
        <!-- Usar container-content para mantener ancho máximo -->
        <section class="seccion">
            <div class="container-content">
                <!-- Contenido aquí -->
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
```

### Reglas PHP:
- ✅ Siempre usar `<?php echo ... ?>` para output (nunca `<?= ... ?>` en producción)
- ✅ Escapar output: `htmlspecialchars($variable)`
- ✅ Validar inputs antes de procesar
- ✅ Usar `__DIR__` para rutas de archivos
- ✅ Separar lógica de presentación
- ✅ Comentar código complejo
- ✅ **Usar componentes centralizados**: Header y Footer
- ✅ **Usar `container-content`**: No usar clases no definidas como `contenedor`
- ✅ **Incluir todos los scripts necesarios**: translations.js, language.js, cookies.js, main.js

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

### Header Centralizado

**Uso:**
```php
<?php include __DIR__ . '/includes/header.php'; ?>
```

**Características:**
- Logo y navegación principal
- Selector de idioma unificado (`<select id="language-selector">`)
- Menú móvil con botón hamburguesa
- Detección automática de página activa
- Resaltado de enlace activo con clase `header__nav-link--active`

### Footer Centralizado

**Uso:**
```php
<?php include __DIR__ . '/includes/footer.php'; ?>
```

**Características:**
- Enlaces organizados por secciones
- Información de contacto y sedes
- Redes sociales
- Cookie consent banner integrado
- Panel de configuración de cookies
- Botón scroll-to-top
- Detección de página activa para resaltar enlaces
- NIT y datos legales

### Cookie Consent System

**Archivo: `js/cookies.js`**
- Banner de consentimiento
- Panel de configuración (necesarias, analíticas, marketing)
- Guardado de preferencias en localStorage
- Cumplimiento con GDPR/LGPD

**Páginas legales requeridas:**
- `privacidad.php` - Política de privacidad
- `terminos.php` - Términos y condiciones
- `cookies.php` - Política de cookies

### Scroll to Top Button

**HTML (incluido en footer.php):**
```html
<button id="scroll-to-top" class="scroll-to-top" aria-label="Volver arriba">
  <svg viewBox="0 0 24 24" fill="currentColor">
    <path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/>
  </svg>
</button>
```

**Características:**
- Aparece automáticamente al hacer scroll (>300px)
- Scroll suave al hacer clic
- Flecha apunta hacia arriba
- Hover con color suave (no blanco para mantener visibilidad)

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
- Logos con `object-fit: contain` para mantener proporción

### Sistema de Blog/Noticias

**Estructura:**
- `blog.php` / `noticias.php` - Páginas de listado
- `articulo.php` - Página individual (dinámica)
- `includes/articulos.php` - Datos de artículos del blog
- `includes/noticias.php` - Datos de noticias

**Características:**
- URLs amigables: `/blog/slug-articulo` o `/noticias/slug-noticia`
- Sistema de traducciones integrado
- Imágenes optimizadas con lazy loading
- Schema.org Article markup
- Breadcrumbs para SEO

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

**Estructura Base:**
- [ ] Estructura de carpetas creada (css/, js/, img/, includes/)
- [ ] `.htaccess` configurado con URLs amigables
- [ ] `includes/config.php` con funciones helper (`url()`, `asset()`)
- [ ] `includes/seo.php` con función `generateSeoTags()`

**Componentes Centralizados:**
- [ ] `includes/header.php` creado y funcional
- [ ] `includes/footer.php` creado y funcional
- [ ] `js/main.js` con scripts comunes (menú, scroll-to-top)
- [ ] Todas las páginas usan componentes centralizados (no código duplicado)

**Sistema de Idiomas:**
- [ ] `js/translations.js` con estructura de traducciones
- [ ] `js/language.js` implementado
- [ ] Selector de idioma unificado (`<select id="language-selector">`)
- [ ] Detección de idioma del navegador

**SEO y Optimización:**
- [ ] Meta tags SEO en todas las páginas
- [ ] Schema.org structured data
- [ ] `sitemap.xml` y `robots.txt`
- [ ] Open Graph y Twitter Cards
- [ ] Hreflang para multiidioma

**Seguridad:**
- [ ] Headers de seguridad configurados en `.htaccess`
- [ ] Meta tags de seguridad en HTML
- [ ] Cookie consent system implementado
- [ ] Páginas legales: `privacidad.php`, `terminos.php`, `cookies.php`

**Diseño y CSS:**
- [ ] CSS con variables y responsive
- [ ] **Usar `container-content` para contenido principal** (no clases no definidas)
- [ ] Breakpoints responsive definidos
- [ ] Menú móvil funcional

**Funcionalidad:**
- [ ] Todas las rutas usan `asset()` y `url()`
- [ ] Imágenes con lazy loading
- [ ] Scroll-to-top button funcional
- [ ] Active menu highlighting en header y footer
- [ ] Cookie consent banner y panel

**Páginas Especiales:**
- [ ] `404.php` personalizada
- [ ] Páginas legales completas
- [ ] Blog/Noticias (si aplica)

**Accesibilidad:**
- [ ] HTML semántico
- [ ] `aria-label` en elementos interactivos
- [ ] Contraste de colores WCAG AA
- [ ] Navegación por teclado funcional

**Testing:**
- [ ] Testing en múltiples dispositivos
- [ ] Verificar que no haya código duplicado
- [ ] Verificar que todas las páginas usen componentes centralizados
- [ ] Verificar que no haya clases CSS no definidas

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

### Errores Comunes a Evitar:

1. **❌ NUNCA usar rutas relativas** para assets cuando hay URLs amigables
   - ✅ **SIEMPRE** usar funciones helper (`asset()`, `url()`)

2. **❌ NUNCA duplicar código** de header/footer en cada página
   - ✅ **SIEMPRE** usar `includes/header.php` y `includes/footer.php`

3. **❌ NUNCA usar clases CSS no definidas** como `contenedor`
   - ✅ **SIEMPRE** usar `container-content` (definida en CSS)

4. **❌ NUNCA duplicar scripts** de menú móvil o scroll-to-top
   - ✅ **SIEMPRE** usar `js/main.js` centralizado

5. **❌ NUNCA dejar código HTML después de `</html>`**
   - ✅ Verificar que el archivo termine correctamente

6. **❌ NUNCA usar diferentes estructuras** de footer en diferentes páginas
   - ✅ **SIEMPRE** usar el mismo footer centralizado

### Reglas Críticas:

1. **Validar** todas las entradas del usuario
2. **Escapar** todo el output PHP con `htmlspecialchars()`
3. **Optimizar** imágenes antes de subir
4. **Probar** en múltiples navegadores y dispositivos
5. **Documentar** código complejo
6. **Mantener** consistencia en nomenclatura
7. **Verificar** que no haya código duplicado antes de commit
8. **Usar** componentes centralizados para mantener consistencia
9. **Verificar** que todas las clases CSS estén definidas
10. **Incluir** todos los scripts necesarios: translations.js, language.js, cookies.js, main.js

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

## 🔄 Sistema de Menú Activo

### Detección de Página Activa

**En `includes/header.php`:**
```php
<?php
// Detectar página actual para resaltar menú
$currentPage = '';
$requestUri = $_SERVER['REQUEST_URI'];
// ... lógica de detección ...

// Aplicar clase activa
<a href="<?php echo url(); ?>" class="<?php echo $currentPage === 'home' ? 'header__nav-link--active' : ''; ?>">Inicio</a>
```

**En `includes/footer.php`:**
```php
<a href="<?php echo url(); ?>" class="<?php echo $currentPage === 'home' ? 'footer__link--active' : ''; ?>">Inicio</a>
```

**CSS:**
```css
.header__nav-link--active {
  border-bottom: 2px solid var(--color-primary);
  font-weight: 600;
}

.footer__link--active {
  color: var(--color-primary);
  font-weight: 600;
}
```

## 🍪 Sistema de Cookies

### Implementación Completa

**Archivo: `js/cookies.js`**
- Banner de consentimiento
- Panel de configuración
- Guardado de preferencias en localStorage
- Tipos: Necesarias, Analíticas, Marketing

**HTML (incluido en footer.php):**
```html
<div id="cookie-consent" class="cookie-consent">
  <!-- Banner de consentimiento -->
</div>
<div id="cookie-settings-panel" class="cookie-settings">
  <!-- Panel de configuración -->
</div>
```

**Reglas:**
- ✅ Mostrar banner en primera visita
- ✅ Guardar preferencias en localStorage
- ✅ No mostrar banner si ya hay preferencias guardadas
- ✅ Enlaces a páginas legales (privacidad, términos, cookies)

## 📄 Páginas Legales

### Estructura Requerida

1. **`privacidad.php`** - Política de privacidad
2. **`terminos.php`** - Términos y condiciones
3. **`cookies.php`** - Política de cookies
4. **`404.php`** - Página de error personalizada

**Características:**
- Mismo diseño que el resto del sitio
- Header y footer centralizados
- Sistema de traducciones
- Enlaces en el footer

## 📰 Sistema de Blog/Noticias

### Estructura de Datos

**Archivo: `includes/articulos.php`:**
```php
<?php
$articulos = [
    'slug-articulo' => [
        'slug' => 'slug-articulo',
        'title_es' => 'Título en español',
        'title_en' => 'Title in English',
        'excerpt_es' => 'Resumen...',
        'excerpt_en' => 'Excerpt...',
        'content_es' => '<p>Contenido...</p>',
        'content_en' => '<p>Content...</p>',
        'date' => '2024-01-15',
        'author' => 'Autor',
        'image' => asset('img/blog/imagen.webp'),
        'category_es' => 'Categoría',
        'category_en' => 'Category',
        'tags_es' => ['tag1', 'tag2'],
        'tags_en' => ['tag1', 'tag2'],
        'references_es' => [],
        'references_en' => []
    ]
];
?>
```

**Página dinámica `articulo.php`:**
- Detecta si es blog o noticia (`?type=news`)
- Carga contenido desde array correspondiente
- URLs amigables: `/blog/slug` o `/noticias/slug`
- Schema.org Article markup
- Breadcrumbs

---

**Última actualización:** 2025-01-28
**Versión:** 2.0
