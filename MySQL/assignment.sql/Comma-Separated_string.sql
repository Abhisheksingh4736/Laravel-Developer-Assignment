SELECT 
    TRIM(SUBSTRING_INDEX(SUBSTRING_INDEX(csv_string, ',', n.n), ',', -1)) AS item
FROM 
    string_table,
    (SELECT 1 AS n UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4 UNION ALL SELECT 5) n
WHERE 
    n.n <= 1 + LENGTH(csv_string) - LENGTH(REPLACE(csv_string, ',', ''));
