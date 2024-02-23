SELECT
    F1.X AS X1,
    F1.Y AS Y1
FROM
    Functions AS F1
    JOIN Functions AS F2 ON F1.X = F2.Y
    AND F1.Y = F2.X
WHERE
    F1.X < F1.Y
UNION
(
    SELECT
        X,
        Y
    FROM
        Functions
    WHERE
        X = Y
    GROUP BY
        X,
        Y
    HAVING
        COUNT(*) > 1
)
ORDER BY
    X1 ASC;