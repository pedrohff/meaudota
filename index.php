<?php require_once 'includes/header.php';?>

	<main>
		<section id="filtro" class="bg-warning">
				<div class="container">
					<div class="row mx-auto text-white ">
						<div class="col-md-6 mb-3 text-center">
							<h2>Caracteristicas do seu aumigo(a) </h2>
							<form class="form-inline mb-3 justify-content-around">
								<h4>Porte:</h4> 
								
								
								<div class="form-check form-check-inline">
							  		<input class="form-check-input" type="radio" name="pequeno" id="pequeno" value="pequeno">
								  	<label class="form-check-label" for="pequeno">Pequeno</label>
								</div>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="medio" id="medio" value="medio">
								  	<label class="form-check-label" for="medio">Médio</label>
								</div>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="grande" id="grande" value="grande">
								  	<label class="form-check-label" for="grande">Grande</label>
								</div>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="nao_importa" id="nao_importa" value="grande">
								  	<label class="form-check-label" for="nao_importa">Não importa</label>
								</div>
							</form>
							<form class="form-inline justify-content-around">
								<h4>Sexo:</h4> 
								<div class="form-check form-check-inline">
							  		<input class="form-check-input" type="radio" name="femea" id="femea" value="pequeno">
								  	<label class="form-check-label" for="femea">Fêmea</label>
								</div>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="macho" id="macho" value="medio">
								  	<label class="form-check-label" for="macho">Macho</label>
								</div>
								<div class="form-check form-check-inline">
								  	<input class="form-check-input" type="radio" name="nao_importa" id="nao_importa" value="grande">
								  	<label class="form-check-label" for="nao_importa">Não importa</label>
								</div>
							</form>
							<input type="hidden" name="pesquisar">
							<button type="submit" name="enviar" class="btn btn-block btn-danger text-white mt-3">Pesquisar</button>
						</div> <!-- col-md-6 -->
						<div class="col-md-6 text-center propaganda">
						<!-- <img src="assets/images/dog.jpg" alt="" class="img-fluid banner-lateral"> -->
						<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active" > <!-- data-interval="1000" -->
						      <img src="assets/images/dog.jpg" class="d-block w-100 img-fluid banner-lateral" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/dog2.jpg" class="d-block w-100 img-fluid banner-lateral" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="assets/images/dog3.jpg" class="d-block w-100 img-fluid banner-lateral" alt="...">
						    </div>
						  </div>
						</div>
						</div>
					</div><!--row-->
				</div> <!-- container -->
			</section><!-- SECTION: FILTRO --> 
	    	<section id="anuncios" class="mt-5">
	    		<div class="container">
	    			<div class="row justify-content-between">
	    				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 centraliza">
	    					<div class="card">
							  <a href=""><img src="assets/images/dog.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 centraliza">
	    					<div class="card">
							 	<a href=""><img src="assets/images/dog.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    				<div class="col-lg-4 d-md-none d-lg-block d-sm-block col-sm-12 mb-4 centraliza">
	    					<div class="card mb-4">
							  <a href=""><img src="assets/images/dog.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							     <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    			</div><!-- row--> 
	    			<div class="row justify-content-between">
	    				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 centraliza">
	    					<div class="card">
							  <a href=""><img src="assets/images/dog2.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>
							    <span><svg class="bi bi-alert-triangle text-success" width="32" height="32" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"></svg></span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 centraliza">
	    					<div class="card">
							 	<a href=""><img src="assets/images/dog2.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    				<div class="col-lg-4 d-md-none d-lg-block d-sm-block col-sm-12 mb-4 centraliza">
	    					<div class="card mb-4">
							  <a href=""><img src="assets/images/dog2.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							     <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    			</div><!-- row-->
	    			<div class="row justify-content-between">
	    				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 centraliza">
	    					<div class="card">
							  <a href=""><img src="assets/images/dog3.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    				<div class="col-lg-4 col-md-6 col-sm-12 mb-4 centraliza">
	    					<div class="card">
							 	<a href=""><img src="assets/images/dog3.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    				<div class="col-lg-4 d-md-none d-lg-block d-sm-block col-sm-12 mb-4 centraliza">
	    					<div class="card mb-4">
							  <a href=""><img src="assets/images/dog3.jpg" class="card-img-top" alt="billie joe dog pequeno porte"></a>
							  <div class="card-body">
							    <h5 class="card-title">Billie Joe</h5>
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							     <a href="#" class="btn btn-info mr-4">Visitar</a>
							    <span class="badge badge-primary">Pequeno</span> <span class="badge badge-info">Macho</span>

							  </div>
							</div><!-- card -->
	    				</div><!-- col-md-4-->
	    			</div><!-- row-->

	    			
	    		</div>
	    	</section> <!-- cards --> 
	    	<section id="navegacao" class="mt-3 mb-4">
	    		<div class="container">
					<nav aria-label="Page navigation" class="mx-auto">
					  <ul class="pagination pagination-lg justify-content-center">
					    <li class="page-item disabled">
					      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
					    </li>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#">Próxima</a>
					    </li>
					  </ul>
					</nav>
	    		</div>
	    	</section>
	</main> <!-- box fixed --> 
	<footer id="footer" class="text-center bg-danger text-white">
		<div class="container">
			<p class="lead">MeAudota - 2020</p>
		</div>
	</footer>
    

<?php require_once 'includes/footer.php';?>
