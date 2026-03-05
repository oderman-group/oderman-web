// Sistema de gestión de cookies - ODERMAN GROUP SAS
(function() {
  'use strict';

  const COOKIE_CONSENT = 'cookie_consent';
  const COOKIE_CONSENT_DATE = 'cookie_consent_date';

  // Verificar si ya hay consentimiento
  function hasConsent() {
    return localStorage.getItem(COOKIE_CONSENT) !== null;
  }

  // Guardar preferencias
  function savePreferences(preferences) {
    const data = {
      necessary: true, // Siempre true
      analytics: preferences.analytics || false,
      marketing: preferences.marketing || false,
      timestamp: new Date().toISOString()
    };
    localStorage.setItem(COOKIE_CONSENT, JSON.stringify(data));
    localStorage.setItem(COOKIE_CONSENT_DATE, new Date().toISOString());
  }

  // Obtener preferencias guardadas
  function getPreferences() {
    const stored = localStorage.getItem(COOKIE_CONSENT);
    if (stored) {
      try {
        return JSON.parse(stored);
      } catch (e) {
        return null;
      }
    }
    return null;
  }

  // Mostrar banner si no hay consentimiento
  function showBanner() {
    if (!hasConsent()) {
      const banner = document.getElementById('cookie-consent');
      if (banner) {
        setTimeout(() => {
          banner.classList.add('show');
        }, 500);
      }
    }
  }

  // Ocultar banner
  function hideBanner() {
    const banner = document.getElementById('cookie-consent');
    if (banner) {
      banner.classList.remove('show');
    }
  }

  // Mostrar panel de configuración
  function showSettings() {
    const panel = document.getElementById('cookie-settings-panel');
    if (panel) {
      panel.setAttribute('aria-hidden', 'false');
      hideBanner();
      loadPreferences();
    }
  }

  // Ocultar panel de configuración
  function hideSettings() {
    const panel = document.getElementById('cookie-settings-panel');
    if (panel) {
      panel.setAttribute('aria-hidden', 'true');
    }
  }

  // Cargar preferencias en el panel
  function loadPreferences() {
    const prefs = getPreferences();
    if (prefs) {
      const analytics = document.getElementById('cookie-analytics');
      const marketing = document.getElementById('cookie-marketing');
      if (analytics) analytics.checked = prefs.analytics;
      if (marketing) marketing.checked = prefs.marketing;
    }
  }

  // Cargar Google Analytics solo si hay consentimiento
  function loadAnalytics() {
    // Solo cargar si no está ya cargado y hay consentimiento
    if (typeof gtag === 'undefined') {
      // Aquí se cargaría Google Analytics si se necesita
      // Ejemplo:
      // window.dataLayer = window.dataLayer || [];
      // function gtag(){dataLayer.push(arguments);}
      // gtag('js', new Date());
      // gtag('config', 'G-XXXXXXXXXX');
      // const script = document.createElement('script');
      // script.async = true;
      // script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';
      // document.head.appendChild(script);
    }
  }

  // Cargar scripts de marketing solo si hay consentimiento
  function loadMarketing() {
    // Cargar Facebook Pixel, etc. solo si hay consentimiento
    // Ejemplo:
    // if (typeof fbq === 'undefined') {
    //   // Código de Facebook Pixel
    // }
  }

  // Inicializar
  function init() {
    // Cargar preferencias guardadas
    const prefs = getPreferences();
    if (prefs) {
      loadPreferences();
      // Cargar scripts según preferencias
      if (prefs.analytics) {
        loadAnalytics();
      }
      if (prefs.marketing) {
        loadMarketing();
      }
    } else {
      showBanner();
    }

    // Event listeners
    const acceptBtn = document.getElementById('cookie-accept');
    const rejectBtn = document.getElementById('cookie-reject');
    const settingsBtn = document.getElementById('cookie-settings');
    const saveBtn = document.getElementById('cookie-save');

    if (acceptBtn) {
      acceptBtn.addEventListener('click', function() {
        savePreferences({ analytics: true, marketing: true });
        hideBanner();
        loadAnalytics();
        loadMarketing();
      });
    }

    if (rejectBtn) {
      rejectBtn.addEventListener('click', function() {
        savePreferences({ analytics: false, marketing: false });
        hideBanner();
      });
    }

    if (settingsBtn) {
      settingsBtn.addEventListener('click', showSettings);
    }

    if (saveBtn) {
      saveBtn.addEventListener('click', function() {
        const analytics = document.getElementById('cookie-analytics');
        const marketing = document.getElementById('cookie-marketing');
        const analyticsChecked = analytics ? analytics.checked : false;
        const marketingChecked = marketing ? marketing.checked : false;
        
        savePreferences({ 
          analytics: analyticsChecked, 
          marketing: marketingChecked 
        });
        hideSettings();
        hideBanner();
        
        if (analyticsChecked) loadAnalytics();
        if (marketingChecked) loadMarketing();
      });
    }

    // Botón para volver a mostrar configuración (si se necesita)
    const cookieSettingsLink = document.getElementById('footer-cookies-settings');
    if (cookieSettingsLink) {
      cookieSettingsLink.addEventListener('click', function(e) {
        e.preventDefault();
        showSettings();
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
