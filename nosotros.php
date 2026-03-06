<?php
// Incluir configuración
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$pageData = [
    'title' => 'Nosotros | ODERMAN GROUP SAS',
    'description' => 'Conoce la misión, visión y valores de ODERMAN GROUP SAS. Una empresa colombiana dedicada al desarrollo de software a la medida.',
    'keywords' => 'nosotros, misión, visión, valores, ODERMAN GROUP SAS, empresa colombiana, desarrollo de software',
    'url' => url('nosotros'),
    'alternate' => [
        'es' => url('nosotros'),
        'en' => url('nosotros') . '?lang=en'
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
      'name' => 'Nosotros',
      'description' => $pageData['description']
  ]); ?>
</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="hero">
      <div class="hero__contenedor">
        <p class="hero__etiqueta" id="hero-tagline">ODERMAN GROUP SAS</p>
        <h1 class="hero__titulo" id="about-title">Sobre nosotros</h1>
        <p class="hero__subtitulo" id="about-intro">Somos una empresa colombiana dedicada al desarrollo de software a la medida. Entre nuestros productos se encuentra <strong>SINTIA</strong>, nuestro ecosistema educativo que acompaña a instituciones y familias en la gestión académica y la transformación digital.</p>
      </div>
    </section>

    <section id="historia" class="seccion seccion--clara">
      <div class="container-content">
        <div class="historia__contenido">
          <div class="historia__header">
            <h2 class="seccion__titulo" id="history-title">Nuestra Historia</h2>
            <p class="historia__subtitle" id="history-subtitle">Una historia de perseverancia, innovación y compromiso con la excelencia</p>
          </div>
          
          <div class="historia__timeline">
            <div class="historia__item">
              <div class="historia__year">2009</div>
              <div class="historia__content">
                <h3 class="historia__item-title" id="history-2009-title">El Comienzo de un Sueño</h3>
                <p class="historia__item-text" id="history-2009-text">Jhon Oderman Mejía Martínez, originario de San Juan Nepomuceno, Bolívar, de estrato 1 y escasos recursos, tomó una decisión que cambiaría su vida: viajar a Medellín con solo el pasaje de ida. Con determinación y coraje, dejó atrás su pueblo natal para perseguir sus sueños en la ciudad que lo acogería durante más de 12 años.</p>
              </div>
            </div>

            <div class="historia__item">
              <div class="historia__year">2009-2012</div>
              <div class="historia__content">
                <h3 class="historia__item-title" id="history-study-title">Años de Estudio y Sacrificio</h3>
                <p class="historia__item-text" id="history-study-text">En Medellín, Jhon ingresó a la Corporación Universitaria Adventista para estudiar Tecnología e Informática. Estos años estuvieron marcados por trabajo arduo, necesidades económicas y humillaciones que solo fortalecieron su determinación. A pesar de las adversidades, logró graduarse en 2012, demostrando que la perseverancia y el esfuerzo pueden superar cualquier obstáculo.</p>
              </div>
            </div>

            <div class="historia__item">
              <div class="historia__year">2012-2014</div>
              <div class="historia__content">
                <h3 class="historia__item-title" id="history-sintia-title">El Nacimiento de SINTIA</h3>
                <p class="historia__item-text" id="history-sintia-text">Mientras estudiaba, Jhon comenzó a desarrollar una solución educativa innovadora para colegios y universidades. Esta visión se convertiría en lo que hoy es el primer ecosistema educativo integral: <strong>SINTIA</strong>. Un proyecto nacido de la pasión por la educación y la tecnología, diseñado para transformar la gestión académica.</p>
              </div>
            </div>

            <div class="historia__item historia__item--highlight">
              <div class="historia__year">2014</div>
              <div class="historia__content">
                <h3 class="historia__item-title" id="history-award-title">Premio Capital Semilla: El Reconocimiento</h3>
                <p class="historia__item-text" id="history-award-text">En 2014, ODERMAN GROUP SAS se presentó al Undécimo Concurso de Capital Semilla de Medellín, compitiendo contra más de 5,000 participantes. El resultado fue extraordinario: <strong>primer puesto</strong>. Este reconocimiento no solo validó la calidad de la solución, sino que proporcionó los recursos necesarios para consolidar la empresa y comenzar a trabajar con nuevas compañías.</p>
              </div>
            </div>

            <div class="historia__item">
              <div class="historia__year">2014-2022</div>
              <div class="historia__content">
                <h3 class="historia__item-title" id="history-growth-title">Crecimiento y Consolidación</h3>
                <p class="historia__item-text" id="history-growth-text">Con los recursos del premio, la empresa se consolidó y comenzó a trabajar con diversas compañías. Durante estos años, ODERMAN GROUP SAS se enfocó en tres pilares fundamentales: <strong>calidad</strong>, <strong>seguridad</strong> y <strong>experiencia del cliente</strong>. Este compromiso inquebrantable fue la base del éxito y la confianza que la empresa genera hoy en día.</p>
              </div>
            </div>

            <div class="historia__item">
              <div class="historia__year">2022</div>
              <div class="historia__content">
                <h3 class="historia__item-title" id="history-canada-title">Expansión Internacional: Canadá</h3>
                <p class="historia__item-text" id="history-canada-text">En 2022, Jhon viajó a Canadá para abrir nuevos mercados, estableciendo una oficina de correspondencia en Mississauga. Este paso marcó el inicio de la expansión internacional de la empresa, llevando las soluciones de ODERMAN GROUP SAS más allá de las fronteras colombianas.</p>
              </div>
            </div>

            <div class="historia__item historia__item--highlight">
              <div class="historia__year">2025</div>
              <div class="historia__content">
                <h3 class="historia__item-title" id="history-return-title">El Regreso a los Orígenes</h3>
                <p class="historia__item-text" id="history-return-text">En 2025, ODERMAN GROUP SAS completa un ciclo extraordinario al abrir una sucursal en San Juan Nepomuceno, el pueblo natal de su fundador. Este regreso simboliza más que una expansión: es el cumplimiento de un sueño, la demostración de que los orígenes no determinan el destino, y el compromiso de llevar desarrollo tecnológico de calidad a las regiones de Colombia.</p>
              </div>
            </div>
          </div>

          <div class="historia__legacy">
            <p class="historia__legacy-text" id="history-legacy">Hoy, ODERMAN GROUP SAS es una empresa consolidada, con presencia en Medellín, San Juan Nepomuceno y Mississauga (Canadá), certificada en ISO 9001, ISO 14001 e ISO 27001. Una historia que comenzó con un joven de escasos recursos y un pasaje de ida, y que hoy transforma la educación y el desarrollo tecnológico en Colombia y más allá.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="mision" class="seccion">
      <div class="container-content">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-xl); align-items: center;">
          <div>
            <h2 class="seccion__titulo" id="mission-title">Misión</h2>
            <div class="bloque-texto">
              <p id="mission-text1">En Oderman, nos dedicamos a diseñar y entregar soluciones de software a la medida que potencian el crecimiento y la eficiencia de organizaciones de diversos sectores, incluyendo el educativo. Nuestro compromiso es desarrollar tecnologías intuitivas y robustas, apoyadas por un servicio de atención al cliente excepcional y personalizado.</p>
              <p id="mission-text2">Nos esforzamos por superar las expectativas, asegurando que cada interacción y producto refleje la <strong>calidad</strong>, la <strong>adaptabilidad</strong> y la <strong>innovación</strong> que nuestros clientes merecen.</p>
            </div>
          </div>
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Nuestra Misión" class="seccion__imagen" style="width: 100%; border-radius: 12px; box-shadow: var(--shadow-lg);" loading="lazy">
        </div>
      </div>
    </section>

    <section id="vision" class="seccion seccion--clara">
      <div class="container-content">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: var(--spacing-xl); align-items: center;">
          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" alt="Nuestra Visión" class="seccion__imagen" style="width: 100%; border-radius: 12px; box-shadow: var(--shadow-lg); order: -1;" loading="lazy">
          <div>
            <h2 class="seccion__titulo" id="vision-title">Visión</h2>
            <div class="bloque-texto">
              <p id="vision-text1">Ser reconocidos como la empresa líder en el desarrollo de software a la medida en América Latina, EEUU y Canadá, distinguidos por nuestra creatividad, calidad y confiabilidad. Aspiramos a que cada producto, desde nuestro ecosistema educativo <strong>SINTIA</strong> hasta nuestras soluciones personalizadas, sea sinónimo de excelencia y un catalizador para la transformación digital de nuestros clientes.</p>
              <p id="vision-text2">Nuestra visión es ser el socio tecnológico predilecto, creando soluciones que no solo satisfacen las necesidades actuales sino que también anticipan los desafíos del futuro.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="valores" class="seccion">
      <div class="container-content">
        <h2 class="seccion__titulo" id="values-title">Valores fundamentales</h2>
        <ul class="valores-lista valores-lista--core">
          <li>
            <span class="valores-lista__nombre" id="value-innovation-name">Innovación</span>
            <span class="valores-lista__desc" id="value-innovation-desc">Fomentamos la búsqueda constante de nuevas ideas y enfoques que rompan moldes tradicionales y entreguen soluciones de vanguardia.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-quality-name">Calidad</span>
            <span class="valores-lista__desc" id="value-quality-desc">Nos obsesiona la excelencia en cada línea de código y en cada interacción con el cliente, garantizando productos y servicios superiores.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-honesty-name">Honestidad</span>
            <span class="valores-lista__desc" id="value-honesty-desc">Practicamos la transparencia y la integridad en cada aspecto de nuestro quehacer, construyendo relaciones basadas en la confianza y el respeto mutuo.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-curiosity-name">Curiosidad</span>
            <span class="valores-lista__desc" id="value-curiosity-desc">Promovemos una cultura de aprendizaje continuo y descubrimiento, manteniendo la mente abierta a las posibilidades de la tecnología.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-initiative-name">Iniciativa</span>
            <span class="valores-lista__desc" id="value-initiative-desc">Valoramos y apoyamos a quienes toman la iniciativa, ven una oportunidad de mejora y actúan en consecuencia.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-commitment-name">Compromiso</span>
            <span class="valores-lista__desc" id="value-commitment-desc">Nos dedicamos a cumplir nuestras promesas, entregando resultados tangibles y consistentes que reflejan nuestro compromiso con el éxito del cliente.</span>
          </li>
          <li>
            <span class="valores-lista__nombre" id="value-personalization-name">Personalización</span>
            <span class="valores-lista__desc" id="value-personalization-desc">Creemos en la singularidad de cada cliente y nos esforzamos por ofrecer un servicio que reconozca y adapte nuestras soluciones a sus necesidades específicas.</span>
          </li>
        </ul>

        <h3 class="seccion__subtitulo" id="values-complementary">Valores complementarios</h3>
        <ul class="valores-lista valores-lista--complementarios">
          <li data-complementary-value="0"><strong>Somos propositivos:</strong> Proponemos dos soluciones por cada desafío que se nos presenta.</li>
          <li data-complementary-value="1"><strong>Entendemos el propósito:</strong> Entendemos el porqué de cada cosa que hacemos.</li>
          <li data-complementary-value="2"><strong>Tenemos criterio:</strong> Tomamos la iniciativa con criterio y sentido.</li>
          <li data-complementary-value="3"><strong>Somos comprometidos:</strong> Aprovechamos el tiempo en pro de los objetivos, la misión y visión de la empresa.</li>
          <li data-complementary-value="4"><strong>Somos valientes:</strong> Actuamos con valentía y prudencia ante la incertidumbre.</li>
          <li data-complementary-value="5"><strong>Usamos el sentido común:</strong> Nos apegamos al protocolo, pero también usamos el sentido común y la espontaneidad.</li>
        </ul>
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
