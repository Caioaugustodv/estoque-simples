		<?php

	require 'controle.php';


if (strcmp($_POST['valor'], 'Compra por clientes') == true ) {

$mes = $_POST['mes'];


	$sql = $pdo->prepare("SELECT descricao,id,preco,quantidade,qtd_vendas,data_vendas
FROM ( produtos JOIN vendas ON produtos . id = vendas . id_produto)
		WHERE MONTH(data_vendas) = '$mes' ");
	$sql->execute();


?> 
<html>

	<link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='style.css'>
<div class="container">


<div class="tabela d-flex align-items-center" style="height: 600px; ">

<table class='table '>

<thead class="table-dark ">
	<tr>
					<td scope='col'>ID produto</td>
					<td scope='col'>Descrição</td>
					<td scope='col'>Preço</td>	
					<td scope="col">Quantidade Vendida</td>
					<td scope="col">Preço da compra</td>
					<td scope="col">Data da venda</td>



</tr>
<thead>


<?php  if ($sql->rowCount()>0){
foreach($sql->fetchAll() as $dados) : ?>



	<tbody>
 <tr class="table-bordered table-hover">
		<th class="bg-light" scope="row"><?php  echo $dados['id'] ?></th>
		<th class="bg-light" scope="row"><?php  echo $dados['descricao'] ?></th>
		<th class="bg-light" scope="row"><?php  echo "R$  ".$dados['preco']."/uni" ?></th>
		<th class="bg-light" scope="row"><?php  echo $dados['qtd_vendas']." "."unidades" ?></th>
		<th class="bg-light" scope="row"><?php  echo "R$  ".$dados['preco']*$dados['qtd_vendas'] ?></th>
		<th class="bg-light" scope="row"><?php  echo date('d/m/Y',  strtotime($dados['data_vendas'])) ?></th>


	</tr>
<tbody>

	<?php 
endforeach;
		} 


	?>



	</table>
	
		</div>
</div>



	<script type='text/javascript' src='assets/js/jquery.js'></script>
	<script type='text/javascript' src='assets/js/bootstrap.bundle.min.js'></script>

<?php } ?>