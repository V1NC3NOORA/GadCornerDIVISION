<?php

get_header();
?>

<section class="hero-banner">
    <div class="hero-banner-content">
        <h2>Gender and Development Corner</h2>
        <p>Promoting gender equality and inclusive education in Catarman Division</p>
    </div>
</section>

<section class="carousel-section">
    <div class="carousel-wrapper">
        <div class="carousel-track" id="carouselTrack">
            <div class="carousel-item">
                <div style="text-align: center;">
                    <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Empowering Education</h2>
                    <p style="font-size: 1.1rem; opacity: 0.95;">Through Equality and Inclusion</p>
                </div>
            </div>
            <div class="carousel-item">
                <div style="text-align: center;">
                    <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Our Mission</h2>
                    <p style="font-size: 1.1rem; opacity: 0.95;">Promote gender equality and inclusive education in Catarman Division</p>
                </div>
            </div>
            <div class="carousel-item">
                <div style="text-align: center;">
                    <h2 style="font-size: 2.5rem; margin-bottom: 1rem;">Achievements 2025</h2>
                    <p style="font-size: 1.1rem; opacity: 0.95;">28 Programs Successfully Implemented</p>
                </div>
            </div>
        </div>
        
        <div class="carousel-controls" id="carouselDots">
            <div class="carousel-dot active" onclick="goToSlide(0)"></div>
            <div class="carousel-dot" onclick="goToSlide(1)"></div>
            <div class="carousel-dot" onclick="goToSlide(2)"></div>
        </div>
        
        <button class="carousel-nav carousel-prev" onclick="prevSlide()">❮</button>
        <button class="carousel-nav carousel-next" onclick="nextSlide()">❯</button>
    </div>
</section>

<section class="dashboard-section">
    <div class="container">
        <h2 class="section-title">Dashboard Overview</h2>
        
        <div class="stats-grid">
            <div class="stat-card teachers">
                <div class="stat-label">Total Teachers</div>
                <div class="stat-number" data-stat="total_teachers">145</div>
                <div class="stat-info">Across all schools</div>
            </div>
            
            <div class="stat-card active-teachers">
                <div class="stat-label">Active Teachers</div>
                <div class="stat-number" data-stat="active_teachers">138</div>
                <div class="stat-info">Currently teaching</div>
            </div>
            
            <div class="stat-card students">
                <div class="stat-label">Total Students</div>
                <div class="stat-number" data-stat="total_students">2,850</div>
                <div class="stat-info">Enrolled in district</div>
            </div>
            
            <div class="stat-card gender">
                <div class="stat-label">Gender Balance</div>
                <div class="stat-number" data-stat="gender_ratio">50:50</div>
                <div class="stat-info">Close to equality</div>
            </div>
            
            <div class="stat-card programs">
                <div class="stat-label">Active Programs</div>
                <div class="stat-number" data-stat="programs">12</div>
                <div class="stat-info">Ongoing initiatives</div>
            </div>
        </div>

        <div class="gender-breakdown">
            <h3>👥 Gender Distribution</h3>
            <div class="gender-stats">
                <div class="gender-item male">
                    <div class="gender-label">Male Students</div>
                    <div class="gender-bar">
                        <div class="gender-fill" style="height: 52%;">1420</div>
                    </div>
                    <div class="gender-value">1,420</div>
                    <div class="gender-label" style="font-size: 0.875rem; color: #6B7280;">49.82%</div>
                </div>
                
                <div class="gender-item female">
                    <div class="gender-label">Female Students</div>
                    <div class="gender-bar">
                        <div class="gender-fill" style="height: 48%;">1380</div>
                    </div>
                    <div class="gender-value">1,380</div>
                    <div class="gender-label" style="font-size: 0.875rem; color: #6B7280;">48.42%</div>
                </div>
                
                <div class="gender-item other">
                    <div class="gender-label">Other/Prefer Not to Say</div>
                    <div class="gender-bar">
                        <div class="gender-fill" style="height: 1.8%;">50</div>
                    </div>
                    <div class="gender-value">50</div>
                    <div class="gender-label" style="font-size: 0.875rem; color: #6B7280;">1.75%</div>
                </div>
            </div>
        </div>

        <div class="programs-section">
            <h3 style="color: var(--primary-violet); font-size: 1.25rem; margin-bottom: 1.5rem;">
                🎯 Active GAD Programs
            </h3>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-icon">👩‍🏫</div>
                    <div class="program-title">Women Leadership Training</div>
                    <div class="program-desc">Empowering female teachers and administrators with leadership skills</div>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">📚</div>
                    <div class="program-title">Gender-Sensitive Curriculum</div>
                    <div class="program-desc">Integrating gender perspectives in educational materials</div>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">🎓</div>
                    <div class="program-title">Scholarship Program</div>
                    <div class="program-desc">Educational support for underprivileged students of all genders</div>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">💪</div>
                    <div class="program-title">Anti-Bullying Initiative</div>
                    <div class="program-desc">Creating safe spaces for all students regardless of gender</div>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">🌟</div>
                    <div class="program-title">Mentorship Program</div>
                    <div class="program-desc">Pairing students with mentors for guidance and support</div>
                </div>
                
                <div class="program-card">
                    <div class="program-icon">🤝</div>
                    <div class="program-title">Community Engagement</div>
                    <div class="program-desc">Involving parents and community in gender equality advocacy</div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer();
