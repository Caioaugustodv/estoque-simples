

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

	<title>Sistema de Estoque </title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

	<!-- Bootstrap core CSS -->
	<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="dashboard.css" rel="stylesheet">
</head>

<body style="background-color: #e9e9e9">
	<nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-0">
		<div class="col-4">
			<img src="assets/imagens/sistem.png" style="margin:10px; width: 200px;">

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
					<a class="nav-link" href="#"><label>Administrador</label><img src="assets/imagens/usu.png" style="margin:10px; width: 25px;"></span></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid ">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block sidebar " >
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
																		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
																			<h1 class="h2">Painel Administrativo</h1>


																		</div>

																		<form class="form  w-50" method="POST" action="incluirfabricante.php" >

																			<label>Fabricante</label>

																			<input type="text" name="fabricante" class="form-control">



																			<button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-top: 5px;">Cadastrar</button>





																		</form>



																	</main>
																</div>
															</div>

															<script type="text/javascript" src="assets/js/jquery.js"></script>
															<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
														</body>
														</html>
