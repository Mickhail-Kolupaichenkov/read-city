<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль пользователя - Библиотека</title>
    <link href="assets/css/reset.css" rel="stylesheet">
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
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Шапка профиля */
        .profile-header {
            background: white;
            border-radius: 15px;
            padding: 40px;
            margin: 30px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #eaeaea;
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #d32f2f, #ff9800);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            font-weight: bold;
        }

        .profile-info {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex: 1;
        }

        .profile-name {
            font-size: 2.2rem;
            color: #2c3e50;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .profile-login {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logout-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #d32f2f;
            color: white;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #b71c1c;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(211, 47, 47, 0.25);
        }

        /* Секции */
        .profile-section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #eaeaea;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px solid #d32f2f;
        }

        .section-title {
            font-size: 1.8rem;
            color: #2c3e50;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section-title::before {
            font-size: 1.5rem;
        }

        .empty-message {
            text-align: center;
            padding: 60px 20px;
            color: #777;
            font-size: 1.1rem;
            background: #f9f9f9;
            border-radius: 10px;
            border: 2px dashed #ddd;
        }

        .empty-message::before {
            content: "📭";
            font-size: 3rem;
            display: block;
            margin-bottom: 20px;
            opacity: 0.5;
        }

        /* Сетка избранных книг */
        .favorites-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
        }

        .favorite-card {
            background: #fafafa;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .favorite-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-color: #d32f2f;
        }

        .favorite-cover {
            height: 160px;
            overflow: hidden;
            background: #f0f0f0;
        }

        .favorite-cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .favorite-card:hover .favorite-cover img {
            transform: scale(1.05);
        }

        .favorite-info {
            padding: 20px;
        }

        .favorite-title {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 8px;
            font-weight: 600;
            line-height: 1.4;
        }

        .favorite-author {
            color: #d32f2f;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .remove-favorite {
            background: transparent;
            color: #777;
            border: 1px solid #ddd;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            width: 100%;
        }

        .remove-favorite:hover {
            color: #d32f2f;
            border-color: #d32f2f;
            background: rgba(211, 47, 47, 0.05);
        }

        /* Список отзывов */
        .reviews-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .review-item {
            background: #fafafa;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .review-item:hover {
            border-color: #d32f2f;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .review-book {
            flex: 1;
        }

        .review-book-title {
            font-size: 1.3rem;
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .review-book-author {
            color: #777;
            font-size: 0.95rem;
        }

        .review-date {
            color: #999;
            font-size: 0.9rem;
            background: #f0f0f0;
            padding: 5px 12px;
            border-radius: 15px;
        }

        .review-content {
            color: #555;
            line-height: 1.7;
            font-size: 1.05rem;
            padding: 15px;
            background: white;
            border-radius: 8px;
            border-left: 4px solid #d32f2f;
        }

        .review-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .edit-review,
        .delete-review {
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .edit-review {
            background: transparent;
            color: #2c3e50;
            border: 1px solid #ddd;
        }

        .edit-review:hover {
            background: #f0f0f0;
            border-color: #2c3e50;
        }

        .delete-review {
            background: transparent;
            color: #d32f2f;
            border: 1px solid #ffcdd2;
        }

        .delete-review:hover {
            background: rgba(211, 47, 47, 0.05);
            border-color: #d32f2f;
        }

        /* Статистика */
        .profile-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-item {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #eaeaea;
            transition: transform 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-3px);
            border-color: #d32f2f;
        }

        .stat-number {
            font-size: 2.5rem;
            color: #d32f2f;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .stat-label {
            font-size: 1rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Адаптивность */
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }
            
            .profile-avatar {
                width: 100px;
                height: 100px;
                font-size: 2.5rem;
            }
            
            .favorites-grid {
                grid-template-columns: 1fr;
            }
            
            .review-header {
                flex-direction: column;
                gap: 10px;
            }
            
            .review-date {
                align-self: flex-start;
            }
            
            .profile-stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .profile-name {
                font-size: 1.8rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .review-content {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Шапка профиля -->
        <div class="profile-header">
            <div class="profile-info">
                <div class="profile-login">
                    <h1 class="profile-name"><?= $user_fullname ?></h1>
                    <span>👤</span>
                    <span><?= $user_tag ?></span>
                </div>
            </div>
        </div>

        <!-- Избранные книги -->
        <div class="profile-section">
            <div class="section-header">
                <h2 class="section-title">
                    <span>⭐</span>
                    Избранные книги
                </h2>
            </div>

            <div class="favorites-grid">
                <!-- Пример карточки избранной книги -->
                <div class="favorite-card">
                    <div class="favorite-cover">
                        <img src="https://via.placeholder.com/300x400/ff9800/ffffff?text=Обложка" alt="Обложка книги">
                    </div>
                    <div class="favorite-info">
                        <h3 class="favorite-title">Война и мир</h3>
                        <div class="favorite-author">Лев Толстой</div>
                        <button class="remove-favorite">Удалить из избранного</button>
                    </div>
                </div>

                <!-- Ещё книги -->
                <div class="favorite-card">
                    <div class="favorite-cover">
                        <img src="https://via.placeholder.com/300x400/d32f2f/ffffff?text=Обложка" alt="Обложка книги">
                    </div>
                    <div class="favorite-info">
                        <h3 class="favorite-title">Преступление и наказание</h3>
                        <div class="favorite-author">Фёдор Достоевский</div>
                        <button class="remove-favorite">Удалить из избранного</button>
                    </div>
                </div>

                <div class="favorite-card">
                    <div class="favorite-cover">
                        <img src="https://via.placeholder.com/300x400/4CAF50/ffffff?text=Обложка" alt="Обложка книги">
                    </div>
                    <div class="favorite-info">
                        <h3 class="favorite-title">Мастер и Маргарита</h3>
                        <div class="favorite-author">Михаил Булгаков</div>
                        <button class="remove-favorite">Удалить из избранного</button>
                    </div>
                </div>

                <div class="favorite-card">
                    <div class="favorite-cover">
                        <img src="https://via.placeholder.com/300x400/2196F3/ffffff?text=Обложка" alt="Обложка книги">
                    </div>
                    <div class="favorite-info">
                        <h3 class="favorite-title">1984</h3>
                        <div class="favorite-author">Джордж Оруэлл</div>
                        <button class="remove-favorite">Удалить из избранного</button>
                    </div>
                </div>
            </div>

            <!-- Сообщение если избранных нет -->
            <!-- <div class="empty-message">
                У вас пока нет избранных книг.<br>
                Добавляйте книги, нажимая на сердечко ❤️
            </div> -->
        </div>

        <!-- Отзывы пользователя -->
        <div class="profile-section">
            <div class="section-header">
                <h2 class="section-title">
                    <span>💬</span>
                    Ваши отзывы
                </h2>
            </div>

            <div class="reviews-list">
                <!-- Пример отзыва -->
                <div class="review-item">
                    <div class="review-header">
                        <div class="review-book">
                            <h3 class="review-book-title">Война и мир</h3>
                            <div class="review-book-author">Лев Толстой</div>
                        </div>
                    </div>
                    <div class="review-content">
                        Великолепная книга! Читал несколько раз и каждый раз открываю для себя что-то новое. 
                        Персонажи прописаны невероятно детально, сюжет захватывает с первых страниц. 
                        Особенно впечатлили сцены сражений и философские размышления автора.
                    </div>
                    <div class="review-actions">
                        <button class="edit-review">Редактировать</button>
                        <button class="delete-review">Удалить отзыв</button>
                    </div>
                </div>

                <!-- Ещё отзыв -->
                <div class="review-item">
                    <div class="review-header">
                        <div class="review-book">
                            <h3 class="review-book-title">Преступление и наказание</h3>
                            <div class="review-book-author">Фёдор Достоевский</div>
                        </div>
                    </div>
                    <div class="review-content">
                        Потрясающий психологический роман. Чувствуется каждая эмоция Раскольникова, 
                        его внутренняя борьба и мучения. Книга заставляет задуматься о морали, 
                        справедливости и человеческой природе. Обязательна к прочтению!
                    </div>
                    <div class="review-actions">
                        <button class="edit-review">Редактировать</button>
                        <button class="delete-review">Удалить отзыв</button>
                    </div>
                </div>

                <div class="review-item">
                    <div class="review-header">
                        <div class="review-book">
                            <h3 class="review-book-title">Мастер и Маргарита</h3>
                            <div class="review-book-author">Михаил Булгаков</div>
                        </div>
                    </div>
                    <div class="review-content">
                        Удивительная смесь мистики, сатиры и философии. Воланд и его свита - 
                        просто гениальные персонажи. Перечитываю каждый год и всегда нахожу 
                        новые смыслы и отсылки. Классика, которая не стареет.
                    </div>
                    <div class="review-actions">
                        <button class="edit-review">Редактировать</button>
                        <button class="delete-review">Удалить отзыв</button>
                    </div>
                </div>
            </div>

            <!-- Сообщение если отзывов нет -->
            <!-- <div class="empty-message">
                Вы ещё не оставляли отзывов.<br>
                Поделитесь своим мнением о прочитанных книгах!
            </div> -->
        </div>
    </div>

    <script>
        // Простые обработчики для демонстрации
        document.querySelectorAll('.remove-favorite').forEach(button => {
            button.addEventListener('click', function() {
                const card = this.closest('.favorite-card');
                const title = card.querySelector('.favorite-title').textContent;
                
                if (confirm(`Удалить "${title}" из избранного?`)) {
                    card.style.transform = 'translateX(-100%)';
                    card.style.opacity = '0';
                    
                    setTimeout(() => {
                        card.remove();
                        updateEmptyState();
                    }, 300);
                }
            });
        });

        document.querySelectorAll('.delete-review').forEach(button => {
            button.addEventListener('click', function() {
                const review = this.closest('.review-item');
                const title = review.querySelector('.review-book-title').textContent;
                
                if (confirm(`Удалить отзыв на книгу "${title}"?`)) {
                    review.style.transform = 'translateX(-100%)';
                    review.style.opacity = '0';
                    
                    setTimeout(() => {
                        review.remove();
                        updateEmptyState();
                    }, 300);
                }
            });
        });

        document.querySelectorAll('.edit-review').forEach(button => {
            button.addEventListener('click', function() {
                const review = this.closest('.review-item');
                const title = review.querySelector('.review-book-title').textContent;
                alert(`Редактирование отзыва на книгу "${title}"`);
            });
        });

        // Выход из профиля
        document.querySelector('.logout-btn').addEventListener('click', function() {
            if (confirm('Вы уверены, что хотите выйти?')) {
                alert('Вы вышли из профиля');
                // В реальном приложении здесь был бы редирект
            }
        });

        function updateEmptyState() {
            // Проверка на пустые секции и показ сообщений
            // В реальном приложении нужно добавить логику
        }
    </script>
</body>
</html>