SELECT order_date, COUNT(*) AS total_orders
FROM orders
WHERE order_date >= CURDATE() - INTERVAL 7 DAY
GROUP BY order_date;
