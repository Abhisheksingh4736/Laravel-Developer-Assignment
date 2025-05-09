SELECT *
FROM employees
WHERE join_date >= CURDATE() - INTERVAL 30 DAY;
