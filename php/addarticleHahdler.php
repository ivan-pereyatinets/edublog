<?php
session_start();
$header = $_POST['header'];
$content = $_POST['content'];
$author_id = $_SESSION['id'];

$dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
$stmt= $dbh->prepare("INSERT INTO articles (header, content, author_id) VALUES (:header, :content, :author_id)");
$stmt->execute(array(
    'header'=>$header,
    'content'=>$content,
    'author_id'=>$author_id
));
echo "success!";