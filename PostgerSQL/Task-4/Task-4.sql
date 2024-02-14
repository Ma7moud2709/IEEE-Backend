-- Problem 1
(
    SELECT
        CITY,
        LENGTH (CITY)
    FROM
        STATION
    ORDER BY
        LENGTH (CITY) ASC,
        CITY
    LIMIT
        1
)
UNION ALL
(
    SELECT
        CITY,
        LENGTH (CITY)
    FROM
        STATION
    ORDER BY
        LENGTH (CITY) DESC,
        CITY
    LIMIT
        1
);

--
-- Problem 2:
SELECT DISTINCT
    (CITY)
FROM
    STATION
WHERE
    CITY REGEXP '^[aeiouAEIOU]';

-- 
-- Problem 3:
SELECT DISTINCT
    (CITY)
FROM
    STATION
WHERE
    CITY REGEXP '[aeiouAEIOU]$';

-- 
-- Problem 4:
SELECT DISTINCT
    CITY
FROM
    STATION
WHERE
    CITY REGEXP '^[aeiouAEIOU].*[aeiouAEIOU]$';

-- Another Solution 
SELECT DISTINCT
    CITY
FROM
    STATION
WHERE
    LOWER(SUBSTRING(CITY, 1, 1)) IN ('a', 'e', 'i', 'o', 'u')
    AND LOWER(SUBSTRING(CITY, -1)) IN ('a', 'e', 'i', 'o', 'u');

-- 
-- Problem 5:
SELECT DISTINCT
    CITY
FROM
    STATION
WHERE
    CITY NOT REGEXP '^[aeiouAEIOU]'
    OR CITY NOT REGEXP '[aeiouAEIOU]$';

--
-- Problem 6:
SELECT
    ROUND(SUM(LAT_N), 4)
FROM
    STATION
WHERE
    LAT_N > 38.7880
    AND LAT_N < 137.2345;

-- 
-- Problem 7:
SELECT
    ROUND(SUM(LAT_N), 4)
FROM
    STATION
WHERE
    LAT_N > 38.7880
    AND LAT_N < 137.2345;

-- 
-- Problem 8:
SELECT
    ROUND(MAX(LAT_N), 4)
FROM
    STATION
WHERE
    LAT_N < 137.2345;

-- 
-- Problem 9:
SELECT
    ROUND(LONG_W, 4)
FROM
    STATION
WHERE
    LAT_N < 137.2345
ORDER BY
    LAT_N DESC
LIMIT
    1;

-- 
-- Problem 10:

-- IDK

-- 
-- Problem 11:
SELECT
    CASE
        WHEN A + B <= C
        OR A + C <= B
        OR B + C <= A THEN 'Not A Triangle'
        WHEN A = B
        AND B = C THEN 'Equilateral'
        WHEN A = B
        OR A = C
        OR B = C THEN 'Isosceles'
        ELSE 'Scalene'
    END
FROM
    TRIANGLES;

--
-- Problem 12:
SELECT
    CONCAT (Name, '(', LEFT (Occupation, 1), ')')
FROM
    OCCUPATIONS
ORDER BY
    Name;

SELECT
    CONCAT (
        'There are a total of ',
        COUNT(Occupation),
        ' ',
        LOWER(Occupation),
        's.'
    )
FROM
    OCCUPATIONS
GROUP BY
    Occupation
ORDER BY
    COUNT(Occupation),
    Occupation;