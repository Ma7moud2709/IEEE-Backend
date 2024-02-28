SELECT
    s.Name
FROM
    Students s
    JOIN Friends f ON s.ID = f.ID
    JOIN Packages p1 ON p1.ID = f.Friend_ID
    JOIN Packages p2 ON p2.ID = s.ID
WHERE
    p1.Salary > p2.Salary
ORDER BY
    p1.Salary;
