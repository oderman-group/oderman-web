// Sistema de cambio de idioma para ODERMAN GROUP SAS
(function() {
  'use strict';

  // Obtener idioma guardado o detectar del navegador
  function getStoredLanguage() {
    const stored = localStorage.getItem('oderman-language');
    if (stored && (stored === 'es' || stored === 'en')) {
      return stored;
    }
    // Detectar idioma del navegador
    const browserLang = navigator.language || navigator.userLanguage;
    return browserLang.startsWith('es') ? 'es' : 'en';
  }

  // Guardar idioma seleccionado
  function setLanguage(lang) {
    localStorage.setItem('oderman-language', lang);
    document.documentElement.lang = lang;
    applyTranslations(lang);
    updateLanguageSelector(lang);
  }

  // Aplicar traducciones
  function applyTranslations(lang) {
    if (typeof translations === 'undefined') {
      console.error('Translations not loaded');
      return;
    }

    const t = translations[lang];
    if (!t) return;

    // Actualizar navegación
    const navLinks = {
      'nav-home': t.nav.home,
      'nav-about': t.nav.about,
      'nav-products': t.nav.products
    };

    Object.keys(navLinks).forEach(id => {
      const el = document.getElementById(id);
      if (el) el.textContent = navLinks[id];
    });

    // Actualizar hero
    const heroTagline = document.getElementById('hero-tagline');
    if (heroTagline) heroTagline.textContent = t.hero.tagline;
    
    const heroTitle = document.getElementById('hero-title');
    if (heroTitle) heroTitle.textContent = t.hero.title;
    
    const heroSubtitle = document.getElementById('hero-subtitle');
    if (heroSubtitle) heroSubtitle.textContent = t.hero.subtitle;
    
    const heroCta = document.getElementById('hero-cta');
    if (heroCta) heroCta.textContent = t.hero.cta;

    // Actualizar secciones
    updateSection('about-title', t.sections.about.title);
    updateSection('about-intro', t.sections.about.intro);
    
    updateSection('sintia-title', t.sections.sintia.title);
    updateSection('sintia-intro', t.sections.sintia.intro);
    updateSection('sintia-desc', t.sections.sintia.description);
    updateSection('sintia-cta', t.sections.sintia.cta);
    
    // Servicios
    updateSection('services-title', t.sections.services.title);
    updateSection('services-intro', t.sections.services.intro);
    updateSection('service-security-name', t.sections.services.security.name);
    updateSection('service-security-desc', t.sections.services.security.desc);
    updateSection('service-it-management-name', t.sections.services.itManagement.name);
    updateSection('service-it-management-desc', t.sections.services.itManagement.desc);
    updateSection('service-ai-name', t.sections.services.ai.name);
    updateSection('service-ai-desc', t.sections.services.ai.desc);
    updateSection('service-architecture-name', t.sections.services.architecture.name);
    updateSection('service-architecture-desc', t.sections.services.architecture.desc);
    updateSection('service-crm-name', t.sections.services.crm.name);
    updateSection('service-crm-desc', t.sections.services.crm.desc);
    updateSection('service-finance-name', t.sections.services.finance.name);
    updateSection('service-finance-desc', t.sections.services.finance.desc);
    updateSection('service-marketing-name', t.sections.services.marketing.name);
    updateSection('service-marketing-desc', t.sections.services.marketing.desc);
    updateSection('service-cloud-name', t.sections.services.cloud.name);
    updateSection('service-cloud-desc', t.sections.services.cloud.desc);

    // Seguridad y Certificaciones
    updateSection('security-commitment-title', t.sections.securityCommitment.title);
    updateSection('security-commitment-intro', t.sections.securityCommitment.intro);
    updateSection('security-point-1-title', t.sections.securityCommitment.points.p1.title);
    updateSection('security-point-1-desc', t.sections.securityCommitment.points.p1.desc);
    updateSection('security-point-2-title', t.sections.securityCommitment.points.p2.title);
    updateSection('security-point-2-desc', t.sections.securityCommitment.points.p2.desc);
    updateSection('security-point-3-title', t.sections.securityCommitment.points.p3.title);
    updateSection('security-point-3-desc', t.sections.securityCommitment.points.p3.desc);
    updateSection('iso-9001-title', t.sections.securityCommitment.iso.iso9001.title);
    updateSection('iso-9001-desc', t.sections.securityCommitment.iso.iso9001.desc);
    updateSection('iso-14001-title', t.sections.securityCommitment.iso.iso14001.title);
    updateSection('iso-14001-desc', t.sections.securityCommitment.iso.iso14001.desc);
    updateSection('iso-27001-title', t.sections.securityCommitment.iso.iso27001.title);
    updateSection('iso-27001-desc', t.sections.securityCommitment.iso.iso27001.desc);

    // Cobertura
    updateSection('coverage-title', t.sections.coverage.title);
    updateSection('coverage-intro', t.sections.coverage.intro);
    updateSection('coverage-country-colombia', t.sections.coverage.countries.colombia);
    updateSection('coverage-country-argentina', t.sections.coverage.countries.argentina);
    updateSection('coverage-country-brazil', t.sections.coverage.countries.brazil);
    updateSection('coverage-country-canada', t.sections.coverage.countries.canada);
    updateSection('coverage-country-caribbean', t.sections.coverage.countries.caribbean);
    updateSection('coverage-country-chile', t.sections.coverage.countries.chile);
    updateSection('coverage-country-costa-rica', t.sections.coverage.countries.costaRica);
    updateSection('coverage-country-ecuador', t.sections.coverage.countries.ecuador);
    updateSection('coverage-country-spain', t.sections.coverage.countries.spain);
    updateSection('coverage-country-usa', t.sections.coverage.countries.usa);
    updateSection('coverage-country-mexico', t.sections.coverage.countries.mexico);
    updateSection('coverage-country-panama', t.sections.coverage.countries.panama);
    updateSection('coverage-country-peru', t.sections.coverage.countries.peru);
    updateSection('coverage-country-northern-triangle', t.sections.coverage.countries.northernTriangle);
    
    updateSection('mission-title', t.sections.mission.title);
    updateSection('mission-text1', t.sections.mission.text1);
    updateSection('mission-text2', t.sections.mission.text2);
    
    updateSection('vision-title', t.sections.vision.title);
    updateSection('vision-text1', t.sections.vision.text1);
    updateSection('vision-text2', t.sections.vision.text2);
    
    updateSection('values-title', t.sections.values.title);
    updateSection('values-complementary', t.sections.values.complementary);
    
    // Valores individuales
    updateValue('value-innovation-name', t.sections.values.innovation.name);
    updateValue('value-innovation-desc', t.sections.values.innovation.desc);
    updateValue('value-quality-name', t.sections.values.quality.name);
    updateValue('value-quality-desc', t.sections.values.quality.desc);
    updateValue('value-honesty-name', t.sections.values.honesty.name);
    updateValue('value-honesty-desc', t.sections.values.honesty.desc);
    updateValue('value-curiosity-name', t.sections.values.curiosity.name);
    updateValue('value-curiosity-desc', t.sections.values.curiosity.desc);
    updateValue('value-initiative-name', t.sections.values.initiative.name);
    updateValue('value-initiative-desc', t.sections.values.initiative.desc);
    updateValue('value-commitment-name', t.sections.values.commitment.name);
    updateValue('value-commitment-desc', t.sections.values.commitment.desc);
    updateValue('value-personalization-name', t.sections.values.personalization.name);
    updateValue('value-personalization-desc', t.sections.values.personalization.desc);
    
    // Valores complementarios
    const compValues = document.querySelectorAll('[data-complementary-value]');
    compValues.forEach((el, index) => {
      if (t.sections.values.complementaryValues[index]) {
        el.textContent = t.sections.values.complementaryValues[index];
      }
    });
    
    updateSection('contact-title', t.sections.contact.title);
    updateSection('contact-intro', t.sections.contact.intro);
    updateSection('contact-desc', t.sections.contact.description);
    updateSection('contact-email-label', t.sections.contact.email);
    updateSection('contact-phone-label', t.sections.contact.phone);
    updateSection('contact-whatsapp-label', t.sections.contact.whatsapp);
    updateSection('contact-whatsapp-button-text', t.sections.contact.whatsappButton);
    updateSection('contact-offices-title', t.sections.contact.officesTitle);
    updateSection('contact-office-medellin', t.sections.contact.officeMedellin);
    const addressMedellin = document.getElementById('contact-address-medellin');
    if (addressMedellin) addressMedellin.innerHTML = t.sections.contact.addressMedellin;
    updateSection('contact-office-bolivar', t.sections.contact.officeBolivar);
    const addressBolivar = document.getElementById('contact-address-bolivar');
    if (addressBolivar) addressBolivar.innerHTML = t.sections.contact.addressBolivar;
    updateSection('contact-office-canada', t.sections.contact.officeCanada);
    const addressCanada = document.getElementById('contact-address-canada');
    if (addressCanada) addressCanada.innerHTML = t.sections.contact.addressCanada;
    updateSection('contact-office-correspondence', t.sections.contact.correspondence);
    updateSection('contact-nit-label', t.sections.contact.nitLabel);
    updateSection('contact-nit-number', t.sections.contact.nitNumber);
    
    // Clientes
    updateSection('clients-title', t.sections.clients.title);
    updateSection('clients-subtitle', t.sections.clients.subtitle);
    
    // Productos
    if (t.sections.products) {
      updateSection('products-title', t.sections.products.title);
      updateSection('products-intro', t.sections.products.intro);
    }
    
    // Blog
    if (t.sections.blog) {
      updateSection('blog-title', t.sections.blog.title);
      updateSection('blog-intro', t.sections.blog.intro);
    }
    
    // Noticias
    if (t.sections.news) {
      updateSection('news-title', t.sections.news.title);
      updateSection('news-intro', t.sections.news.intro);
    }
    
    // Historia
    if (t.sections.history) {
      updateSection('history-title', t.sections.history.title);
      updateSection('history-subtitle', t.sections.history.subtitle);
      updateSection('history-2009-title', t.sections.history['2009-title']);
      updateSection('history-2009-text', t.sections.history['2009-text']);
      updateSection('history-study-title', t.sections.history['study-title']);
      updateSection('history-study-text', t.sections.history['study-text']);
      updateSection('history-sintia-title', t.sections.history['sintia-title']);
      updateSection('history-sintia-text', t.sections.history['sintia-text']);
      updateSection('history-award-title', t.sections.history['award-title']);
      updateSection('history-award-text', t.sections.history['award-text']);
      updateSection('history-growth-title', t.sections.history['growth-title']);
      updateSection('history-growth-text', t.sections.history['growth-text']);
      updateSection('history-canada-title', t.sections.history['canada-title']);
      updateSection('history-canada-text', t.sections.history['canada-text']);
      updateSection('history-return-title', t.sections.history['return-title']);
      updateSection('history-return-text', t.sections.history['return-text']);
      updateSection('history-legacy', t.sections.history.legacy);
    }
    
    // Traducir tarjetas de blog
    const blogCards = document.querySelectorAll('.blog-card');
    blogCards.forEach(card => {
      const category = card.querySelector('.blog-card__category');
      const title = card.querySelector('.blog-card__title');
      const excerpt = card.querySelector('.blog-card__excerpt');
      
      if (category && category.dataset.categoryEs && category.dataset.categoryEn) {
        category.textContent = lang === 'es' ? category.dataset.categoryEs : category.dataset.categoryEn;
      }
      if (title && title.dataset.titleEs && title.dataset.titleEn) {
        title.textContent = lang === 'es' ? title.dataset.titleEs : title.dataset.titleEn;
      }
      if (excerpt && excerpt.dataset.excerptEs && excerpt.dataset.excerptEn) {
        excerpt.textContent = lang === 'es' ? excerpt.dataset.excerptEs : excerpt.dataset.excerptEn;
      }
    });
    
    // Traducir artículo individual
    const articuloCategory = document.querySelector('.articulo__category');
    const articuloTitle = document.querySelector('.articulo__titulo');
    const articuloBody = document.querySelector('.articulo__body');
    const articuloBreadcrumb = document.getElementById('articulo-breadcrumb-title');
    
    if (articuloCategory && articuloCategory.dataset.categoryEs && articuloCategory.dataset.categoryEn) {
      articuloCategory.textContent = lang === 'es' ? articuloCategory.dataset.categoryEs : articuloCategory.dataset.categoryEn;
    }
    if (articuloTitle && articuloTitle.dataset.titleEs && articuloTitle.dataset.titleEn) {
      articuloTitle.textContent = lang === 'es' ? articuloTitle.dataset.titleEs : articuloTitle.dataset.titleEn;
      if (articuloBreadcrumb) {
        articuloBreadcrumb.textContent = lang === 'es' ? articuloTitle.dataset.titleEs : articuloTitle.dataset.titleEn;
      }
    }
    if (articuloBody && articuloBody.dataset.contentEs && articuloBody.dataset.contentEn) {
      articuloBody.innerHTML = lang === 'es' ? articuloBody.dataset.contentEs : articuloBody.dataset.contentEn;
    }
    
    // CTA
    if (t.sections.cta) {
      updateSection('cta-title', t.sections.cta.title);
      updateSection('cta-text', t.sections.cta.text);
      updateSection('cta-contact', t.sections.cta.contact);
      updateSection('cta-products', t.sections.cta.products);
    }
    
    // Footer
    updateSection('footer-company', t.footer.company);
    updateSection('footer-sintia', t.footer.sintia);
    updateSection('footer-contact', t.footer.contact);
    updateSection('footer-follow', t.footer.follow);
    updateSection('footer-rights', t.footer.rights);
    updateSection('footer-nit', t.footer.nit);
    updateSection('footer-offices-title', t.footer.officesTitle);
    updateSection('footer-office-medellin', t.footer.officeMedellin);
    const footerAddressMedellin = document.getElementById('footer-address-medellin');
    if (footerAddressMedellin) footerAddressMedellin.innerHTML = t.footer.addressMedellin;
    updateSection('footer-office-bolivar', t.footer.officeBolivar);
    const footerAddressBolivar = document.getElementById('footer-address-bolivar');
    if (footerAddressBolivar) footerAddressBolivar.innerHTML = t.footer.addressBolivar;
    updateSection('footer-office-canada', t.footer.officeCanada);
    const footerAddressCanada = document.getElementById('footer-address-canada');
    if (footerAddressCanada) footerAddressCanada.innerHTML = t.footer.addressCanada;
    updateSection('footer-office-correspondence', t.footer.correspondence);
    
    // Footer links
    updateSection('footer-link-home', t.footer.links.home);
    updateSection('footer-link-about', t.footer.links.about);
    updateSection('footer-link-products', t.footer.links.products);
    updateSection('footer-link-blog', t.footer.links.blog);
    updateSection('footer-link-news', t.footer.links.news);
    updateSection('footer-link-mission', t.footer.links.mission);
    updateSection('footer-link-vision', t.footer.links.vision);
    updateSection('footer-link-values', t.footer.links.values);
    updateSection('footer-link-contact', t.footer.links.contact);
    updateSection('footer-link-corporate', t.footer.links.corporate);
    updateSection('footer-link-sintia-ecosystem', t.footer.links.sintiaEcosystem);
    updateSection('footer-link-rates', t.footer.links.rates);
    updateSection('footer-link-ava', t.footer.links.ava);
    updateSection('footer-link-demo', t.footer.links.demo);
    updateSection('footer-link-platform', t.footer.links.platform);
    
    // Footer legal links
    if (t.legal) {
      updateSection('footer-privacy', t.legal.privacy);
      updateSection('footer-terms', t.legal.terms);
      updateSection('footer-cookies', t.legal.cookies);
    }
    
    // Cookies
    if (t.cookies) {
      updateSection('cookie-title', t.cookies.title);
      const cookieText = document.getElementById('cookie-text');
      if (cookieText && t.cookies.text) {
        cookieText.innerHTML = t.cookies.text;
      }
      updateSection('cookie-accept-btn', t.cookies.accept);
      updateSection('cookie-settings-btn', t.cookies.settings);
      updateSection('cookie-reject-btn', t.cookies.reject);
      updateSection('cookie-settings-title', t.cookies.settingsTitle);
      updateSection('cookie-necessary-label', t.cookies.necessary.label);
      updateSection('cookie-necessary-desc', t.cookies.necessary.desc);
      updateSection('cookie-analytics-label', t.cookies.analytics.label);
      updateSection('cookie-analytics-desc', t.cookies.analytics.desc);
      updateSection('cookie-marketing-label', t.cookies.marketing.label);
      updateSection('cookie-marketing-desc', t.cookies.marketing.desc);
      updateSection('cookie-save-btn', t.cookies.save);
    }
    
    // Error 404
    if (t.legal && t.legal.error) {
      updateSection('error-title', t.legal.error.title);
      updateSection('error-text', t.legal.error.text);
      updateSection('error-home', t.legal.error.home);
      updateSection('error-contact', t.legal.error.contact);
    }
  }

  function updateSection(id, text) {
    const el = document.getElementById(id);
    if (el) el.textContent = text;
  }

  function updateValue(id, text) {
    const el = document.getElementById(id);
    if (el) el.textContent = text;
  }

  // Actualizar selector de idioma
  function updateLanguageSelector(lang) {
    const selector = document.getElementById('language-selector');
    if (selector) {
      selector.value = lang;
    }
  }

  // Inicializar
  function init() {
    const currentLang = getStoredLanguage();
    setLanguage(currentLang);

    // Event listener para el selector de idioma
    const selector = document.getElementById('language-selector');
    if (selector) {
      selector.addEventListener('change', function(e) {
        setLanguage(e.target.value);
      });
    }
  }

  // Ejecutar cuando el DOM esté listo
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
