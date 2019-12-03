
<?php
session_start();
require 'controle.php';

if (isset($_SESSION['id']) && empty($_SESSION['id']) == false ){
	$id = $_SESSION['id'];

	$sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
	$sql->bindValue(":id",$id);
	$sql->execute();

	if ($sql->rowCount()>0){
		$info = $sql->fetch();

		
		
	}
}else{
	header("Location: index.php");
	exit;
}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">

	<title>Sistema de estoque </title>

</head>
<body style="background-color: #e9e9e9">

	<nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0">
		<div class="col-4">
			<img src="assets/imagens/sistem.png" class="logo" style="margin:10px; width: 200px;">

		</div>

		<div class="col-4">

			<div class="input-group">
				<div class="input-group-prepend hover-cursor" id="navbar-search-icon">
					<span class="input-group-text" id="search">
						<i class="ti-search"><img src="assets/imagens/busca.png" style="width: 15px; height: 15px"></i>
					</span>
				</div>
				<input type="text" class="form-control" id="navbar-search-input" placeholder="Procurar..." aria-label="search" aria-describedby="search">
			</div>

		</div>	

		<div class="col-4 d-flex justify-content-end">
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">
					<a class="nav-link" href="#"><label style="color: black"><?php  echo $info['nome']; ?></label><img src="assets/imagens/usu.png"  style="margin:10px; width: 25px;"></span></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid" >
		<div class="row">
			<nav class="col-md-2 d-none d-md-block  sidebar"  >
				<div class="sidebar-sticky" style="margin-top: 20px;">
					<ul class="nav flex-column">

						<li class="nav-item" style="margin-bottom: 10px;">
							<a class="nav-link active" href="cad_produto.php">
								<button class="btn btn-primary btn-lg btn-block"><img src="assets/imagens/settings.png" style="margin:10px; width: 25px;"> <h1 style="font-family:verdana; font-size: 12px;">PAINEL</h1>  </span>
									<span class="sr-only">PAINEL</button>
									</a>
								</li>
								<li class="nav-item" style="margin-bottom: 10px;">
									<a class="nav-link" href="addcategoria.php">
										<button class="btn btn-primary btn-lg btn-block"><img src="assets/imagens/cart.png" style="margin:10px; width: 25px;"><h1 style="font-family:verdana; font-size: 12px;">	+ PRODUTO</h1></span>
											<span class="sr-only"> ADICIONAR PRODUTO</button>
											</a>
										</li>
										<li class="nav-item" style="margin-bottom: 10px;">
											<a class="nav-link" href="criaFabricante.php">
												<button class="btn btn-primary btn-lg btn-block"><img src="assets/imagens/caminhao.png" style="margin:10px; width: 25px;"><h1 style="font-family:verdana; font-size: 12px;">+ FORNECEDOR</h1></span>
													<span class="sr-only">PRODUTO</button>
													</a>
												</li>
												<li class="nav-item" style="margin-bottom: 10px;">
													<a class="nav-link active" href="criacategoria.php">
														<button class="btn btn-primary btn-lg btn-block"><img src="assets/imagens/categoria.png" style="margin:10px; width: 25px;"><h1 style="font-family:verdana; font-size: 12px;">+ CATEGORIA</h1></span>
															<span class="sr-only">PAINEL</button>
															</a>
														</li>
														<li class="nav-item" style="margin-bottom: 10px;">
															<a class="nav-link active" href="vendas_prod.php">
																<button class="btn btn-primary btn-lg btn-block"><img src="assets/imagens/cart.png" style="margin:10px; width: 25px;"> <h1 style="font-family:verdana; font-size: 12px;">VENDAS</h1>  </span>
																	<span class="sr-only">PAINEL</button>
																	</a>
																</li>
																<li class="nav-item" style="margin-bottom: 10px;">
																	<a class="nav-link active" href="relatorio_compras.php">
																		<button class="btn btn-primary btn-lg btn-block"><img src="assets/imagens/categoria.png" style="margin:10px; width: 25px;"><h1 style="font-family:verdana; font-size: 12px;">RELATÓRIO</h1></span>
																			<span class="sr-only">PAINEL</button>
																			</a>
																		</li>
																		<li class="nav-item" style="margin-bottom: 10px;">
																			<a class="nav-link" href="logout.php">
																				<button class="btn btn-danger btn-lg btn-block"><img src="assets/imagens/sair.png" style="margin:10px; width: 25px;"><h1 style="font-family:verdana; font-size: 12px;">SAIR</h1></span>
																					<span class="sr-only"></button>
																					</a>
																				</li>	


																			</ul>


																		</div>
																	</nav>


																	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

																		<div class="row">
																			<div class="col-md-3 grid-margin stretch-card">
																				<div class="card">
																					<div class="card-body" style="box-shadow: 5px 10px #ccc;">
																						<p class="card-title text-md-center text-xl-left">Produtos Cadastrados</p>
																						<div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
																							<h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">

																								<?php require 'controle.php';

															         // fazendo uma query do numero de registro que há no banco 

																								$sql = $pdo->prepare('SELECT COUNT(*) FROM produtos');
																								$sql->execute();

																								if ($sql->rowCount()>0) {

																									foreach ($sql->fetchAll() as  $prod) {
																										echo "Total"." "."(".$prod['0'].")";
																									}

																								}

																								?>


																							</h3>
																							<i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"><img src="assets/imagens/produtonovo.png" style="width: 60px;height: 60px;"></i>
																						</div>  

																					</div>
																				</div>
																			</div>
																			<div class="col-md-5 grid-margin stretch-card">
																				<div class="card">
																					<div class="card-body" style="box-shadow: 5px 10px #ccc;">
																						<p class="card-title text-md-center text-xl-left" >Último Produto Inserido</p>
																						<div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
																							<h4 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">
																								<?php

																								require 'controle.php';

															      // fazendo uma query do numero de registro que há no banco 

																								$sql = $pdo->prepare('SELECT descricao FROM produtos ORDER BY id DESC LIMIT 1');
																								$sql->execute();

																								if ($sql->rowCount() > 0) {

																									foreach ($sql->fetchAll() as  $produ) {

																										echo $produ['descricao'].'<br>';


																									}

																								}


																								?>

																							</h4>
																							<i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"><img src="assets/imagens/ultimo.png" style="width: 60px;eight: 60px;"></i>
																						</div>  

																					</div>
																				</div>
																			</div>
																			<div class="col-md-4 grid-margin stretch-card">
																				<div class="card">
																					<div class="card-body" style="box-shadow: 5px 10px #ccc;">
																						<p class="card-title text-md-center text-xl-left">Última venda feita</p>
																						<div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
																							<h4 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">

																								<?php

																								require 'controle.php';

															      // fazendo uma query do numero de registro que há no banco 

																								$sql = $pdo->prepare('SELECT descricao,id,preco,quantidade,qtd_vendas,data_vendas FROM( produtos JOIN vendas ON produtos . id = vendas . id_produto) ORDER BY id DESC LIMIT 1');
																								$sql->execute();

																								if ($sql->rowCount() > 0) {

																									foreach ($sql->fetchAll() as  $produ) {

																										echo $produ['descricao'].'<br>'."(".$produ['data_vendas']." ".")";


																									}

																								}


																								?>

																							</h4>
																							<i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"><img src="assets/imagens/vendas.png" style="width: 60px;eight: 60px;"></i>
																						</div>  

																					</div>
																				</div>
																			</div>


																		</div><br>


																		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">

																		</div>

																		<div class="row">
																			<div class="col-10">
																				<h2>Tabela de Produtos 

																				</h2>
																			</div>


																			<div class="col-2 d-flex justify-content-end">

																			</div>
																		</div>
																		<div class="table-responsive-md">
																			<table class="table table-bordered ">
																				<thead >
																					<tr>
																						<td class="" scope="col" >ID</td>
																						<td class="" scope="col">DESCRIÇÃO</td>
																						<td class="" scope="col">PREÇO UNITÁRIO</td>
																						<td class="" scope="col">QTD EM ESTOQUE</td>
																						<td class="" scope="col">FABRICANTE</td>
																						<td class="" scope="col">CATEGORIA</td>
																						<td class="" scope="col">AÇÕES</td>
																					</tr>
																				</thead>
																				<?php 

																				require 'controle.php';

		                  // pegar página selecionada pelo usuário , caso nao selecionar nenhum era começará como 1


																				if(empty($_GET['pagina'])){
																					$pagina=1;
																				}else{
																					$pagina = $_GET['pagina'];

																				} 
																				if($pagina >= '1'){
																					$pagina = $pagina;
																				}else{
																					$pagina = '1';
																				}


		                //definir o numero de intens por pagina
																				$itens_por_pagina = 6;


		                //variavel para calcular o início da visualização com base na página atual 
																				$inicio = ($itens_por_pagina*$pagina)-$itens_por_pagina;



		                // fazendo a query  dos produtos no banco de dados ....
																				$sql = $pdo->prepare("SELECT * FROM produtos LIMIT $inicio,$itens_por_pagina");

																				$sql->execute();


	                	// pega a quantida total de objetos no banco de dados 

																				$numero_prod = $pdo->prepare('SELECT COUNT(*) FROM produtos');
																				$numero_prod->execute();

																				if ($numero_prod->rowCount()>0) {

																					foreach ($numero_prod->fetchAll() as  $prod) {


				              // definir numero de paginas 

																						$num_paginas = ceil($prod['0']/$itens_por_pagina);


																					}
																				}


			               //Verificando se há registro no banco de dados, se existir ele vai imprimir de acordo com o desejado 

																				if ($sql->rowCount()>0) {
																					foreach($sql->fetchAll() as $info) :

																						?>

																						<tbody>
																							<tr class="table-bordered">
																								<th class="bg-light" scope="row"><?php  echo $info['id'] ?></th>
																								<th class="bg-light" scope="row"><?php echo $info['descricao'] ?></th>
																								<th class="bg-light" scope="row"><?php echo "R$"."  ".$info['preco'] ?></th>
																								<th class="bg-light" scope="row"><?php echo $info['quantidade']."  "."Unidades" ?></th>
																								<th class="bg-light" scope="row"><?php echo $info['fabricante'] ?></th>
																								<th class="bg-light" scope="row"><?php echo $info['categoria'] ?></th>


																								<th class="bg-light d-flex justify-content-around" scope="row">

																									<a  href="visu.php?id=<?php echo $info['id'];?>" class='btn btn-primary btn-sm '  onclick='return confirmacao()' ><img src="assets/imagens/editar.png" style="margin:10px; width: 15px; height: 15px;"></a>


																									<a href="excluir.php?id=<?php echo $info['id'];?>" class='btn btn-danger btn-sm ' onclick='return confirmacao()'><img src="assets/imagens/excluir.png" style="margin:10px; width: 15px; height: 15px;"></a>




																								</th>

																							</tr>

																						</tbody>


																						<?php
																					endforeach;

																				}

																				?>

																			</table>

																			<?php

			              //Informando qual é a página atual

																			echo "Página ".$pagina." de ".$num_paginas; 

																			?>



																			<nav aria-label="Page navigation example">
																				<ul class="pagination">
																					<li class="page-item"><a class="page-link" href="cad_produto.php?pagina=<?php echo $pagina-1 ;?>">Anterior</a></li>
																					<?php

					              //Percorrendo um for para que o número de botoes sejam criados de acordo com o numero de paginas 

																					for ($i=0; $i < $num_paginas ; $i++) { ?>
																						<li class="page-item"><a class="page-link" href="cad_produto.php?pagina=<?php echo $i+1 ;?>"> <?php echo $i+1;  ?></a></li>



																					<?php } ?>


																					<li class="page-item"><a class="page-link" href="cad_produto.php?pagina=<?php echo $pagina+1 ;?>">Próxima</a></li>
																				</ul>
																			</nav>


																		</div>
																	</main>
																</div>
															</div>

															<script type="text/javascript" src="assets/js/jquery.js"></script>
															<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
														</body>
														</html>




