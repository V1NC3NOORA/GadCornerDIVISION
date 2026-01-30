// Dashboard animation on page load
document.addEventListener('DOMContentLoaded', () => {
    animateStatNumbers();
    observeElements();
});

// Animate stat numbers when in view
function animateStatNumbers() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                animateNumber(entry.target);
                entry.target.classList.add('animated');
            }
        });
    }, { threshold: 0.5 });
    
    statNumbers.forEach(el => observer.observe(el));
}

function animateNumber(element) {
    const finalValue = element.textContent.replace(/,/g, '');
    const numericValue = parseInt(finalValue) || 0;
    const duration = 1500;
    const startTime = Date.now();
    
    function update() {
        const elapsed = Date.now() - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const currentValue = Math.floor(progress * numericValue);
        
        element.textContent = currentValue.toLocaleString();
        
        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            element.textContent = numericValue.toLocaleString();
        }
    }
    
    if (numericValue > 0) {
        update();
    }
}

// Observe stat cards for scroll animation
function observeElements() {
    const cards = document.querySelectorAll('.stat-card, .program-card, .gender-breakdown');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    cards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
}

// Update dashboard with real data (if connected to API)
function updateDashboardData(data) {
    if (data.total_teachers) {
        updateStatCard('total_teachers', data.total_teachers);
    }
    if (data.active_teachers) {
        updateStatCard('active_teachers', data.active_teachers);
    }
    if (data.total_students) {
        updateStatCard('total_students', data.total_students);
    }
}

function updateStatCard(statName, value) {
    const element = document.querySelector(`[data-stat="${statName}"]`);
    if (element) {
        element.textContent = value.toLocaleString();
    }
}
