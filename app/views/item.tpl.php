<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $book['title'] ?></title>
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/item.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Шапка -->
        <header class="header">
            <a href="http://localhost:8888" class="back-link">Вернуться к каталогу</a>
        </header>

        <!-- Основной блок с книгой -->
        <main class="book-detail">
            <div class="book-cover">
                <img src="assets/images/<?= $book['img'] ?>.png" alt="Обложка книги">
            </div>

            <div class="book-info">
                <h2 class="book-title"><?= $book['title'] ?></h2>

                <div class="book-author">
                    <a href="/author?id=<?= $book['parent_id'] ?>"><?= $author['name'] ?> <?= $author['lastname'] ?></a>
                </div>

                <div class="book-description">
                    <?= $book['description'] ?>
                </div>

                <div class="book-meta">
                    <span class="meta-item">⭐ Цена: <?= $book['price'] ?> Руб.</span>
                </div>
            </div>
        </main>

        <!-- Форма отзывов -->
        <section class="reviews-section">
            <h2 id="review-form-open" class="section-title" style="cursor: pointer;">Оставить отзыв →</h2>

            <form class="review-form" method="POST" action="?id=<?= $item_id ?>">
                <div class="form-group">
                    <label class="form-label" for="first_name">Имя *</label>
                    <input type="text"
                        id="first_name"
                        name="first_name"
                        class="form-input"
                        required
                        placeholder="Введите ваше имя">
                </div>

                <div class="form-group">
                    <label class="form-label" for="last_name">Фамилия</label>
                    <input type="text"
                        id="last_name"
                        name="last_name"
                        class="form-input"
                        placeholder="Введите вашу фамилию">
                </div>

                <div class="form-group full-width">
                    <label class="form-label" for="review_text">Отзыв *</label>
                    <textarea id="review_text"
                        name="review_text"
                        class="form-textarea"
                        required
                        placeholder="Поделитесь вашим мнением о книге..."
                        rows="5"></textarea>
                </div>
                <input type="hidden" name="id" value="<?= $book['id'] ?>">
                <button type="submit" class="submit-btn">Отправить отзыв</button>
            </form>
        </section>

        <!-- Стена отзывов -->
        <section class="reviews-wall">
            <h2 class="section-title">Отзывы читателей</h2>

            <div class="reviews-list">

                <?php if($reviews){ foreach ($reviews as $review) { ?>
                    <!-- Отзыв 1 -->
                    <article class="review-item">
                        <div class="review-header">
                            <div class="review-author"><?= $review['name'] ?> <?= $review['lastname'] ?></div>
                        </div>
                        <div class="review-content">
                            <?= $review['reviews'] ?>
                        </div>
                    </article>
                <?php }} else {echo "<p>Нет отзывов</p>";} ?>

            </div>
        </section>

        <!-- Футер -->
        <footer class="footer">
            <p>© 2025 Библиотека. Все права защищены.</p>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formTitle = document.getElementById('review-form-open');
            const reviewForm = document.querySelector('.review-form');


            formTitle.addEventListener('click', () => {
                if (reviewForm.style.display === 'none' || reviewForm.style.display === '') {
                    reviewForm.style.display = 'grid';
                    formTitle.textContent = 'Скрыть форму ←';
                } else {
                    reviewForm.style.display = 'none';
                    formTitle.textContent = 'Оставить отзыв →';
                }
            });
        });
    </script>
</body>

</html>