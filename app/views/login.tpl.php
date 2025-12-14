<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход - Библиотека</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            max-width: 450px;
        }

        .login-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 
                0 10px 40px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(211, 47, 47, 0.05);
            position: relative;
            overflow: hidden;
        }

        .login-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #d32f2f, #ff9800);
        }

        /* Логотип */
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-icon {
            font-size: 3rem;
            margin-bottom: 10px;
            display: block;
            color: #d32f2f;
        }

        .logo-text {
            font-size: 2rem;
            font-weight: 800;
            color: #d32f2f;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 5px;
        }

        .logo-subtitle {
            color: #666;
            font-size: 1rem;
            font-weight: 500;
        }

        /* Заголовок */
        .login-title {
            font-size: 1.8rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }

        /* Форма */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
            font-size: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .form-control:focus {
            outline: none;
            border-color: #d32f2f;
            background: white;
            box-shadow: 0 0 0 4px rgba(211, 47, 47, 0.1);
        }

        .form-control.error {
            border-color: #f44336;
            background: rgba(244, 67, 54, 0.02);
        }

        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
            padding: 5px;
            font-size: 1.2rem;
        }

        .toggle-password:hover {
            color: #d32f2f;
        }

        .error-message {
            color: #f44336;
            font-size: 0.85rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Чекбокс "Запомнить меня" */
        .remember-me {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
            color: #555;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        /* Кнопка входа */
        .login-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #d32f2f, #ff5722);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(211, 47, 47, 0.3);
        }

        .login-btn:active {
            transform: translateY(-1px);
        }

        .login-btn:disabled {
            background: #cccccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Ссылка на регистрацию */
        .register-link {
            text-align: center;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #eee;
            color: #666;
        }

        .register-link a {
            color: #d32f2f;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
            color: #b71c1c;
            text-decoration: underline;
        }

        /* Социальные сети (опционально) */
        .social-login {
            margin-top: 25px;
            text-align: center;
        }

        .social-divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
            color: #888;
            font-size: 0.9rem;
        }

        .social-divider::before,
        .social-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e0e0e0;
        }

        .social-divider span {
            padding: 0 15px;
        }

        .social-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .social-btn {
            flex: 1;
            padding: 14px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            background: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 0.95rem;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            border-color: #d32f2f;
            color: #d32f2f;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .social-icon {
            font-size: 1.2rem;
        }

        /* Анимации */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card > * {
            animation: fadeIn 0.6s ease-out forwards;
            opacity: 0;
        }

        .logo { animation-delay: 0.1s; }
        .login-title { animation-delay: 0.2s; }
        .form-group:nth-child(1) { animation-delay: 0.3s; }
        .form-group:nth-child(2) { animation-delay: 0.4s; }
        .remember-me { animation-delay: 0.5s; }
        .login-btn { animation-delay: 0.6s; }
        .register-link { animation-delay: 0.7s; }

        /* Адаптивность */
        @media (max-width: 576px) {
            .login-card {
                padding: 30px 20px;
            }

            .social-buttons {
                flex-direction: column;
            }

            .logo-icon {
                font-size: 2.5rem;
            }

            .logo-text {
                font-size: 1.7rem;
            }

            .login-title {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 400px) {
            .login-card {
                padding: 25px 15px;
            }

            .logo-icon {
                font-size: 2.2rem;
            }

            .logo-text {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <!-- Логотип -->
            <div class="logo">
                <span class="logo-icon">📚</span>
                <a href="/" class="logo-text">Библиотека</a>
                <div class="logo-subtitle">Войдите в свой аккаунт</div>
            </div>

            <!-- Заголовок -->
            <h1 class="login-title">Вход в систему</h1>

            <!-- Форма авторизации -->
            <form id="loginForm">
                <!-- Логин -->
                <div class="form-group">
                    <label class="form-label" for="username">
                        Логин
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        class="form-control" 
                        placeholder="Введите ваш логин"
                        required
                        autocomplete="username"
                    >
                    <div class="error-message" id="usernameError"></div>
                </div>

                <!-- Пароль -->
                <div class="form-group">
                    <label class="form-label" for="password">
                        Пароль
                    </label>
                    <div class="password-wrapper">
                        <input 
                            type="password" 
                            id="password" 
                            class="form-control" 
                            placeholder="Введите ваш пароль"
                            required
                            autocomplete="current-password"
                        >
                        <button type="button" class="toggle-password" id="togglePassword">
                            👁️
                        </button>
                    </div>
                    <div class="error-message" id="passwordError"></div>
                </div>

                <!-- Кнопка входа -->
                <button type="submit" class="login-btn" id="submitBtn">
                    Войти
                </button>
            </form>

            <!-- Ссылка на регистрацию -->
            <div class="register-link">
                <span>Нет аккаунта?</span>
                <a href="/reg">Зарегистрируйтесь</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Плавное появление
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 0.8s ease';
                document.body.style.opacity = '1';
            }, 100);

            // Переменные
            const form = document.getElementById('loginForm');
            const username = document.getElementById('username');
            const password = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            const submitBtn = document.getElementById('submitBtn');
            const remember = document.getElementById('remember');

            // Восстановление данных из localStorage (если "Запомнить меня" было включено)
            if (localStorage.getItem('rememberLogin') === 'true') {
                const savedUsername = localStorage.getItem('savedUsername');
                if (savedUsername) {
                    username.value = savedUsername;
                    remember.checked = true;
                    password.focus();
                }
            }

            // Валидация логина
            username.addEventListener('blur', function() {
                const value = this.value.trim();
                const error = document.getElementById('usernameError');
                
                if (!value) {
                    error.textContent = 'Введите логин';
                    this.classList.add('error');
                } else if (value.length < 3) {
                    error.textContent = 'Логин должен содержать минимум 3 символа';
                    this.classList.add('error');
                } else {
                    error.textContent = '';
                    this.classList.remove('error');
                }
            });

            // Валидация пароля
            password.addEventListener('blur', function() {
                const value = this.value;
                const error = document.getElementById('passwordError');
                
                if (!value) {
                    error.textContent = 'Введите пароль';
                    this.classList.add('error');
                } else if (value.length < 6) {
                    error.textContent = 'Пароль должен содержать минимум 6 символов';
                    this.classList.add('error');
                } else {
                    error.textContent = '';
                    this.classList.remove('error');
                }
            });

            // Показать/скрыть пароль
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
            });

            // Обработка отправки формы
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Триггерим все проверки
                username.dispatchEvent(new Event('blur'));
                password.dispatchEvent(new Event('blur'));
                
                // Проверяем ошибки
                const errors = document.querySelectorAll('.error-message');
                const hasErrors = Array.from(errors).some(error => error.textContent.trim() !== '');
                
                // Проверяем заполненность
                const allFilled = username.value.trim() && password.value.trim();
                
                if (!hasErrors && allFilled) {
                    // Блокируем кнопку
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Вход...';
                    
                    // Сохраняем логин если "Запомнить меня" включено
                    if (remember.checked) {
                        localStorage.setItem('savedUsername', username.value.trim());
                        localStorage.setItem('rememberLogin', 'true');
                    } else {
                        localStorage.removeItem('savedUsername');
                        localStorage.setItem('rememberLogin', 'false');
                    }
                    
                    // Имитация отправки на сервер
                    setTimeout(() => {
                        // В реальном приложении здесь будет AJAX запрос
                        const loginData = {
                            username: username.value.trim(),
                            password: password.value,
                            remember: remember.checked
                        };
                        
                        console.log('Отправка данных:', loginData);
                        
                        // Имитация успешного входа
                        alert('Вход выполнен успешно! Добро пожаловать в библиотеку!');
                        window.location.href = '/';
                    }, 1500);
                } else {
                    // Если есть ошибки, показываем сообщение
                    if (!allFilled) {
                        alert('Пожалуйста, заполните все поля');
                    }
                }
            });

            // Автофокус на поле логина
            username.focus();
            
            // Обработка клавиши Enter
            form.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' && !submitBtn.disabled) {
                    submitBtn.click();
                }
            });
        });
    </script>
</body>
</html>