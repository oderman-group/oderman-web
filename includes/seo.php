<?php
/**
 * Configuración SEO y Meta Tags
 * ODERMAN GROUP SAS
 */

// Configuración base del sitio
$siteConfig = [
    'name' => 'ODERMAN GROUP SAS',
    'url' => 'https://oderman.com.co',
    'description' => 'ODERMAN GROUP SAS — Desarrollo de software a la medida. Soluciones intuitivas y robustas para educación y otros sectores.',
    'keywords' => 'software a la medida, desarrollo de software, Colombia, educación, Sintia, transformación digital, Oderman, consultoría, desarrollo de software profesional',
    'author' => 'ODERMAN GROUP SAS',
    'image' => 'https://oderman.com.co/img/logooderman.png',
    'locale' => 'es_CO',
    'locale_alt' => 'en_US'
];

/**
 * Genera meta tags SEO
 */
function generateSEOTags($page = []) {
    global $siteConfig;
    
    $defaults = [
        'title' => $siteConfig['name'] . ' | Software a la medida',
        'description' => $siteConfig['description'],
        'keywords' => $siteConfig['keywords'],
        'url' => $siteConfig['url'],
        'image' => $siteConfig['image'],
        'type' => 'website',
        'locale' => $siteConfig['locale']
    ];
    
    $page = array_merge($defaults, $page);
    
    $tags = '';
    
    // Title
    $tags .= '<title>' . htmlspecialchars($page['title']) . '</title>' . "\n";
    
    // Canonical
    $tags .= '<link rel="canonical" href="' . htmlspecialchars($page['url']) . '">' . "\n";
    
    // Alternate languages
    if (isset($page['alternate'])) {
        foreach ($page['alternate'] as $lang => $url) {
            $tags .= '<link rel="alternate" hreflang="' . $lang . '" href="' . htmlspecialchars($url) . '">' . "\n";
        }
    }
    
    // Meta description
    $tags .= '<meta name="description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
    
    // Meta keywords
    $tags .= '<meta name="keywords" content="' . htmlspecialchars($page['keywords']) . '">' . "\n";
    
    // Open Graph
    $tags .= '<meta property="og:type" content="' . htmlspecialchars($page['type']) . '">' . "\n";
    $tags .= '<meta property="og:url" content="' . htmlspecialchars($page['url']) . '">' . "\n";
    $tags .= '<meta property="og:title" content="' . htmlspecialchars($page['title']) . '">' . "\n";
    $tags .= '<meta property="og:description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
    $tags .= '<meta property="og:image" content="' . htmlspecialchars($page['image']) . '">' . "\n";
    $tags .= '<meta property="og:locale" content="' . htmlspecialchars($page['locale']) . '">' . "\n";
    $tags .= '<meta property="og:locale:alternate" content="' . $siteConfig['locale_alt'] . '">' . "\n";
    $tags .= '<meta property="og:site_name" content="' . htmlspecialchars($siteConfig['name']) . '">' . "\n";
    
    // Twitter Card
    $tags .= '<meta name="twitter:card" content="summary_large_image">' . "\n";
    $tags .= '<meta name="twitter:title" content="' . htmlspecialchars($page['title']) . '">' . "\n";
    $tags .= '<meta name="twitter:description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
    $tags .= '<meta name="twitter:image" content="' . htmlspecialchars($page['image']) . '">' . "\n";
    
    return $tags;
}

/**
 * Genera Schema.org JSON-LD
 */
function generateSchemaOrg($type = 'Organization', $data = []) {
    global $siteConfig;
    
    $defaults = [
        '@context' => 'https://schema.org',
        '@type' => $type,
        'name' => $siteConfig['name'],
        'url' => $siteConfig['url'],
        'logo' => $siteConfig['image'],
        'description' => $siteConfig['description'],
        'address' => [
            '@type' => 'PostalAddress',
            'addressCountry' => 'CO'
        ],
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'email' => 'info@oderman-group.com',
            'contactType' => 'customer service',
            'availableLanguage' => ['Spanish', 'English']
        ]
    ];
    
    $schema = array_merge($defaults, $data);
    
    return '<script type="application/ld+json">' . "\n" . 
           json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . "\n" . 
           '</script>' . "\n";
}
?>
