select pedido_id "numero do pedido", sum(quantidade * valor) total
from pedido_item
group by pedido_id
having sum(quantidade * valor) > '200'
order by 2 desc
limit 10