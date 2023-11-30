SELECT 
p.title,
p.price,
p.description,
p.vendor_id,


FROM 
Products AS p

LEFT JOIN Vendors ON Vendors.id = p.vendor_id

WHERE
p.clicks > 1000 AND p.views BETWEEN 1000 AND 10000