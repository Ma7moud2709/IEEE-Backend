-- PROBLEM 1:
SELECT * FROM CITY
WHERE COUNTRYCODE = 'USA' AND POPULATION > 100000;
-- -----------------------------------------------
-- PROBLEM 2:
SELECT NAME FROM CITY
WHERE COUNTRYCODE = 'USA' AND POPULATION > 120000;
-- -----------------------------------------------
-- PROBLEM 3:
SELECT CITY, STATE
FROM STATION;
-- -----------------------------------------------
-- PROBLEM 4:
SELECT DISTINCT(CITY) FROM STATION
WHERE (ID % 2 = 0);
-- -----------------------------------------------
-- PROBLEM 5:
SELECT COUNT(CITY) - COUNT(DISTINCT(CITY))
FROM STATION;
-- -----------------------------------------------
-- Problem 6 (Bonus):
SELECT candidate_id 
FROM candidates
WHERE skill IN ('Python', 'Tableau', 'PostgreSQL') 
GROUP BY candidate_id
HAVING COUNT(DISTINCT(skill)) =  3
ORDER BY candidate_id;
-- -----------------------------------------------
-- Problem 7:
SELECT part, assembly_step
FROM parts_assembly
WHERE finish_date IS  NULL;
