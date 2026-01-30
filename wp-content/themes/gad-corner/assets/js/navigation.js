// Mobile Navigation Panel Toggle
document.addEventListener('DOMContentLoaded', function() {
  const navItems = document.querySelectorAll('.nav-item.nav-has-panel');
  const isMobile = window.innerWidth <= 768;

  // Handle mobile/tablet panel click
  navItems.forEach(item => {
    const link = item.querySelector('.nav-link');
    
    if (isMobile) {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        item.classList.toggle('mobile-open');
      });
    }
  });

  // Close panels when clicking outside
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.nav-item')) {
      navItems.forEach(item => {
        item.classList.remove('mobile-open');
      });
    }
  });

  // Handle window resize
  window.addEventListener('resize', function() {
    const isNowMobile = window.innerWidth <= 768;
    if (!isNowMobile) {
      navItems.forEach(item => {
        item.classList.remove('mobile-open');
      });
    }
  });

  // Smooth scroll for internal links
  const panelLinks = document.querySelectorAll('.panel-column a');
  panelLinks.forEach(link => {
    link.addEventListener('click', function() {
      navItems.forEach(item => {
        item.classList.remove('mobile-open');
      });
    });
  });
});
