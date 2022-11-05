select pedido_id "numero do pedido", sum(quantidade * valor) total
from pedido_item
group by pedido_id
order by 2 desc
limit 10