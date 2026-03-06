<?php
require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Security Headers -->
  <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self';">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
  <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">
  
  <meta name="description" content="Tarifas del módulo comunicativo de SINTIA: email, SMS y notificaciones WhatsApp. Precios individuales y por paquetes para instituciones educativas.">
  <meta name="keywords" content="SINTIA, módulo comunicativo, tarifas, email, SMS, WhatsApp, comunicados, Oderman">
  <meta name="author" content="ODERMAN GROUP SAS">
  <meta name="robots" content="index, follow">

  <title>Tarifas módulo comunicativo | ODERMAN GROUP SAS</title>
  <link rel="canonical" href="https://oderman.com.co/sintia/tarifas-comunicativo">
  <link rel="alternate" hreflang="es" href="https://oderman.com.co/sintia/tarifas-comunicativo">
  <link rel="alternate" hreflang="en" href="https://oderman.com.co/sintia/tarifas-comunicativo?lang=en">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo asset('css/estilos.css'); ?>">
  <link rel="icon" type="image/png" href="<?php echo asset('img/logooderman.png'); ?>">
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main class="pagina-interna">
    <section class="hero hero--compacto">
      <div class="hero__contenedor">
        <p class="hero__etiqueta">SINTIA</p>
        <h1 class="hero__titulo">Tarifas del módulo comunicativo</h1>
        <p class="hero__subtitulo">Precios de email, SMS y notificaciones WhatsApp para instituciones que usan la plataforma SINTIA.</p>
      </div>
    </section>

    <section class="seccion">
      <div class="container-content">
        <p class="seccion__intro">El <strong>módulo comunicativo de SINTIA</strong> permite enviar comunicados y notificaciones por correo electrónico, SMS y WhatsApp a estudiantes, acudientes y docentes. Las tarifas aplican por mensaje enviado; los paquetes precomprados ofrecen un mejor valor por unidad.</p>

        <div class="tarifas__aviso" role="note">
          <h2 class="tarifas__aviso-titulo">Importante sobre los precios</h2>
          <p>Los valores mostrados son <strong>estimados</strong> y pueden variar en cualquier momento. Dependen de nuestro proveedor de comunicaciones y de factores externos como el tipo de cambio del dólar, costos de operadores y políticas de las plataformas. La tarifa final aplicable será la vigente al momento de la compra o del envío, según corresponda. Te recomendamos confirmar precios con nosotros antes de adquirir paquetes.</p>
        </div>

        <div class="tarifas">
          <article class="tarifa">
            <div class="tarifa__encabezado">
              <span class="tarifa__icono" aria-hidden="true">✉</span>
              <h2 class="tarifa__titulo">Email</h2>
            </div>
            <ul class="tarifa__lista">
              <li>
                <span class="tarifa__concepto">Por mensaje suelto</span>
                <span class="tarifa__precio">$20 <abbr title="pesos colombianos">COP</abbr> / mensaje</span>
              </li>
              <li class="tarifa__destacado">
                <span class="tarifa__concepto">Paquete 10.000 emails</span>
                <span class="tarifa__precio">$10 <abbr title="pesos colombianos">COP</abbr> / mensaje</span>
              </li>
              <li class="tarifa__total">
                <span class="tarifa__concepto">Total del paquete</span>
                <span class="tarifa__precio">$100.000 <abbr title="pesos colombianos">COP</abbr></span>
              </li>
            </ul>
          </article>

          <article class="tarifa">
            <div class="tarifa__encabezado">
              <span class="tarifa__icono" aria-hidden="true">📱</span>
              <h2 class="tarifa__titulo">SMS</h2>
            </div>
            <ul class="tarifa__lista">
              <li>
                <span class="tarifa__concepto">Por mensaje suelto</span>
                <span class="tarifa__precio">$300 <abbr title="pesos colombianos">COP</abbr> / mensaje</span>
              </li>
              <li class="tarifa__destacado">
                <span class="tarifa__concepto">Paquete 1.000 SMS</span>
                <span class="tarifa__precio">$280 <abbr title="pesos colombianos">COP</abbr> / mensaje</span>
              </li>
              <li class="tarifa__total">
                <span class="tarifa__concepto">Total del paquete</span>
                <span class="tarifa__precio">$280.000 <abbr title="pesos colombianos">COP</abbr></span>
              </li>
            </ul>
          </article>

          <article class="tarifa">
            <div class="tarifa__encabezado">
              <span class="tarifa__icono" aria-hidden="true">💬</span>
              <h2 class="tarifa__titulo">WhatsApp</h2>
            </div>
            <ul class="tarifa__lista">
              <li>
                <span class="tarifa__concepto">Por mensaje suelto</span>
                <span class="tarifa__precio">$150 <abbr title="pesos colombianos">COP</abbr> / mensaje</span>
              </li>
              <li class="tarifa__destacado">
                <span class="tarifa__concepto">Paquete 1.000 notificaciones</span>
                <span class="tarifa__precio">$110 <abbr title="pesos colombianos">COP</abbr> / mensaje</span>
              </li>
              <li class="tarifa__total">
                <span class="tarifa__concepto">Total del paquete</span>
                <span class="tarifa__precio">$110.000 <abbr title="pesos colombianos">COP</abbr></span>
              </li>
            </ul>
          </article>
        </div>

        <div class="tarifas__aclaraciones">
          <h2 class="seccion__titulo">Aclaraciones y ejemplos</h2>
          <ul class="tarifas__lista-aclaraciones">
            <li><strong>¿Qué se cobra?</strong> Cada envío a un destinatario cuenta como un (1) mensaje. Por ejemplo: un mismo comunicado enviado a 500 acudientes por email = 500 mensajes; si lo envías además por SMS a los mismos 500 = otros 500 mensajes.</li>
            <li><strong>Tipo de mensaje:</strong> En <strong>email</strong> y <strong>SMS</strong> puedes usar mensajes abiertos (texto libre) para enviar a los usuarios el contenido que definas. En <strong>WhatsApp</strong> solo se usan notificaciones predeterminadas (plantillas aprobadas), ya que por políticas de META no está permitido enviar mensajes abiertos o de texto libre.</li>
            <li><strong>Recomendación de uso:</strong> Te recomendamos usar <strong>email</strong> para comunicaciones de todo tipo (circulares, recordatorios, reportes). Reserva <strong>WhatsApp</strong> únicamente para lo más importante (alertas, avisos urgentes). Usa <strong>SMS</strong> solo en casos especiales, ya que son los más costosos por mensaje.</li>
            <li><strong>Email:</strong> Un correo enviado a una dirección cuenta como un mensaje. Útil para circulares, recordatorios o reportes. Ejemplo: envío de boletines a 2.000 familias = 2.000 mensajes. Con paquete de 10.000 pagarías $10 por cada uno (total $100.000 COP estimado).</li>
            <li><strong>SMS:</strong> El valor mostrado aplica por <strong>1 mensaje de hasta 150 caracteres</strong>. Cada vez que se supere esa cantidad, cuenta como un mensaje nuevo aunque vaya en el mismo envío (por ejemplo, un texto de 400 caracteres = 3 mensajes). Un mensaje de texto a un número celular = un mensaje. Ejemplo: recordatorio de reunión a 300 padres = 300 mensajes. Un paquete de 1.000 SMS tendría un total de $280.000 COP (estimado).</li>
            <li><strong>WhatsApp:</strong> Cada notificación enviada por WhatsApp a un número cuenta como un mensaje. Solo notificaciones predeterminadas (plantillas). Ejemplo: aviso de entrega de notas a 800 contactos = 800 mensajes. Paquete de 1.000 = $110.000 COP total (estimado).</li>
            <li><strong>Paquetes:</strong> Los paquetes son cantidades precompradas que se descuentan según uses (envío a envío). No tienen que usarse en un solo envío masivo: puedes gastar el paquete a lo largo del tiempo. Los totales por paquete que mostramos son referencia; el precio final puede variar como se indica arriba.</li>
          </ul>
        </div>

        <p class="tarifas__nota">Para convenios institucionales, cotizaciones o paquetes a la medida, contáctanos por <a href="mailto:info@oderman-group.com">info@oderman-group.com</a> o <a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer">WhatsApp</a>. Confirmaremos los precios vigentes al momento de tu solicitud.</p>

        <p class="tarifas__cta">
          <a href="https://plataformasintia.com" target="_blank" rel="noopener noreferrer" class="btn btn--sintia">Conocer Plataforma SINTIA</a>
        </p>
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
