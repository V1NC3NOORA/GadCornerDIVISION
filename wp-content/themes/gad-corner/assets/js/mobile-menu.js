document.addEventListener('DOMContentLoaded', function () {
  const toggle = document.querySelector('.mobile-menu-toggle');
  const navMenu = document.getElementById('primary-menu');

  if (!toggle || !navMenu) return;

  toggle.addEventListener('click', function () {
    const expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', String(!expanded));
    navMenu.classList.toggle('mobile-open');
  });

  // Toggle subpanels on small screens
  function handleSubpanels() {
    if (window.innerWidth <= 768) {
      document.querySelectorAll('.nav-item.nav-has-panel > .nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
          // prevent default navigation on small screens and toggle panel
          e.preventDefault();
          const parent = this.parentElement;
          parent.classList.toggle('mobile-open');
        });
      });
    }
  }

  handleSubpanels();
  window.addEventListener('resize', handleSubpanels);
});
