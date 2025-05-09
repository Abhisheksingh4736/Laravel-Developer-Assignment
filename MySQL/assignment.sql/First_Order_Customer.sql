SELECT o.*
FROM orders o
JOIN (
    SELECT customer_id, MIN(order_date) AS first_order
    FROM orders
    GROUP BY customer_id
) firsts ON o.customer_id = firsts.customer_id AND o.order_date = firsts.first_order;
