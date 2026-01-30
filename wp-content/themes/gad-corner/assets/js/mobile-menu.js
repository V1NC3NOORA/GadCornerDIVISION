document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.querySelector('.mobile-menu-toggle');
  const navMenu = document.getElementById('primary-menu');
  const body = document.body;

  if (!toggle || !navMenu) return;

  function setMenuOpen(open) {
    toggle.setAttribute('aria-expanded', String(open));
    navMenu.classList.toggle('mobile-open', open);
    body.classList.toggle('menu-open', open);
  }

  toggle.addEventListener('click', function () {
    const expanded = this.getAttribute('aria-expanded') === 'true';
    setMenuOpen(!expanded);
  });

  // Delegate clicks for panel toggles on small screens
  navMenu.addEventListener('click', function (e) {
    const link = e.target.closest('.nav-link');
    if (!link) return;

    const parent = link.parentElement;
    if (parent && parent.classList.contains('nav-has-panel') && window.innerWidth <= 768) {
      e.preventDefault();
      parent.classList.toggle('mobile-open');
    }
  });

  // Close menu when clicking outside on mobile
  document.addEventListener('click', function (e) {
    if (window.innerWidth > 768) return;
    if (!navMenu.contains(e.target) && !toggle.contains(e.target) && navMenu.classList.contains('mobile-open')) {
      setMenuOpen(false);
    }
  });

  // Ensure menu state resets on resize to desktop
  window.addEventListener('resize', function () {
    if (window.innerWidth > 768) {
      setMenuOpen(false);
      document.querySelectorAll('.nav-item.nav-has-panel').forEach(item => item.classList.remove('mobile-open'));
    }
  });
});
