<?php
$comments = file('comments.txt', FILE_IGNORE_NEW_LINES);
header('Content-Type: application/json');
echo json_encode(array_map('htmlspecialchars', $comments));
?>
