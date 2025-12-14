
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/catalog.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <main class="books-grid">

            <?php foreach($books as $book) { ?>
            
            <article class="book-card">
                <div class="book-title">
                    <h3><?= htmlspecialchars($book['title']) ?></h3>
                </div>
                
                <div class="book-author">
                    <span class="author-label">Автор:</span>
                    <a href="/author?id=<?= $book['parent_id'] ?>">
                        <span class="author-name"><?= htmlspecialchars($book['author_name']) ?> <?= htmlspecialchars($book['author_lastname']) ?></span>
                    </a>
                </div>
                
                <div class="book-image">
                    <img src="/assets/images/<?= htmlspecialchars($book['img']) ?>.png" alt="Обложка книги <?= htmlspecialchars($book['title']) ?>">
                </div>
                
                <div class="book-actions">
                    <a href="/item?id=<?= $book['id'] ?>" class="details-btn">Подробнее</a>
                </div>
            </article>

            <?php } ?>

        </main>

        <footer class="footer">
            <p>© 2025 Библиотека. Все права защищены.</p>
        </footer>
    </div>

</body>
</html>