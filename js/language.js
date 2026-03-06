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
    
    // Privacy Page
    if (t.legal && t.legal.privacyPage) {
      updateSection('privacy-title', t.legal.privacyPage.title);
      const privacyUpdated = document.getElementById('privacy-updated');
      if (privacyUpdated) {
        const date = privacyUpdated.textContent.match(/\d{2}\/\d{2}\/\d{4}/);
        privacyUpdated.textContent = t.legal.privacyPage.updated + (date ? ' ' + date[0] : '');
      }
      updateSection('privacy-intro-title', t.legal.privacyPage.introTitle);
      updateSection('privacy-intro-text', t.legal.privacyPage.introText);
      updateSection('privacy-data-title', t.legal.privacyPage.dataTitle);
      updateSection('privacy-data-text', t.legal.privacyPage.dataText);
      updateSection('privacy-data-1', t.legal.privacyPage.data1);
      updateSection('privacy-data-2', t.legal.privacyPage.data2);
      updateSection('privacy-data-3', t.legal.privacyPage.data3);
      const privacyData4 = document.getElementById('privacy-data-4');
      if (privacyData4) {
        privacyData4.innerHTML = t.legal.privacyPage.data4.replace('Política de Cookies', '<a href="' + (typeof url !== 'undefined' ? url('cookies') : '/cookies') + '">' + t.legal.cookies + '</a>');
      }
      updateSection('privacy-use-title', t.legal.privacyPage.useTitle);
      updateSection('privacy-use-text', t.legal.privacyPage.useText);
      updateSection('privacy-use-1', t.legal.privacyPage.use1);
      updateSection('privacy-use-2', t.legal.privacyPage.use2);
      updateSection('privacy-use-3', t.legal.privacyPage.use3);
      updateSection('privacy-use-4', t.legal.privacyPage.use4);
      updateSection('privacy-use-5', t.legal.privacyPage.use5);
      updateSection('privacy-share-title', t.legal.privacyPage.shareTitle);
      updateSection('privacy-share-text', t.legal.privacyPage.shareText);
      updateSection('privacy-share-1', t.legal.privacyPage.share1);
      updateSection('privacy-share-2', t.legal.privacyPage.share2);
      updateSection('privacy-share-3', t.legal.privacyPage.share3);
      updateSection('privacy-rights-title', t.legal.privacyPage.rightsTitle);
      updateSection('privacy-rights-text', t.legal.privacyPage.rightsText);
      updateSection('privacy-rights-1', t.legal.privacyPage.rights1);
      updateSection('privacy-rights-2', t.legal.privacyPage.rights2);
      updateSection('privacy-rights-3', t.legal.privacyPage.rights3);
      updateSection('privacy-rights-4', t.legal.privacyPage.rights4);
      updateSection('privacy-rights-5', t.legal.privacyPage.rights5);
      updateSection('privacy-rights-6', t.legal.privacyPage.rights6);
      updateSection('privacy-security-title', t.legal.privacyPage.securityTitle);
      updateSection('privacy-security-text', t.legal.privacyPage.securityText);
      updateSection('privacy-retention-title', t.legal.privacyPage.retentionTitle);
      updateSection('privacy-retention-text', t.legal.privacyPage.retentionText);
      updateSection('privacy-children-title', t.legal.privacyPage.childrenTitle);
      updateSection('privacy-children-text', t.legal.privacyPage.childrenText);
      updateSection('privacy-changes-title', t.legal.privacyPage.changesTitle);
      updateSection('privacy-changes-text', t.legal.privacyPage.changesText);
      updateSection('privacy-contact-title', t.legal.privacyPage.contactTitle);
      updateSection('privacy-contact-text', t.legal.privacyPage.contactText);
      const privacyContact1 = document.getElementById('privacy-contact-1');
      if (privacyContact1) privacyContact1.innerHTML = '<strong>' + t.legal.privacyPage.contact1 + '</strong> <a href="mailto:info@oderman-group.com">info@oderman-group.com</a>';
      const privacyContact2 = document.getElementById('privacy-contact-2');
      if (privacyContact2) privacyContact2.innerHTML = '<strong>' + t.legal.privacyPage.contact2 + '</strong> <a href="tel:+573006075800">+57 300 607 5800</a>';
      const privacyContact3 = document.getElementById('privacy-contact-3');
      if (privacyContact3) privacyContact3.innerHTML = '<strong>' + t.legal.privacyPage.contact3 + '</strong> ODERMAN GROUP SAS';
    }
    
    // Terms Page
    if (t.legal && t.legal.termsPage) {
      updateSection('terms-title', t.legal.termsPage.title);
      const termsUpdated = document.getElementById('terms-updated');
      if (termsUpdated) {
        const date = termsUpdated.textContent.match(/\d{2}\/\d{2}\/\d{4}/);
        termsUpdated.textContent = t.legal.termsPage.updated + (date ? ' ' + date[0] : '');
      }
      updateSection('terms-intro-title', t.legal.termsPage.introTitle);
      updateSection('terms-intro-text', t.legal.termsPage.introText);
      updateSection('terms-use-title', t.legal.termsPage.useTitle);
      updateSection('terms-use-text', t.legal.termsPage.useText);
      updateSection('terms-use-1', t.legal.termsPage.use1);
      updateSection('terms-use-2', t.legal.termsPage.use2);
      updateSection('terms-use-3', t.legal.termsPage.use3);
      updateSection('terms-use-4', t.legal.termsPage.use4);
      updateSection('terms-use-5', t.legal.termsPage.use5);
      updateSection('terms-property-title', t.legal.termsPage.propertyTitle);
      updateSection('terms-property-text', t.legal.termsPage.propertyText);
      updateSection('terms-property-text2', t.legal.termsPage.propertyText2);
      updateSection('terms-accounts-title', t.legal.termsPage.accountsTitle);
      updateSection('terms-accounts-text', t.legal.termsPage.accountsText);
      updateSection('terms-accounts-1', t.legal.termsPage.accounts1);
      updateSection('terms-accounts-2', t.legal.termsPage.accounts2);
      updateSection('terms-accounts-3', t.legal.termsPage.accounts3);
      updateSection('terms-accounts-4', t.legal.termsPage.accounts4);
      updateSection('terms-services-title', t.legal.termsPage.servicesTitle);
      updateSection('terms-services-text', t.legal.termsPage.servicesText);
      updateSection('terms-liability-title', t.legal.termsPage.liabilityTitle);
      updateSection('terms-liability-text', t.legal.termsPage.liabilityText);
      updateSection('terms-liability-1', t.legal.termsPage.liability1);
      updateSection('terms-liability-2', t.legal.termsPage.liability2);
      updateSection('terms-liability-3', t.legal.termsPage.liability3);
      updateSection('terms-liability-4', t.legal.termsPage.liability4);
      updateSection('terms-liability-text2', t.legal.termsPage.liabilityText2);
      updateSection('terms-links-title', t.legal.termsPage.linksTitle);
      updateSection('terms-links-text', t.legal.termsPage.linksText);
      updateSection('terms-privacy-title', t.legal.termsPage.privacyTitle);
      const termsPrivacyText = document.getElementById('terms-privacy-text');
      if (termsPrivacyText) {
        termsPrivacyText.innerHTML = t.legal.termsPage.privacyText.replace('Política de Privacidad', '<a href="' + (typeof url !== 'undefined' ? url('privacidad') : '/privacidad') + '">' + t.legal.privacy + '</a>');
      }
      updateSection('terms-changes-title', t.legal.termsPage.changesTitle);
      updateSection('terms-changes-text', t.legal.termsPage.changesText);
      updateSection('terms-law-title', t.legal.termsPage.lawTitle);
      updateSection('terms-law-text', t.legal.termsPage.lawText);
      updateSection('terms-contact-title', t.legal.termsPage.contactTitle);
      updateSection('terms-contact-text', t.legal.termsPage.contactText);
      const termsContact1 = document.getElementById('terms-contact-1');
      if (termsContact1) termsContact1.innerHTML = '<strong>' + t.legal.termsPage.contact1 + '</strong> <a href="mailto:info@oderman-group.com">info@oderman-group.com</a>';
      const termsContact2 = document.getElementById('terms-contact-2');
      if (termsContact2) termsContact2.innerHTML = '<strong>' + t.legal.termsPage.contact2 + '</strong> <a href="tel:+573006075800">+57 300 607 5800</a>';
      const termsContact3 = document.getElementById('terms-contact-3');
      if (termsContact3) termsContact3.innerHTML = '<strong>' + t.legal.termsPage.contact3 + '</strong> ODERMAN GROUP SAS';
    }
    
    // Cookies Page
    if (t.legal && t.legal.cookiesPage) {
      updateSection('cookies-title', t.legal.cookiesPage.title);
      const cookiesUpdated = document.getElementById('cookies-updated');
      if (cookiesUpdated) {
        const date = cookiesUpdated.textContent.match(/\d{2}\/\d{2}\/\d{4}/);
        cookiesUpdated.textContent = t.legal.cookiesPage.updated + (date ? ' ' + date[0] : '');
      }
      updateSection('cookies-what-title', t.legal.cookiesPage.whatTitle);
      updateSection('cookies-what-text', t.legal.cookiesPage.whatText);
      updateSection('cookies-types-title', t.legal.cookiesPage.typesTitle);
      updateSection('cookies-types-text', t.legal.cookiesPage.typesText);
      updateSection('cookies-necessary-title', t.legal.cookiesPage.necessaryTitle);
      updateSection('cookies-necessary-text', t.legal.cookiesPage.necessaryText);
      updateSection('cookies-necessary-1', t.legal.cookiesPage.necessary1);
      updateSection('cookies-necessary-2', t.legal.cookiesPage.necessary2);
      updateSection('cookies-analytics-title', t.legal.cookiesPage.analyticsTitle);
      updateSection('cookies-analytics-text', t.legal.cookiesPage.analyticsText);
      updateSection('cookies-analytics-1', t.legal.cookiesPage.analytics1);
      updateSection('cookies-marketing-title', t.legal.cookiesPage.marketingTitle);
      updateSection('cookies-marketing-text', t.legal.cookiesPage.marketingText);
      updateSection('cookies-marketing-1', t.legal.cookiesPage.marketing1);
      updateSection('cookies-purpose-title', t.legal.cookiesPage.purposeTitle);
      updateSection('cookies-purpose-text', t.legal.cookiesPage.purposeText);
      updateSection('cookies-purpose-1', t.legal.cookiesPage.purpose1);
      updateSection('cookies-purpose-2', t.legal.cookiesPage.purpose2);
      updateSection('cookies-purpose-3', t.legal.cookiesPage.purpose3);
      updateSection('cookies-purpose-4', t.legal.cookiesPage.purpose4);
      updateSection('cookies-manage-title', t.legal.cookiesPage.manageTitle);
      updateSection('cookies-manage-text', t.legal.cookiesPage.manageText);
      updateSection('cookies-manage-site-title', t.legal.cookiesPage.manageSiteTitle);
      updateSection('cookies-manage-site-text', t.legal.cookiesPage.manageSiteText);
      updateSection('cookies-manage-browser-title', t.legal.cookiesPage.manageBrowserTitle);
      updateSection('cookies-manage-browser-text', t.legal.cookiesPage.manageBrowserText);
      updateSection('cookies-manage-browser-text2', t.legal.cookiesPage.manageBrowserText2);
      updateSection('cookies-manage-browser-1', t.legal.cookiesPage.manageBrowser1);
      updateSection('cookies-manage-browser-2', t.legal.cookiesPage.manageBrowser2);
      updateSection('cookies-manage-browser-3', t.legal.cookiesPage.manageBrowser3);
      updateSection('cookies-manage-browser-4', t.legal.cookiesPage.manageBrowser4);
      updateSection('cookies-third-title', t.legal.cookiesPage.thirdTitle);
      updateSection('cookies-third-text', t.legal.cookiesPage.thirdText);
      updateSection('cookies-third-1', t.legal.cookiesPage.third1);
      updateSection('cookies-third-2', t.legal.cookiesPage.third2);
      updateSection('cookies-updates-title', t.legal.cookiesPage.updatesTitle);
      updateSection('cookies-updates-text', t.legal.cookiesPage.updatesText);
      updateSection('cookies-contact-title', t.legal.cookiesPage.contactTitle);
      updateSection('cookies-contact-text', t.legal.cookiesPage.contactText);
      const cookiesContact1 = document.getElementById('cookies-contact-1');
      if (cookiesContact1) cookiesContact1.innerHTML = '<strong>' + t.legal.cookiesPage.contact1 + '</strong> <a href="mailto:info@oderman-group.com">info@oderman-group.com</a>';
      const cookiesContact2 = document.getElementById('cookies-contact-2');
      if (cookiesContact2) cookiesContact2.innerHTML = '<strong>' + t.legal.cookiesPage.contact2 + '</strong> <a href="tel:+573006075800">+57 300 607 5800</a>';
      const cookiesContact3 = document.getElementById('cookies-contact-3');
      if (cookiesContact3) cookiesContact3.innerHTML = '<strong>' + t.legal.cookiesPage.contact3 + '</strong> ODERMAN GROUP SAS';
    }
    
    // Products Page
    if (t.productsPage) {
      updateSection('products-title', t.productsPage.title);
      updateSection('products-intro', t.productsPage.intro);
      const sintiaDesc = document.querySelector('#products-sintia-desc');
      if (sintiaDesc) sintiaDesc.textContent = t.productsPage.sintiaDesc;
      const sintiaLearnMore = document.querySelector('#products-sintia-learn-more');
      if (sintiaLearnMore) sintiaLearnMore.textContent = t.productsPage.sintiaLearnMore;
      const elisabDesc = document.querySelector('#products-elisab-desc');
      if (elisabDesc) elisabDesc.textContent = t.productsPage.elisabDesc;
      const elisabComingSoon = document.querySelector('#products-elisab-coming-soon');
      if (elisabComingSoon) elisabComingSoon.textContent = t.productsPage.elisabComingSoon;
    }
    
    // Sintia Page
    if (t.sintiaPage) {
      updateSection('sintia-title', t.sintiaPage.title);
      updateSection('sintia-intro', t.sintiaPage.intro);
      updateSection('sintia-desc', t.sintiaPage.desc);
      updateSection('sintia-cta', t.sintiaPage.cta);
      updateSection('sintia-modules-title', t.sintiaPage.modulesTitle);
      updateSection('sintia-module-comunicativo-title', t.sintiaPage.moduleComunicativoTitle);
      updateSection('sintia-module-comunicativo-desc', t.sintiaPage.moduleComunicativoDesc);
      updateSection('sintia-module-comunicativo-link', t.sintiaPage.moduleComunicativoLink);
      updateSection('sintia-module-ava-title', t.sintiaPage.moduleAvaTitle);
      updateSection('sintia-module-ava-desc', t.sintiaPage.moduleAvaDesc);
      updateSection('sintia-module-ava-link', t.sintiaPage.moduleAvaLink);
      updateSection('sintia-module-demo-title', t.sintiaPage.moduleDemoTitle);
      updateSection('sintia-module-demo-desc', t.sintiaPage.moduleDemoDesc);
      updateSection('sintia-module-demo-link', t.sintiaPage.moduleDemoLink);
      updateSection('sintia-features-title', t.sintiaPage.featuresTitle);
      updateSection('sintia-feature-academico-title', t.sintiaPage.featureAcademicoTitle);
      updateSection('sintia-feature-academico-desc', t.sintiaPage.featureAcademicoDesc);
      updateSection('sintia-feature-comunicacion-title', t.sintiaPage.featureComunicacionTitle);
      updateSection('sintia-feature-comunicacion-desc', t.sintiaPage.featureComunicacionDesc);
      updateSection('sintia-feature-pagos-title', t.sintiaPage.featurePagosTitle);
      updateSection('sintia-feature-pagos-desc', t.sintiaPage.featurePagosDesc);
      updateSection('sintia-feature-seguimiento-title', t.sintiaPage.featureSeguimientoTitle);
      updateSection('sintia-feature-seguimiento-desc', t.sintiaPage.featureSeguimientoDesc);
    }
    
    // Rates Page
    if (t.ratesPage) {
      updateSection('rates-title', t.ratesPage.title);
      updateSection('rates-subtitle', t.ratesPage.subtitle);
      updateSection('rates-intro', t.ratesPage.intro);
      updateSection('rates-important-title', t.ratesPage.importantTitle);
      updateSection('rates-important-text', t.ratesPage.importantText);
      updateSection('rates-email-title', t.ratesPage.emailTitle);
      updateSection('rates-email-single', t.ratesPage.emailSingle);
      updateSection('rates-email-package', t.ratesPage.emailPackage);
      updateSection('rates-email-total', t.ratesPage.emailTotal);
      updateSection('rates-sms-title', t.ratesPage.smsTitle);
      updateSection('rates-sms-single', t.ratesPage.smsSingle);
      updateSection('rates-sms-package', t.ratesPage.smsPackage);
      updateSection('rates-sms-total', t.ratesPage.smsTotal);
      updateSection('rates-whatsapp-title', t.ratesPage.whatsappTitle);
      updateSection('rates-whatsapp-single', t.ratesPage.whatsappSingle);
      updateSection('rates-whatsapp-package', t.ratesPage.whatsappPackage);
      updateSection('rates-whatsapp-total', t.ratesPage.whatsappTotal);
      updateSection('rates-clarifications-title', t.ratesPage.clarificationsTitle);
      updateSection('rates-clarification-1', t.ratesPage.clarification1);
      updateSection('rates-clarification-2', t.ratesPage.clarification2);
      updateSection('rates-clarification-3', t.ratesPage.clarification3);
      updateSection('rates-clarification-4', t.ratesPage.clarification4);
      updateSection('rates-clarification-5', t.ratesPage.clarification5);
      updateSection('rates-clarification-6', t.ratesPage.clarification6);
      updateSection('rates-clarification-7', t.ratesPage.clarification7);
      const ratesNote = document.getElementById('rates-note');
      if (ratesNote) {
        ratesNote.innerHTML = t.ratesPage.note.replace('info@oderman-group.com', '<a href="mailto:info@oderman-group.com">info@oderman-group.com</a>').replace('WhatsApp', '<a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer">WhatsApp</a>');
      }
      updateSection('rates-cta', t.ratesPage.cta);
    }
    
    // AVA Page
    if (t.avaPage) {
      updateSection('ava-title', t.avaPage.title);
      updateSection('ava-subtitle', t.avaPage.subtitle);
      updateSection('ava-intro', t.avaPage.intro);
      updateSection('ava-module-evaluaciones-title', t.avaPage.moduleEvaluacionesTitle);
      updateSection('ava-module-evaluaciones-desc', t.avaPage.moduleEvaluacionesDesc);
      updateSection('ava-module-tareas-title', t.avaPage.moduleTareasTitle);
      updateSection('ava-module-tareas-desc', t.avaPage.moduleTareasDesc);
      updateSection('ava-module-foros-title', t.avaPage.moduleForosTitle);
      updateSection('ava-module-foros-desc', t.avaPage.moduleForosDesc);
      updateSection('ava-module-clases-title', t.avaPage.moduleClasesTitle);
      updateSection('ava-module-clases-desc', t.avaPage.moduleClasesDesc);
      updateSection('ava-package-title', t.avaPage.packageTitle);
      updateSection('ava-package-desc', t.avaPage.packageDesc);
      updateSection('ava-package-note', t.avaPage.packageNote);
      updateSection('ava-benefits-title', t.avaPage.benefitsTitle);
      updateSection('ava-benefits-intro', t.avaPage.benefitsIntro);
      updateSection('ava-benefit-evaluaciones-title', t.avaPage.benefitEvaluacionesTitle);
      updateSection('ava-benefit-evaluaciones-text', t.avaPage.benefitEvaluacionesText);
      updateSection('ava-benefit-tareas-title', t.avaPage.benefitTareasTitle);
      updateSection('ava-benefit-tareas-text', t.avaPage.benefitTareasText);
      updateSection('ava-benefit-foros-title', t.avaPage.benefitForosTitle);
      updateSection('ava-benefit-foros-text', t.avaPage.benefitForosText);
      updateSection('ava-benefit-clases-title', t.avaPage.benefitClasesTitle);
      updateSection('ava-benefit-clases-text', t.avaPage.benefitClasesText);
      const avaNote = document.getElementById('ava-note');
      if (avaNote) {
        avaNote.innerHTML = t.avaPage.note.replace('info@oderman-group.com', '<a href="mailto:info@oderman-group.com">info@oderman-group.com</a>').replace('WhatsApp', '<a href="https://wa.me/573006075800" target="_blank" rel="noopener noreferrer">WhatsApp</a>');
      }
      updateSection('ava-cta', t.avaPage.cta);
    }
    
    // Demo Page
    if (t.demoPage) {
      updateSection('demo-tagline', t.demoPage.tagline);
      updateSection('demo-title', t.demoPage.title);
      updateSection('demo-subtitle', t.demoPage.subtitle);
      updateSection('demo-whatsapp-button', t.demoPage.whatsappButton);
      updateSection('demo-integrated-title', t.demoPage.integratedTitle);
      updateSection('demo-integrated-desc', t.demoPage.integratedDesc);
      updateSection('demo-video-title', t.demoPage.videoTitle);
      updateSection('demo-academico-title', t.demoPage.academicoTitle);
      updateSection('demo-academico-desc', t.demoPage.academicoDesc);
      updateSection('demo-academico-item-1', t.demoPage.academicoItem1);
      updateSection('demo-academico-item-2', t.demoPage.academicoItem2);
      updateSection('demo-academico-item-3', t.demoPage.academicoItem3);
      updateSection('demo-academico-item-4', t.demoPage.academicoItem4);
      updateSection('demo-academico-cta', t.demoPage.academicoCta);
      updateSection('demo-financiero-title', t.demoPage.financieroTitle);
      updateSection('demo-financiero-desc', t.demoPage.financieroDesc);
      updateSection('demo-financiero-item-1', t.demoPage.financieroItem1);
      updateSection('demo-financiero-item-2', t.demoPage.financieroItem2);
      updateSection('demo-financiero-item-3', t.demoPage.financieroItem3);
      updateSection('demo-financiero-cta', t.demoPage.financieroCta);
      updateSection('demo-convivencia-title', t.demoPage.convivenciaTitle);
      updateSection('demo-convivencia-desc', t.demoPage.convivenciaDesc);
      updateSection('demo-convivencia-item-1', t.demoPage.convivenciaItem1);
      updateSection('demo-convivencia-item-2', t.demoPage.convivenciaItem2);
      updateSection('demo-convivencia-cta', t.demoPage.convivenciaCta);
      updateSection('demo-comunicacion-title', t.demoPage.comunicacionTitle);
      updateSection('demo-comunicacion-desc', t.demoPage.comunicacionDesc);
      updateSection('demo-comunicacion-item-1', t.demoPage.comunicacionItem1);
      updateSection('demo-comunicacion-item-2', t.demoPage.comunicacionItem2);
      updateSection('demo-comunicacion-cta', t.demoPage.comunicacionCta);
      updateSection('demo-ava-title', t.demoPage.avaTitle);
      updateSection('demo-ava-desc', t.demoPage.avaDesc);
      updateSection('demo-ava-item-1', t.demoPage.avaItem1);
      updateSection('demo-ava-item-2', t.demoPage.avaItem2);
      updateSection('demo-ava-item-3', t.demoPage.avaItem3);
      updateSection('demo-ava-item-4', t.demoPage.avaItem4);
      updateSection('demo-ava-cta', t.demoPage.avaCta);
      updateSection('demo-demo-title', t.demoPage.demoTitle);
      updateSection('demo-demo-desc', t.demoPage.demoDesc);
      updateSection('demo-demo-text', t.demoPage.demoText);
      updateSection('demo-demo-button', t.demoPage.demoButton);
      updateSection('demo-contact-title', t.demoPage.demoContactTitle);
      updateSection('demo-contact-phone', t.demoPage.demoContactPhone);
      updateSection('demo-contact-email', t.demoPage.demoContactEmail);
      updateSection('demo-contact-web', t.demoPage.demoContactWeb);
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
