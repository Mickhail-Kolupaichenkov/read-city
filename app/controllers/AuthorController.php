<?php

$item_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$books = $db->findAll("SELECT * FROM books WHERE parent_id = ?", [$item_id]);

$author = $db->find("SELECT name, lastname FROM authors WHERE id = ?", [$item_id]);

require VIEWS.'author.tpl.php';
?>
