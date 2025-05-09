SELECT DISTINCT salary
FROM employees e1
WHERE (
  SELECT COUNT(DISTINCT salary)
  FROM employees e2
  WHERE e2.salary > e1.salary
) = 1;
