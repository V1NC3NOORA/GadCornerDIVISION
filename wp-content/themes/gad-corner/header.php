<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header class="site-header">
        <div class="header-overlay-accent"></div>
        <div class="header-container">
            <div class="header-left">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/pngs/R8Clogo.png' ); ?>" alt="Department of Education Logo" class="header-logo-main" />
                <div class="header-info">
                    <h1 class="header-title-small">Republic of the Philippines</h1>
                    <p class="header-title-main">REGION VIII Department of Education</p>
                </div>
            </div>

            <div class="header-right">
                <div class="header-search">
                    <input type="text" placeholder="Search..." class="search-input" />
                </div>
                <div class="header-logos-right">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/pngs/tseal.png' ); ?>" alt="DepEd Seal" class="header-logo-side" />
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/imgs/pngs/bagongph.png' ); ?>" alt="Bagong PH" class="header-logo-side" />
                </div>
            </div>
        </div>

        <nav class="site-navigation">
            <div class="nav-container">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link">
                            <span class="nav-icon">🏠</span> Home
                        </a>
                    </li>

                    <li class="nav-item nav-has-panel">
                        <a href="#" class="nav-link">
                            <span class="nav-icon">👥</span> About Us <span class="dropdown-icon">▼</span>
                        </a>
                        <div class="nav-panel">
                            <div class="panel-content">
                                <div class="panel-column">
                                    <h4>Division Office</h4>
                                    <ul>
                                        <li><a href="#">Organization</a></li>
                                        <li><a href="#">Vision & Mission</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Contact Information</a></li>
                                    </ul>
                                </div>
                                <div class="panel-column">
                                    <h4>Leadership</h4>
                                    <ul>
                                        <li><a href="#">Division Superintendent</a></li>
                                        <li><a href="#">Officials</a></li>
                                        <li><a href="#">Organizational Chart</a></li>
                                    </ul>
                                </div>
                                <div class="panel-column">
                                    <h4>Accreditation</h4>
                                    <ul>
                                        <li><a href="#">Certifications</a></li>
                                        <li><a href="#">Awards</a></li>
                                        <li><a href="#">Recognition</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-has-panel">
                        <a href="#" class="nav-link">
                            <span class="nav-icon">📚</span> GAD Programs <span class="dropdown-icon">▼</span>
                        </a>
                        <div class="nav-panel">
                            <div class="panel-content">
                                <div class="panel-column">
                                    <h4>Initiatives</h4>
                                    <ul>
                                        <li><a href="#">Women Leadership</a></li>
                                        <li><a href="#">Gender Equality</a></li>
                                        <li><a href="#">LGBTQ+ Support</a></li>
                                        <li><a href="#">Anti-Bullying</a></li>
                                    </ul>
                                </div>
                                <div class="panel-column">
                                    <h4>Programs</h4>
                                    <ul>
                                        <li><a href="#">Scholarships</a></li>
                                        <li><a href="#">Mentorship</a></li>
                                        <li><a href="#">Training</a></li>
                                        <li><a href="#">Community Events</a></li>
                                    </ul>
                                </div>
                                <div class="panel-column">
                                    <h4>Resources</h4>
                                    <ul>
                                        <li><a href="#">Guidelines</a></li>
                                        <li><a href="#">Manuals</a></li>
                                        <li><a href="#">Publications</a></li>
                                        <li><a href="#">Best Practices</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-has-panel">
                        <a href="#" class="nav-link">
                            <span class="nav-icon">👨‍🎓</span> Schools & Teachers <span class="dropdown-icon">▼</span>
                        </a>
                        <div class="nav-panel">
                            <div class="panel-content">
                                <div class="panel-column">
                                    <h4>Directory</h4>
                                    <ul>
                                        <li><a href="#">Elementary Schools</a></li>
                                        <li><a href="#">Secondary Schools</a></li>
                                        <li><a href="#">Special Programs</a></li>
                                    </ul>
                                </div>
                                <div class="panel-column">
                                    <h4>Teacher Resources</h4>
                                    <ul>
                                        <li><a href="#">Professional Development</a></li>
                                        <li><a href="#">Curriculum Materials</a></li>
                                        <li><a href="#">Assessment Tools</a></li>
                                    </ul>
                                </div>
                                <div class="panel-column">
                                    <h4>Statistics</h4>
                                    <ul>
                                        <li><a href="#">School Performance</a></li>
                                        <li><a href="#">Teacher Analytics</a></li>
                                        <li><a href="#">Student Enrollment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-has-panel">
                        <a href="#" class="nav-link">
                            <span class="nav-icon">📊</span> Reports & Data <span class="dropdown-icon">▼</span>
                        </a>
                        <div class="nav-panel">
                            <div class="panel-content">
                                <div class="panel-column">
                                    <h4>Annual Reports</h4>
                                    <ul>
                                        <li><a href="#">2025 Report</a></li>
                                        <li><a href="#">2024 Report</a></li>
                                        <li><a href="#">Archives</a></li>
                                    </ul>
                                </div>
                                <div class="panel-column">
                                    <h4>Statistics</h4>
                                    <ul>
                                        <li><a href="#">Gender Demographics</a></li>
                                        <li><a href="#">Performance Data</a></li>
                                        <li><a href="#">Trends</a></li>
                                    </ul>
                                </div>
                                <div class="panel-column">
                                    <h4>Downloads</h4>
                                    <ul>
                                        <li><a href="#">PDF Reports</a></li>
                                        <li><a href="#">Datasets</a></li>
                                        <li><a href="#">Presentations</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-icon">📞</span> Contact
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="main">
