select pizza_id codigo_pizza, nome nome_pizza, valor valor_pizza
from pizza
where valor < '20' 
order by valor desc