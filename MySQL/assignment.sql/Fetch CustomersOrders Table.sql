SELECT *
FROM customers
WHERE id IN (SELECT DISTINCT customer_id FROM orders);
