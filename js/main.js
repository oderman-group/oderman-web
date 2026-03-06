(function() {
  // Año actual
  const anioElement = document.getElementById('anio');
  if (anioElement) {
    anioElement.textContent = new Date().getFullYear();
  }

  // Menú móvil
  var btn = document.querySelector('.header__menu-btn');
  var navWrapper = document.querySelector('.header__nav-wrapper');
  if (btn && navWrapper) {
    btn.addEventListener('click', function() {
      var isOpen = navWrapper.getAttribute('aria-hidden') === 'false';
      navWrapper.setAttribute('aria-hidden', !isOpen);
      btn.setAttribute('aria-expanded', !isOpen);
      btn.setAttribute('aria-label', !isOpen ? 'Cerrar menú' : 'Abrir menú');
    });

    // Cerrar menú al hacer clic en un enlace
    var navLinks = navWrapper.querySelectorAll('a');
    navLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        navWrapper.setAttribute('aria-hidden', 'true');
        btn.setAttribute('aria-expanded', 'false');
        btn.setAttribute('aria-label', 'Abrir menú');
      });
    });

    // Cerrar menú al hacer clic fuera
    document.addEventListener('click', function(e) {
      if (!navWrapper.contains(e.target) && !btn.contains(e.target)) {
        navWrapper.setAttribute('aria-hidden', 'true');
        btn.setAttribute('aria-expanded', 'false');
        btn.setAttribute('aria-label', 'Abrir menú');
      }
    });
  }

  // Scroll to Top Button
  var scrollToTopBtn = document.getElementById('scroll-to-top');
  if (scrollToTopBtn) {
    function toggleScrollButton() {
      if (window.pageYOffset > 300) {
        scrollToTopBtn.classList.add('scroll-to-top--visible');
      } else {
        scrollToTopBtn.classList.remove('scroll-to-top--visible');
      }
    }

    scrollToTopBtn.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    window.addEventListener('scroll', toggleScrollButton);
    toggleScrollButton();
  }
})();
