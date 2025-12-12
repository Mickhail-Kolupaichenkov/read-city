<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $review_name = trim($_POST['first_name'] ?? '');
    $review_lastname = trim($_POST['last_name'] ?? '');
    $review_text = trim($_POST['review_text'] ?? '');
    $item_id = intval($_POST['id'] ?? 0);
    if (!empty($review_name) && !empty($review_text) && $item_id > 0) {
        $db->execute(
            "INSERT INTO reviews (name, lastname, reviews, parent_id) VALUES (?, ?, ?, ?)",
            [$review_name, $review_lastname, $review_text, $item_id]
        );
        header("Location: item?id=" . $item_id);
        exit;
    }
}

$item_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$book = $db->find("SELECT * FROM books WHERE id = ?", [$item_id]);

$author = $db->find("SELECT name, lastname FROM authors WHERE id = ?", [$book['parent_id']]);

$reviews = $db->findAll("SELECT * FROM reviews WHERE parent_id = ?", [$item_id]);


require VIEWS.'item.tpl.php';

