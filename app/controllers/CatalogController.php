<?php

$books = $db->findAll("SELECT * FROM books");

foreach($books as $key => $book) {
    $author = $db->find("SELECT name, lastname FROM authors WHERE id = ?", [$book['parent_id']]);
    if($author){
        $books[$key]['author_name'] = $author['name'];
        $books[$key]['author_lastname'] = $author['lastname'];
        $books[$key]['author_fullname'] = $author['name'] . ' ' . $author['lastname'];
    } else {
        $books[$key]['author_name'] = 'Автор';
        $books[$key]['author_lastname'] = 'не найден';
        $books[$key]['author_fullname'] = 'Автор не найден';
    }
}


require VIEWS.'catalog.tpl.php';

