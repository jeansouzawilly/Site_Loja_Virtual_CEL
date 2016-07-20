<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<?php include('head.php') ?>


<?php include('abrir_conexao.php'); ?>

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
	
	
	<section id="cart_items">
		<div class="container">

			
			

			
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">	
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<h4 style="color:green">
							<?php if(isset($_SESSION['mensagem'])){ 
								echo $_SESSION['mensagem']; 
								$_SESSION['mensagem'] = null; 
							} ?>		
							</h4>


							<p><h3>Cadastro de Conta</h3></p>
							<div class="form-one">
								<form action="cadastraUsuario.php" method="post">
									<p><h5>Nome</h5></p>
									<input type="text" name="nome" placeholder="">
									<p><h5>Sobrenome</h5></p>
									<input type="text" name="sobrenome" placeholder="">
									<p><h5>Sexo</h5></p>
										<select name="sexo">
											<option>Sexo</option>
											<option value="Feminino">Feminino</option>
											<option value="Masculino">Masculino</option>
										</select>
									<p><h5>CPF</h5></p>
									<input type="text" name="cpf" placeholder="">
									<p><h5>Email</h5></p>
									<input type="text" name="email" placeholder="">
								
							
							
								
									<p><h5>Senha</h5></p>
									<input type="password" name ="senha" placeholder="">
									<p><h5>Endereço</h5></p>
									<input type="text" name="endereco" placeholder="">
									<p><h5>Bairro</h5></p>
									<input type="text" name="bairro" placeholder="">
									<p><h5>Complemento</h5></p>
									<input type="text" name="complemento" placeholder="">
									<p><h5>Cidade</h5></p>
									<input type="text" name="cidade" placeholder="">
									<p><h5>Estado</h5></p>
										<select name="estado">
											<option>  Estado  </option>
											<option value="AC">AC</option>
											<option value="AL">AL</option>
											<option value="AP">AP</option>
											<option value="AM">AM</option>
											<option value="BA">BA</option>
											<option value="CE">CE</option>
											<option value="DF">DF</option>
											<option value="ES">ES</option>
											<option value="GO">GO</option>
											<option value="MA">MA</option>
											<option value="MT">MT</option>
											<option value="MS">MS</option>
											<option value="MG">MG</option>
											<option value="PA">PA</option>
											<option value="PB">PB</option>
											<option value="PR">PR</option>
											<option value="PE">PE</option>
											<option value="PI">PI</option>
											<option value="RJ">RJ</option>
											<option value="RN">RN</option>
											<option value="RS">RS</option>
											<option value="RO">RO</option>
											<option value="RR">RR</option>
											<option value="SC">SC</option>
											<option value="SP">SP</option>
											<option value="SE">SE</option>
											<option value="TO">TO</option>
										</select>
										<select name="permissaoAdmin">
											<option value="false">Cliente</option>
											<option value="true">Usuario</option>
										</select>

									<button  type="submit" class="btn btn-default" >Cadastrar
									</button>
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->
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
