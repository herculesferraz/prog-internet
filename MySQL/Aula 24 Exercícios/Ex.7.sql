select p.pedido_id "Numero do Pedido",
	   p.data "Data do Pedido",
       p.cliente_id "Codigo do cliente",
       c.nome "Nome Cliente",
       sum(i.quantidade * i.valor) "Total do Pedido"
from pedido as p 
inner join pedido_item as i on i.pedido_id = p.pedido_id
inner join cliente as c on c.cliente_id = p.cliente_id
group by p.pedido_id, p.data, p.cliente_id, c.nome
order by p.data, 5 desc, p.pedido_id
limit 10