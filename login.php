<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ailavator</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- Navigation -->
        <nav class="navbar">
            <div class="nav-brand">
                <img src="images/logo.svg" alt="ailavator Logo" class="logo">
                <span class="brand-name">ailavator</span>
                <span class="beta-tag">AI v2.1</span>
            </div>
            <ul class="nav-links">
                <li><a href="dashboard.php" class="active"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="diagnosis.php"><i class="fas fa-stethoscope"></i> AI Diagnosis</a></li>
                <li><a href="system-status.php"><i class="fas fa-server"></i> System Status</a></li>
                <li><a href="logs.php"><i class="fas fa-clipboard-list"></i> Security Logs</a></li>
                <li><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
            </ul>
            <div class="user-menu" onclick="toggleUserMenu()">
                <img src="images/ai-avatar.png" alt="AI Avatar" class="avatar">
                <span>admin</span>
                <i class="fas fa-chevron-down"></i>
                <div class="user-dropdown" id="userDropdown">
                    <a href="#"><i class="fas fa-user"></i> Profile</a>
                    <a href="#"><i class="fas fa-cog"></i> Account Settings</a>
                    <div class="divider"></div>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <div class="welcome-banner">
                <div class="welcome-text">
                    <h1>Welcome back, admin!</h1>
                    <p class="subtitle">ailavator AI is actively monitoring your system. All systems are operational.</p>
                    <div class="login-info">
                        <i class="fas fa-clock"></i>
                        <span>Last login: 2026-02-02 20:54:28</span>
                    </div>
                </div>
                <div class="welcome-status">
                    <div class="status-indicator online">
                        <i class="fas fa-shield-alt"></i>
                        <span>SYSTEM SECURE</span>
                    </div>
                </div>
            </div>

            <div class="hero-section">
                <div class="hero-text">
                    <h1>Your AI-Powered System Guardian</h1>
                    <p class="subtitle">ailavator continuously monitors, diagnoses, and protects your infrastructure using advanced machine learning algorithms.</p>
                    <div class="cta-buttons">
                        <a href="diagnosis.php" class="btn btn-primary">
                            <i class="fas fa-play-circle"></i> Run AI Diagnosis
                        </a>
                        <a href="#features" class="btn btn-secondary">
                            <i class="fas fa-info-circle"></i> Learn More
                        </a>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="terminal-window">
                        <div class="terminal-header">
                            <div class="terminal-dots">
                                <span class="dot red"></span>
                                <span class="dot yellow"></span>
                                <span class="dot green"></span>
                            </div>
                            <div class="terminal-title">ailavator@system:~</div>
                        </div>
                        <div class="terminal-body">
                            <p><span class="prompt">$</span> ailavator --scan-full</p>
                            <p>Scanning system integrity...</p>
                            <p>✓ Kernel modules verified</p>
                            <p>✓ Memory allocation optimal</p>
                            <p>✓ Network layers secured</p>
                            <p>✓ User permissions validated</p>
                            <p class="blink">Running AI vulnerability assessment...</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features Section -->
            <section id="features" class="features-section">
                <h2>Why Choose ailavator?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Proactive Defense</h3>
                        <p>AI-driven threat detection that learns from your system's behavior patterns to prevent zero-day attacks.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>Self-Learning AI</h3>
                        <p>Continuously improves its algorithms based on system metrics and security events.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3>Real-time Monitoring</h3>
                        <p>24/7 surveillance of all system processes, network traffic, and user activities.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-code-branch"></i>
                        </div>
                        <h3>Automated Patching</h3>
                        <p>Intelligent vulnerability assessment and automated security patch deployment.</p>
                    </div>
                </div>
            </section>

            <!-- System Metrics -->
            <section class="metrics-section">
                <h2>Live System Metrics</h2>
                <div class="metrics-grid">
                    <div class="metric-card">
                        <h4>System Health</h4>
                        <div class="metric-value">98%</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 98%"></div>
                        </div>
                    </div>
                    <div class="metric-card">
                        <h4>Threat Level</h4>
                        <div class="metric-value low">LOW</div>
                        <div class="progress-bar">
                            <div class="progress-fill low" style="width: 15%"></div>
                        </div>
                    </div>
                    <div class="metric-card">
                        <h4>AI Confidence</h4>
                        <div class="metric-value">96.7%</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 96.7%"></div>
                        </div>
                    </div>
                    <div class="metric-card">
                        <h4>Response Time</h4>
                        <div class="metric-value">2.3ms</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Security Status -->
            <section class="security-section">
                <div class="security-header">
                    <h2><i class="fas fa-user-shield"></i> Security Status</h2>
                    <span class="status-badge safe">ALL SYSTEMS SECURE</span>
                </div>
                <div class="security-grid">
                    <div class="security-item secure">
                        <i class="fas fa-check-circle"></i>
                        <span>Firewall Active</span>
                    </div>
                    <div class="security-item secure">
                        <i class="fas fa-check-circle"></i>
                        <span>Intrusion Detection</span>
                    </div>
                    <div class="security-item warning">
                        <i class="fas fa-exclamation-triangle"></i>
                        <span>Log Analysis Pending</span>
                    </div>
                    <div class="security-item secure">
                        <i class="fas fa-check-circle"></i>
                        <span>Encryption Active</span>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-brand">
                    <img src="images/logo.svg" alt="ailavator Logo" class="footer-logo">
                    <span>ailavator AI Security System</span>
                </div>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Documentation</a>
                    <a href="#">Contact Support</a>
                </div>
                <div class="footer-copyright">
                    © 2024 ailavator AI. All rights reserved. v2.1.4
                </div>
            </div>
        </footer>
    </div>

    <script src="js/main.js"></script>
    <style>
        .welcome-banner {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.2), rgba(16, 185, 129, 0.2));
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 25px 30px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .welcome-text h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .login-info {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 10px;
            color: var(--gray-light);
            font-size: 0.9rem;
        }

        .status-indicator {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            background: rgba(16, 185, 129, 0.2);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 12px;
            color: #10b981;
            font-weight: 600;
        }

        .user-menu {
            position: relative;
            cursor: pointer;
        }

        .user-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 10px 0;
            min-width: 200px;
            display: none;
            z-index: 1000;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .user-dropdown.show {
            display: block;
        }

        .user-dropdown a {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 20px;
            color: var(--gray-light);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .user-dropdown a:hover {
            background: rgba(255, 255, 255, 0.05);
            color: white;
        }

        .user-dropdown .divider {
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
            margin: 5px 0;
        }
    </style>
    <script>
        function toggleUserMenu() {
            const dropdown = document.getElementById('userDropdown');
            dropdown.classList.toggle('show');
        }

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('userDropdown');
            const userMenu = document.querySelector('.user-menu');
            
            if (!userMenu.contains(event.target)) {
                dropdown.classList.remove('show');
            }
        });
    </script>
</body>
</html>
