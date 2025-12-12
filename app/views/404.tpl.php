<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Страница не найдена</title>
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
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(211, 47, 47, 0.03) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(211, 47, 47, 0.03) 0%, transparent 20%);
        }

        .error-content {
            text-align: center;
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 
                0 10px 30px rgba(0, 0, 0, 0.08),
                0 0 0 1px rgba(211, 47, 47, 0.1);
            position: relative;
            overflow: hidden;
        }

        .error-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, #d32f2f, #ff9800);
        }

        .error-icon {
            font-size: 8rem;
            margin-bottom: 20px;
            animation: float 3s ease-in-out infinite;
            display: inline-block;
        }

        @keyframes float {
            0%, 100% { 
                transform: translateY(0) rotate(0deg); 
            }
            50% { 
                transform: translateY(-20px) rotate(5deg); 
            }
        }

        .error-number {
            font-size: 10rem;
            font-weight: 900;
            color: #d32f2f;
            line-height: 1;
            margin-bottom: 10px;
            text-shadow: 
                3px 3px 0 rgba(211, 47, 47, 0.1),
                6px 6px 0 rgba(211, 47, 47, 0.05);
            letter-spacing: 5px;
        }

        .error-title {
            font-size: 2.8rem;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 700;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .error-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #d32f2f, #ff9800);
            border-radius: 2px;
        }

        .error-message {
            font-size: 1.3rem;
            color: #555;
            max-width: 600px;
            margin: 0 auto 40px;
            line-height: 1.7;
            padding: 0 20px;
        }

        .error-actions {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 16px 36px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            cursor: pointer;
            text-align: center;
            position: relative;
            overflow: hidden;
            min-width: 200px;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #d32f2f, #ff5722);
            color: white;
            box-shadow: 0 6px 20px rgba(211, 47, 47, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 12px 30px rgba(211, 47, 47, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #ffffff, #f5f5f5);
            color: #555;
            border: 2px solid #e0e0e0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .btn-secondary:hover {
            transform: translateY(-5px) scale(1.05);
            border-color: #d32f2f;
            color: #d32f2f;
            box-shadow: 0 12px 30px rgba(211, 47, 47, 0.2);
        }

        .btn-icon {
            font-size: 1.2rem;
        }

        .book-decoration {
            position: absolute;
            opacity: 0.1;
            font-size: 4rem;
            z-index: 0;
        }

        .book-1 { top: 20%; left: 10%; animation: spin 20s linear infinite; }
        .book-2 { top: 40%; right: 15%; animation: spin 25s linear infinite reverse; }
        .book-3 { bottom: 45%; left: 15%; animation: spin 30s linear infinite; }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @media (max-width: 768px) {
            .error-content {
                padding: 30px 20px;
                margin: 20px;
            }

            .error-number {
                font-size: 7rem;
                letter-spacing: 3px;
            }

            .error-icon {
                font-size: 4rem;
            }

            .error-title {
                font-size: 2.2rem;
            }

            .error-message {
                font-size: 1.1rem;
                padding: 0;
            }

            .error-actions {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            .error-number {
                font-size: 5rem;
            }

            .error-icon {
                font-size: 4rem;
            }

            .error-title {
                font-size: 1.8rem;
            }

            .error-message {
                font-size: 1rem;
            }

            body {
                padding: 10px;
            }
        }

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

        .error-content > * {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
        }

        .error-icon { animation-delay: 0.1s; }
        .error-number { animation-delay: 0.3s; }
        .error-title { animation-delay: 0.5s; }
        .error-message { animation-delay: 0.7s; }
        .error-actions { animation-delay: 0.9s; }
    </style>
</head>
<body>
    <div class="error-content">
        <div class="book-decoration book-1">📖</div>
        <div class="book-decoration book-2">📚</div>
        <div class="book-decoration book-3">📕</div>

        <div class="error-icon">🔍</div>
        
        <div class="error-number">404</div>
        
        <h1 class="error-title">Страница не найдена</h1>
        
        <p class="error-message">
            К сожалению, такой страницы в нашей библиотеке не существует. 
        </p>
        
        <div class="error-actions">
            <a href="/" class="btn btn-primary">
                <span class="btn-icon">🏠</span>
                <span>На главную</span>
            </a>
            
            <a href="/catalog" class="btn btn-secondary">
                <span class="btn-icon">📚</span>
                <span>Каталог книг</span>
            </a>
            
            <button onclick="history.back()" class="btn btn-secondary">
                <span class="btn-icon">↩️</span>
                <span>Назад</span>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.8s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);

            const elements = document.querySelectorAll('.error-content > *');
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.style.opacity = '1';
                }, (index + 1) * 200);
            });

            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px) scale(1.05)';
                });
                
                btn.addEventListener('mouseleave', function() {
                    if(!this.classList.contains('btn-primary') || !this.hasAttribute('href')) {
                        this.style.transform = 'translateY(0) scale(1)';
                    }
                });
            });
        });
    </script>
</body>
</html>