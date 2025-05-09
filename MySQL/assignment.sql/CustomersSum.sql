SELECT 
    c.id,
    c.name,
    COUNT(o.id) AS total_orders,
    SUM(o.amount) AS total_amount,
    SUM(o.discount) AS total_discount,
    SUM(CASE WHEN o.status = 'delivered' THEN 1 ELSE 0 END) AS delivered_orders
FROM customers c
LEFT JOIN orders o ON c.id = o.customer_id
GROUP BY c.id;
