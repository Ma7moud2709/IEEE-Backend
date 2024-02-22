-- -------------------------
-- Problem 1: Ollivander’s Inventory
-- -------------------------
SELECT
    w.id,
    p.age,
    w.coins_needed,
    w.power
FROM
    Wands w
    JOIN Wands_Property p ON w.code = p.code
    AND p.is_evil = 0
WHERE
    (w.power, w.code, w.coins_needed) IN (
        SELECT
            power,
            code,
            MIN(coins_needed)
        FROM
            Wands
        GROUP BY
            power,
            code
    )
ORDER BY
    w.power DESC,
    p.age DESC;

-- -------------------------
-- Problem 2: New Companies
SELECT
    c.company_code,
    c.founder,
    COUNT(DISTINCT lm.lead_manager_code) AS total_lead_managers,
    COUNT(DISTINCT sm.senior_manager_code) AS total_senior_managers,
    COUNT(DISTINCT m.manager_code) AS total_managers,
    COUNT(DISTINCT e.employee_code) AS total_employees
FROM
    Company c
    LEFT JOIN Lead_Manager lm ON c.company_code = lm.company_code
    LEFT JOIN Senior_Manager sm ON lm.lead_manager_code = sm.lead_manager_code
    AND c.company_code = sm.company_code
    LEFT JOIN Manager m ON sm.senior_manager_code = m.senior_manager_code
    AND lm.lead_manager_code = m.lead_manager_code
    AND c.company_code = m.company_code
    LEFT JOIN Employee e ON m.manager_code = e.manager_code
    AND sm.senior_manager_code = e.senior_manager_code
    AND lm.lead_manager_code = e.lead_manager_code
    AND c.company_code = e.company_code
GROUP BY
    c.company_code,
    c.founder
ORDER BY
    c.company_code;

-- -------------------------
-- -------------------------
-- Problem 3: Weather Oservation 18
SELECT
    ROUND(
        ABS(MAX(LAT_N) - MIN(LAT_N)) + ABS(MAX(LONG_W) - MIN(LONG_W)),
        4
    )
FROM
    STATION;

-- -------------------------
-- -------------------------
-- Problem 4: Weather Oservation 19
SELECT
    ROUND(
        SQRT(
            POWER(MAX(LAT_N) - MIN(LAT_N), 2) + POWER(MAX(LONG_W) - MIN(LONG_W), 2)
        ),
        4
    )
FROM
    STATION;

-- -------------------------
-- -------------------------
-- Problem 5: Weather Oservation 20
-- -------------------------
-- -------------------------
-- Problem 6: Placements
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

-- -------------------------
-- Problem 7: Symmetric 
-- -------------------------
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

-- -------------------------
-- Problem 8: Interviews
-- -------------------------
