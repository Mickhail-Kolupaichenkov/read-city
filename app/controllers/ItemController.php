<?php

use App\models\Book;
use App\models\Author;
use App\models\Review;

$Book = new Book();
$Author = new Author();
$Review = new Review();

$item_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $review_name = trim($_POST['first_name'] ?? '');
    $review_lastname = trim($_POST['last_name'] ?? '');
    $review_text = trim($_POST['review_text'] ?? '');
    $item_id = intval($_POST['id'] ?? 0);
    if (!empty($review_name) && !empty($review_text) && $item_id > 0) {
        $Review->execute(
            "INSERT INTO reviews (name, lastname, reviews, parent_id) VALUES (?, ?, ?, ?)",
            [$review_name, $review_lastname, $review_text, $item_id]
        );
        header("Location: item?id=" . $item_id);
        exit;
    }
}

$book = $Book->find("SELECT * FROM books WHERE id = ?", [$item_id]);
$author = $Author->find("SELECT name, lastname FROM authors WHERE id = ?", [$book['parent_id']]);
$reviews = $Review->findAll("SELECT * FROM reviews WHERE parent_id = ?", [$item_id]);

require VIEWS.'header.tpl.php';
require VIEWS.'item.tpl.php';

