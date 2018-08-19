SELECT
    DATEDIFF(MAX(DATE),
    MIN(DATE)) AS uptime
FROM
    member_history;