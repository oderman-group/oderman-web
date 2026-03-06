<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => 'Términos y Condiciones | ODERMAN GROUP SAS',
    'description' => 'Términos y condiciones de uso del sitio web de ODERMAN GROUP SAS. Reglas y condiciones para el uso de nuestros servicios.',
    'keywords' => 'términos y condiciones, términos de uso, condiciones de servicio, ODERMAN GROUP SAS',
    'url' => url('terminos'),
    'alternate' => [
        'es' => url('terminos'),
        'en' => url('terminos') . '?lang=en'
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
      'name' => 'Términos y Condiciones',
      'description' => $pageData['description']
  ]); ?>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="hero hero--legal">
      <div class="hero__contenedor">
        <h1 id="terms-title">Términos y Condiciones</h1>
        <p class="hero__subtitulo" id="terms-updated">Última actualización: <?php echo date('d/m/Y'); ?></p>
      </div>
    </section>

    <section class="contenido contenido--legal">
      <div class="contenido__contenedor">
        <div class="contenido__texto">
          <h2 id="terms-intro-title">1. Aceptación de los Términos</h2>
          <p id="terms-intro-text">Al acceder y utilizar el sitio web de ODERMAN GROUP SAS (en adelante, "el Sitio"), aceptas cumplir con estos Términos y Condiciones de Uso. Si no estás de acuerdo con alguna parte de estos términos, no debes utilizar el Sitio.</p>

          <h2 id="terms-use-title">2. Uso del Sitio</h2>
          <p id="terms-use-text">El Sitio está destinado para uso informativo y comercial. Te comprometes a:</p>
          <ul>
            <li id="terms-use-1">Utilizar el Sitio únicamente para fines legales y de acuerdo con estos términos.</li>
            <li id="terms-use-2">No realizar actividades que puedan dañar, deshabilitar o sobrecargar el Sitio.</li>
            <li id="terms-use-3">No intentar acceder a áreas restringidas del Sitio o a sistemas relacionados.</li>
            <li id="terms-use-4">No utilizar robots, scripts automatizados o métodos similares para acceder al Sitio.</li>
            <li id="terms-use-5">Respetar los derechos de propiedad intelectual de ODERMAN GROUP SAS y terceros.</li>
          </ul>

          <h2 id="terms-property-title">3. Propiedad Intelectual</h2>
          <p id="terms-property-text">Todo el contenido del Sitio, incluyendo pero no limitado a textos, gráficos, logos, iconos, imágenes, clips de audio, descargas digitales y compilaciones de datos, es propiedad de ODERMAN GROUP SAS o de sus proveedores de contenido y está protegido por las leyes de propiedad intelectual de Colombia e internacionales.</p>
          <p id="terms-property-text2">No puedes reproducir, distribuir, modificar, crear obras derivadas, mostrar públicamente, realizar ingeniería inversa, descompilar o desensamblar cualquier parte del Sitio sin el consentimiento previo por escrito de ODERMAN GROUP SAS.</p>

          <h2 id="terms-accounts-title">4. Cuentas de Usuario</h2>
          <p id="terms-accounts-text">Si creas una cuenta en el Sitio, eres responsable de:</p>
          <ul>
            <li id="terms-accounts-1">Mantener la confidencialidad de tu contraseña y cuenta.</li>
            <li id="terms-accounts-2">Todas las actividades que ocurran bajo tu cuenta.</li>
            <li id="terms-accounts-3">Notificarnos inmediatamente de cualquier uso no autorizado de tu cuenta.</li>
            <li id="terms-accounts-4">Proporcionar información precisa y actualizada.</li>
          </ul>

          <h2 id="terms-services-title">5. Servicios y Productos</h2>
          <p id="terms-services-text">ODERMAN GROUP SAS se reserva el derecho de modificar, suspender o discontinuar cualquier servicio o producto ofrecido en el Sitio en cualquier momento sin previo aviso. No garantizamos que el Sitio esté disponible de forma ininterrumpida o libre de errores.</p>

          <h2 id="terms-liability-title">6. Limitación de Responsabilidad</h2>
          <p id="terms-liability-text">En la máxima medida permitida por la ley, ODERMAN GROUP SAS no será responsable de:</p>
          <ul>
            <li id="terms-liability-1">Daños directos, indirectos, incidentales, especiales o consecuentes.</li>
            <li id="terms-liability-2">Pérdida de beneficios, datos o oportunidades comerciales.</li>
            <li id="terms-liability-3">Interrupciones en el servicio o errores técnicos.</li>
            <li id="terms-liability-4">Contenido de sitios web de terceros enlazados desde el Sitio.</li>
          </ul>
          <p id="terms-liability-text2">El uso del Sitio es bajo tu propio riesgo. El Sitio se proporciona "tal cual" y "según disponibilidad".</p>

          <h2 id="terms-links-title">7. Enlaces a Terceros</h2>
          <p id="terms-links-text">El Sitio puede contener enlaces a sitios web de terceros. Estos enlaces se proporcionan únicamente para tu conveniencia. ODERMAN GROUP SAS no tiene control sobre el contenido de estos sitios y no asume responsabilidad por ellos. La inclusión de cualquier enlace no implica respaldo por parte de ODERMAN GROUP SAS.</p>

          <h2 id="terms-privacy-title">8. Privacidad</h2>
          <p id="terms-privacy-text">El uso del Sitio también se rige por nuestra <a href="<?php echo url('privacidad'); ?>">Política de Privacidad</a>, que forma parte de estos Términos y Condiciones mediante esta referencia.</p>

          <h2 id="terms-changes-title">9. Modificaciones</h2>
          <p id="terms-changes-text">ODERMAN GROUP SAS se reserva el derecho de modificar estos Términos y Condiciones en cualquier momento. Las modificaciones entrarán en vigor inmediatamente después de su publicación en el Sitio. Es tu responsabilidad revisar periódicamente estos términos. El uso continuado del Sitio después de cualquier modificación constituye tu aceptación de los nuevos términos.</p>

          <h2 id="terms-law-title">10. Ley Aplicable</h2>
          <p id="terms-law-text">Estos Términos y Condiciones se rigen por las leyes de la República de Colombia. Cualquier disputa relacionada con estos términos será sometida a la jurisdicción exclusiva de los tribunales de Colombia.</p>

          <h2 id="terms-contact-title">11. Contacto</h2>
          <p id="terms-contact-text">Si tienes preguntas sobre estos Términos y Condiciones, puedes contactarnos:</p>
          <ul>
            <li id="terms-contact-1"><strong>Email:</strong> <a href="mailto:info@oderman-group.com">info@oderman-group.com</a></li>
            <li id="terms-contact-2"><strong>Teléfono:</strong> <a href="tel:+573006075800">+57 300 607 5800</a></li>
            <li id="terms-contact-3"><strong>Empresa:</strong> ODERMAN GROUP SAS</li>
          </ul>
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
