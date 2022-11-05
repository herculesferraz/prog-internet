update pedido p set p.valor =
	(select sum(quantidade * valor) "Pedido total"
    from pedido_item
    where pedido_id=p.pedido_id )
    where exists (select pedido_id from pedido_item
    where pedido_id=p.pedido_id)