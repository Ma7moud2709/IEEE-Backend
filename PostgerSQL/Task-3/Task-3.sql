-- Problem 1:

SELECT Name 
FROM STUDENTS
WHERE Marks > 75
ORDER BY RIGHT(Name, 3) , ID;
-- 

-- Problem 2:

SELECT Name 
FROM Employee
ORDER BY Name ASC;
--

-- Problem 3:

SELECT name 
FROM Employee
WHERE salary > 2000 AND months < 10
ORDER BY employee_id ASC;

--

-- Problem 4:

SELECT * FROM CITY
WHERE COUNTRYCODE = 'JPN' ;

--

--Problem 5:

SELECT NAME 
FROM CITY
WHERE COUNTRYCODE = 'JPN';

--

-- Problem 6:

SELECT
    ROUND(SUM(LAT_N), 2),
    ROUND(SUM(LONG_W), 2)
FROM STATION;

--

-- Problem 7:

SELECT DISTINCT(CITY) 
FROM STATION
WHERE CITY NOT REGEXP '^[aeiouAEIOU]';

--

-- Problem 8:

SELECT DISTINCT(CITY) 
FROM STATION
WHERE CITY NOT REGEXP '[aeiouAEIOU]$';

--

-- Problem 9:

SELECT DISTINCT CITY
FROM STATION
WHERE LOWER(SUBSTR(CITY,1,1)) NOT IN ('a', 'e', 'i', 'o', 'u')
AND LOWER(SUBSTR(CITY, -1)) NOT IN ('a', 'e', 'i', 'o', 'u');

--

-- Problem 10:

SELECT ROUND(AVG(POPULATION))
FROM CITY;

-- 