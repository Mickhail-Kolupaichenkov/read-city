<?php

use App\models\Book;
use App\models\Author;

$Book = new Book();
$Author = new Author();

$item_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$books = $Book->findAll("SELECT * FROM books WHERE parent_id = ?", [$item_id]);
$author = $Author->find("SELECT name, lastname FROM authors WHERE id = ?", [$item_id]);

require VIEWS.'author.tpl.php';
?>
