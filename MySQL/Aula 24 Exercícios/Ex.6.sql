select pedido_id numero_pedido, sum(quantidade) "Quantidade de venda" ,
avg(valor) "valor unitario", count(pizza_id) "Quantidade de Itens"
from pedido_item
group by pedido_id
order by count(pizza_id) desc, sum(quantidade) desc, pedido_id asc
limit 5 