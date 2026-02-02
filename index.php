<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ailavator AI System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            padding: 20px;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .login-logo img {
            height: 50px;
            width: 50px;
        }

        .login-logo .brand-name {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-header h1 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: white;
        }

        .login-header p {
            color: var(--gray-light);
            font-size: 0.95rem;
        }

        .login-form .form-group {
            margin-bottom: 25px;
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: var(--gray-light);
            font-weight: 500;
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-light);
        }

        .login-form input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: white;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .login-form input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
        }

        .login-form input::placeholder {
            color: var(--gray-light);
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .login-btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        .error-message {
            background: rgba(239, 68, 68, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
        }

        .login-footer {
            margin-top: 30px;
            text-align: center;
            color: var(--gray-light);
            font-size: 0.9rem;
        }

        .demo-credentials {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
            font-size: 0.85rem;
        }

        .demo-credentials h4 {
            color: #10b981;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .demo-credentials p {
            margin: 5px 0;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.8rem;
        }

        @media (max-width: 480px) {
            .login-box {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <div class="login-logo">
                    <img src="images/logo.svg" alt="ailavator Logo">
                    <span class="brand-name">ailavator</span>
                </div>
                <h1>AI Security System</h1>
                <p>Enter your credentials to access the AI monitoring dashboard</p>
            </div>

            
            <form method="POST" action="index.php" class="login-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                </div>

                <button type="submit" class="login-btn">
                    <i class="fas fa-sign-in-alt"></i>
                    Sign In
                </button>
            </form>

            <div class="demo-credentials">
                <h4><i class="fas fa-info-circle"></i> Demo Credentials</h4>
                <p><strong>Username:</strong> admin</p>
                <p><strong>Password:</strong> ailavator2024</p>
            </div>

            <div class="login-footer">
                <p>© 2024 ailavator AI Security System v2.1</p>
                <p style="font-size: 0.8rem; margin-top: 5px; opacity: 0.7;">
                    <i class="fas fa-shield-alt"></i> Secure Login - All connections encrypted
                </p>
            </div>
        </div>
    </div>

    <script>
      
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.login-form input');
            
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });

            // Add AI loading effect on submit
            const form = document.querySelector('.login-form');
            form.addEventListener('submit', function(e) {
                const btn = this.querySelector('.login-btn');
                btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Authenticating...';
                btn.disabled = true;
                
                // Simulate AI authentication process
                setTimeout(() => {
                    if (!document.querySelector('.error-message')) {
                        btn.innerHTML = '<i class="fas fa-check"></i> Access Granted';
                    }
                }, 500);
            });

        
            console.log('%c[ailavator AI Login System]', 'color: #6366f1; font-weight: bold;');
            console.log('Unauthorized access attempts will trigger security protocols.');

            console.log('%c[DEVELOPER NOTE]', 'color: #f59e0b; font-weight: bold;');
            console.log('Don\'t forget to remove the GitHub link from the documentation.');
        });
    </script>
</body>
</html>
