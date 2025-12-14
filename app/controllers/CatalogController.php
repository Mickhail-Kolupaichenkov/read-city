<?php

use App\models\Book;
use App\models\Author;

$Book = new Book();
$Author = new Author();

$books = $Book->findAll("SELECT * FROM books");

foreach($books as $key => $book) {
    $author = $Author->find("SELECT name, lastname FROM authors WHERE id = ?", [$book['parent_id']]);
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

require VIEWS.'header.tpl.php';
require VIEWS.'catalog.tpl.php';

