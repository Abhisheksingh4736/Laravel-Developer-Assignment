SELECT 
    p.name,
    COUNT(o.id) AS total_sales
FROM orders o
JOIN products p ON o.product_id = p.id
WHERE 
    o.status = 'delivered' AND
    MONTH(o.order_date) = MONTH(CURDATE() - INTERVAL 1 MONTH) AND
    YEAR(o.order_date) = YEAR(CURDATE() - INTERVAL 1 MONTH)
GROUP BY p.id
ORDER BY total_sales DESC
LIMIT 3;
