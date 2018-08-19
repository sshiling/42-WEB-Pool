SELECT `title`, `summary` FROM film
WHERE BINARY `summary` LIKE '%Vincent%'
ORDER BY `id_film` ASC;