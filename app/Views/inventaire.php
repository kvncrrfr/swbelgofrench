<div class="row" id="inventaire-search">
	<div class="col-xs-12">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Search for...">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			</span>
		</div>
	</div>
</div>
<form id="inventaire" action="index.php?action=liste-lot" method="post" class="form-horizontal">
	<div id="frame-inventaire">
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/tomate.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Tomates</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/patate.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Patates</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/aubergine.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Aubergines</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/tomate.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Tomates</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/patate.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Patates</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/aubergine.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Aubergines</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/tomate.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Tomates</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/patate.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Patates</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
		<article class="article-inventaire">
			<div class="row article">
				<div class="col-xs-3">
					<img src="<?= VIEW . 'images/aubergine.jpg' ?>" alt="">
				</div>
				<div class="col-xs-4">
					<h3>Aubergines</h3>
				</div>
				<div class="col-xs-3 col-xs-offset-1">
					<div class="form-group has-feedback">
						<input type="text" class="form-control quantite">
						<span class="form-control-feedback">kg</span>
					</div>
				</div>
			</div>
		</article>
	</div>
	<div id="submit-inventaire">
		<input type="submit" class="form-control" value="Enregistrer">
	</div>
</form>