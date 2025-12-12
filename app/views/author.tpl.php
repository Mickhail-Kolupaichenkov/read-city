<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $author['name'] ?> <?= $author['lastname'] ?></title>
    <link href="assets/css/author.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Шапка -->
        <header class="header">
            <a href="http://localhost:8888" class="back-link">Вернуться к каталогу</a>
            <h1>Об авторе</h1>
        </header>

        <!-- Блок автора -->
        <section class="author-header">
            <div class="author-info">
                <pre>
                    <h2 class="author-name"><?= $author['name'] ?> <?= $author['lastname'] ?></h2>
                </pre>
            </div>
        </section>

        <!-- Сетка книг -->
        <section class="books-section">
            <h2 class="section-title">
                Книги автора
            </h2>

            <div class="books-grid">

            <?php foreach($books as $book) { ?>
                <!-- Книга 1 -->
                <article class="book-card">
                    <div class="book-image">
                        <img src="assets/images/<?= $book['img'] ?>.png"
                            alt="Обложка книги">
                    </div>

                    <div class="book-content">
                        <h3 class="book-title"><?= $book['title'] ?></h3>

                        <div class="book-actions">
                            <a href="/item?id=<?= $book['id'] ?>" class="details-btn">Подробнее</a>
                        </div>
                    </div>
                </article>
                <?php } ?>
            </div>
        </section>

        <!-- Футер -->
        <footer class="footer">
            <p>© 2025 Библиотека. Все права защищены.</p>
        </footer>
    </div>
</body>

</html>