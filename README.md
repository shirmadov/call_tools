# Тестовое для кандидатов (PHP)

Задача №1 (PHP): /app/index.php

        docker build -t php_test -f php/Dockerfile .
        docker compose up -d

        localhost:80


Задача №2 (PHP): /app/sql.php

        SELECT * FROM `article` LEFT OUTER JOIN  comment ON article.id=comment.article_id WHERE comment.id IS NULL

        SELECT * FROM `comment` RIGHT OUTER JOIN  article ON article.id=comment.article_id WHERE comment.id IS NULL
