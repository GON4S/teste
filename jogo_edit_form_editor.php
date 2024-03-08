<?php

$q = "select j.cod, j.nome, g.genero, p.produtora, j.descricao, j.nota, j.capa, g.cod as codgenero, p.cod as codprodutora 
from jogos j
join generos g on g.cod=j.genero
join produtoras p on p.cod=j.produtora
where j.cod='$c'";

?>