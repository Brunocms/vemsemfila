<div class="grid_12">
<div class="block-border">
<div class="block-header">
    <h1>Restaurantes</h1><span></span>
</div>
<div class="block-content">
<table id="table-example" class="table">
<thead>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Categoria</th>
    <th>Cidade</th>
    <th>Telefone</th>
    <th>Responsável</th>
</tr>
</thead>
<tbody>
<?php
    foreach ($restaurantes as $restaurante):
?>
<tr class="gradeA">
    <td><?=$restaurante->id_restaurante?></td>
    <td><?=$restaurante->nome?></td>
    <td><?=$restaurante->categoria?></td>
    <td><?=$restaurante->cidade?></td>
    <td class="center"><?=$restaurante->tel1?></td>
    <td><?=$restaurante->responsavel?></td>
</tr>
<?php
    endforeach;
?>
</tbody>

</table>
</div>
</div>