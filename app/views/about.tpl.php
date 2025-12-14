<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас - Библиотека</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Заголовок страницы */
        .page-header {
            text-align: center;
            margin-bottom: 50px;
            padding: 40px 0;
        }

        .page-title {
            font-size: 3rem;
            color: #d32f2f;
            margin-bottom: 15px;
            font-weight: 800;
        }

        .page-subtitle {
            font-size: 1.2rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Секции */
        .section {
            background: white;
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid #eaeaea;
            position: relative;
        }

        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: linear-gradient(to bottom, #d32f2f, #ff9800);
            border-radius: 20px 0 0 20px;
        }

        .section-title {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 25px;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section-title::before {
            font-size: 1.8rem;
        }

        .section-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .section-content p {
            margin-bottom: 20px;
        }

        .highlight-quote {
            background: linear-gradient(120deg, rgba(211, 47, 47, 0.1) 0%, rgba(255, 152, 0, 0.1) 100%);
            padding: 25px 30px;
            border-radius: 12px;
            border-left: 4px solid #d32f2f;
            margin: 30px 0;
            font-size: 1.2rem;
            color: #2c3e50;
            font-style: italic;
            font-weight: 500;
        }

        /* Контакты */
        .contacts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 25px;
            background: #f9f9f9;
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 1px solid #eee;
        }

        .contact-item:hover {
            background: #f0f0f0;
            transform: translateY(-5px);
            border-color: #d32f2f;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .contact-icon {
            font-size: 2.5rem;
            color: #d32f2f;
            flex-shrink: 0;
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(211, 47, 47, 0.15);
        }

        .contact-info h3 {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .contact-info p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 5px;
        }

        .contact-link {
            color: #d32f2f;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .contact-link:hover {
            color: #b71c1c;
            text-decoration: underline;
        }

        /* Кнопка назад */
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #2c3e50;
            color: white;
            text-decoration: none;
            padding: 15px 35px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            margin-top: 30px;
        }

        .back-btn:hover {
            background: #1a252f;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(44, 62, 80, 0.2);
        }

        .btn-container {
            text-align: center;
            margin-top: 50px;
        }

        /* Анимации */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .page-header { animation-delay: 0.1s; }
        #mission-section { animation-delay: 0.3s; }
        #contact-section { animation-delay: 0.5s; }
        .btn-container { animation-delay: 0.7s; }

        /* Адаптивность */
        @media (max-width: 768px) {
            .container {
                padding: 0 15px;
            }

            .page-title {
                font-size: 2.2rem;
            }

            .section {
                padding: 30px 25px;
                margin-left: 10px;
                margin-right: 10px;
            }

            .section-title {
                font-size: 1.7rem;
            }

            .section-content {
                font-size: 1.05rem;
            }

            .contacts-grid {
                grid-template-columns: 1fr;
            }

            .contact-item {
                padding: 20px;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 1.8rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .highlight-quote {
                padding: 20px;
                font-size: 1.1rem;
            }

            .contact-icon {
                font-size: 2rem;
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Заголовок страницы -->
        <header class="page-header">
            <h1 class="page-title">О нашей библиотеке</h1>
            <p class="page-subtitle">
                Добро пожаловать в мир книг и знаний. Мы создаем пространство, 
                где каждая книга находит своего читателя.
            </p>
        </header>

        <!-- Наша миссия -->
        <section id="mission-section" class="section">
            <h2 class="section-title">
                <span>🎯</span>
                Наша миссия
            </h2>
            
            <div class="section-content">
                <p>
                    Мы верим, что книга — это не просто набор страниц, а целый мир, 
                    который может изменить жизнь человека. Наша цель — сделать чтение 
                    доступным, удобным и увлекательным для каждого.
                </p>
                
                <div class="highlight-quote">
                    «Чтение хороших книг — это разговор с самыми лучшими людьми 
                    прошедших времен, и притом такой разговор, когда они сообщают 
                    нам только лучшие свои мысли.» — Рене Декарт
                </div>
                
                <p>
                    Наша библиотека объединяет тысячи читателей по всей стране, 
                    предоставляя доступ к лучшим произведениям мировой литературы, 
                    современным бестселлерам и редким изданиям.
                </p>
                
                <p>
                    Мы стремимся создавать сообщество единомышленников, где каждый 
                    может делиться впечатлениями, обсуждать прочитанное и находить 
                    новые интересные книги благодаря рекомендациям других читателей.
                </p>
            </div>
        </section>

        <!-- Контакты -->
        <section id="contact-section" class="section">
            <h2 class="section-title">
                <span>📞</span>
                Свяжитесь с нами
            </h2>
            
            <div class="section-content">
                <p>
                    У вас есть вопросы, предложения или хотите поделиться отзывом? 
                    Мы всегда рады общению с нашими читателями!
                </p>
                
                <div class="contacts-grid">
                    <!-- Email -->
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-info">
                            <h3>Email</h3>
                            <p>
                                <a href="mailto:info@biblioteka.ru" class="contact-link">
                                    info@biblioteka.ru
                                </a>
                            </p>
                            <p>
                                <a href="mailto:support@biblioteka.ru" class="contact-link">
                                    support@biblioteka.ru
                                </a>
                            </p>
                            <p>Отвечаем в течение 24 часов</p>
                        </div>
                    </div>
                    
                    <!-- Телефон -->
                    <div class="contact-item">
                        <div class="contact-icon">📱</div>
                        <div class="contact-info">
                            <h3>Телефон</h3>
                            <p>
                                <a href="tel:+78005553535" class="contact-link">
                                    +7 (800) 555-35-35
                                </a>
                            </p>
                            <p>Бесплатный звонок по России</p>
                            <p>Пн-Пт: 9:00-18:00</p>
                        </div>
                    </div>
                    
                    <!-- Социальные сети -->
                    <div class="contact-item">
                        <div class="contact-icon">💬</div>
                        <div class="contact-info">
                            <h3>Социальные сети</h3>
                            <p>
                                <a href="https://vk.com/biblioteka" class="contact-link">
                                    ВКонтакте
                                </a>
                            </p>
                            <p>
                                <a href="https://t.me/biblioteka" class="contact-link">
                                    Telegram
                                </a>
                            </p>
                            <p>
                                <a href="https://zen.yandex.ru/biblioteka" class="contact-link">
                                    Яндекс.Дзен
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Кнопка назад -->
        <div class="btn-container">
            <a href="http://localhost:8888" class="back-btn">
                <span>←</span>
                <span>Вернуться на главную</span>
            </a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Плавное появление страницы
            document.body.style.opacity = '0';
            setTimeout(() => {
                document.body.style.transition = 'opacity 0.6s ease';
                document.body.style.opacity = '1';
            }, 100);

            // Добавляем анимации для секций
            const sections = document.querySelectorAll('.section, .page-header, .btn-container');
            sections.forEach((section, index) => {
                setTimeout(() => {
                    section.style.opacity = '1';
                }, 300 + (index * 200));
            });

            // Эффект при наведении на контакты
            const contactItems = document.querySelectorAll('.contact-item');
            contactItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    const icon = this.querySelector('.contact-icon');
                    icon.style.transform = 'scale(1.1)';
                    icon.style.transition = 'transform 0.3s ease';
                });
                
                item.addEventListener('mouseleave', function() {
                    const icon = this.querySelector('.contact-icon');
                    icon.style.transform = 'scale(1)';
                });
            });

            // Клик по контактным ссылкам
            const contactLinks = document.querySelectorAll('.contact-link');
            contactLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const text = this.textContent;
                    const href = this.getAttribute('href');
                    
                    if (href.startsWith('mailto:') || href.startsWith('tel:')) {
                        // Для почты и телефона - обычный переход
                        window.location.href = href;
                    } else {
                        // Для соцсетей - открытие в новой вкладке
                        window.open(href, '_blank');
                    }
                });
            });
        });
    </script>
</body>
</html>