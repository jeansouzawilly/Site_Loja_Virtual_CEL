<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<?php $title=('Compra') ?>
<?php include ('abrir_conexao.php') ?>
<?php include ('head.php') ?>

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> (11)96536-5564</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> cell_commerce@gmail.com</a></li>
							</ul>
						</div>
					</div>
			
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo_jean.png" alt="" style="width:229px;height:139px;"/></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="carrinho.php"><i class="fa fa-shopping-cart"></i> Carrinho</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Entrar</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								
								<li><a href="contato.php">Contato</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
					<?php 

						$query = $connection->query("select * from promocoes where id_promocoes = " . $_GET['id_promocoes']); 
						$promocoes = mysqli_fetch_array($query);
					?> 
						
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/home/<?php echo $promocoes['caminhoImagem'] ?>" alt="" />
							</div>
							

						</div>
					
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2><?php echo $promocoes['nome']; ?></h2>
								<span>
									<span>R$ <?php echo $promocoes['preco']; ?></span>
									<label>Quantidade:</label>
									<input type="text" value="" />
									<a href="carrinho.php ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Comprar</a>
									<!--<button href="carrinho.php" type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Comprar
									</button>-->
								</span>
								<p><b><?php echo $promocoes['quantidade']; ?></b> Em Estoque</p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#descricao" data-toggle="tab">Descrição</a></li>
							</ul>
							<p><?php echo $promocoes['descricao']; ?></p>
						</div>
						
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 CellSouza Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank">Jean Willy</a></span></p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
