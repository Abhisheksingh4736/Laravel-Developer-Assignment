SELECT 
    e.id,
    e.name,
    SUM(CASE WHEN a.status = 'present' THEN 1 ELSE 0 END) AS total_present,
    SUM(CASE WHEN a.status = 'leave' THEN 1 ELSE 0 END) AS total_leave
FROM employees e
LEFT JOIN attendance a ON e.id = a.employee_id
WHERE MONTH(a.date) = MONTH(CURDATE()) AND YEAR(a.date) = YEAR(CURDATE())
GROUP BY e.id;
