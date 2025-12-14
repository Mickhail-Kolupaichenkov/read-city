<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация - Библиотека</title>
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

        .register-container {
            width: 100%;
            max-width: 500px;
        }

        .register-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 
                0 10px 40px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(211, 47, 47, 0.05);
            position: relative;
            overflow: hidden;
        }

        .register-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #d32f2f, #ff9800);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo-icon {
            font-size: 3.5rem;
            margin-bottom: 10px;
            display: block;
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

        .register-title {
            font-size: 1.8rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .form-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
            font-size: 1rem;
        }

        .required {
            color: #d32f2f;
            margin-left: 2px;
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

        .form-control.success {
            border-color: #4caf50;
        }

        .error-message {
            color: #f44336;
            font-size: 0.85rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .success-message {
            color: #4caf50;
            font-size: 0.85rem;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
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

        .requirements {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 15px;
            margin-top: 15px;
            border-left: 4px solid #d32f2f;
        }

        .requirements-title {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .requirement {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .requirement.valid {
            color: #4caf50;
        }

        .requirement.invalid {
            color: #f44336;
        }

        .requirement-icon {
            font-size: 1rem;
        }

        .register-btn {
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
            position: relative;
            overflow: hidden;
        }

        .register-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(211, 47, 47, 0.3);
        }

        .register-btn:active {
            transform: translateY(-1px);
        }

        .register-btn:disabled {
            background: #cccccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .login-link {
            text-align: center;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #eee;
            color: #666;
        }

        .login-link a {
            color: #d32f2f;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #b71c1c;
            text-decoration: underline;
        }

        .social-register {
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

        .register-card > * {
            animation: fadeIn 0.6s ease-out forwards;
            opacity: 0;
        }

        .logo { animation-delay: 0.1s; }
        .register-title { animation-delay: 0.2s; }
        .form-row { animation-delay: 0.3s; }
        .form-group:nth-child(3) { animation-delay: 0.4s; }
        .form-group:nth-child(4) { animation-delay: 0.5s; }
        .requirements { animation-delay: 0.6s; }
        .register-btn { animation-delay: 0.7s; }
        .login-link { animation-delay: 0.8s; }
        .social-register { animation-delay: 0.9s; }

        /* Адаптивность */
        @media (max-width: 576px) {
            .register-card {
                padding: 30px 20px;
            }

            .form-row {
                flex-direction: column;
                gap: 25px;
            }

            .social-buttons {
                flex-direction: column;
            }

            .logo-icon {
                font-size: 2.8rem;
            }

            .logo-text {
                font-size: 1.7rem;
            }

            .register-title {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 400px) {
            .register-card {
                padding: 25px 15px;
            }

            .logo-icon {
                font-size: 2.5rem;
            }

            .logo-text {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <!-- Логотип -->
            <div class="logo">
                <span class="logo-icon">📚</span>
                <a href="/" class="logo-text">Библиотека</a>
                <div class="logo-subtitle">Создайте свой читательский аккаунт</div>
            </div>

            <!-- Заголовок -->
            <h1 class="register-title">Регистрация</h1>

            <!-- Форма регистрации -->
            <form id="registerForm">
                <!-- Имя и Фамилия в одной строке -->
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="firstName">
                            Имя <span class="required">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="firstName" 
                            class="form-control" 
                            placeholder="Введите ваше имя"
                            required
                        >
                        <div class="error-message" id="firstNameError"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="lastName">
                            Фамилия <span class="required">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="lastName" 
                            class="form-control" 
                            placeholder="Введите вашу фамилию"
                            required
                        >
                        <div class="error-message" id="lastNameError"></div>
                    </div>
                </div>

                <!-- Логин -->
                <div class="form-group">
                    <label class="form-label" for="username">
                        Логин <span class="required">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="username" 
                        class="form-control" 
                        placeholder="Придумайте уникальный логин"
                        required
                    >
                    <div class="error-message" id="usernameError"></div>
                    <div class="success-message" id="usernameSuccess"></div>
                </div>

                <!-- Пароль -->
                <div class="form-group">
                    <label class="form-label" for="password">
                        Пароль <span class="required">*</span>
                    </label>
                    <div class="password-wrapper">
                        <input 
                            type="password" 
                            id="password" 
                            class="form-control" 
                            placeholder="Придумайте надежный пароль"
                            required
                        >
                        <button type="button" class="toggle-password" id="togglePassword">
                            👁️
                        </button>
                    </div>
                    <div class="error-message" id="passwordError"></div>
                    
                    <!-- Требования к паролю -->
                    <div class="requirements">
                        <div class="requirements-title">Пароль должен содержать:</div>
                        <div class="requirement" id="reqLength">
                            <span class="requirement-icon">❌</span>
                            <span>Минимум 8 символов</span>
                        </div>
                        <div class="requirement" id="reqUpperCase">
                            <span class="requirement-icon">❌</span>
                            <span>Хотя бы одну заглавную букву</span>
                        </div>
                        <div class="requirement" id="reqNumber">
                            <span class="requirement-icon">❌</span>
                            <span>Хотя бы одну цифру</span>
                        </div>
                        <div class="requirement" id="reqSpecial">
                            <span class="requirement-icon">❌</span>
                            <span>Хотя бы один спецсимвол (!@#$%^&*)</span>
                        </div>
                    </div>
                </div>

                <!-- Подтверждение пароля -->
                <div class="form-group">
                    <label class="form-label" for="confirmPassword">
                        Подтверждение пароля <span class="required">*</span>
                    </label>
                    <div class="password-wrapper">
                        <input 
                            type="password" 
                            id="confirmPassword" 
                            class="form-control" 
                            placeholder="Повторите пароль"
                            required
                        >
                        <button type="button" class="toggle-password" id="toggleConfirmPassword">
                            👁️
                        </button>
                    </div>
                    <div class="error-message" id="confirmPasswordError"></div>
                </div>

                <!-- Кнопка регистрации -->
                <button type="submit" class="register-btn" id="submitBtn">
                    Создать аккаунт
                </button>
            </form>

            <!-- Ссылка на вход -->
            <div class="login-link">
                <span>Уже есть аккаунт?</span>
                <a href="/login">Войдите</a>
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
            const form = document.getElementById('registerForm');
            const firstName = document.getElementById('firstName');
            const lastName = document.getElementById('lastName');
            const username = document.getElementById('username');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('confirmPassword');
            const togglePassword = document.getElementById('togglePassword');
            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const submitBtn = document.getElementById('submitBtn');

            // Валидация имени
            firstName.addEventListener('blur', function() {
                const value = this.value.trim();
                const error = document.getElementById('firstNameError');
                
                if (!value) {
                    error.textContent = 'Имя обязательно для заполнения';
                    this.classList.add('error');
                    this.classList.remove('success');
                } else if (value.length < 2) {
                    error.textContent = 'Имя должно содержать минимум 2 символа';
                    this.classList.add('error');
                    this.classList.remove('success');
                } else if (!/^[а-яА-ЯёЁa-zA-Z\s\-]+$/.test(value)) {
                    error.textContent = 'Имя может содержать только буквы, пробелы и дефисы';
                    this.classList.add('error');
                    this.classList.remove('success');
                } else {
                    error.textContent = '';
                    this.classList.remove('error');
                    this.classList.add('success');
                }
            });

            // Валидация фамилии
            lastName.addEventListener('blur', function() {
                const value = this.value.trim();
                const error = document.getElementById('lastNameError');
                
                if (!value) {
                    error.textContent = 'Фамилия обязательна для заполнения';
                    this.classList.add('error');
                    this.classList.remove('success');
                } else if (value.length < 2) {
                    error.textContent = 'Фамилия должна содержать минимум 2 символа';
                    this.classList.add('error');
                    this.classList.remove('success');
                } else if (!/^[а-яА-ЯёЁa-zA-Z\s\-]+$/.test(value)) {
                    error.textContent = 'Фамилия может содержать только буквы, пробелы и дефисы';
                    this.classList.add('error');
                    this.classList.remove('success');
                } else {
                    error.textContent = '';
                    this.classList.remove('error');
                    this.classList.add('success');
                }
            });

            // Проверка логина на уникальность (имитация)
            let usernameTimeout;
            username.addEventListener('input', function() {
                clearTimeout(usernameTimeout);
                const value = this.value.trim();
                const error = document.getElementById('usernameError');
                const success = document.getElementById('usernameSuccess');
                
                // Сброс сообщений
                error.textContent = '';
                success.textContent = '';
                this.classList.remove('error', 'success');
                
                if (!value) return;
                
                usernameTimeout = setTimeout(() => {
                    if (value.length < 3) {
                        error.textContent = 'Логин должен содержать минимум 3 символа';
                        this.classList.add('error');
                    } else if (!/^[a-zA-Z0-9_]+$/.test(value)) {
                        error.textContent = 'Логин может содержать только латинские буквы, цифры и нижнее подчеркивание';
                        this.classList.add('error');
                    } else {
                        // Имитация проверки на сервере
                        const takenUsernames = ['admin', 'user', 'test', 'ivan'];
                        if (takenUsernames.includes(value.toLowerCase())) {
                            error.textContent = 'Этот логин уже занят';
                            this.classList.add('error');
                        } else {
                            success.textContent = '✓ Логин доступен';
                            this.classList.add('success');
                        }
                    }
                }, 500);
            });

            // Валидация пароля
            function validatePassword(value) {
                const requirements = {
                    length: value.length >= 8,
                    upperCase: /[A-ZА-Я]/.test(value),
                    number: /\d/.test(value),
                    special: /[!@#$%^&*]/.test(value)
                };
                
                // Обновление иконок требований
                document.getElementById('reqLength').className = 
                    `requirement ${requirements.length ? 'valid' : 'invalid'}`;
                document.getElementById('reqLength').querySelector('.requirement-icon').textContent = 
                    requirements.length ? '✓' : '❌';
                
                document.getElementById('reqUpperCase').className = 
                    `requirement ${requirements.upperCase ? 'valid' : 'invalid'}`;
                document.getElementById('reqUpperCase').querySelector('.requirement-icon').textContent = 
                    requirements.upperCase ? '✓' : '❌';
                
                document.getElementById('reqNumber').className = 
                    `requirement ${requirements.number ? 'valid' : 'invalid'}`;
                document.getElementById('reqNumber').querySelector('.requirement-icon').textContent = 
                    requirements.number ? '✓' : '❌';
                
                document.getElementById('reqSpecial').className = 
                    `requirement ${requirements.special ? 'valid' : 'invalid'}`;
                document.getElementById('reqSpecial').querySelector('.requirement-icon').textContent = 
                    requirements.special ? '✓' : '❌';
                
                return Object.values(requirements).every(req => req);
            }

            password.addEventListener('input', function() {
                const value = this.value;
                const error = document.getElementById('passwordError');
                const isValid = validatePassword(value);
                
                if (!value) {
                    error.textContent = '';
                    this.classList.remove('error', 'success');
                } else if (!isValid) {
                    error.textContent = 'Пароль не соответствует требованиям';
                    this.classList.add('error');
                    this.classList.remove('success');
                } else {
                    error.textContent = '';
                    this.classList.remove('error');
                    this.classList.add('success');
                }
                
                // Проверка подтверждения пароля
                if (confirmPassword.value) {
                    confirmPassword.dispatchEvent(new Event('input'));
                }
            });

            // Подтверждение пароля
            confirmPassword.addEventListener('input', function() {
                const error = document.getElementById('confirmPasswordError');
                
                if (!this.value) {
                    error.textContent = '';
                    this.classList.remove('error', 'success');
                } else if (this.value !== password.value) {
                    error.textContent = 'Пароли не совпадают';
                    this.classList.add('error');
                    this.classList.remove('success');
                } else {
                    error.textContent = '';
                    this.classList.remove('error');
                    this.classList.add('success');
                }
            });

            // Показать/скрыть пароль
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
            });

            toggleConfirmPassword.addEventListener('click', function() {
                const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                this.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
            });

            // Обработка отправки формы
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Триггерим все проверки
                firstName.dispatchEvent(new Event('blur'));
                lastName.dispatchEvent(new Event('blur'));
                password.dispatchEvent(new Event('input'));
                confirmPassword.dispatchEvent(new Event('input'));
                
                // Проверяем все поля
                const errors = document.querySelectorAll('.error-message');
                const hasErrors = Array.from(errors).some(error => error.textContent.trim() !== '');
                
                const successFields = document.querySelectorAll('.form-control.success');
                const allRequired = [firstName, lastName, username, password, confirmPassword];
                const allFilled = allRequired.every(field => field.value.trim() !== '');
                
                if (!hasErrors && allFilled && successFields.length >= 5) {
                    // Блокируем кнопку
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = 'Создаём аккаунт...';
                    
                    // Имитация отправки на сервер
                    setTimeout(() => {
                        alert('Регистрация успешно завершена! Добро пожаловать в библиотеку!');
                        window.location.href = '/';
                    }, 1500);
                } else {
                    alert('Пожалуйста, заполните все поля корректно');
                }
            });

            // Автофокус на первом поле
            firstName.focus();
        });
    </script>
</body>
</html>