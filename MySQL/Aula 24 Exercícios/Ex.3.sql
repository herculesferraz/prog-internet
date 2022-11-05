select cliente_id "nome do cliente", telefone "telefone do cliente", 
concat(logradouro, ' - ', numero) "Endreço completo", cidade "cidade do cliente",
uf "estado do cliente"
from cliente
where uf in ('PA', 'MT', 'CE', 'MA')
order by uf, cidade, nome