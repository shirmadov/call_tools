<?php
$sql_first_var = 'SELECT * FROM `article` LEFT OUTER JOIN  comment ON article.id=comment.article_id WHERE comment.id IS NULL';

$sql_second_var = 'SELECT * FROM `comment` RIGHT OUTER JOIN  article ON article.id=comment.article_id WHERE comment.id IS NULL';

?>