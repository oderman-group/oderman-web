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
      'nav-services': t.nav.services,
      'nav-products': t.nav.products,
      'nav-contact': t.nav.contact
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
    updateSection('service-software-name', t.sections.services.software.name);
    updateSection('service-software-desc', t.sections.services.software.desc);
    updateSection('service-consulting-name', t.sections.services.consulting.name);
    updateSection('service-consulting-desc', t.sections.services.consulting.desc);
    updateSection('service-support-name', t.sections.services.support.name);
    updateSection('service-support-desc', t.sections.services.support.desc);
    
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
    updateSection('contact-whatsapp-label', t.sections.contact.whatsapp);
    updateSection('contact-whatsapp-button', t.sections.contact.whatsappButton);
    
    // Clientes
    updateSection('clients-title', t.sections.clients.title);
    updateSection('clients-subtitle', t.sections.clients.subtitle);
    
    // Productos
    if (t.sections.products) {
      updateSection('products-title', t.sections.products.title);
      updateSection('products-intro', t.sections.products.intro);
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
    
    // Footer links
    updateSection('footer-link-home', t.footer.links.home);
    updateSection('footer-link-about', t.footer.links.about);
    updateSection('footer-link-services', t.footer.links.services);
    updateSection('footer-link-products', t.footer.links.products);
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
