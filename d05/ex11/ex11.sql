SELECT
    UPPER(user_card.last_name) AS `NAME`,
    `first_name`,
    `price`
FROM
    member
INNER JOIN user_card ON
    member.id_member = user_card.id_user
INNER JOIN subscription ON
    member.id_sub = subscription.id_sub
WHERE
    price > 42
ORDER BY
    `last_name`,
    `first_name` ASC;